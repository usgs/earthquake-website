<?php

/**
 * Create HTML <select>
 *
 * @param $params {Array}
 *     html select attributes; supported properties are:
 *
 *       disabled {Boolean}
 *       id {String}
 *       name {String} - REQUIRED
 *       required {Boolean}
 *
 *     other properties:
 *
 *       class {String}
 *       description {String} - explanatory text displayed next to form control
 *       label {String} - label element for control
 *       message {String} - instructions displayed for invalid form control
 *       options {Array} - REQUIRED
 *       selected {String}
 */
class Select {
  private $_defaults = [
    'class' => '',
    'description' => '',
    'disabled' => false,
    'id' => '',
    'label' => '',
    'message' => 'Please select an option from the menu',
    'name' => '',
    'options' => [],
    'required' => false,
    'selected' => ''
  ];

  public $isValid = true,
    $type = 'select',
    $value;

  public function __construct (Array $params=[]) {
    // Merge defaults with user-supplied params and set as class properties
    $options = array_merge($this->_defaults, $params);
    foreach ($options as $key => $value) {
      // Only set props that are defined in $_defaults
      if (array_key_exists($key, $this->_defaults)) {
        $this->$key = $value;
      }
    }

    $this->_checkParams();

    // Set value prop to user-supplied value when form is submitted
    if (isSet($_POST['submitbutton'])) {
      $this->value = safeParam($this->name);
    }
  }

  /**
   * Check for missing required params; set id, label params if not already set
   */
  private function _checkParams () {
    if (!$this->name) {
      print '<p class="error">ERROR: the <em>name</em> attribute is <strong>required</strong> for all select elements</p>';
    }
    if (count($this->options) < 1 || !is_array($this->options)) {
      print '<p class="error">ERROR: <em>options</em> (array) is <strong>required</strong> for all select elements</p>';
    }

    // Set id and label to name value if not set during instantiation
    if (!$this->id) {
      $this->id = $this->name;
    }
    if (!$this->label) {
      $this->label = ucfirst($this->name);
    }
  }

  /**
   * Get optional html attributes for control
   *
   * @param $tabindex {Integer}
   *
   * @return $attrs {String}
   */
  private function _getAttrs ($tabindex) {
    $attrs = '';

    if ($this->disabled) {
      $attrs .= ' disabled="disabled"';
    }
    if ($this->required) {
      $attrs .= ' required="required"';
    }
    if ($tabindex) {
      $attrs .= sprintf(' tabindex="%d"', $tabindex);
    }

    return $attrs;
  }

  /**
   * Get relevant css classes for control
   *
   * @return $cssClasses {Array}
   */
  private function _getCssClasses () {
    $cssClasses = ['control', $this->type];
    if ($this->class) {
      $cssClasses[] = $this->class;
    }
    if (!$this->isValid) {
      $cssClasses[] = 'invalid';
    }

    return $cssClasses;
  }

  /**
   * Get HTML for element
   *
   * @param $tabindex {Integer}
   *
   * @return $html {String}
   */
  public function getHtml ($tabindex=NULL) {
    $attrs = $this->_getAttrs($tabindex);
    $cssClasses = $this->_getCssClasses();

    $description = sprintf('<p class="description" data-message="%s">%s</p>',
      $this->message,
      $this->description
    );

    $label = sprintf('<label for="%s">%s</label>',
      $this->id,
      $this->label
    );

    $options = '';
    foreach ($this->options as $key => $value) {
      // Set selected option: user's selection overrides if validation fails
      $selected = '';
      if (isSet($_POST[$this->name])) {
        if ($key === $this->value) { // user-selected option
          $selected = ' selected="selected"';
        }
      } else if ($key === $this->selected) {
        $selected = ' selected="selected"';
      }

      $options .= sprintf('<option value="%s"%s>%s</option>',
        $key,
        $selected,
        $value
      );
    }

    $select = sprintf('<select class="custom-select" id="%s" name="%s"%s>%s</select>',
      $this->id,
      $this->name,
      $attrs,
      $options
    );

    $html = sprintf('<div class="%s">%s%s%s</div>',
      implode(' ', $cssClasses),
      $description,
      $select,
      $label
    );

    return $html;
  }
}
