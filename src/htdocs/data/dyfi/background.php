<?php
// Author: Lisa Wald
// Contact: David Wald,wald@usgs.gov

  if (!isset($TEMPLATE)) {
  $TITLE = 'DYFI Scientific Background';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<ul>
  <li><a href="#for">What Is DYFI For?</a></li>
  <li><a href="#prod">DYFI Webpages and Products</a></li>
  <li><a href="#intensity">What is Intensity? A Measure of Effects</a></li>
  <li><a href="#quest">The DYFI Questionnaire</a></li>
  <li><a href="#agg">Aggregation: Combining Users&CloseCurlyQuote; Responses</a></li>
  <li><a href="#maps">The DYFI Maps</a></li>
  <li><a href="#dyfi-sm">DYFI and ShakeMap</li>
  <li><a href="#mmi">DYFI and Modified Mercalli Intensities</a></li>
  <li><a href="#caveat">Importance of Your Contribution and a Caveat</a></li>
  <li><a href="#ack">Acknowledgments</a></li>
  <li><a href="#app1">Appendix I:</a> The DYFI Intensity Algorithm</li>
  <li><a href="#app2">Appendix II:</a> Intensity Prediction Equations and the Distance vs. Intensity Plot</li>
  <li><a href="#refs">References</a></li>
</ul>

<p>For further information, see <a href="https://pubs.usgs.gov/fs/2005/3016/">Did You Feel It? Citizens Contribute to Earthquake Science</a> (USGS Factsheet 2005-3016).</p>
<hr/>

<a id="for"><h2>What Is DYFI For?</h2></a>
<p>
  The Did You Feel It? (DYFI) system was developed to tap the abundant information available about earthquakes from the people who experience them. By taking advantage of the vast number of Internet users, we can get a more complete description of what people experienced, the effects of an earthquake, and the extent of damage. And best of all, with your help we can do so almost instantly.
</p>
<p>
  By contributing your experience of the earthquake, either immediately afterward, or whenever it is possible for you to do so, you make a contribution to the scientific body of information about each earthquake. You also ensure that your area has been represented in the compilation of the maps of shaking. This is a two-way street: not only will you add valuable information on the extent of ground shaking and damage, but in the process we hope you will learn more about how other communities fared and gain a greater understanding of the effects of earthquakes.
</p>
<p>
DYFI data are now being used in a number of scientific applications. For example:
<ul>
  <li>Providing intensity data and for USGS <a href="/data/shakemap/">ShakeMap</a></li>
  <li>Comparing the results of the National Seismic Hazard Maps with DYFI responses (<a href="#refs">Mak and Schorlemmer, 2015</a>)</li>
  <li>Comparing intensity with the distribution of red and yellow tags for the Napa M6.0 earthquake (<a href="#refs">Boatwright et al., 2015</a>)</li>
  <li>Analyzing the differences in shaking for natural and injection-induced events (<a href="#refs">Hough, 2014</a>)</li>
  <li>Assessing the sampling bias of historic felt records (<a href="#refs">Hough, 2013</a>)</li>
  <li>Estimating the felt areas of moderate earthquakes (<a href="#refs">Boatwright and Phillips, 2012</a>)</li>
</ul>
</p>

<a id="prod"><h2>DYFI Webpages and Products</h2></a>
<p>
  The DYFI Map and related products are created within minutes of each earthquake of magnitude 1.9 or greater. The origin information (location and time) of each earthquake is provided by the <a href="/monitoring/anss/">Advanced National Seismic System (ANSS)</a> and its regional and national networks partners in the U.S. Occasionally, we may make DYFI products for smaller felt earthquakes or significant non-earthquake events (such as sonic booms or explosions) when we get significant numbers of felt reports. These products are updated every five minutes following the earthquake and then less frequently as additional data are received. Maps that have not received any felt reports after one hour are removed from the webpage.
</p>
<p>
For every significant or felt earthquake on the USGS Earthquake Program web page, the DYFI product page has a number of products available in a variety of formats.
<ul>
  <li>
    The <b>Intensity Map</b> shows the epicenter of the earthquake and the extent of the felt reports we received. Each area is color-coded with the calculated DYFI Intensity for each area. You may hold your mouse pointer over each area to see the location, numerical intensity value, the number of respondents in that area, and the distance from the earthquake’s hypocenter. Maps with different data aggregations and different zoom levels may be available depending on the event.
  </li>
  <li>
    The <b>Intensity vs. Distance Plot</b> shows the intensities derived from the questionnaire responses compared against estimates of the intensities for the reported magnitude and each distance using an Intensity Prediction Equation (IPE). Your responses help us to refine IPEs in the future.
  </li>
  <li>
    The <b>Responses vs. Time Plot</b> shows the number of user responses as a function of time in the 24 hours after an event.
  </li>
  <li>
    The <b>Table of DYFI Responses</b> shows the aggregated summary of intensities at each location. To protect user privacy, we cannot show data for individual responses; only combined results are shown.
  </li>
  <li>
    In addition, the earthquake catalog is a searchable database that includes all available DYFI maps and products. There is also a summary map (in JPEG and PDF format) of the highest reported intensities for the U.S. and the world for each year that we have DYFI data available.
  </li>
</ul>
</p>

<a id="intensity"><h2>What is Intensity? A Measure of Earthquake Effects</h2></a>
<p>
  <b>Intensity</b> is a qualitative measure of the strength of ground shaking at a particular site. The U.S. employs the <a href="#mmi">Modified Mercalli Intensity (MMI)</a> Scale, which uses Roman numerals from I (not felt) to X (extreme). Usually (but not always) the highest intensities are measured near the earthquake epicenter and lower intensities are measured farther away.
</p>
<p>
  Note that intensity is different from <b>magnitude</b>, which is a measure of an earthquake’s size. Historically, <b>Richter magnitude</b> was determined by measuring the amplitude of seismic waves recorded on specific seismographs. Today, the USGS uses <b>moment magnitude</b> which measures the energy released by an earthquake. Any earthquake will have one value on a particular magnitude scale. However, different intensities will be felt at different locations.
</p>
<p>
  For example, the magnitude of the 1994 Northridge earthquake was 6.7. The intensities ranged from IX (violent) close to the epicenter, to V (moderate) at distances of about 60 - 200 miles away, and finally intensity I (not felt) at even greater distances.
</p>

<a id="quest"><h2>The DYFI Questionnaire</h2></a>
<p>
  DYFI collects intensity data using the <b>DYFI Questionnaire</b>. You may fill out the questionnaire for any earthquake you felt, even one that is not yet on our website: you may fill out the form for an <a href="https://earthquake.usgs.gov/earthquakes/eventpage/unknown">unknown event</a> and we will associate your report automatically based the location and time you enter.
</p>
<p>
  We group all the responses for an earthquake into “communities” which we define to be ZIP code regions, cities, or rectangular boxes defined by UTM boundaries (see data aggregation). We aggregate all the responses of users in each community and assign a single intensity, called “Community Decimal Intensity” (CDI), to that community. For an in-depth explanation of the DYFI algorithm, see Appendix I.
</p>

<a id="agg"><h2>Data Aggregation: Combining Users&CloseCurlyQuote; Responses</h2></a>
<p>
  Community Decimal Intensities (CDI) are not individual observations. Rather they are, by definition, a measure of earthquake effects over an area. Historically, we use the ZIP code as the default area, For responses outside the U.S. we instead use the nearest large city and plot that location as a circle with size dependent on the city population. The advantage of grouping questionnaires this way is that nearly all users know their ZIP code or nearest city immediately.
</p>
<p>
  With advances in online geolocation services, we now allow users to locate themselves on the map, geolocate their street address, or even input their latitude and longitude coordinates directly. We aggregate these responses into geocoded “boxes” using <a href="https://en.wikipedia.org/wiki/Universal_Transverse_Mercator_coordinate_system">UTM coordinate boundaries</a> of 1km or 10 km size depending on the scale of the map. We create the geocoded map as an adjunct to the ZIP code/city map. Geocoded maps give greater precision in location intensities and cleaner-looking maps. By comparison, ZIP code boundaries are often irregularly shaped, or too large in low-population density areas.
</p>
<p>
  If you submit an imprecise location (such as a ZIP code or city instead of a street address), then the resulting location may be less precise than the size of a box. (For example, a location of “Golden, CO” yields a precision of approximately 5 km.) Locations without sufficient precision will be excluded from the geocoded map, although they may still be shown on the ZIP code or city map.
</p>

<a name="maps"><h2>The DYFI Maps</h2></a>
<p>
  Once we have combined all the questionnaire data and each community is assigned an intensity we display these results in the DYFI map for that earthquake. There will be one map for each aggregation scheme: one by ZIP code or city, and a geocoded, UTM-aggregated map (if available).
</p>
<p>
  In the DYFI map, each location is color-coded with the intensity. The value of each color is indicated in the legend below each map. At first only a few areas will have intensities assigned, but over time others will be assigned as data come in. Individual areas may change color as a new consensus is reached (that is, data from more respondents may change the intensity value for their community.) Check back often and remember to reload your browser to see the latest map! Note the date and time on the lower left corner of the map to keep track of the updates.
</p>

<a name="dyfi-sm"><h2>DYFI and ShakeMap</h2></a>
<p>
  DYFI is made to be compatible and consistent with <a href="/data/shakemap/">ShakeMap</a>: the DYFI map is the color-coding on the intensity maps shared the same palette and values. However, the difference is the nature of the data used for each product. ShakeMap is primarily based on point location measurements of the ground motion as recorded by seismometers, and shaking intensity is estimated from these recordings by relating these recorded or interpolated ground motions to seismic intensity (for technical details, see <a href="#refs">Worden et al., 2010</a>). In contrast, DYFI is based on direct reports of earthquake effects by users in the area instead of seismometers. In some regions, ShakeMap - particularly those within area with few seismic stations - incorporates DYFI to help constrain the shaking levels in addition to employing seismic stations, fault locations, and surficial geology for site amplifications.
</p>
<p>
  In areas with both seismic instruments and human “sensors”, DYFI intensities are used to calibrate the equations used by Shakemap to convert ground motions (as measured by sensors) into intensity.
</p>


<a id="mmi"><h2>DYFI and Modified Mercalli Intensities</h2></a>
<p>
  For United States earthquakes, intensities are assigned on the basis of the <a href="/education/mercalli.php">Modified Mercalli Intensity (MMI) Scale</a> (<a href="#refs">Wood and Neumann, 1931; Richter, 1958</a>). The Modified Mercalli Intensity or MMI was based in part on postal questionnaires, in which respondents summarize the effects of shaking in their communities. In addition, MMI incorporates observations from field studies in areas of significant damage, on damage maps produced by emergency response agencies, on reports produced by the earthquake engineering community, and on press reports. For a destructive earthquake, the process of collecting and interpreting damage data and preparing a map of MMI used to take months or more.
</p>
<p>
  The procedure used to calculate the DYFI maps was calibrated so that the Community Decimal Intensity values should, on average, be similar to the MMI values for the same communities (<a href="#refs">Dengler and Dewey, 1998</a>). We have seen that DYFI data will serve as a useful approximation to MMI maps in the hours, days, and months following damaging earthquakes. Final MMI maps may be prepared separately, but by sampling a number of DYFI datasets  for events from 2000 on, we have shown that the data collected from DYFI is robust and similar enough to traditional MMI assignments to be incorporated into the final assignment of USGS intensity maps. Nevertheless, because there are differences in the data and procedures used to assign the two types of intensities, DYFI cannot be considered to be identical to the historic USGS Modified Mercalli Intensity map procedure. One presentation difference is that DYFI maps are numerically interpolated (continuous values), whereas historical maps, or isoseismal maps, used contour lines to separate areas of equal integer-valued intensities.
</p>

<a id="caveat"><h2>Importance of Your Contribution and a Caveat</h2></a>
<p>
  It is important that you fill out a questionnaire, even if your community is already represented on the DYFI Map for the earthquake. The more questionnaires that are received for your area, the more reliable will be the intensity assigned to that ZIP code. <strong>Even if you did not feel the earthquake, your response is important</strong>: in areas of lighter shaking, the "not-felt" responses are needed to determine the percentage of felt responses as well as determine the boundary of “felt” and “not felt” areas.
</p>
<p>
  <b>NOTE:</b> Earthquake effects may vary significantly over small distances and with different ground conditions, building construction, and other factors. Hence the actual effect of an earthquake for a particular person or building may be significantly different from the Community Decimal Intensity for that area. Further, the input data is raw and unchecked, and may contain <a href="https://www.usgs.gov/faq/categories/9836/3385">errors</a>. Finally, some details of the procedure for preparing the DYFI map may change as we gain experience with data collection from the Internet. Hence, the nature of the map may evolve with time. See the <a href="disclaimer.php">Disclaimer</a> for other considerations.
</p>

<a id="ack"><h2>Acknowledgments</h2></a>
<p>
  DYFI was developed by Vincent Quitoriano and David Wald under the auspices of the U.S. Geological Survey (USGS). DYFI has benefited greatly from feedback and reviews by James Dewey of the USGS Golden, Colorado, who has the primary responsibility for producing the Modified Mercalli Intensity Maps for the U.S. Government. Web development is by the USGS Earthquake Hazards Web team in Golden, CO. Lori Dengler at Humboldt State University also provided critical input based on her experience with public responses to the Northridge earthquake and to earthquakes in Northern California and Oregon.
</p>

<a id="app1"><h2>Appendix 1. The CDI Algorithm</h2></a>
<p>
  The Community Decimal Intensity or CDI was first described in <a href="#refs">Dengler and Dewey (1998)</a>. The CDI is an aggregate (not an average) of the weighted sums of the various indices of the DYFI questionnaires. There are eight questions used in the calculation:
</p>
<table>
	<tr>
    <th>Weight</th>
    <th>Range</th>
    <th>Question</th>
  </tr>
  <tr>
    <td>5x</td>
    <td>0-1</td>
    <td>Did you feel it?*</td>
  </tr>
  <tr>
    <td>1x</td>
    <td>0-5</td>
    <td>How would you describe the shaking?</td>
  </tr>
  <tr>
    <td>1x</td>
    <td>0-5</td>
    <td>How did you react?</td>
  </tr>
  <tr>
    <td>2x</td>
    <td>0-1</td>
    <td>Was it difficult to stand or walk?</td>
  </tr>
  <tr>
    <td>5x</td>
    <td>0-1</td>
    <td>Did objects rattle, topple over, or fall off shelves?</td>
  </tr>
  <tr>
    <td>2x</td>
    <td>0-1</td>
    <td>Did pictures move of get knocked askew?</td>
  </tr>
  <tr>
    <td>3x</td>
    <td>0-1</td>
    <td>Did furniture slide, topple, or become displaced?</td>
  </tr>
  <tr>
    <td>5x</td>
    <td>0-3</td>
    <td>Was there damage to the building?</td>
  </tr>
</table>

<p>
  * For the first question, we allow users to answer a follow-up question: “Did others feel it?” This allows us to set a fractional value for this  index (0.33 or 0.66) if the user feels that the earthquake was only felt by some people in the area.
</p>
<p>
  For each community (defined as a ZIP code area, city, or geocoded box, depending on the map):
<ol>
  <li>We turn each answer into a numeric value from 0 (not felt/no effect) to 1 or more.</li>
  <li>We take the average of all answers to that question within that community. Note that unanswered questions or answers of “not applicable” are NOT counted in this average.</li>
  <li>We take the weighted sum of all the averages to form the community weighted sum (CWS).</li>
  <li>We calculate the DYFI Intensity as follows:</li>
  <li>CDI =  3.40 ln(CWS) - 4.38</li>
  <li>CDI is rounded off to the first decimal place. We set a minimum CDI of 2 if the CWS is nonzero (so the result is at least 2 “Felt”, or 1 “Not felt”), and cap the result at 9.0.</li>
</ol>
</p>
<p>For more details see <a href="#refs">Wald et al. (2012)</a>.</p>

<a id="app2"><h2>Appendix 2. Intensity Prediction Equations and the Distance vs. Intensity Plot</h2></a>
<p>
  The Intensity Prediction Equation (IPE) is an estimate of intensity for a given earthquake magnitude and distance. Earthquakes in different regions of the world tend to create different levels of shaking for many reasons, such as the mechanism of the earthquake, the nature of the geological environment, and the quality of infrastructure. Because of this, different IPEs have been developed for different regions.
</p>
<p>
  For each location or geological regime, scientists take a large set of earthquakes of different magnitudes and take the reported damage and shaking levels at different distances. They model the amount of shaking as an equation that takes magnitude and distance to produce an expected intensity level.
</p>
<p>We are currently using these IPEs:
<ul>
  <li>Atkinson-Wald, 2007 (California)</li>
  <li>Atkinson-Wald, 2007 (Central/Eastern US)</li>
</ul>
</p>
<p>
  One of the DYFI products we provide is a graphical plot of the Intensity Prediction Equation compared with the actual data computed from user reports. The distance vs. intensity plot contains three different overlaid datasets:
<ol>
  <li>
    The user-derived intensity for each area (derived from user reports) plotted against its distance from the hypocenter (the location of initial motion underground). Each intensity “measurement” is represented by a small green circle.
  </li>
  <li>
    The average intensity for each distance "bin". We combine geocoded data at similar distances into bins, similar to concentric rings. These are represented by filled, blue boxes with error bars of one standard deviation. The purple line is a polynomial curve that best fits the blue boxes.
  </li>
  <li>
    We plot each IPE as a curve with the predicted intensity falling with distance away from the earthquake.
  </li>
</ol>
</p>
<p>
  By plotting predicted values of IPEs along with the actual data from real responses, this allows us to compare and improve the IPEs for regions with little data.
</p>



<a id="refs"><h2>References</h2></a>
<ul class="referencelist">
<li>Atkinson, G. M., and D. J. Wald (2007). "Did You Feel It?" intensity data: A surprisingly good measure of earthquake ground motion. Seismological Research Letters, 78, 362-368.</li>
<li>Boatwright, J., J.L. Blair, B.T. Aagard, and K. Wallis (2015). The Distribution of Red and Yellow Tags in the City of Napa. Seismological Research Letters, 86, 361-368.</li>
<li>Boatwright, J., and E. Phillips (2012). “Exploiting the demographics of “Did You Feel It?” responses to estimate the felt area of moderate earthquakes.” 84th Annual Meeting of the Eastern Section of the Seismological Society of America, Virginia Polytechnic Institute and State University, Blacksburg, Virginia, 28–30 October 2012.</li>
<li>Dengler, L. A., and J. W. Dewey (1998). An Intensity Survey of Households Affected by the Northridge, California, Earthquake of 17 January, 1994.  Bulletin of the Seismological Society of America, 88, 441-462.</li>
<li>Dewey, J. W., B. G. Reagor, L. Dengler, and K. Moley (1995). Intensity distribution and isoseismal maps for the Northridge, California, earthquake of January 17, 1994. U. S. Geological Survey Open File Report 95-92, 35 pp.</li>
<li>Hough, S. (2014). Shaking from Injection-Induced Earthquakes in the Central and Eastern United States. Bulletin of the Seismological Society of America, 104, 2619-2626.</li>
<li>Hough, S. (2013). Spatial Variability of “Did You Feel It?” Intensity Data: Insights into Sampling Biases in Historical Earthquake Intensity Distributions. Bulletin of the Seismological Society of America, 103, 2767-2781.</li>
<li>Mak, S. and D. Schorlemmer (2015). “Direct verification of seismic hazard maps.” Annual Meeting of the Seismological Society of America Pasadena, California. 21-23 April, 2015.</li>
<li>Richter, C. F. (1958). Elementary Seismology. W. H. Freeman and Company, San Francisco, 135-149.</li>
<li>Wald, D. J., and Dewey, J.W. (2005). Did You Feel It? Citizens Contribute to Earthquake Science. USGS Fact Sheet 2005-3016.</li>
<li>Wald, D. J., Quitoriano, V., Dengler, L. A., and Dewey J. W. (1999). Utilization of the Internet for Rapid Community Intensity Maps. Seismological Research Letters, 70, No. 6, 680-697.</li>
<li>Wald, D.J., V. Quitoriano, C.B. Worden, M. Hopper, and J. W. Dewey (2012). USGS “Did You Feel It?” Internet-based Macroseismic Intensity Maps. Annals of Geophysics, 54, No. 6, 2011; doi: 10.4401/ag-5354</li>
<li>Wood, H. O., and F. Neumann (1931). Modified Mercalli Intensity Scale of 1931. Bulletin of the Seismological Society of America, 21, 277-283.</li>
<li>Worden, C. B., D. J. Wald, K. Lin, G. Cua, and D. Garcia (2010). A revised ground-motion and intensity interpolation scheme for ShakeMap. Bulletin of the Seismological Society of America, 100, 3083-3096.</li>
</ul>
