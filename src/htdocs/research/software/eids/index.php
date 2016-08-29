<?php
  // Author: Lisa Wald
  // Contact: Scott Haefner
  // Last modified: Lisa Wald, 2016/08/24
    if (!isset($TEMPLATE)) {
      $TITLE = 'Software to Download';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
      ';
      // Use Earthquake level nav file
        include_once 'functions.inc.php';
        ob_start();
        include '../../_navigation.inc.php';
        $NAVIGATION = ob_get_clean();

        include 'template.inc.php';
    }
?>

<h2>Earthquake Information Distribution System (EIDS)</h2>

<h3>EIDS Installer</h3>
<p>
  The EIDS Installer is used to install and update EIDS servers and clients.  The latest versions of required jarfiles are downloaded from our website, and init and batch scripts are provided.
</p>

<ul>
	<li><a href="EIDSInstaller-0.54.jar">Download EIDS Installer v0.54 (2014/07/14)</a></li>
	<li><a href="EIDSInstaller-0.53.jar">Download EIDS Installer v0.53 (2009/06/10)</a></li>
	<li><a href="EIDSInstallerREADME.html">EIDS Installer Documentation</a></li>
</ul>

<h3>Quick Start</h3>
<p>
  If you can't wait to get started, download the installer and run the following command:
</p>
<pre>
	java -jar EIDSInstaller.jar --install --cubeClient EIDS
</pre>
