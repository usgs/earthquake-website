<?php

/**
 * Create HTML <textarea>
 *
 * @param $params {Array}
 *     html textarea attributes; supported properties are:
 *
 *       cols {Integer}
 *       disabled {Boolean}
 *       id {String}
 *       maxlength {Integer}
 *       minlength {Integer}
 *       name {String} - REQUIRED
 *       placeholder {String}
 *       required {Boolean}
 *       rows {Integer}
 *
 *     other properties:
 *
 *       class {String}
 *       description {String} - explanatory text displayed next to form control
 *       label {String} - label element for control
 *       message {String} - instructions displayed for invalid form control
 *       value {String}
 */
class Textarea {
  private $_defaults = [
    'class' => '',
    'cols' => 60,
    'description' => '',
    'disabled' => false,
    'id' => '',
    'label' => '',
    'maxlength' => null,
    'minlength' => null,
    'message' => 'Please provide a valid response',
    'name' => '',
    'placeholder' => '',
    'required' => false,
    'rows' => 4,
    'value' => ''
  ];

  public $isValid = true,
    $type = 'textarea';

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
      print '<p class="error">ERROR: the <em>name</em> attribute is <strong>required</strong> for all textarea elements</p>';
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
    if ($this->maxlength) {
      $attrs .= sprintf(' maxlength="%s"', $this->maxlength);
    }
    if ($this->minlength) {
      $attrs .= sprintf(' minlength="%s"', $this->minlength);
    }
    if ($this->placeholder) {
      $attrs .= sprintf(' placeholder="%s"', $this->placeholder);
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

    $textarea = sprintf('<textarea id="%s" name="%s" cols="%s" rows="%s"%s>%s</textarea>',
      $this->id,
      $this->name,
      $this->cols,
      $this->rows,
      $attrs,
      $this->value
    );

    $html = sprintf('<div class="%s">%s%s%s</div>',
      implode(' ', $cssClasses),
      $description,
      $textarea,
      $label
    );

    return $html;
  }
}
