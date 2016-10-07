<?php
// Author: Lisa Wald
// Contact: Lisa Wald
if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Hazards 101 - the Basics';
  $NAVIGATION = true;
  $HEAD = '<link rel="stylesheet" href="/hazards/styles.css"/>';
  include 'template.inc.php';
}
?>

<ul>
  <li><a href="#hazard">What is earthquake hazard?</a></li>
  <li><a href="#what">What are hazard maps?</a></li>
  <li><a href="#apps">Applications of the hazard maps / What are building codes?</a></li>
  <li><a href="#read">How to read a hazard map</a></li>
  <li><a href="#why">Why use probabilistic ground motion for hazard determination?</a></li>
  <li><a href="#which">Why are there different probability maps, and which one do I use?</a></li>
  <li><a href="#make">How is a hazard map made? What is a hazard curve, and how is it made?</a></li>
  <li><a href="#data">What data are used to make hazard maps?</a></li>
  <li><a href="#updates">Why do the hazard maps keep changing and getting updated?</a></li>
  <li><a href="#who">Who uses hazard maps?</a></li>
  <li><a href="#help">I just want to know what faults are near me - how will these maps help?</a></li>
</ul>

<hr/>

<h3 id='hazard'>What is earthquake hazard?</h3>
<p>
  Earthquake ground shaking varies from place to place and the hazard mapping in this project will show this variability. The mapped hazard refers to an estimate of the probability of exceeding a certain amount of ground shaking, or ground motion, in 50 years.  The hazard depends on the magnitudes and locations of likely earthquakes, how often they occur, and the properties of the rocks and sediments that earthquake waves travel through.
</p>

<h3 id='what'>What are hazard maps?</h3>
<p>
  The National Hazard Maps show the distribution of earthquake shaking
  levels that have a certain probability of occurring in the United States.
  These maps were created to provide the most accurate and detailed
  information possible to assist engineers in designing buildings, bridges,
  highways, and utilities that will withstand shaking from earthquakes in
  the United States. These maps are used to create and update the building
  codes that are now used by more than 20,000 cities, counties, and local
  governments to help establish construction requirements necessary to
  preserve public safety.
</p>

<h3 id='apps'>Applications of the Hazard Maps:</h3>
<ol>
  <li>
    Building Codes (NEHRP, IBC, ASCE 7) <a
    href="http://www.fema.gov/earthquake/building-codes/"
    >About building codes?</a> (FEMA)
  </li>
  <li>Highway bridge design nationwide (AASHTO)</li>
  <li>Insurance rates</li>
  <li>Business and land-use planning</li>
  <li>Estimations of stability and landslide potentials of hillsides</li>
  <li>Construction standards for waste-disposal facilities (EPA)</li>
  <li>Retrofit priorities</li>
  <li>
    Allocation planning of assistance funds for education and preparedness
    (FEMA)
  </li>
  <li>Concerned general public</li>
</ol>

<hr/>

<h3 id='read'>How to read a hazard map</h3>
<img class='right' alt="example map" src="images/ex_map.gif"/>

<h4>Suppose the map on the right is the map given:</h4>
<ol>
  <li>A 50-year time interval</li>
  <li>A 5% chance of exceedence</li>
  <li>A <a href="http://www.usgs.gov/faq/?q=categories/9846/3410">PGA</a> map</li>
</ol>
<h4>We would read the shaking hazards for Nowhere City as:</h4>
<p>
  The earthquake peak ground acceleration (PGA) that has a 5% chance of
  being exceeded in 50 years has a value between 4 and 8% g.
</p>

<hr/>

<h3 id='why'>What is probabilistic ground motion, and why use it for hazard determination?</h3>

<p>
  Probabilistic ground motion maps depict earthquake hazard by showing, by contour values, the earthquake ground motions (of a particular frequency) that have a common given probability of being exceeded in 50 years (and other time periods).The ground motions being considered at a given location are those from all future possible earthquake magnitudes at all possible distances from that location. The ground motion coming from a particular magnitude and distance is assigned an annual probability equal to the annual probability of occurrence of the causative magnitude and distance.
</p>
<p>
  So the goal of a hazard map is to depict the potential shaking hazard from
  future earthquakes. The following sequence explains why probabilistic
  ground motion is the best way to accomplish this goal:
</p>

<div class='row'>
  <div class='column one-of-two'>
    <img src="images/MapStep1.gif">
  </div>
  <div class='column one-of-two'>
    <h4>Step 1</h4>
    <p>
      We can use a map showing the location and date of significant damaging earthquakes in the United States, <em>but</em> a map like that would not generalize from seismic history to indicate where other damaging earthquakes might be expected to occur in the future. To add this missing information&hellip;
    </p>
  </div>
</div>
<div class='row'>
  <div class='column one-of-two'>
    <img src="images/MapStep2.gif">
  </div>
  <div class='column one-of-two'>
    <h4>Step 2</h4>
    <p>
      We can add to the map all the smaller earthquakes that have occurred in the past, and then we can use that seismic history information to assume that damaging earthquakes can also occur in the future in the same locations as the smaller earthquakes, <em>but</em> we can&rsquo;t tell what the size of the expected ground motion hazard is. To add this missing information&hellip;
    </p>
  </div>
</div>
<div class='row'>
  <div class='column one-of-two'>
    <img src="images/MapStep3.gif">
  </div>
  <div class='column one-of-two'>
    <h4>Step 3</h4>
    <p>
      We can make a map of the historical maximum seismic intensities (amount of shaking) to estimate the size of the hazard, <em>but</em> we are ignoring the fact that earthquakes occur at a much lower rate in some parts of the U.S. than in others. To add this missing information&hellip;
    </p>
  </div>
</div>
<div class='row'>
  <div class='column one-of-two'>
    <img src="images/MapStep4.gif">
  </div>
  <div class='column one-of-two'>
    <h4>Step 4</h4>
    <p>
      We can incorporate seismicity rates in different parts of the country into the map using the methods of probabilistic ground motion hazard, <em>but</em> now the historical seismicity information is overemphasized compared to the evidence of seismic potential determined from geologic data. To add this missing information&hellip;
    </p>
  </div>
</div>

<img src="images/MapStepFinal.gif">
<h4>Step 5</h4>
<p>
  Finally, we add a model of future seismicity based on the prehistoric geologic information. In this way we arrive at the final hazard map.
</p>
<p>
  The method assumes a reasonable future catalog of earthquakes, based upon historical earthquake locations and geological information on the recurrence rate of fault ruptures.When all the possible earthquakes and magnitudes have been considered, one can find a ground motion value such that the annual rate of its being exceeded has a certain value. Hence, on a given map, for a given probability of exceedance, PE, locations shaken more frequently, will have larger ground motions.
</p>
<p>
  For a LARGE exceedance probability, the map will show the relatively likely ground motions, which are LOW ground motions, because small magnitude earthquakes are much more likely to occur than are large magnitude earthquakes.
</p>
<p>
  For a SMALL exceedance probability, the map will emphasize the effect of less likely events: larger-magnitude and/or closer-distance events, producing overall LARGE ground motions on the map.The maps have this format, because they are designed to be useful in building codes, in which we assume that, for the most part, all buildings would be built to the same level of safety. For other applications, maps of another format might be more useful.For instance, many buildings across the US are built more or less the same, regardless of earthquake hazard. If we knew that a particular type of building was likely to fail at a particular ground motion level, we could make a map showing contours of the likelihood of that ground motion value being exceeded, due to earthquakes.
</p>

<hr/>

<h3 id='which'>Why are there different probability maps, and which one do I use?</h3>
<p>
  The different probabilities are selected to provide an idea of the relative range of hazard across the US. The larger probabilities indicate the level of ground motion likely to cause problems in the western US. The smaller probabilities show how unlikely damaging ground motions are in many places of the eastern US. However, basically the values chosen reflect the more recent history in earthquake engineering.
</p>

<h4>Probability from the engineering point of view</h4>

<p>
  Rather than start with the idea of probability, consider approaching the issue from this direction: A structure is designed to resist earthquake ground motion having a particular value. Given this design resistance, one might ask several questions:
</p>

<ul>
  <li>
    Under what ground motion will the building sway so much that it is uncomfortable to the persons working inside, and disrupts their work for the day? (This could occur with winds as well as with earthquakes.)
  </li>
  <li>
    Under what ground motion will the building bend so much that interior partitions crack and wall or ceiling fixtures drop?
  </li>
  <li>Under what ground motion will the building become permanently deformed and require expensive rehabilitation or abandonment. Under what ground motion will the building collapse during the shaking?
  </li>
</ul>

<p>
  Using a hazard curve, one could determine the annual probability of occurrence of each of these ground motions. Then one could decide whether that corresponding probability is acceptable. If one of the probabilities is unacceptably high, the design would have to be revised.
</p>
<p>
  The three different probability values reflect probabilities sometimes considered for design. The value 10 percent in 50 years seemed to provide values similar to those already used in design in the 1970s in California. On the other hand, this level of probability in the eastern US produced values too low for the seismic design then under consideration to provide residual toughness in the event of possible earthquakes (unlikely in any one location, but likely in some location). The probabilities more likely to produce useful design ground motions would be near 5 percent in 50 years.
</p>
<p>
  The ground motions given by three probabilistic maps span a range of probabilities considered interesting to earthquake engineers and a range of ground motions which have some intuitive understanding for the consequences. There have been requests for maps of larger probabilities for purposes having to do with investment, insurance and banking. Eventually the web site will provide hazard curves and a means for obtaining either probabilities or ground motions from the hazard curves.
</p>

<h4>How do I know what map to choose then?</h4>

<p>
  How does an individual person select a map? Technical users probably have to follow predefined rules. A non-technical person may be interested in avoiding living in a location where significant shaking will cause worry, deciding on whether to carry earthquake insurance, or deciding whether to do some rehabilitation for an existing dwelling. The probability level chosen should reflect how anxious one is to avoid earthquake shaking.
</p>

<p>
  Here is some perspective on the 10 percent in 50 year map:<br />

  If one lives in a 100-year floodplain, there is about 1 chance in 100 of experiencing the flood in any given year. In 50 years one would expect 0.5 floods, and there is a 1 - exp(-0.5) = 39 percent chance of experiencing such a flood in 50 years. This is a higher likelihood than that of experiencing a damaging ground motion in an area where that ground motion has only a 10 percent chance of being exceeded in 50 years. In a 200-year floodplain the chance would be 22 percent, still larger than the chance for the damaging ground motion. People who are not comfortable with probabilities as large as 10 percent in 50 years for damaging earthquake ground motion should use maps with smaller probabilities. But they should also be aware that many other hazards are higher than earthquake hazards, even in California.
</p>

<hr/>

<h3 id='make'>How is a hazard map made? What is a hazard curve and how is it made?</h3>

<h4>How probabilistic ground motion is calculated:</h4>

<h5><strong>Calculating the probability of a ground motion being exceeded</strong></h5>
<p>
  We demonstrate how to get the probability that a ground motion is exceeded for an individual earthquake - the &ldquo;probability of exceedance&rdquo;.
</p>
<ol>
  <li>
    Show a curve of ground motion vs distance for a given magnitude,
    given a particular attenuation relation.
  </li>
  <li>At a given distance show distribution of ground motion.</li>
  <li>
    Intercept the distribution with a horizontal line at a given ground
    motion.
  </li>
  <li>
    The area of the distribution above the horizontal line is divided by
    the total area of the distribution. The result is &ldquo;Probability
    of Exceedance&rdquo; of the given ground motion given that earthquake
    having that magnitude experienced at that distance, given that
    particular attenuation relation.
  </li>
</ol>

<h5><strong>Annual rate of exceedance</strong></h5>
<p>
  How to get the expected number of exceedances in 1 year owing to that
  earthquake.
</p>
<ol>
  <li>
    Multiply the annual occurrence rate of the earthquake times the
    probability of exceedance of the ground motion, given that earthquake.
  </li>
  <li>
    Expected number of exceedances in 1 year = Annual rate of exceedance
  </li>
</ol>

<h5><strong>Annual rate of exceedance, given several earthquakes</strong></h5>
<p>
  Expected number of exceedances for several earthquakes. &ldquo;Adding
  exceedances&rdquo;
</p>
<ol>
  <li>
    The expected number of exceedances for several earthquakes is
    calculated by merely adding the annual rate of exceedance owing to each
    earthquake.
  </li>
</ol>

<h5><strong>Calculating a hazard curve.</strong></h5>
<p>
  A hazard curve is calculated by plotting annual rate of exceedance vs
  ground motion
</p>
<ol>
  <li>Perform the above calculation for 18 other ground motion levels.</li>
  <li>Plot the results.</li>
  <li>Make a smooth curve.</li>
</ol>
<p>
  Now, for any ground motion we can find the annual rate of exceedance.
  Likewise, for any annual rate of exceedance we can find the corresponding
  ground motion.
</p>

<h5><strong>Exceedance probability in <em>Y</em> years.</strong></h5>
<p>(This part is mathematical)</p>
<p>
  The expected number, n of exceedances in Y years is n = Y times r, the
  annual rate of exceedance. <strong>Assumption:</strong> The rate of
  earthquake occurrence in time is governed by the Poisson Law.
  <strong>Application:</strong> Under the Poisson Law, if you expect over
  some period of time n occurrences of &ldquo;something&rdquo;, the
  probability of 0 occurrences is <code>e<sup>&ndash;n</sup></code>. If the
  &ldquo;something&rdquo; is exceedance of some ground motion, the
  probability of getting an exceedance is 1 &ndash; P(0). So, one can work
  backwards to find the annual rate of exceedance corresponding to
  &ldquo;the probability of exceedance is 5&#37; in 50 years.&rdquo;
</p>
<pre>
  1 &ndash; P(0) = 5/100 (5&#37;)
  P(0) = 1 - 0.05 = 0.95 = e<sup>&ndash;n</sup>
</pre>
<p>Take the log to the base e of both sides of the last equality.</p>
<pre>
  n = &ndash; ln (0.95) = 0.05129 = Yr = 50 r
  r = 0.05129 / 50 = 0.0010258 = 1/974.8
</pre>
<p>
  The last result tells us that at low exceedance probabilities (less than
  10&#37;) r is approximately PE / (100 Y). Now one can use the hazard curve
  to find the corresponding ground motion. The hazard maps are just the
  contoured version of the corresponding ground motion plotted on a
  geographic grid.
</p>
<img class='right' src="images/ex_map.gif" alt="example map"/>

<p><strong>There are 3 types of maps:</strong></p>
<ul>
  <li><a href="technical.php#accel">Peak Ground Acceleration</a></li>
  <li><a href="technical.php#sa">0.2 second Spectral Acceleration</a></li>
  <li><a href="technical.php#sa">1.0 second Spectral Acceleration</a></li>
</ul>
<p>
  Units for all 3 maps are
  <a href="http://www.usgs.gov/faq/index.php?action=artikel&cat=131&id=1816&artlang=en&highlight=percent+g&search=true">&#37;g (percent of gravity)</a>.
  This can also be expressed in decimal form, example 10&#37;g = 0.1g.
  The ground motion values apply to ground motion expected for future
  individual earthquakes. The probabilistic ground motion calculation
  takes into account all possible future ground motions from all modeled
  earthquake magnitudes at all possible distances from the map site. The
  spatial distribution of probabilistic ground motion values is shown with
  contours on the map, like a topo map shows different elevations, with each
  color representing a different range of levels of shaking.
</p>

<img src="images/ex_timeint.gif" alt="Time interval example"/>

<p>
  TIME INTERVAL (X).
  A time interval during which all possible earthquakes may occur is set in
  order to determine the shaking hazard. The time interval is typically set
  to 50 years. The 50-year period can be ANY 50 years, not just the NEXT 50
  years; the red bar above can span any 50-year period.
</p>

<img class='left' src="images/ex_chance.gif" alt="% chance scale"/>

<p>
  &#37; CHANCE of EXCEEDENCE (Y)
  The percent (&#37;) chance that a certain amount of mapped shaking
  distribution will occur over the time period being considered. Typically
  the values of 2&#37;, 5&#37; and 10&#37; are used. Keep in mind that a
  5&#37; chance of exceedence means there is a 95% chance that the shaking
  will NOT exceed the value.
</p>

<br style="clear:left;"/>

<hr/>

<h3 id='data'>What data are used to make hazard maps?</h3>
<p>
  Three basic pieces of information are needed to produce probabilistic
  ground motion maps:
</p>
<ol>
  <li>
    <h5>Model of Future Earthquakes</h5>
    <p>
      Using information about past
      <a href="historical.php">historical earthquakes</a>,
      <a href="faults.php">Quaternary faults</a> (prehistoric
      earthquakes), and present
      <a href="deformation.php">crustal deformation</a> (geodetic data),
      USGS analysts make a model of the potential for future earthquakes.
      This model includes <em>areal sources</em> and
      <em>fault sources</em>.
      For each source the relative rate for earthquakes&nbsp; of different
      magnitudes is given, and the absolute rate for magnitudes larger
      than some minimum magnitude.
    </p>
  </li>
  <li>
    <h5>Attenuation Relations</h5>
    <p>
      An attenuation relation is an equation or a table that describes how
      earthquake ground motion decreases as the distance to the earthquake
      increases. Because earthquake ground motion increases with
      magnitude, the attenuation relation also depends on magnitude.
      <a href="strongmotion.php">Strong motion data</a> (recordings close
      to the earthquake) and <a href="attenuation.php"
      >geophysical attenuation models</a>  are used to establish the
      attenuation relations.
    </p>
  </li>
  <li>
    <h5>Geologic Site Condition</h5>
    <p>
      Earthquake ground motion waves travel rapidly in the earth&rsquo;s
      crust and mantle. That part of the earth&rsquo;s solid crust closest
      to the surface is called bed rock. The size of the ground motion
      experienced at the earth&rsquo;s surface is affected by the geology
      of the material between bed rock and the surface. Because the
      <a href="waves.php">earthquake waves</a> move more slowly in this
      material than in rock, the size of the ground motion increases.
    </p>
    <p>
      This material, often called alluvium or
      &ldquo;<a href="soil.php">the soil column</a>,&rdquo;
      increases the ground motion in such a way that &ldquo;softer&rdquo;
      soils, soils with less density, have lower seismic velocity, and
      hence experience larger increases in ground motion. It is necessary
      to know the geologic site condition in order to estimate the surface
      ground motion.
    </p>
    <p>
      Maps are usually made for a common widespread site condition, and
      then rules are given for the user to adjust to other site
      conditions.
    </p>
  </li>
</ol>

<hr/>

<h3 id='who'>Who uses hazard maps?</h3>
<p>
  Hazard maps can be used by public and private groups for land-use planning, mitigation, and emergency response.  The scale of the maps does not allow them to be used in a site-specific manner (such as a house-by-house assessment), but it does show a neighborhood overview to guide where more detailed studies are needed.
</p>

<h3 id='updates'>Why do the hazard maps keep changing and getting updated?</h3>
<p>
  The maps are updated as additional data becomes available from scientific
  analysis of earthquake-related data, such as:
</p>
<ol>
  <li>new fault data</li>
  <li>new attenuation relations</li>
  <li>new geodetic data</li>
  <li>more seismic data</li>
</ol>

<hr/>

<h3 id='help'>
  I just want to know what faults are near me; how will these maps help?
</h3>
<p>
  Knowing where the faults are is not the most relevant information when
  trying to learn what your risks are of being affected by an earthquake.
  Since a large earthquake can affect distant locations, you can be affected
  by a fault tens of miles away from where you are, because of the prolonged
  shaking that can occur.
</p>
<p>
  Nearby faults can represent a hazard from ground rupture accompanying an
  earthquake. Faults, both near and far, provide a source for hazard from
  shaking. Furthermore, in the Eastern US there are earthquakes for which
  the actual location or extent of faulting is poorly known. In this case,
  historical seismicity is the source for understanding the shaking hazard.
</p>
<p>
  These maps integrate all the faulting and seismicity information into an
  indication of shaking hazard. The actual values of the shaking hazards
  depend upon the ground motion parameter of interest and degree of safety
  which one wants. This is why the maps are different for different ground
  motions and different probabilities. The ground motion hazard values can
  be compared with the capacity of a structure to withstand shaking, and
  thus give an indication of safety.
</p>
