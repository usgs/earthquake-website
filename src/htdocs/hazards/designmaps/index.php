<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Seismic Design Maps &amp; Tools';
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $NAVIGATION = true;
    //$CONTACT = ""/*who is the contact now?*/;
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }
?>

<p>
  Engineers should use these maps and tools for seismic design, not the hazard
  maps available elsewhere on the USGS website.
</p>

<hr/>

<h2>Sites in the U.S. and its Territories</h2>

<h4><a href="usdesign.php">U.S. Seismic Design Maps</a></h4>

<p>
  The USGS collaborates with organizations (such as the Building Seismic Safety
  Council) that develop model building and bridge design codes to make seismic
  design parameter values available to engineers. The design code developers
  first decide how USGS earthquake hazard information should be applied in
  design practice. Then the USGS calculates gridded values of seismic design
  parameters based on USGS hazard values in accordance with design code
  procedures. The <i>U.S. Seismic Design Maps</i> application provides seismic
  design parameter values from the following design code editions:
</p>

<i><ul>
	<li>2013 ASCE/SEI 41</li>
	<li>2012/09/06 International Building Code</li>
	<li>2010/05 ASCE/SEI 7 Standard</li>
	<li>2009/03 NEHRP Recommended Seismic Provisions</li>
	<li>2009 AASHTO Guide Specifications for LRFD Seismic Bridge Design</li>
</ul></i>

<p>
  The USGS also provides <a href="datasets/">data files</a> and
  <a href="pdfs/">maps</a> of these gridded design values.
</p>

<h4><a href="/designmaps/beta/us/">U.S. Seismic Design Maps (Beta)</a></h4>

<p>
	This Beta version of the <i>U.S. Seismic Design Maps</i> application will
  eventually replace the current version of the application (see above entry)
  after all of the currently-referenced design code editions are ported over to
  it. Currently, the Beta version of the application provides parameter values
  from the 2015 National Earthquake Hazards Reduction Program
  (<a href="http://www.nehrp.gov/">NEHRP</a>) Recommended Seismic Provisions
  for New Buildings and Other Structures. This design code reference document
  provides seismic design parameter values that are proposed for use in future
  editions of major U.S. building codes (<i>International Building Code, ASCE 7
  Standard</i>).
</p>

<h4><a href="rtgm.php">Risk Targeted Ground Motion Calculator</a></h4>

<p>
  This tool is used to calculate risk-targeted ground motion values from
  probabilistic seismic hazard curves in accordance with the site-specific
  ground motion procedures defined in "Method 2" of <i>2010 ASCE 7 Standard</i>
  Section 21.2.1.2.
</p>

<p>
  The vast majority of engineering projects in the U.S. will require the use of
  the <i>U.S. Seismic Design Maps</i> application (see above) rather than the
  <i>Risk Targeted Ground Motion Calculator</i>.
</p>

<hr/>
<a href="choosing.php">Looking for seismic zones?</a>
