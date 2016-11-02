<?php
	if ( ! isset( $TEMPLATE ) ) {
		/**
			PAGE TITLE
			
			You must Change the Page Title
		*/
		$TITLE = "Earthquake Monitoring";
		
		/**
		
			CUSTOM PAGE CONTACT
			
			 By default the link at the bottom of each page will send email to Lisa, who can forward the email as appropriate
			
			 To have a custom page contact $CONTACT must have a usgsEmailID
		*/
			// $CONTACT = "rhea@usgs.gov";
		
		/**
			CUSTOM STYLESHEETS
			
			 Before creating a custom stylesheet for one page, talk to the web team to determine if these
			 styles should be included in the global scripts first
			
			 To include custom stylesheets $STYLESHEETS must contain a comma delimited list of absolute paths to the stylesheet
		*/
		//	$STYLESHEETS = "/css/stylesheet1.css,/css/stylesheet2.css";
		
		/**
			CUSTOM JAVASCRIPT
		
			 Before creating a custom javascript for one page, talk to the web team to determine if this
			 functionality should be included in the global scripts first
			
			 To include custom javascripts $SCRIPTS must contain a comma delimited list of absolute paths to the stylesheet
		*/
		//	$SCRIPTS = "/js/script1.js,/js/script2.js";
	
	
		/**
			CHOOSE A TEMPLATE
		
			 WARNING: Only one template should be uncommented!
		*/
		// Two Column
		include $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";
		
		// One Column
		//include $_SERVER['DOCUMENT_ROOT'] . "/template/template.onecolumn.inc.php";
	}
?> <h2>Magnitude vs. Intensity</h2>
          <p> Intensity scales measure the amount of shaking at a particular location. Therefore, the intensity of an earthquake will vary depending on where you are. Sometimes earthquakes are referred to by the maximum intensity they produce. <br />
              <br />
  Magnitude scales, like the Richter magnitude and moment magnitude, measure the size of the earthquake at its source. Thus, they do not depend on where the measurement of the earthquake is made. On the Richter scale, an increase of one unit of magnitude (for example, from 4.6 to 5.6) represents a 10-fold increase in wave amplitude on a seismogram or approximately a 30-fold increase in the energy released. Except in special circumstances, earthquakes below magnitude 2.5 are not generally felt by humans. <br />
  <br />
  Often, several slightly different magnitudes are reported for an earthquake. This happens because different measurement procedures will often give slightly different magnitudes for the same earthquake. </p>
          <br />
          <p><img src="images/mi.gif" alt="Image of earthquake location and relative intensity levels." width="408" height="379" align="top" /><br />
  The ShakeMap for the 1994 magnitude 6.7 Northridge, CA earthquake shows the epicenter at the location of the green star. The intensity of shaking created by the earthquake is shown by the different color gradients on the map &ndash; red is more intense shaking, yellow and blue are less intense. The magnitude of the earthquake is 6.7 no matter where you are, but the intensities vary by location. </p>
<hr />
<div align="center">
	<a href="eq-mon-2.php">Previous Page</a> -----
	<a href="eq-mon-4.php">Next Page</a>
	<br />
	<a href="index.php">TOC</a> |
	<a href="eq-mon-1.php">1</a> |
	<a href="eq-mon-2.php">2</a> |
	3 |
	<a href="eq-mon-4.php">4</a> |
	<a href="eq-mon-4.php">5</a> |
	<a href="eq-mon-6.php">6</a> |
	<a href="eq-mon-7.php">7</a> |
	<a href="eq-mon-8.php">8</a> |
	<a href="eq-mon-9.php">9</a> |
	<a href="eq-mon-10.php">10</a> |
	<a href="eq-mon-11.php">11</a>
</div>