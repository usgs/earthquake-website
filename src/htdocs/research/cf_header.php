<?php
if (!isset($TEMPLATE)) {
	$TITLE =  htmlspecialchars($_GET["name"]);
	$HEAD = '<base href="https://earthquake.usgs.gov/research/">';
  $NAVIGATION =

    echo "<a href='/research/external' class='up-one-level'>External Grants</a>",

    "<section>",

      navItem("/research/external/forpis.php", "Info for PIs") .
      navItem("/research/external/contact.php", "Contacts") ,

    "</section>"
    ;
  include 'template.inc.php';
}
	exit();
