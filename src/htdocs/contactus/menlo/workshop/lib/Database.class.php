<?php

/**
 * Database queries and utility methods
 *
 * @param $db {Object}
 *     Database connector
 */
class Database {
  private $_db;

  public function __construct($db) {
    $this->_db = $db;
  }

  /**
   * Perform db query
   *
   * @param $sql {String}
   *     SQL query
   * @param $params {Array} default is NULL
   *     Key-value substitution params for SQL query
   *
   * @return $stmt {Object}
   *     PDOStatement object
   */
  private function _execQuery ($sql, Array $params=[]) {
    try {
      $stmt = $this->_db->prepare($sql);

      // Bind sql params
      foreach ($params as $key => $value) {
        $type = $this->_getType($value);
        $stmt->bindValue($key, $value, $type);
      }

      $stmt->execute();

      return $stmt;
    }
    catch(Exception $e) {
      print '<p class="error">ERROR: ' . $e->getMessage() . '</p>';
    }
  }

  /**
   * Manually format fields/placeholders for MySQL SET clause
   *   inspired by: https://phpdelusions.net/pdo
   *
   * @param $params {Array}
   *     Key-value pairs for query
   *
   * @return $setClause {String}
   *     MySQL SET clause
   */
  private function _getSetClause ($params) {
    $setClause = 'SET ';

    foreach ($params as $field => $value) {
      $setClause .= '`' . str_replace('`', '``', $field) . '`' . "=:$field, ";
    }
    $setClause = substr($setClause, 0, -2); // strip final ','

    return $setClause;
  }

  /**
   * Get data type for a sql parameter (PDO::PARAM_* constant)
   *
   * @param $var {?}
   *     Variable to identify type of
   *
   * @return $type {Integer}
   */
  private function _getType ($var) {
    $pdoTypes = [
      'boolean' => PDO::PARAM_BOOL,
      'integer' => PDO::PARAM_INT,
      'NULL' => PDO::PARAM_NULL,
      'string' => PDO::PARAM_STR
    ];
    $varType = gettype($var);

    $type = $pdoTypes['string']; // default
    if (isSet($pdoTypes[$varType])) {
      $type = $pdoTypes[$varType];
    }

    return $type;
  }

  /**
   * Insert record into database
   *
   * @param $params {Array}
   *     Key-value pairs being inserted
   * @param $table {String}
   *     Table name
   */
  public function insertRecord ($params, $table) {
    $setClause = $this->_getSetClause($params);
    $sql = "INSERT INTO $table $setClause";

    $this->_execQuery($sql, $params);
  }
}
