<?php
	////////////////////////////////////////////////////////////////////
	//                                                                //
	//   DO NOT MODIFY THIS PAGE WITHOUT CONSULTING WITH ERIC M.      //
	//   THE SYNTAX, LAYOUT, CONTENT, COMMENTS, VERBAGE ETC...        //
	//   ARE ALL VERY SPECIFIC, INTENTIONAL AND NECESSARY FOR         //
	//   E.V.'s GROUND MOTION CALCULATOR (JAVA) TO RUN PROPERLY.      //
	//                                                                //
	////////////////////////////////////////////////////////////////////  
		$TITLE = "Earthquake Ground Motion Parameter Java Application Updates";
		include_once $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";
?>

<p><a href="index.php">Back to Seismic Design Values for Buildings</a></p>

<!-- Upcoming Revisions END: Upcoming Revisions -->

<!-- BEGIN REVISION HISTORY -->

<!-- BEGIN RECENT REVISION -->

<h2>5.1.0</h2>
<ul>
	<li>
		Added the 2009 International Building Code edition to available data
		editions under the International Building Code analysis option. For
		seismic parameters the 2009 IBC is identical to the 2006 IBC.
	</li>
	<li>
		Updated labeling on MCE Spectrum to properly indicate &ldquo;Site Class
		B&rdquo;. Also removed references to F<sub>a</sub> and F<sub>v</sub> on
		the MCE Spectrum since this spectrum is always Site Class B and does not
		use the F<sub>a</sub> or F<sub>v</sub> multipliers.
	</li>
	<li>
		Corrected links to maps in the probabilistic hazard section of the
		application.
	</li>
	<li>
		Implemented new feature to allow &lsquo;Single Value Hazard&rdquo;
		computations based on input ground motion <em>and</em> exposure time.
		Previously the exposure time was fixed to 50 years for this input option.
	</li>
</ul>

<!-- END RECENT REVISION -->

<h2>5.0.9a</h2>
<ul>
	<li>Corrected problem created by migrating application to new server.</li>
</ul>

<h2>5.0.9</h2>
<ul>
	<li>Added single hazard value computation support for batch mode.</li>
	<li>
		Updated output when computing design values by zip code to display
		minimum, maximum, and centroid values for site-modified calculations.
	</li>
	<li>Corrected minor formatting issues.</li>
</ul>

<h2>5.0.8</h2>
<ul>
	<li>Implemented new batch processing feature for site locations.</li>
	<li>
		Application now saves proxy settings after initially being set by user.
	</li>
	<li>Corrected minor typographical errors.</li>
</ul>

<h2>5.0.7</h2>
<ul>
	<li>Switched host server the application connects to.</li>
	<li>Corrected typo concerning Frequency of Exceedance values that should be used with caution.  Correct value of 1E-4 is now displayed.</li>
</ul>


<h2>5.0.6</h2>
<ul>
	<li>Added an Okay button to the 'Add Name and Date' feature to make usage more intuitive.</li>
	<li>Corrected some minor spelling errors within the application.</li>
</ul>

<h2>5.0.5</h2>
<ul>
	<li>Corrected a problem inherent with the version notification system.</li>
	<li>Corrected problem with calculating site modified spectrum values for the Puerto Rico/U.S. Virgin Island territories.</li>
	<li>Corrected behavior of the 'Add Name and Date' feature under the File menu to function properly when saving and printing output.</li>
</ul>

<h2>5.0.4</h2>
<p><em>Thanks to Greg Soules of CB&amp;I for bringing these issues to our attention.</em></p>
<ul>
	<li>Added notification system when new versions are released.</li>
	<li>Corrected NFPA 5000 Analysis Option for queries in the Puerto Rico/U.S. Virgin Islands.</li>
	<li>Corrected IBC Region/Edition option menus and functionality.</li>
	<li>Removed inappropriate IRC Regions.</li>
	<li>Corrected available maps under the "View Maps" button.</li>
</ul>


<h2>5.0.3</h2>
<ul>
	<li>Corrected problems with the functionality for the Puerto Rico/U.S. Virgin Islands when calculating Ss and S1 values.</li>
</ul>

<h2>5.0.2</h2>
<ul>
	<li>Added support for earlier version of Java.</li>
</ul>

<h2>5.0.1</h2>
<ul>
	<li>Cleaned up data format for output values.</li>
</ul>

<h2>5.0.0</h2>
<ul>
	<li>Original Release.
</ul>
<!-- END REVISION HISTORY -->
	
