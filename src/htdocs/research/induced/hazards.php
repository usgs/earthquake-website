<?php
// Author: Lisa Wald
// Contact: Justin Rubenstein
// Last modified: Lisa Wald, 2016/08/22
if (!isset($TEMPLATE)) {
  $TITLE = 'Induced Earthquakes';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<figure class='right'>
	<img src="images/hazardmap.png" alt="Map depicting hazards"/>
	<figcaption>
    Example computation of ground shaking probability from induced seismicity. This map does not represent a final model, as several different options for how to include induced seismicity in the national seismic hazard model are being considered.
  </figcaption>
</figure>

<h2>Hazard Estimation</h2>

<p>
  The <a href="/hazards/">2014 National Seismic Hazard Model</a> (NSHM) forecasts the strength and frequency of ground shaking in future earthquakes.  The hazard model underlies the seismic provisions used in the design of buildings, bridges, highways, and other structures.  It also provides critical information about areas of higher hazard for use by governmental disaster management agencies, companies and the public for use in developing <a href="http://www.earthquakecountry.org/roots/">earthquake risk reduction plans and actions</a>.
</p>
<p>
  In previous editions of the NSHM, earthquakes that were attributed to human activity were not included . The recent increase in induced earthquakes in the Central United States is so large that induced earthquakes need to be considered in the national seismic hazard model.
</p>
<figure class='left'>
  <img src='images/forecast.jpg' alt='OFR cover'/>
</figure>
<p>
  With input from scientists, engineers, regulators, industry representatives, and the public the USGS is developing methods to estimate the earthquake hazard from induced earthquakes. Preliminary models display the intensity of potential ground shaking from induced earthquakes for a one-year period based on the seismicity in the previous year. This method is a first step in accounting for the rapid changes in seismicity that we are observing.
</p>
<p>
  The USGS has released a preliminary report on methods to estimate the hazard from induced earthquakes, <a href="https://pubs.usgs.gov/of/2015/1070/">Incorporating Induced Seismicity in the 2014 United States National Seismic Hazard Model—Results of 2014 Workshop and Sensitivity Studies</a> (OFR 2015-1070) and welcomes feedback as work continues towards completion of a seismic hazard model that includes the hazard from induced seismicity.
</p>

<figure>
	<img src="images/map-induced-seis.png" alt="map of areas with potential induced seismicity" class="ten" />
	<figcaption>
    Seventeen areas of potentially induced seismicity considered in a preliminary estimate of seismic hazard from induced earthquakes. Green dots represent earthquakes that occurred fall 2012 to fall 2013; red dots show earthquakes that occurred fall 2013 to fall 2014; blue dots and blue lines represent earthquake activity prior to 2013 (areas identified but intentionally excluded from the 2014 national seismic hazard model). Red lines indicate areas where the polygons were expanded to incorporate recent (2013 and 2014) earthquakes that fell outside of the blue polygons.
  </figcaption>
</figure>
