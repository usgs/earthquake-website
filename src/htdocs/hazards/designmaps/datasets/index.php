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
