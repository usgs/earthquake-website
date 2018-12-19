<?php

/**
 * Create and process HTML form
 *
 * @param $params {Array}
 *
 *     adminEmail {String} - Where to send results of successful form submission
 *     emailSubject {String} - Subject of form submission email notification
 *     meta {Array} - Extra fields to include in MySQL database with each submission
 *     submitButtonText {String} - Submit button text
 *     successMsg {String} - Message shown upon successful form submission
 */
class Form {
  private $_countAddressFields = 0,
    $_countTabIndex = 0, // used for tabindex attrs
    $_defaults = [
      'adminEmail' => '',
      'emailSubject' => 'Form submitted',
      'meta' => [
        'browser' => false,
        'datetime' => true,
        'ip' => false
      ],
      'submitButtonText' => 'Submit',
      'successMsg' => 'Thank you for your input.'
    ],
    $_db,
    $_dbTable,
    $_isValid = false, // set to true if form passes validation
    $_items = [], // form controls/groups and associated props
    $_mapQuestApiKey,
    $_results = ''; // summary of user input

  public function __construct (Array $params=[]) {
    // Merge defaults with user-supplied params and set as class properties
    $options = array_merge_recursive_distinct($this->_defaults, $params);
    foreach ($options as $key => $value) {
      // Only set props that are defined in $_defaults
      if (array_key_exists($key, $this->_defaults)) {
        $this->$key = $value;
      }
    }

    // Get db connection/table info, apikey from config
    include  __DIR__ . '/../conf/config.inc.php';
    $this->_db = $db;
    $this->_dbTable = $dbTable;
    if (isSet($mapQuestApiKey)) {
      $this->_mapQuestApiKey = $mapQuestApiKey;
    }
  }

  /**
   * Add hidden input fields for storing constituent values of an address
   *   (javascript populates these values from MapQuest's PlaceSearch.js json)
   */
  private function _addHiddenAddressFields () {
    $fieldNames = [
      'city',
      'countryCode',
      'latlng',
      'postalCode',
      'state',
      'street'
    ];

    // Append count to field names if more than 1 address field on page
    $this->_countAddressFields ++;
    $suffix = '';
    if ($this->_countAddressFields > 1) {
      $suffix = $this->_countAddressFields;
    }

    foreach ($fieldNames as $fieldName) {
      $name = $fieldName . $suffix;
      $input = new Input([
        'name' => $name,
        'type' => 'hidden',
        'value' => ''
      ]);

      // Add field
      $this->_items[$name] = [
        'controls' => [$input],
        'label' => $input->label
      ];
    }
  }

  /**
   * Check that all controls in group have matching values for 'name' & 'required'
   *
   * @param $controls {Array}
   */
  private function _checkParams ($controls) {
    $prevKey = '';
    $prevRequired = '';
    foreach ($controls as $control) {
      $key = $control->name;
      $required = $control->required;
      if ($prevKey !== '' && $key !== $prevKey) {
         print '<p class="error">ERROR: the <em>name</em> attribute must be the same for all inputs in a group</p>';
      }
      if ($prevRequired !== '' && $required !== $prevRequired) {
        printf ('<p class="error">ERROR: the <em>required</em> attribute must be the same for all inputs in a group (%s)</p>',
          $control->name
        );
      }
      $prevKey = $key;
      $prevRequired = $required;
    }
  }

  /**
   * Get HTML for a group of controls (radio/checkbox group)
   *
   * @param $group {Array}
   *
   * @return $html {String}
   */
  private function _getControlGroupHtml ($group) {
    $controls = $group['controls'];

    $cssClasses = [];
    if (!$controls[0]->isValid) { // only need to check 1st control in group
      $cssClasses[] = 'invalid';
    }
    if ($controls[0]->required) { // only need to check 1st control in group
      $cssClasses[] = 'required';
    }

    $html = '';
    $html .= sprintf('<fieldset class="%s">
      <legend>%s</legend>
      <div class="group %s">',
        implode(' ', $cssClasses), // attach classes to parent for radio/checkbox
        $group['label'],
        $group['arrangement']
    );
    foreach ($controls as $control) {
      $html .= $control->getHtml(++ $this->_countTabIndex);
    }
    $html .= '</div>';
    $html .= sprintf('<p class="description" data-message="%s">%s</p>',
      $group['message'],
      $group['description']
    );
    $html .= '</fieldset>';

    return $html;
  }

  /**
   * Get html for form
   *
   * @return $html {String}
   */
  private function _getFormHtml () {
    $hasRequiredFields = false;

    $html = '<section class="form">';
    if ($this->isPosting() && !$this->isValid()) {
      $html .= '<p class="error">Please fix the following errors and submit the form again.</p>';
    }
    $html .= sprintf('<form action="%s" method="POST" novalidate="novalidate">',
      $_SERVER['REQUEST_URI']
    );

    foreach ($this->_items as $key => $item) {
      $controls = $item['controls'];
      if (count($controls) > 1) { // radio/checkbox group
        $html .= $this->_getControlGroupHtml($item);
      } else { // single control
        $html .= $controls[0]->getHtml(++ $this->_countTabIndex);
      }

      if ($controls[0]->required) { // required prop same for all controls in group
        $hasRequiredFields = true;
      }
    }

    $html .= sprintf('<input id="submitbutton" name="submitbutton" type="submit" class="btn btn-primary" tabindex="%d" value="%s" />',
      ++ $this->_countTabIndex,
      $this->submitButtonText
    );
    $html .= '</form>';
    if ($hasRequiredFields) {
      $html .= '<p class="required"><span>*</span> = required field</p>';
    }
    $html .= '</section>';

    // Set MapQuest API key as global JS var if supplied by user
    if ($this->_mapQuestApiKey) {
      $html .= "<script>var MAPQUESTKEY = '$this->_mapQuestApiKey';</script>";
    }

    return $html;
  }

  /**
   * Get value(s) for meta field(s) that are stored in Database record
   *
   * @return $meta {Array}
   */
  private function _getMetaFieldValues () {
    if ($this->meta['browser']) {
      $meta['browser'] = $_SERVER['HTTP_USER_AGENT'];
    }
    if ($this->meta['datetime']) {
      $meta['datetime'] = date('Y-m-d H:i:s');
    }
    if ($this->meta['ip']) {
      $meta['ip'] = $_SERVER['REMOTE_ADDR'];
    }

    return $meta;
  }

  /**
   * Get html for results summary after form submitted
   *
   * @return $html {String}
   */
  private function _getResultsHtml () {
    $html = sprintf('<section class="results">
        <p class="success">%s</p>
        %s
      </section>',
      $this->successMsg,
      $this->_results
    );

    return $html;
  }

  /**
   * Create an array and html description list containing values entered by user
   *
   * If validation passes, insert record into database and email results to admin
   */
  private function _process () {
    $sqlValues = [];
    $this->_results = '<dl>';

    foreach ($this->_items as $key => $item) {
      $controls = $item['controls'];
      $control = $controls[0]; // single control instance or first control in group

      if ($control->type === 'file') { // skip file inputs
        continue;
      }

      if (count($controls) > 1) { // radio/checkbox group
        $prettyValues = [];
        $sqlValue = $control->value; // get value from first control in group
        foreach ($controls as $ctrl) {
          if ($ctrl->isChecked()) {
            $prettyValues[] = $ctrl->label;
          }
        }
        $prettyValue = implode(', ', $prettyValues);
      } else { // single control
        if ($control->type === 'select') { // select menu
          $prettyValue = $control->options[$control->value];
          $sqlValue = $control->value;
        } else { // everything else
          $prettyValue = $sqlValue = $control->value;
        }
      }

      $sqlValues[$key] = $sqlValue;
      if ($control->type !== 'hidden') { // don't include hidden fields in results summary
        $this->_results .= '<dt>' . ucfirst($item['label']) . '</dt>';
        $this->_results .= '<dd>' . htmlentities(stripslashes($prettyValue)) . '</dd>';
      }
    }
    $this->_results .= '</dl>';

    // Validate and insert/email record if valid
    $this->_validate();
    if ($this->isValid()) {
      // Add metadata fields to SQL params
      $metaValues = $this->_getMetaFieldValues();
      $params = array_merge($metaValues, $sqlValues);

      $Database = new Database($this->_db);
      $Database->insertRecord($params, $this->_dbTable);
      $this->_sendEmail();
    }
  }

  /**
   * Send email to admin when user successfully submits form
   */
  private function _sendEmail () {
    if ($this->adminEmail) {
      $headers = [
        'Content-type: text/html; charset=iso-8859-1',
        'From: webmaster@' . $_SERVER['SERVER_NAME'],
        'MIME-Version: 1.0'
      ];
      $placeholders = '/\{\{([^}]+)\}\}/';
      $subject = $this->emailSubject;

      // Replace any placeholders in subject with submitted values
      preg_match_all($placeholders, $subject, $matches, PREG_SET_ORDER);
      foreach ($matches as $match) {
        $pattern = '/' . $match[0] . '/';
        $replacement = $_POST[$match[1]];
        $subject = preg_replace($pattern, $replacement, $subject);
      }

      mail($this->adminEmail, $subject, $this->_results, implode("\r\n", $headers));
    }
  }

  /*
   * Server-side validation
   */
  private function _validate () {
    $this->_isValid = true; // set to false below if validation fails

    foreach ($this->_items as $key => $item) {
      $control = $item['controls'][0]; // single control instance or first control in group

      if ($control->type === 'file') { // skip file inputs
        continue;
      }

      $length = strlen($control->value);
      $maxLength = null;
      $minLength = null;
      if ($control->type !== 'select') {
        $maxLength = intval($control->maxlength);
        $minLength = intval($control->minlength);
      }

      $pattern = '';
      if (isSet($control->pattern)) {
        $pattern = preg_replace('@/@', '\/', $control->pattern); // escape '/' chars
      }

      if (
        ($control->required && !$control->value) ||
        ($minLength && $length < $minLength) ||
        ($maxLength && $length > $maxLength) ||
        ($pattern && !preg_match("/$pattern/", $control->value) && $control->value)
      ) {
        $this->_isValid = false; // form (set to false if any conrol is invalid)
        $control->isValid = false; // this control
      }
    }
  }

  /**
   * Add a single form control (input, select, textarea) instance
   *
   * @param $control {Object}
   *     Form control instance
   */
  public function addControl ($control) {
    $key = $control->name;

    $this->_items[$key] = [
      'controls' => [$control], // single-item array
      'label' => $control->label
    ];

    if ($control->type === 'address') {
      $this->_addHiddenAddressFields();
    }
  }

  /**
   * Add a radio/checkbox group
   *
   * @param $group {Array}
   *     [
   *       arrangement {String} - 'inline' or 'stacked'
   *       controls {Array} - Form control instances as an indexed array
   *       description {String} - explanatory text displayed next to form control
   *       label {String} - input label
   *       message {String} - instructions displayed for invalid form control
   *     ]
   */
  public function addGroup ($group) {
    $controls = $group['controls'];
    $key = $controls[0]->name; // get shared 'name' attr from first control

    $this->_checkParams($controls);

    $arrangement = 'inline'; // default value
    if (array_key_exists('arrangement', $group)) {
      $arrangement = $group['arrangement'];
    }

    $description = '';
    if (array_key_exists('description', $group)) {
      $description = $group['description'];
    }

    $label = ucfirst($controls[0]->name); // default to 'name' attr
    if (array_key_exists('label', $group)) {
      $label = $group['label'];
    }

    $message = $controls[0]->message; // default to control type's default 'message'
    if (array_key_exists('message', $group)) {
      $message = $group['message'];
    }

    $this->_items[$key] = [
      'arrangement' => $arrangement,
      'controls' => $controls,
      'description' => $description,
      'label' => $label,
      'message' => $message
    ];
  }

  /**
   * Determine if form is being submitted or not
   *
   * @return $posting {Boolean}
   */
  public function isPosting () {
    $posting = false;
    if (isSet($_POST['submitbutton'])) {
      $posting = true;
    }

    return $posting;
  }

  /**
   * Determine if form passed server-side validation or not
   *
   * @return {Boolean}
   */
  public function isValid () {
    return $this->_isValid;
  }

  /**
   * Render form or results depending on current state
   */
  public function render () {
    if ($this->isPosting()) { // user submitting form
      $this->_process();

      if ($this->isValid()) {
        print $this->_getResultsHtml();
      } else {
        print $this->_getFormHtml();
      }
    } else {
      print $this->_getFormHtml();
    }
  }
}
