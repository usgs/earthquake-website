<?php
  // Author: Lisa Wald
  // Contact: Kuo Wan Lin,
  // Last modified: 08/27/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Software to Download';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<h2>ShakeCast</h2>

<p>
  An application for automating <a href="/data/shakemap/">ShakeMap</a> delivery to critical users and for facilitating notification of shaking levels at user-selected facilities.
</p>
<p>
  <strong>Who should use ShakeCast</strong>: businesses, utility and other lifeline managers, emergency responders, and others have an urgent need for information about the impact on their own facilities so they can make informed decisions and take quick actions to ensure safety, restore system functionality, and minimize losses.
</p>
<p>
  <strong>Who should not use ShakeCast</strong>: individual users without facility inventory or organizations that look for earthquake information infrequently.
</p>

<div class='row'>
  <div class='column one-of-two'>
    <h3>ShakeCast (Version 3.0)</h3>

    <figure class='right'>
      <img src="images/shakecast3.gif" alt="Screenshot of ShakeCast interface"/>
    </figure>
    <p>
      Critical users (lifeline utilities, for example) can receive automatic notifications within minutes of an earthquake indicating the level of shaking and the likelihood of impact to their own facilities.
    </p>
    <p>
      The current release of ShakeCast is Version 3.0 (October, 2015). This is a significant rewrite from Version 2.0, and although it preserves the basic features and principles, it is advised that all users upgrade to Version 3 to add significant improvements in robustness, capabilities and features, and ease of installation and use.
    </p>

    <h4>Usage:</h4>
    <p>
      Situational awareness. ShakeCast is an application for automating ShakeMap delivery to critical users and for facilitating notification of estimated shaking levels at user-specific facilities. Full Web-based Graphical User Interface, notification services, and documentation.
    </p>

    <h4>Platform:</h4>
    <p>
      MS Windows operating system (XP, 7/8 Server); Linux. ShakeCast AMI (CentOS-6) using 	Amazon Web Services (AWS) and VM (Linux, Win Server) Interface, PERL, MySQL, Apache, HTML5; responsive web.
    </p>

    <h4>Output:</h4>
    <p>Email and txt messaging, PDF facility report, Web-based GUI using Google Maps.
    </p>

  </div>

  <div class='column one-of-two'>
    <h3>What’s New in ShakeCast: Introducing Version 3.0</h3>
    <p>
      Good News! ShakeCast 3.0 is here, and it is available for cloud-based ShakeCast hosting. You can now run ShakeCast with little or no hardware investment, achieve off-site redundancy, and avoid frustrating internal IT roadblocks. Alternatively, you can continue to host ShakeCast internally, but update to a Virtual Machine (VM) environment to avoid challenging hurdles introduced due to local idiosyncrasies of your hardware, software or network. Either way, ShakeCast V3 will be much easier to install, use and maintain.
    </p>
    <p>
      <strong>Some of the new features, documented in the ShakeCast User Guide, include:</strong>
      <ul>
        <li>Support for Linux VM/Cloud (Amazon Web Services)</li>
        <li>Windows 8/7 stand alone image/install (coming soon; <a href="mailto:shakecast-help@usgs.gov">contact us</a>)</li>
        <li>Drag-and-drop user data upload</li>
        <li>ShakeCast Inventory Worksheet (MS Excel)</li>
      </ul>
    </p>

    <h3>ShakeCast V3.0 Documentation</h3>
    <ul>
      <li>
        ShakeCast V3 <a href="https://my.usgs.gov/confluence/download/attachments/203227250/ShakeCast.V3.Cloud.Installation.Guide.pdf?version=1&modificationDate=1399491278715&api=v2">Cloud Installation Guide</a>
      </li>
      <li>
        Updated <a href="https://my.usgs.gov/confluence/download/attachments/204832808/ShakeCast_User_Guide.pdf?api=v2">ShakeCast User Guide (Draft)</a>
      </li>
      <li>
        <a href="https://my.usgs.gov/confluence/download/attachments/203227250/sample.zip?api=v2">Example user-specific data files</a> (users, facilities, fragilities, configurations)
      </li>
      <li>
        Steps for <a href="https://my.usgs.gov/confluence/download/attachments/203227250/Migrating.from.V2.to.V3.ShakeCast.pdf?version=1&modificationDate=1399491355926&api=v2">Migrating from V2 to V3</a>
      </li>
    </ul>
    <p>
      These documents, and more, are hosted on the <a href="https://my.usgs.gov/confluence/display/ShakeCast/Home">ShakeCast Wiki</a>.
    </p>

    <h4>Authors</h4>
    <p>Kuo-Wan Lin and David Wald</p>

  </div>
</div>

<hr/>

<h3>Getting Started</h3>

<p>
  Setting up your own cloud-base ShakeCast instance requires you to get an inexpensive (free for the first year) Amazon Web Services (AWS) cloud services account. Once set up with an AWS account, copying the ShakeCast software disk image (&quot;instance&quot;) requires a quick electronic approval from the USGS ShakeCast team.
</p>
<p>
  We highly recommend new and existing ShakeCast users who wish to host their own ShakeCast instance to use the following steps to install the application:
</p>

<ol>
  <li>
    <a href="https://my.usgs.gov/confluence/download/attachments/203227250/ShakeCast.V3.Cloud.Installation.Guide.pdf?version=1&modificationDate=1399491278715&api=v2">Obtain the prebuilt AWS ShakeCast VM. </a>An AWS micro instance is free for a one-year trial period, during which users can evaluate ShakeCast.
  </li>
  <li>Evaluate the ShakeCast application on AWS. </li>
</ol>

<p>
  Once you reach the conclusion that ShakeCast is the software that meets your needs for earthquake response, proceed to:
</p>
<ol start="3">
  <li>
    Prepare your hosting environment for ShakeCast implementation. Either on your own hardware, another cloud provider or continue to host in the AWS cloud.
  </li>
  <li>
    <a href="https://sslearthquake.usgs.gov/research/software/shakecast/downloads/">Install the ShakeCast application</a> using the platform-appropriate installer available on the ftp site.
  </li>
  <li>
    Migrate and populate ShakeCast using your facility, facility, notification, and user information.
  </li>
</ol>

<h3>ShakeCast Community</h3>
<ul>
  <li><a href="https://my.usgs.gov/confluence/display/ShakeCast/Home">ShakeCast Wiki</a></li>
</ul>

<h3>Contacts</h3>

<ul>
  <li><a href="mailto:shakecast-help@usgs.gov?subject=ShakeCast">ShakeCast User Support</a></li>
  <li><a href="mailto:klin@usgs.gov?subject=ShakeCast">Kuo-Wan Lin</a></li>
  <li><a href="mailto:wald@usgs.gov?subject=ShakeCast">David Wald</a></li>
</ul>

<hr/>

<h3>References and Acknowledgements</h3>

<ul class='referencelist'>
	<li>
    Fraser, W. A., D. J. Wald, and K-W. Lin (2007). Using ShakeMaps and ShakeCast to Prioritize Post-Earthquake Dam Inspections, Proceedings of the Geotechnical Earthquake Engineering and Soil Dynamics Conference IV, Sacramento, CA.
  </li>
  <li>
    Lin, K.W., and Wald, D.J., 2008, ShakeCast manual: <a href="https://pubs.usgs.gov/of/2008/1158/">U.S. Geological Survey Open-File Report 2008-1158</a>, 90 p.
  </li>
  <li>
    Wald, David J, and K. Lin (2007). USGS ShakeCast- Automating, Simplifying, and Improving the Use of ShakeMap for Post-Earthquake Decision Making , <a href="https://pubs.usgs.gov/fs/2007/3086/">U.S. Geological Survey Fact Sheet 2007-3086</a>, 6 pages.
  </li>
	<li>
    Wald, David J., K. Lin, K. Porter, and L. Turner (2008). ShakeCast: Automating and Improving the Use of ShakeMap for Post-Earthquake Decision-Making and Response, Earthquake Spectra, in review.
  </li>
  <li>
    <a href="https://pubs.usgs.gov/tm/2005/12A01/">Wald, D. J., B. C. Worden, V. Quitoriano, and K. L. Pankow (2005)</a>. ShakeMap Manual: Users Guide, Technical Manual, and Software Guide, USGS Open File Report, 131 pp.
  </li>
	<li>
    Wald, D. J., K. Lin, B. Worden, and L. Turner (2006). ShakeCast: Facilitating the Use of ShakeMap for Post-Earthquake Decision-Making and Response within Caltrans and other Critical Lifeline Communities, September 2006, Proceedings of the Fifth National Seismic Conference on Bridges &amp; Highways, San Francisco.
  </li>
</ul>

<h3>Acknowledgements</h3>

<p>
  USGS contracted with Gatekeeper Systems, Inc., Pasadena, to help
  develop the prototype ShakeCast system (Version 1.0). Early funding for
  ShakeCast was provided by the USGS and the American Lifelines Alliance
  (ALA), and it is now supported by the USGS under the Advanced National
  Seismic System (ANSS). Ongoing development is done in-house, with PHP
  consulting from Hungry Mind, Inc, in Boulder. Motivation and support for the
  development of ShakeCast (Version 2) was provided by the California
  Department of Transportation (Caltrans) under the guidance of Loren Turner.
</p>
