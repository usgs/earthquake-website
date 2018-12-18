<?php

/**
 * Get a request parameter from $_GET or $_POST
 *   flattens checkbox arrays into a comma-separated list of values
 *
 * @param $name {String}
 *     The parameter name
 * @param $default {?} default is NULL
 *     Optional default value if the parameter was not provided.
 * @param $filter {PHP Sanitize filter} default is FILTER_SANITIZE_STRING
 *     Optional sanitizing filter to apply
 *
 * @return $value {String}
 */
function safeParam ($name, $default=NULL, $filter=FILTER_SANITIZE_STRING) {
  $value = NULL;
  if (isSet($_POST[$name]) && $_POST[$name] !== '') {
    if (is_array($_POST[$name])) { // handle checkbox arrays
      $value = filter_var(implode(', ', $_POST[$name]), $filter);
    } else {
      $value = filter_input(INPUT_POST, $name, $filter);
    }
  } else if (isSet($_GET[$name]) && $_GET[$name] !== '') {
    $value = filter_input(INPUT_GET, $name, $filter);
  } else {
    $value = $default;
  }

  return $value;
}

/**
 * Recursive (deep) array merge
 *   similar to PHP's array_merge (and unlike array_merge_recursive),
 *   matching keys' values in the second array overwrite those in the first array
 *
 * Parameters are passed by reference, though only for performance reasons.
 * They're not altered by this function.
 *
 * From: https://gist.github.com/josephj/5028375
 *
 * @param $array1 {Array}
 * @param $array2 {Array}
 *
 * @return $merged {Array}
 */
function array_merge_recursive_distinct(array &$array1, array &$array2) {
  $merged = $array1;
  foreach ($array2 as $key => &$value) {
    if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
      $merged[$key] = array_merge_recursive_distinct($merged[$key], $value);
    }
    else {
      $merged[$key] = $value;
    }
  }

  return $merged;
}
