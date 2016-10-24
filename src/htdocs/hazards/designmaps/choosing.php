<?php
  if (!isset($TEMPLATE)) {
    $TITLE = "Help Selecting a Seismic Design Tool";
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $NAVIGATION = true;
    //$CONTACT = ""/*who is the contact now?*/;
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }
?>

<h2>Seismic Zone</h2>

<p>
  Seismic design procedures in the United States no longer use seismic zones.
  The Uniform Building Code (1997 and earlier editions) derived seismic design
  forces from seismic zones, zone factors, near-source factors in Zone 4, and
  source types. The International Building Code (2000 and later editions)
  derives seismic design forces from two ground motion parameters
  (S<sub>S</sub> and S<sub>1</sub>), site class, and long-period transition
  period (T<sub>L</sub>). Thus, current building codes use seismic design
  parameters with values that vary continuously across a geographic area, as
  opposed to zones with distinct geographic boundaries.
</p>

<p>
  None of the seismic design tools on the USGS web site identifies seismic
  zones.
</p>

<h2>Specific Building Code Reference Documents</h2>

<p>
  In the United States, a local municipality, or the state in some cases,
  determines its building code, which is a legal document defining certain
  characteristics of structures (houses, offices, hospitals, bridges, etc.)
  built in the municipality. Municipalities often adopt model building codes
  (for example, the International Building Code or International Residential
  Code) instead of writing these extensive documents on their own. A
  municipality can adopt a model building code in full, in part, or with
  amendments, according to local circumstances. For example, a municipality
  might adopt the International Building Code, except that a different
  reference document defines the seismic provisions of its building code.
</p>

<p>
  The USGS does not maintain information about which seismic provisions of
  building codes are adopted by local municipalities. Engineers and builders
  who are unsure which reference document governs in their area should contact
  their local building department before using a seismic design tool on the
  USGS web site.
</p>
