<?php
  if (!isset($TEMPLATE)) {
    $TITLE = "U.S. Seismic Design Maps";
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $NAVIGATION = true;
    //$CONTACT = ""/*who is the contact now?*/;
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }
?>

<p class="alert info">
  Due to insufficient resources and the recent development of similar web 
	tools by third parties, the USGS has streamlined this U.S. Seismic Design 
	Maps web application. Whereas the former application interacted with users 
	through a graphical user interface (GUI), the replacement web services 
	receive the inputs (e.g. latitude and longitude) in the form of a web 
	address and return the outputs (e.g. S<sub>DS</sub> and S<sub>D1</sub>) in 
	text form, without supplementary graphics. Though designed primarily to be 
	read by the aforementioned third-party web GUIs (e.g. from <a href=
	"https://asce7hazardtool.online/">ASCE</a>, <a href=
  "https://seismicmaps.org/">SEAOC/OSHPD</a>, and <a href=
	"https://hazards.atcouncil.org/">ATC</a>), the text outputs are also 
	human-readable. To see the new web services, <a href="/ws/designmaps/">
	please click here</a>. Step-by-step instructions for using one of these 
	web services, namely that for the recently published <it>ASCE/SEI 7-16</it> 
	standard, <a href="./step-by-step-instructions-for-webservice_v3.pdf">are 
	posted here</a>. Most users will find the third-party web GUIs to be more 
	usable than the underlying USGS web services.
</p>
