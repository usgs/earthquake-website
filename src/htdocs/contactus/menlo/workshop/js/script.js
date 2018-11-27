'use strict';


var Validator = function (options) {
  var _this,
      _initialize,

      _allControls,
      _form,
      _inputs,
      _selects,
      _submitButton,
      _textareas,

      _addEventHandlers,
      _getControls,
      _handleSubmit,
      _validate,
      _validateAll;

  _this = {};

  _initialize = function (options) {
    _form = options.form;

    if (_form) {
      _getControls();
      _addEventHandlers();
    }
  };

  /**
   * Add event listeners to form controls for validating user input
   */
  _addEventHandlers = function () {
    var type;

    _inputs.forEach(function(input) {
      type = input.getAttribute('type');

      if (input.hasAttribute('pattern') || input.hasAttribute('required')) {
        if (type === 'checkbox' || type === 'radio') {
          input.addEventListener('change', function() { // input event buggy for radio/checkbox
            _validate(input);
          });
        } else {
          ['blur', 'input'].forEach(function(evt) { // blur evt caputres autocompleted fields
            input.addEventListener(evt, function() {
              _validate(input);
            });
          });
        }
      }
    });

    _selects.forEach(function(select) {
      if (select.hasAttribute('required')) {
        select.addEventListener('change', function() {
          _validate(select);
        });
      }
    });

    _submitButton.addEventListener('click', function(e) {
      e.preventDefault();
      _handleSubmit();
    });

    _textareas.forEach(function(textarea) {
      if (textarea.hasAttribute('pattern') || textarea.hasAttribute('required')) {
        textarea.addEventListener('input', function() {
          _validate(textarea);
        });
      }
    });
  };

  /**
   * Get a NodeList of form controls by type
   */
  _getControls = function () {
    _allControls = _form.querySelectorAll('input:not([type="submit"]), select, textarea');
    _inputs = _form.querySelectorAll('input:not([type="submit"])');
    _selects = _form.querySelectorAll('select');
    _textareas = _form.querySelectorAll('textarea');
    _submitButton = _form.querySelector('input[type="submit"]');
  };

  /**
   * Show validation errors or submit form depending on validation state
   */
  _handleSubmit = function () {
    var errorMsg,
        isFormInvalid,
        section,
        submitButton;

    errorMsg = document.querySelector('.form p.error');
    section = document.querySelector('section.form');

    _validateAll();

    isFormInvalid = _form.querySelector('.invalid');
    if (isFormInvalid) { // stop form submission and alert user
      if (!errorMsg) {
        errorMsg = document.createElement('p');
        errorMsg.classList.add('error');
        errorMsg.innerHTML = 'Please fix the following errors and submit the form again.';

        section.insertBefore(errorMsg, _form);
      }
      section.scrollIntoView();
    } else {
      // Remove error message if it exists
      if (errorMsg) {
        section.removeChild(errorMsg);
      }

      // Submit button is not set when form is submitted via js; set it here
      submitButton = document.createElement('input');
      submitButton.setAttribute('name', 'submitbutton');
      submitButton.setAttribute('type', 'hidden');
      submitButton.setAttribute('value', 'Submit');

      _form.appendChild(submitButton);
      _form.submit();
    }
  };

  /**
   * Validate user input on a given element
   *
   * @param el {Element}
   */
  _validate = function (el) {
    var controls,
        name,
        parent,
        pattern,
        state,
        type,
        value;

    state = 'valid'; // default state; set to invalid if validation fails
    type = el.getAttribute('type');
    value = el.value;

    // Get validation state
    if (type === 'checkbox' || type === 'radio') { // checkboxes and radios
      name = el.getAttribute('name');
      controls = _form.querySelectorAll('input[name="' + name + '"]');
      state = 'invalid'; // flip default

      controls.forEach(function(control) {
        if (control.checked) {
          state = 'valid';
        }
      });
    } else { // everything else
      if (el.hasAttribute('pattern')) {
        pattern = new RegExp(el.getAttribute('pattern'));
        if (!pattern.test(value) && value !== '') {
          state = 'invalid';
        }
      }
      if (el.hasAttribute('required') && value === '') {
        state = 'invalid';
      }
    }

    // Set validation state on parent node
    parent = el.closest('.control');
    if (parent.classList.contains('checkbox') || parent.classList.contains('radio')) {
      parent = parent.closest('fieldset');
    }
    parent.classList.remove('invalid', 'valid');
    parent.classList.add(state);
  };

  /**
   * Validate all form controls (useful when user submits the form)
   */
  _validateAll = function () {
    _allControls.forEach(function(el) {
      if (el.hasAttribute('pattern') || el.hasAttribute('required')) {
        _validate(el);
      }
    });
  };

  _initialize(options);
  options = null;
  return _this;
};


document.addEventListener('DOMContentLoaded', function() {
  Validator({
    form: document.querySelector('section.form form')
  });
});
