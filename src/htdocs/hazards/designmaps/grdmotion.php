<?php
  if (!isset($TEMPLATE)) {
    $TITLE = "Java Ground Motion Parameter Calculator";
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $NAVIGATION = true;
    //$CONTACT = ""/*who is the contact now?*/;
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }
?>

<p>
  The USGS has suspended new downloads of the <em>Java Calculator</em>. Users
  who already have the <em>Java Calculator</em> installed wil still be able to
  use it until it is eventually decommissioned. All users are encouraged to
  instead use the <a href="/designmaps/us/application.php">U.S. Seismic Design
  Maps</a> web application. That application provides seismic design parameter
  values from the following design code editions:
</p>

<ul>
  <li>2013 ASCE 41</li>
  <li>2012 IBC</li>
  <li>2010 ASCE 7 (w/ March 2013 errata)</li>
  <li>2009 NEHRP</li>
  <li>2009 AASHTO</li>
  <li>2006 and 2009 IBC</li>
  <li>2005 ASCE 7</li>
  <li>2003 NEHRP</li>
</ul>

<p>
  Instructions for the <em>U.S. Seismic Design Maps</em> web application are
  provided in the <a
  href="/hazards/designmaps/usdesigndoc.php">Documentation</a>.
</p>

<p>
  Please contact us at <a
  href="mailto:usdesignapp@usgs.gov">usdesignapp@usgs.gov</a> with any questions
  or concerns.
</p>
