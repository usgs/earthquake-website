<?php 
if ( ! isset( $TEMPLATE ) ) {

	$TITLE = 'New ShakeMaps for the 1868 Hayward Earthquake';
	
	//	$CONTACT = "usgsEmailID";
	include($_SERVER['DOCUMENT_ROOT'] . '/template/static/footer.contact-menlo.php');
	
	$STYLESHEETS = "/css/nca/base.css";
	//	$SCRIPTS = "";
	
	$TEMPLATE = "twocolumn";
	include $_SERVER['DOCUMENT_ROOT'] . "/template/template.inc.php";
} ?>
<p>These two maps compare the shaking distribution determined from damage reports for the 1868 Hayward earthquake with the shaking distribution estimated from a seismological model of an earthquake on the southern segment of the Hayward fault. The 1868 Hayward earthquake (M7.0) is about twice as large as the seismological model for the southern segment earthquake (M6.7). The shaking in the two earthquakes is similar in Alameda County, near the fault, but the shaking in the 1868 earthquake is stronger in Contra Costa, Sonoma, and Solano Counties to the north.</p>
<!--<p>See Also: <a href="http://www.mercurynews.com/search/ci_5166661?nclick_check=1">Getting the shakes, San Jose Mercury News</a> (Feb 06, 2007)</p>-->
<a href="historic.jpg" title="Click for a larger image"><img src="tn-historic.jpg" alt="ShakeMap based on historic reports" class="five align-left" /></a>
<a href="modeled.jpg" title="Click for a larger image"><img src="tn-modeled.jpg" alt="ShakeMap based on modelled intensity" class="five align-left" /></a>
<h2 style="clear:both;">ShakeMap Legend</h2>
<img src="legend.jpg" alt="ShakeMap Legend" width="512" height="98" />