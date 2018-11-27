<?php

// Timezone
date_default_timezone_set('America/Los_Angeles');

// Database table for form submission results
$dbTable = 'mp-workshops';

// Option 1: Inline database connector

/*
$host = '';
$dbname = '';
$username = '';
$password = '';

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}
*/

// Option 2: External database connector
// include_once '/etc/puppet/EHPServer.class.php';
// $db = EHPServer::getDatabase(
//   // the dynamic_earthquake database is replicated between nodes
//   'dynamic_earthquake',
//   // false = not a read only connection (true is the default)
//   false,
//   // mysql database ('mysql' is the default, so this is optional)
//   'mysql'
// );

?>
