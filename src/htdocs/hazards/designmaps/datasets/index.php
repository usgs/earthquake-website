<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Seismic Design Data Sets';
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $SCRIPTS = 'browser.js';
    $NAVIGATION = true;
    $base = 'ftp://hazards.cr.usgs.gov/web/earthquake-designmaps/datasets';
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }
?>

<nav class="jumplist">
  <a href="#ibc-2012">2012 IBC</a>
  <a href="#asce7-2010">ASCE 7-10</a>
  <a href="#nehrp-2009">2009 NEHRP</a>
  <a href="#usgs-2002">ASCE 7-05, 2006/09 IBC</a>
  <a href="#irc-2006_2009">2006/09 IRC</a>
  <a href="#usgs-1996">ASCE 7-98/02, 2000/03 IBC</a>
  <a href="#irc-2000_2003">2000/03 IRC</a>
</nav>

<h2>Derived from 2008 USGS Hazard Data</h2>
<?php
  include_once 'codes/ibc_2012.inc.php';
  include_once 'codes/asce7_2010.inc.php';
  include_once 'codes/nehrp_2009.inc.php';
?>

<h2 class="divider">Derived from 2002 USGS Hazard Data</h2>
<?php
  include_once 'codes/usgs_2002.inc.php';
  include_once 'codes/irc_2006.inc.php';
?>

<h2 class="divider">Derived from 1996 USGS Hazard Data</h2>
<?php
  include_once 'codes/usgs_1996.inc.php';
  include_once 'codes/irc_2000.inc.php';
?>
