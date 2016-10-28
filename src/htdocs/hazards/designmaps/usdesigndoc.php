<?php
  if (!isset($TEMPLATE)) {
    $TITLE = "U.S. Seismic Design Maps - Documentation &amp; Help";
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $NAVIGATION = true;
    //$CONTACT = ""/*who is the contact now?*/;
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }
?>

<h2>Motivation for the tool</h2>

<p>
  The USGS collaborates with organizations that develop model building codes to
  make seismic design parameter values available to engineers. Although the
  USGS provides <a href="ftp://hazards.cr.usgs.gov/web/earthquake-designmaps/datasets/">data files</a> and <a href="ftp://hazards.cr.usgs.gov/web/earthquake-designmaps/pdfs/">maps</a>
  of the gridded design values, most engineers need design values only at their
  building site. This tool provides the design values from the specified
  building code reference document at the specified site.
</p>

<h2>Help on input to the tool</h2>

<h3>Choosing a building code reference document</h3>

<p>
  Users who are unsure which building code reference document and edition
  govern their project type and location should contact their local building
  department. Most municipalities adopt the International Building Code (in
  full, in part, or with amendments) and the AASHTO Guide Specifications for
  LRFD Seismic Bridge Design.
</p>

<p>
  The U.S. Seismic Design Maps tool provides seismic design parameter values
  for the U.S. and its Territories from the following documents:
</p>

<ul class='referencelist'>
  <li>
    <a href="http://publicecodes.cyberregs.com/icod/ibc/index.htm">International Building Code</a>: <a href="http://www.iccsafe.org/Store/Pages/2012I-Codes.aspx?r=2012icodes">2012</a>,
    <a href="http://www.iccsafe.org/Store/Pages/Category.aspx?cat=ICCSafe&amp;category=2390&amp;parentcategory=Store%20Products&amp;parentcategory=330">2009</a>, and
    <a href="http://shop.iccsafe.org/2006-international-building-code.html">2006</a>
  </li>
  <li>
    ASCE/SEI 7 Standard: <a href="http://www.asce.org/Product.aspx?id=25769807967&amp;productid=154164477">2010</a> and
    <a href="http://www.asce.org/Product.aspx?id=25769804655&amp;productid=120888355">2005</a>
  </li>
  <li>
    NEHRP Recommended Seismic Provisions: <a href="http://www.fema.gov/library/viewRecord.do?id=4103">2009</a> and
    <a href="http://www.fema.gov/library/viewRecord.do?id=2020">2003</a>
  </li>
  <li>
    <a href="https://bookstore.transportation.org/Item_details.aspx?id=1379">2009 AASHTO Guide Specifications for LRFD Seismic Bridge Design</a>
  </li>
</ul>

<h3>Selecting the Site Class</h3>

<p>
  Users who do not know the site soil classification should consult their
  building code reference document. Each document provides guidance on how to
  use shear wave velocity, field standard penetration resistance, or shear
  strength data to classify the site soil. The USGS does not provide site soil
  classifications.
</p>

<p>
  The U.S. Seismic Design Maps tool does not accommodate Site Class F. The
  design of structures at Site Class F locations generally requires the use of
  site-specific ground motion procedures, for example, detailed in Section
  21.1 of the 2010 ASCE/SEI 7 Standard. The procedures for these site-specific
  cases are different from those used by the U.S. Seismic Design Maps tool.
</p>

<h3>Error messages</h3>

<p>
  <code class="unix">Error message: "Location Out of Bounds"</code> - One (or
  both) of the site latitude and longitude values is (are) not valid. Please
  check that the longitude value is negative and the latitude value is
  positive. Also, the location must be within one of the following boxes (in
  degrees):
</p>

<ul>
  <li>latitude: 24.6 to 50; longitude: -125 to -65 (Conterminous U.S.)</li>
  <li>latitude: 48 to 72; longitude: -200 to -125.1 (Alaska)</li>
  <li>latitude: 18 to 23; longitude -161 to -154 (Hawaii)</li>
  <li>
    latitude: 17.5 to 19.8; longitude: -67.5 to -64.5 (Puerto Rico and the U.S.
    Virgin Islands)
  </li>
</ul>

<h2>Help on output from the tool</h2>

<h3>No output?</h3>

<p>
  If output is not visible, the web browser may be blocking pop-up windows by
  default. The U.S. Seismic Design Maps tool provides output reports via a
  pop-up window. For help enabling pop-ups, please consult the browser-specific
  information at one of the following links:

<a href="http://support.google.com/chrome/bin/answer.py?hl=en&amp;answer=95472">Chrome</a>,
<a href="http://support.mozilla.org/en-US/kb/pop-blocker-settings-exceptions-troubleshooting#w_pop-up-blocker-settings">Firefox</a>,
<a href="http://windows.microsoft.com/en-US/windows-vista/Internet-Explorer-Pop-up-Blocker-frequently-asked-questions">Internet Explorer</a>, or
<a href="http://support.apple.com/kb/PH4980">Safari</a>.</p>

<h3>Does the printout of the Detailed Report appear incomplete?</h3>

<p>
  If the lines, colors, or both in the Detailed Report are visible on the
  computer screen but not visible in a printed version, the browser may not be
  printing background colors. Please consult the following browser-specific
  instructions for assistance:
</p>

<ul>
  <li>Firefox (on a PC):
  <ul>
    <li>Select "File" in the upper-left corner of the main browser window.</li>
    <li>Select "Page Setup."</li>
    <li>
      Under the &ldquo;Format &amp; Options&rdquo; tab, check the box next to
      the "Print Background" option.
    </li>
  </ul>
  </li>

  <li>Firefox (on a Mac):
  <ul>
    <li>
      Select &ldquo;File&rdquo; in the the gray bar at the top of the screen.
    </li>
    <li>Select &ldquo;Print.&rdquo;</li>
    <li>
      In the &ldquo;Appearance&rdquo; section, check the boxes next to the
      &ldquo;Print Background Colors&rdquo; and &ldquo;Print Background
      Images&rdquo; options.
    </li>
  </ul>
  </li>

  <li>Internet Explorer:
  <ul>
    <li>Select "File" in the upper-left corner of the main browser window.</li>
    <li>Select "Page Setup."</li>
    <li>
      Under "Paper Options," check the box next to the "Print Background Colors
      and Images" option.
    </li>
  </ul>
  </li>

  <li>Safari:
    <ul>
      <li>Select "File" in the the gray bar at the top of the screen.</li>
      <li>Select "Print."</li>
      <li>
        Click the downward-pointing arrow appearing to the right of the Printer
        name.
      </li>
      <li>Click the box next to "Print Backgrounds".</li>
    </ul>
  </li>
</ul>

<h2>Design values versus hazard values</h2>

<h3>How do they differ?</h3>

<p>
  The design values provided by the U.S. Seismic Design Maps tool are different
  than the USGS hazard values because the design values are the lesser of
  probabilistic and deterministic ground motion values. Also, for the 2009
  NEHRP Recommended Seismic Provisions, the 2010 ASCE/SEI 7 Standard, and the
  2012 International Building Code:
</p>
<ul>
  <li>
    the probabilistic values are risk-targeted rather than uniform-hazard
    ground motions;
  </li>
  <li>
    and both the probabilistic and deterministic values are defined in terms of
    maximum-direction rather than geometric-mean, horizontal spectral
    acceleration.
  </li>
</ul>

<p>
  For more information, consult the references at the end of this web page.
</p>

<h3>How are design values calculated?</h3>

<p>The USGS calculated the design values using:</p>
<ol>
  <li>hazard values computed by the USGS on a national scale and</li>
  <li>
    site-specific procedures for seismic design stipulated in Chapter 21 of the
    NEHRP Recommended Seismic Provisions and the ASCE/SEI 7 Standard.
  </li>
</ol>
<p>
  From both (1) and (2), the USGS derived national maps of design values for
  Site Class B. For the other site classes that may be specified by a user (that
  is, A, C, D, and E), the application adjusts the Site Class B design values
  using NEHRP &ldquo;site coefficients.&rdquo;
</p>

<h2>Design parameters in different building code reference documents</h2>

<p>
  The seismic design parameters of the 2009 NEHRP Recommended Seismic
  Provisions, the 2010 ASCE/SEI 7 Standard, and the 2012 International Building
  Code are identical. The seismic design categories of the 2012 International
  Residential Code are derived from these parameters. However, the underlying
  uniform-hazard, risk coefficient, and deterministic parameters are only
  enumerated in the 2009 NEHRP Provisions. The 2010 ASCE/SEI 7 Standard also
  provides the risk coefficients in its site-specific ground motion procedures.
</p>

<p>For more information about site and risk coefficients, see:</p>
<ul class='referencelist'>
  <li>
    Section C11.4.3 of Part 1 of the 2009 NEHRP Recommended Seismic Provisions
    and the additional information referenced there; and
  </li>
  <li>
    the conference paper by Luco and colleagues (2007) listed at the end of
    this web page.
  </li>
</ul>

<h2>Future updates</h2>

<p>Include design values from:</p>
<ul>
  <li>2012/09/06/03/00 International Residential Code</li>
  <li>2003/00 International Building Code</li>
  <li>2002/98 ASCE/SEI 7 Standard</li>
  <li>2000/97 NEHRP Recommended Provisions</li>
</ul>

<h2 id="data-access">Data access</h2>

<p>
  Data from the tool can be accessed in XML format, using URLs like the
  following:
</p>

<p>
  <a class="url-example"
  href="/designmaps/us/inc/data-api.inc.php?latitude=40&amp;longitude=-105&amp;edition=ibc-2009&amp;variant=0&amp;siteclass=3&amp;riskcategory=0">http://earthquake.usgs.gov/designmaps/us/inc/data-api.inc.php?
  <span class="url-example-params">latitude=40&amp;
  longitude=-105&amp;
  edition=ibc-2009&amp;
  siteclass=3&amp;
  riskcategory=0</span></a>
</p>

<p>Each parameter has a different set of options:</p>

<ul class="api-params">
  <li><code>latitude</code>: Required; should be decimal degrees, with negative
  values south of the equator.
  </li>
  <li><code>longitude</code>: Required, should be decimal degrees, with negative
  values west of the prime meridian.</li>
  <li><code>edition</code>:
    <dl>
      <dt>ibc-2012</dt><dd>2012 International Building Code</dd>
      <dt>asce-2010</dt><dd>ASCE 7-10 Standard</dd>
      <dt>aashto-2009</dt><dd>
          2009 AASHTO Guide Specifications for LRFD Seismic Bridge Design</dd>
      <dt>ibc-2009</dt><dd>2006/2009 International Building Code</dd>
      <dt>nehrp-2009</dt><dd>2009 NEHRP Recommended Seismic Provisions</dd>
      <dt>asce-2005</dt><dd>ASCE 7-05 Standard</dd>
      <dt>nehrp-2003</dt><dd>2003 NEHRP Recommended Seismic Provisions</dd>
    </dl>
  </li>
  <!-- (Only relevant once ASCE 41-* is released)
  <li>variant options:
    <ul>
      <li>For ASCE 41-06: BSE-1, BSE-2 and Custom PE<sub>50</sub></li>
      <li>For ASCE 41-13: BSE-2N, BSE-1N, BSE-2E, BSE-1E and Custom PE<sub>50</sub></li>
    </ul>
  </li>-->
  <li><code>siteclass</code>:
    <dl>
      <dt>0</dt><dd>Site Class A</dd>
      <dt>1</dt><dd>Site Class B</dd>
      <dt>2</dt><dd>Site Class C</dd>
      <dt>3</dt><dd>Site Class D</dd>
      <dt>4</dt><dd>Site Class E</dd>
      <dt>5</dt><dd>Site Class F</dd>
    </dl>
  </li>
  <li><code>riskcategory</code>:
    <dl>
      <dt>0</dt><dd>Risk Category I</dd>
      <dt>1</dt><dd>Risk Category II</dd>
      <dt>2</dt><dd>Risk Category III</dd>
      <dt>3</dt><dd>Risk Category IV</dd>
    </dl>
  </li>
</ul>

<p>
  Normal output will be contained within a <code class="inlinecode">
  &lt;output&gt;</code> tag, while any errors will be a simple string within an
  <code class="inlinecode">&lt;error&gt;</code> tag.
</p>


<h2>References</h2>
<ul class="referencelist">
  <li>
    <cite>Huang, Y. N., A.S. Whittaker &amp; N. Luco (2008), &ldquo;Maximum
    Spectral Demands in the Near-Fault Region,&rdquo; Earthquake Spectra, Vol.
    24, No. 1, pp. 319-341.</cite>
  </li>

  <li>
    <cite>Luco, N., B.R. Ellingwood, R.O. Hamburger, J.D. Hooper, J.K.
    Kimball &amp; C.A. Kircher (2007), &ldquo;Risk-Targeted versus Current
    Seismic Design Maps for the Conterminous United States,&rdquo; Proceedings
    of the 2007 Structural Engineers Association of California Convention,
    Lake Tahoe, CA, pp. 163-175.</cite>
  </li>

  <li>
    <cite>Building Seismic Safety Council (2009), &ldquo;NEHRP Recommended
    Seismic Provisions for New Buildings and Other Structures (FEMA P-750):
    Part I, Provisions,&rdquo; Federal Emergency Management Agency, Washington,
    D.C., pp. 5-8, 10-18, 67-71, and 92-93 in particular.</cite>
  </li>

  <li>
    <cite>Petersen, M.D., A.D. Frankel, S.C. Harmsen, C.S. Mueller, K.M. Haller,
    R.L. Wheeler, R.L. Wesson, Y. Zeng, O.S. Boyd, D.M. Perkins, N. Luco, E.H.
    Field, C.J. Wills, &amp; K.S. Rukstales (2008),
    <a href="http://pubs.usgs.gov/of/2008/1128/">&ldquo;Documentation for the
    2008 Update of the United States National Seismic Hazard Maps,&rdquo;</a>
    U.S. Geological Survey Open-File Report   2008-1128, 61 p.</cite>
  </li>
</ul>
