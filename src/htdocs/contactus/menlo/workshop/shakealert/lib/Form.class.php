<?php

/**
 * Create and process HTML form
 *
 * @param $params {Array}
 *
 *     adminEmail {String} - Where to send results of successful form submission
 *     emailSubject {String} - Subject of email results
 *     successMsg {String} - Message shown upon successful form submission
 */
class Form {
  private $_defaults = [
      'adminEmail' => '',
      'emailSubject' => 'Form submitted',
      'successMsg' => 'Thank you for your input.'
    ],
    $_db,
    $_dbTable,
    $_isValid = true, // Boolean value (set to false if form doesn't validate)
    $_items = [], // form controls/groups and associated props
    $_results = ''; // Summary of user input

  public function __construct (Array $params=[]) {
    // Merge defaults with user-supplied params and set as class properties
    $options = array_merge($this->_defaults, $params);

    foreach ($options as $key => $value) {
      if (array_key_exists($key, $this->_defaults)) {
        $this->$key = $value;
      }
    }

    // Get db connection / table info from config
    include 'conf/config.inc.php';
    $this->_db = $db;
    $this->_dbTable = $dbTable;
  }

  /**
   * Check that all controls in group have matching values for 'name' & 'required'
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
   * Get html for form
   *
   * @return $html {String}
   */
  private function _getFormHtml () {
    $count = 0; // used for tabindex attrs
    $hasRequiredFields = false;

    $html = '<section class="form">';
    if ($this->isPosting() && !$this->_isValid) {
      $html .= '<p class="error">Please fix the following errors and submit the form again.</p>';
    }
    $html .= sprintf('<form action="%s" method="POST" novalidate="novalidate">',
      $_SERVER['REQUEST_URI']
    );

    foreach ($this->_items as $key => $item) {
      $control = $item['control'];
      if (is_array($control)) { // radio/checkbox group
        $controls = $control; // group of control(s) as array
        // attach invalid/req'd classes to parent for radio / checkbox controls
        $cssClasses = [];
        if (!$controls[0]->isValid) {
          $cssClasses[] = 'invalid';
        }
        if ($controls[0]->required) {
          $cssClasses[] = 'required';
          $hasRequiredFields = true;
        }

        $html .= sprintf('<fieldset class="%s">
          <legend>%s</legend>
          <div class="group %s">',
            implode(' ', $cssClasses),
            $item['label'],
            $item['arrangement']
        );
        foreach ($controls as $ctrl) {
          $html .= $ctrl->getHtml(++ $count);
        }
        $html .= '</div>';
        $html .= sprintf('<p class="description" data-message="%s">%s</p>',
          $item['message'],
          $item['description']
        );
        $html .= '</fieldset>';
      } else { // single control
        $html .= $control->getHtml(++ $count);
        if ($control->required) {
          $hasRequiredFields = true;
        }
      }
    }

    $html .= sprintf('<input id="submitbutton" name="submitbutton" type="submit" class="btn btn-primary" tabindex="%d" value="Submit" />',
      ++ $count
    );
    $html .= '</form>';
    if ($hasRequiredFields) {
      $html .= '<p class="required"><span>*</span> = required field</p>';
    }
    $html .= '</section>';

    return $html;
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
      $control = $item['control'];
      $prettyValues = [];
      if (is_array($control)) { // radio/checkbox group
        $sqlValue = $control[0]->value; // use first control in group
        $controls = $control;
        foreach ($controls as $control) {
          if ($control->isChecked()) {
            $prettyValues[] = $control->label;
          }
        }
        $prettyValue = implode(', ', $prettyValues);
      } else if ($control->type === 'select') { // select menu
        $prettyValue = $control->options[$control->value];
        $sqlValue = $control->value;
      } else { // everything else
        $prettyValue = $sqlValue = $control->value;
      }
      $sqlValues[$key] = $sqlValue;

      $this->_results .= '<dt>' . ucfirst($item['label']) . '</dt>';
      $this->_results .= '<dd>' . htmlentities(stripslashes($prettyValue)) . '</dd>';
    }
    $this->_results .= '</dl>';

    // Validate and insert/email record if valid
    $this->_validate();
    if ($this->_isValid) {
      $Database = new Database($this->_db);
      $Database->insertRecord($sqlValues, $this->_dbTable);
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
   *   isValid props all default to true (for form and each control)
   */
  private function _validate () {
    foreach ($this->_items as $key => $item) {
      $control = $item['control'];
      if (is_array($control)) { // radio/checkbox group: use first control to validate group
        $control = $control[0];
      }
      $pattern = '';
      if (isSet($control->pattern)) {
        $pattern = preg_replace('@/@', '\/', $control->pattern);
      }

      if (($control->required && !$control->value) ||
        (isSet($pattern) && !preg_match("/$pattern/", $control->value) && $control->value)
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
      'control' => $control,
      'label' => $control->label
    ];
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

    $message = '';
    if (array_key_exists('message', $group)) {
      $message = $group['message'];
    }

    $this->_items[$key] = [
      'arrangement' => $arrangement,
      'control' => $controls, // array
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

      if ($this->_isValid) {
        print $this->_getResultsHtml();
      } else {
        print $this->_getFormHtml();
      }
    } else {
      print $this->_getFormHtml();
    }
  }
}
