<?php
  if (!isset($TEMPLATE)) {
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $NAVIGATION = true;
    //$CONTACT = ""/*who is the contact now?*/;
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }
?>

<p>
  The USGS Worldwide Seismic Design Tool (Beta) has been discontinued, due
  primarily to insufficient resources for adequately updating the tool with
  recent information from, for example, the Global Earthquake Model (GEM). As
  formerly stated within the tool, the S<sub>S</sub> and S<sub>1</sub> values
  provided were merely an informal and incomplete collection derived from
  existing studies, but those values had become considerably outdated. In an
  attempt to continue supporting the seismic design community, the developers
  of the tool are pursuing resources for a collaboration with GEM and/or others.
  For any correspondence regarding this discontinued tool, please email
  <a href="mailto:wwdesignmaps@usgs.gov">wwdesignmaps@usgs.gov</a>.
</p>
