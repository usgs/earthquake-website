<?php
  // Author: Lisa Wald
  // Contact: Lisa Wald,
    if (!isset($TEMPLATE)) {
      $TITLE = 'Earthquake Hazards 201 - Technical Q&amp;A';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<ul>
  <li><a href="#precentg">What is %g?</a></li>
  <li><a href="#accel">What is acceleration? peak acceleration? peak ground acceleration (PGA)?</a></li>
  <li><a href="#sa">What is spectral acceleration (SA)?</a></li>
  <li><a href="#pe">What is probability of exceedence (PE)?</a></li>
  <li><a href="#rel">What is the relationship between peak ground acceleration (PGA) and "effective peak acceleration" (Aa), or between peak ground velocity (PGV) and "effective peak velocity" (Av) as these parameters appear on building code maps?</a></li>
  <li><a href="#damping">What is percent damping?</a></li>
  <li><a href="#decluster">Why do you decluster the earthquake catalog to develop the Seismic Hazard maps?</a></li>
  <li><a href="#use">How do I use the seismic hazard maps?</a></li>
  <li><a href="#total">What if we need to know about total rates of earthquakes with M>5 including aftershocks?</a></li>
  <li><a href="#exceed">The seismic hazard map values show ground motions that have a probability of being exceeded in 50 years of 10, 5 and 2 percent. What is the probability of their being exceeded in one year (the annual probability of exceedance)?</a></li>
  <li><a href="#same">The seismic hazard map is for ground motions having a 2% probability of exceedance in 50 years. Are those values the same as those for 10% in 250?</a></li>
  <li><a href="#soil">I am trying to calculate the ground motion effect for a certain location in California. I obtained the design spectrum acceleration from your site, but I would like to identify the soil type of this location - how can I get that?</a></li>
  <li><a href="#dist">What is a distance metric? Why is the choice of distance metric important in probability assessments? What distance should I use?</a></li>
</ul>

<hr />

<h3 id='precentg'>What is %g?</h3>
<p>
  <a href="/learn/glossary/?term=G%20or%20g">See %g in the Earthquake Glossary</a>.
</p>

<h3 id='accel'>What is acceleration? peak acceleration? peak ground acceleration (PGA)?</h3>
<p>
  <a href="/learn/glossary/?term=acceleration">See acceleration in the Earthquake Glossary</a>.
</p>

<h3 id='sa'>What is spectral acceleration (SA)?</h3>
<p>
  PGA (peak acceleration) is what is experienced by a particle on the ground, and SA is approximately what is experienced by a building, as modeled by a particle mass on a massless vertical rod having the same natural period of vibration as the building.
</p>

<p>
  The mass on the rod behaves about like a simple harmonic oscillator (SHO). If one "drives" the mass-rod system at its base, using the seismic record, and assuming a certain damping to the mass-rod system, one will get a record of the particle motion which basically "feels" only the components of ground motion with periods near the natural period of this SHO. If we look at this particle seismic record we can identify the maximum displacement. If we take the derivative (rate of change) of the displacement record with respect to time we can get the velocity record. The maximum velocity can likewise be determined. Similarly for response acceleration (rate of change of velocity) also called response spectral acceleration, or simply spectral acceleration, SA (or Sa).
</p>

<p>
  PGA is a good index to hazard for short buildings, up to about 7 stories. To be a good index, means that if you plot some measure of demand placed on a building, like inter story displacement or base shear, against PGA, for a number of different buildings for a number of different earthquakes, you will get a strong correlation.
</p>

<p>
  PGA is a natural simple design parameter since it can be related to a force and for simple design one can design a building to resist a certain horizontal force.PGV, peak ground velocity, is a good index to hazard to taller buildings. However, it is not clear how to relate velocity to force in order to design a taller building.
</p>

<p>
  SA would also be a good index to hazard to buildings, but ought to be more closely related to the building behavior than peak ground motion parameters. Design might also be easier, but the relation to design force is likely to be more complicated than with PGA, because the value of the period comes into the picture.
</p>

<p>
  PGA, PGV, or SA are only approximately related to building demand/design because the building is not a simple oscillator, but has overtones of vibration, each of which imparts maximum demand to different parts of the structure, each part of which may have its own weaknesses. Duration also plays a role in damage, and some argue that duration-related damage is not well-represented by response parameters.
</p>

<p>
  On the other hand, some authors have shown that non-linear response of a certain structure is only weakly dependent on the magnitude and distance of the causative earthquake, so that non-linear response is related to linear response (SA) by a simple scalar (multiplying factor). This is not so for peak ground parameters, and this fact argues that SA ought to be significantly better as an index to demand/design than peak ground motion parameters.
</p>

<p>
  There is no particular significance to the relative size of PGA, SA (0.2), and SA (1.0). On the average, these roughly correlate, with a factor that depends on period.While PGA may reflect what a person might feel standing on the ground in an earthquake, I don't believe it is correct to state that SA reflects what one might "feel" if one is in a building. In taller buildings, short period ground motions are felt only weakly, and long-period motions tend not to be felt as forces, but rather disorientation and dizziness.
</p>

<h3 id='pe'>What is probability of exceedence (PE)?</h3>
<p>
  For any given site on the map, the computer calculates the ground motion effect (peak acceleration) at the site for all the earthquake locations and magnitudes believed possible in the vicinity of the site. Each of these magnitude-location pairs is believed to happen at some average probability per year. Small ground motions are relatively likely, large ground motions are very unlikely.Beginning with the largest ground motions and proceeding to smaller, we add up probabilities until we arrive at a total probability corresponding to a given probability, P, in a particular period of time, T.
</p>

<p>
  The probability P comes from ground motions larger than the ground motion at which we stopped adding. The corresponding ground motion (peak acceleration) is said to have a P probability of exceedance (PE) in T years.The map contours the ground motions corresponding to this probability at all the sites in a grid covering the U.S. Thus the maps are not actually probability maps, but rather ground motion hazard maps at a given level of probability.In the future we are likely to post maps which are probability maps. They will show the probability of exceedance for some constant ground motion. For instance, one such map may show the probability of a ground motion exceeding 0.20 g in 50 years.
</p>

<h3 id='rel'>What is the relationship between peak ground acceleration (PGA) and "effective peak acceleration" (Aa), or between peak ground velocity (PGV) and "effective peak velocity" (Av) as these parameters appear on building code maps?</h3>

<p>
  Aa and Av have no clear physical definition, as such. Rather, they are building code constructs, adopted by the staff that produced the Applied Technology Council (1978) (ATC-3) seismic provisions. Maps for Aa and Av were derived by ATC project staff from a draft of the Algermissen and Perkins (1976) probabilistic peak acceleration map (and other maps) in order to provide for design ground motions for use in model building codes. Many aspects of that ATC-3 report have been adopted by the current (in use in 1997) national model building codes, except for the new NEHRP provisions.
</p>
<p>
  This process is explained in the ATC-3 document referenced below, (p 297-302). Here are some excerpts from that document:
</p>
<ul>
  <li>
    p. 297. "At the present time, the best workable tool for describing the design ground shaking is a smoothed elastic response spectrum for single degree-of-freedom systems…
  </li>
  <li>
    p. 298. "In developing the design provisions, two parameters were used to characterize the intensity of design ground shaking. These parameters are called the Effective Peak Acceleration (EPA), Aa, and the Effective Peak Velocity (EPV), Av. These parameters do not at present have precise definitions in physical terms but their significance may be understood from the following paragraphs.
  </li>
  <li>
    "To best understand the meaning of EPA and EPV, they should be considered as normalizing factors for construction of smoothed elastic response spectra for ground motions of normal duration. The EPA is proportional to spectral ordinates for periods in the range of 0.1 to 0.5 seconds, while the EPV is proportional to spectral ordinates at a period of about 1 second . . . The constant of proportionality (for a 5 percent damping spectrum) is set at a standard value of 2.5 in both cases.
  </li>
  <li>
    "…The EPA and EPV thus obtained are related to peak ground acceleration and peak ground velocity but are not necessarily the same as or even proportional to peak acceleration and velocity. When very high frequencies are present in the ground motion, the EPA may be significantly less than the peak acceleration. This is consistent with the observation that chopping off the spectrum computed from that motion, except at periods much shorter than those of interest in ordinary building practice has very little effect upon the response spectrum computed from that motion, except at periods much shorter than those of interest in ordinary building practice. . . On the other hand, the EPV will generally be greater than the peak velocity at large distances from a major earthquake..."
  </li>
  <li>
    p. 299. "Thus the EPA and EPV for a motion may be either greater or smaller than the peak acceleration and velocity, although generally the EPA will be smaller than peak acceleration while the EPV will be larger than the peak velocity.
  </li>
  <li>
    ". . .For purposes of computing the lateral force coefficient in Sec. 4.2, EPA and EPV are replaced by dimensionless coefficients Aa and Av respectively. Aa is numerically equal to EPA when EPA is expressed as a decimal fraction of the acceleration of gravity..."
  </li>
</ul>
<p>
  Now, examination of the tripartite diagram of the response spectrum for the 1940 El Centro earthquake (p. 274, Newmark and Rosenblueth, Fundamentals of Earthquake Engineering) verifies that taking response acceleration at .05 percent damping, at periods between 0.1 and 0.5 sec, and dividing by a number between 2 and 3 would approximate peak acceleration for that earthquake. Thus, in this case, effective peak acceleration in this period range is nearly numerically equal to actual peak acceleration.
</p>
<p>
  However, since the response acceleration spectrum is asymptotic to peak acceleration for very short periods, some people have assumed that effective peak acceleration is 2.5 times less than true peak acceleration. This would only be true if one continued to divide response accelerations by 2.5 for periods much shorter than 0.1 sec. But EPA is only defined for periods longer than 0.1 sec.
</p>
<p>
  Effective peak acceleration could be some factor lower than peak acceleration for those earthquakes for which the peak accelerations occur as short-period spikes. This is precisely what effective peak acceleration is designed to do.
</p>
<p>
  On the other hand, the ATC-3 report map limits EPA to 0.4 g even where probabilistic peak accelerations may go to 1.0 g, or larger. THUS EPA IN THE ATC-3 REPORT MAP may be a factor of 2.5 less than than probabilistic peak acceleration for locations where the probabilistic peak acceleration is around 1.0 g.
</p>
<p>
  The following paragraphs describe how the Aa, and Av maps in the ATC code were constructed.
</p>
<p>
  The USGS 1976 probabilistic ground motion map was considered. Thirteen seismologists were invited to smooth the probabilistic peak acceleration map, taking into account other regional maps and their own regional knowledge. A final map was drawn based upon those smoothing's. Ground motions were truncated at 40 % g in areas where probabilistic values could run from 40 to greater than 80 % g. This resulted in an Aa map, representing a design basis for buildings having short natural periods. Aa was called "Effective Peak Acceleration."
</p>
<p>
  An attenuation function for peak velocity was "draped" over the Aa map in order to produce a spatial broadening of the lower values of Aa. The broadened areas were denominated Av for "Effective Peak Velocity-Related Acceleration" for design for longer-period buildings, and a separate map drawn for this parameter.
</p>
<p>
  Note that, in practice, the Aa and Av maps were obtained from a PGA map and NOT by applying the 2.5 factors to response spectra.
</p>
<p>
  Note also, that if one examines the ratio of the SA(0.2) value to the PGA value at individual locations in the new USGS national probabilistic hazard maps, the value of the ratio is generally less than 2.5.
</p>

<h3>Sources of Information:</h3>
<ul class='referencelist'>
  <li>
    Algermissen, S.T., and Perkins, David M., 1976, A probabilistic estimate of maximum acceleration in rock in the contiguous United States, U.S. Geological Survey Open-File Report OF 76-416, 45 p.
  </li>
  <li>
    Applied Technology Council, 1978, Tentative provisions for the development of seismic regulations for buildings, ATC-3-06 (NBS SP-510) U.S Government Printing Office, Washington, 505 p.
  </li>
</ul>

<h3 id='damping'>What is percent damping?</h3>
<p>
  In our question about response acceleration, we used a simple physical modela particle mass on a mass-less vertical rod to explain natural period. For this ideal model, if the mass is very briefly set into motion, the system will remain in oscillation indefinitely. In a real system, the rod has stiffness which not only contributes to the natural period (the stiffer the rod, the shorter the period of oscillation), but also dissipates energy as it bends. As a result, the oscillation steadily decreases in size, until the mass-rod system is at rest again. This decrease in size of oscillation we call damping. We say the oscillation has damped out.
</p>
<p>
  When the damping is small, the oscillation takes a long time to damp out. When the damping is large enough, there is no oscillation and the mass-rod system takes a long time to return to vertical. Critical damping is the least value of damping for which the damping prevents oscillation. Any particular damping value we can express as a percentage of the critical damping value.Because spectral accelerations are used to represent the effect of earthquake ground motions on buildings, the damping used in the calculation of spectral acceleration should correspond to the damping typically experienced in buildings for which earthquake design is used. The building codes assume that 5 percent of critical damping is a reasonable value to approximate the damping of buildings for which earthquake-resistant design is intended. Hence, the spectral accelerations given in the seismic hazard maps are also 5 percent of critical damping.
</p>

<h3 id='decluster'>Why do you decluster the earthquake catalog to develop the Seismic Hazard maps?</h3>
<p>
  The primary reason for declustering is to get the best possible estimate for the rate of mainshocks. Also, the methodology requires a catalog of independent events (Poisson model), and declustering helps to achieve independence.
</p>
<p>
  Damage from the earthquake has to be repaired, regardless of how the earthquake is labeled. Some argue that these aftershocks should be counted. This observation suggests that a better way to handle earthquake sequences than declustering would be to explicitly model the clustered events in the probability model. This step could represent a future refinement. The other side of the coin is that these secondary events arent going to occur without the mainshock. Any potential inclusion of foreshocks and aftershocks into the earthquake probability forecast ought to make clear that they occur in a brief time window near the mainshock, and do not affect the earthquake-free periods except trivially. That is, the probability of no earthquakes with M>5 in a few-year period is or should be virtually unaffected by the declustering process. Also, in the USA experience, aftershock damage has tended to be a small proportion of mainshock damage.
</p>

<h3 id='use'>How do I use the seismic hazard maps?</h3>
<p>
  The maps come in three different probability levels and four different ground motion parameters, peak acceleration and spectral acceleration at 0.2, 0.3, and 1.0 sec. (These values are mapped for a given geologic site condition. Other site conditions may increase or decrease the hazard. Also, other things being equal, older buildings are more vulnerable than new ones.)
</p>
<p>
  The maps can be used to determine (a) the relative probability of a given critical level of earthquake ground motion from one part of the country to another; (b) the relative demand on structures from one part of the country to another, at a given probability level. In addition, © building codes use one or more of these maps to determine the resistance required by buildings to resist damaging levels of ground motion.
</p>
<p>
  The different levels of probability are those of interest in the protection of buildings against earthquake ground motion. The ground motion parameters are proportional to the hazard faced by a particular kind of building.
</p>
<p>
  Peak acceleration is a measure of the maximum force experienced by a small mass located at the surface of the ground during an earthquake. It is an index to hazard for short stiff structures.
</p>
<p>
  Spectral acceleration is a measure of the maximum force experienced by a mass on top of a rod having a particular natural vibration period. Short buildings, say, less than 7 stories, have short natural periods, say, 0.2-0.6 sec. Tall buildings have long natural periods, say 0.7 sec or longer. A earthquake strong motion record is made up of varying amounts of energy at different periods. A building natural period indicates what spectral part of an earthquake ground-motion time history has the capacity to put energy into the building. Periods much shorter than the natural period of the building or much longer than the natural period do not have much capability of damaging the building. Thus, a map of a probabilistic spectral value at a particular period thus becomes an index to the relative damage hazard to buildings of that period as a function of geographic location.
</p>
<p>
  Choose a ground motion parameter according to the above principles. For many purposes, peak acceleration is a suitable and understandable parameter.Choose a probability value according to the chance you want to take. One can now select a map and look at the relative hazard from one part of the country to another.
</p>
<p>
  If one wants to estimate the probability of exceedance for a particular level of ground motion, one can plot the ground motion values for the three given probabilities, using log-log graph paper and interpolate, or, to a limited extent, extrapolate for the desired probability level.Conversely, one can make the same plot to estimate the level of ground motion corresponding to a given level of probability different from those mapped.
</p>
<p>
  If one wants to estimate the probabilistic value of spectral acceleration for a period between the periods listed, one could use the method reported in the Open File Report 95-596, USGS Spectral Response Maps and Their Use in Seismic Design Forces in Building Codes. (This report can be downloaded from the web-site.) The report explains how to construct a design spectrum in a manner similar to that done in building codes, using a long-period and a short-period probabilistic spectral ordinate of the sort found in the maps. Given the spectrum, a design value at a given spectral period other than the map periods can be obtained.
</p>

</div>

<h3 id='total'>What if we need to know about total rates of earthquakes with M>5 including aftershocks</h3>

<p>
  Aftershocks and other dependent-event issues are not really addressable at this web site given our modeling assumptions, with one exception. The current National Seismic Hazard model (and this web site) explicitly deals with clustered events in the New Madrid Seismic Zone and gives this clustered-model branch 50% weight in the logic-tree. Even in the NMSZ case, however, only mainshocks are clustered, whereas NMSZ aftershocks are omitted. We are performing research on aftershock-related damage, but how aftershocks should influence the hazard model is currently unresolved.
</p>

<h3 id='exceed'>The seismic hazard map values show ground motions that have a probability of being exceeded in 50 years of 10, 5 and 2 percent. What is the probability of their being exceeded in one year (the annual probability of exceedance)?</h3>

<p>
  Let r = 0.10, 0.05, or 0.02, respectively. The approximate annual probability of exceedance is the ratio, r*/50, where r* = r(1+0.5r). (To get the annual probability in percent, multiply by 100.) The inverse of the annual probability of exceedance is known as the "return period," which is the average number of years it takes to get an exceedance.
</p>
<p>
  <strong>Example:</strong> What is the annual probability of exceedance of the ground motion that has a 10 percent probability of exceedance in 50 years?
</p>
<p>
  <strong>Answer:</strong> Let r = 0.10. The approximate annual probability of exceedance is about 0.10(1.05)/50 = 0.0021. The calculated return period is 476 years, with the true answer less than half a percent smaller.
</p>
<p>
  The same approximation can be used for r = 0.20, with the true answer about one percent smaller. When r is 0.50, the true answer is about 10 percent smaller.
</p>
<p>
  <strong>Example:</strong> Suppose a particular ground motion has a 10 percent probability of being exceeded in 50 years. What is the probability it will be exceeded in 500 years? Is it (500/50)10 = 100 percent?
</p>
<p>
  <strong>Answer:</strong> No. We are going to solve this by equating two approximations:
</p>
<p>
  r1*/T1 = r2*/T2. Solving for r2*, and letting T1=50 and T2=500,<br />

  r2* = r1*(500/50) = .0021(500) = 1.05.<br />
  Take half this value = 0.525. r2 = 1.05/(1.525) = 0.69.<br />
  Stop now. Don't try to refine this result.
</p>
<p>
  The true answer is about ten percent smaller, 0.63.For r2* less than 1.0 the approximation gets much better quickly.
</p>
<p>
  For r2* = 0.50, the error is less than 1 percent.<br />
  For r2* = 0.70, the error is about 4 percent.<br />
  For r2* = 1.00, the error is about 10 percent.
</p>
<p>
  Caution is urged for values of r2* larger than 1.0, but it is interesting to note that for r2* = 2.44, the estimate is only about 17 percent too large. This suggests that, keeping the error in mind, useful numbers can be calculated.
</p>
<p>
  Here is an unusual, but useful example. Evidently, r2* is the number of times the reference ground motion is expected to be exceeded in T2 years. Suppose someone tells you that a particular event has a 95 percent probability of occurring in time T. For r2 = 0.95, one would expect the calculated r2 to be about 20% too high. Therefore, let calculated r2 = 1.15.
</p>
<p>
  The previous calculations suggest the equation,<br />
  r2calc = r2*/(1 + 0.5r2*)<br />
  Find r2*.r2* = 1.15/(1 - 0.5x1.15) = 1.15/0.425 = 2.7
</p>
<p>
  This implies that for the probability statement to be true, the event ought to happen on the average 2.5 to 3.0 times over a time duration = T. If history does not support this conclusion, the probability statement may not be credible.
</p>

<h3 id='same'>The seismic hazard map is for ground motions having a 2% probability of exceedance in 50 years. Are those values the same as those for 10% in 250?</h3>

<p>
  Yes, basically. This conclusion will be illustrated by using an approximate rule-of-thumb for calculating Return Period (RP).
</p>
<p>
  A typical seismic hazard map may have the title, "Ground motions having 90 percent probability of not being exceeded in 50 years." The 90 percent is a "non-exceedance probability"; the 50 years is an "exposure time." An equivalent alternative title for the same map would be, "Ground motions having 10 percent probability of being exceeded in 50 years." A typical shorthand to describe these ground motions is to say that they are 475-year return-period ground motions. This means the same as saying that these ground motions have an annual probability of occurrence of 1/475 per year. "Return period" is thus just the inverse of the annual probability of occurrence (of getting an exceedance of that ground motion).
</p>
<p>
  To get an approximate value of the return period, RP, given the exposure time, T, and exceedance probability, r = 1 - non-exceedance probability, NEP, (expressed as a decimal, rather than a percent), calculate:
</p>
<p>
  RP = T / r* Where r* = r(1 + 0.5r).r* is an approximation to the value -loge ( NEP ).<br />
  In the above case, where r = 0.10, r* = 0.105 which is approximately = -loge ( 0.90 ) = 0.10536<br />

  Thus, approximately, when r = 0.10, RP = T / 0.105
</p>

<p>Consider the following table:</p>

<table>
  <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th colspan="2"><br>Rule of Thumb</th>
    <th><br>Exact</th>
  </tr>
  <tr>
    <td>NEP</td>
    <td>T</td>
    <td>r</td>
    <td>r*</td>
    <td>Calculation</td>
    <td>RP</td>
    <td>RP</td>
  </tr>
  <tr>
    <td>0.90</td>
    <td>50</td>
    <td>0.10</td>
    <td>0.105</td>
    <td>50/0.105</td>
    <td>476.2</td>
    <td>474.6</td>
  </tr>
  <tr>
    <td>0.90</td>
    <td>100</td>
    <td>0.10</td>
    <td>0.105</td>
    <td>100/0.105</td>
    <td>952.4</td>
    <td>949.1</td>
  </tr>
  <tr>
    <td>0.90</td>
    <td>250</td>
    <td>0.10</td>
    <td>0.105</td>
    <td>250/0.105</td>
    <td>2381.0</td>
    <td>2372.8</td>
  </tr>
</table>

<p>
  In this table, the exceedance probability is constant for different exposure times. Compare the results of the above table with those shown below, all for the same exposure time, with differing exceedance probabilities.
</p>

<table
  <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th colspan="2"><br>Rule of Thumb</th>
    <th><br>Exact</th>
  </tr>
  <tr>
    <td>NEP</td>
    <td>T</td>
    <td>r</td>
    <td>r*</td>
    <td>Calculation</td>
    <td>RP</td>
    <td>RP</td>
  </tr>
  <tr>
    <td>0.90</td>
    <td>50</td>
    <td>0.10</td>
    <td>0.105</td>
    <td>50/0.105</td>
    <td>476.2</td>
    <td>474.6</td>
  </tr>
  <tr>
    <td>0.95</td>
    <td>50</td>
    <td>0.05</td>
    <td>0.05125</td>
    <td>50/0.05125</td>
    <td>975.6</td>
    <td>974.8</td>
  </tr>
  <tr>
    <td>0.98</td>
    <td>50</td>
    <td>0.02</td>
    <td>0.0202</td>
    <td>50/0.0202</td>
    <td>2475.2</td>
    <td>2475.9</td>
  </tr>
</table>

<p>
  Comparison of the last entry in each table allows us to see that ground motion values having a 2% probability of exceedance in 50 years should be approximately the same as those having 10% probability of being exceeded in 250 years: The annual exceedance probabilities differ by about 4%. Corresponding ground motions should differ by 2% or less in the EUS and 1 percent or less in the WUS, based upon typical relations between ground motion and return period.
</p>

<h3 id='soil'>I am trying to calculate the ground motion effect for a certain location in California. I obtained the design spectrum acceleration from your site, but I would like to identify the soil type of this location - how can I get that?</h3>

<p>You can't find that information at our site.</p>
<p>
  We don't know any site that has a map of site conditions by National Earthquake Hazard Reduction Program (NEHRP) Building Code category. There is a map of some kind of generalized site condition created by the California Division of Mines and Geology (CDMG). The map is statewide, largely based on surface geology, and can be seen at the web site of the CDMG. It does not have latitude and longitude lines, but if you click on it, it will blow up to give you more detail, in case you can make correlations with geographic features. There is no advice on how to convert the theme into particular NEHRP site categories.
</p>
<p>
  For sites in the Los Angeles area, there are at least three papers in the following publication that will give you either generalized geologic site condition or estimated shear wave velocity for sites in the San Fernando Valley, and other areas in Los Angeles. Look for papers with author/coauthor J.C. Tinsley. This is older work and may not necessarily be more accurate than the CDMG state map for estimating geologic site response.
  </p>

<h3>References</h3>
<ul class='referencelist'>
  <li>
    Ziony, J.I., ed, 1985, Evaluating earthquake hazards in the Los Angeles region--an earth-science perspective, U.S. Geological Survey Professional Paper 1360, US Gov't Printing Office, Washington, 505 p.
  </li>
  <li>
    C. J. Wills, et al:, A Site-Conditions Map for California Based on Geology and Shear-Wave Velocity, BSSA, Bulletin Seismological Society of America,December 2000, Vol. 90 Number 6, Part B Supplement, pp. S187-S208.In general, someone using the code is expected either to get the geologic site condition from the local county officials or to have a geotechnical engineer visit the site.
  </li>
</ul>

<h3 id='dist'>What is a distance metric? Why is the choice of distance metric important in probability assessments? What distance should I use?</h3>
<p>
  For earthquakes, there are several ways to measure how far away it is. The one we use here is the epicentral distance or the distance of the nearest point of the projection of the fault to the Earth surface, technically called Rjb. Even if the earthquake source is very deep, more than 50 km deep, it could still have a small epicentral distance, like 5 km. Frequencies of such sources are included in the map if they are within 50 km epicentral distance.
</p>
<p>
  Several cities in the western U.S. have experienced significant damage from earthquakes with hypocentral depth greater than 50 km. These earthquakes represent a major part of the seismic hazard in the Puget Sound region of Washington. If the probability assessment used a cutoff distance of 50 km, for example, and used hypocentral distance rather than epicentral, these deep Puget Sound earthquakes would be omitted, thereby yielding a much lower value for the probability forecast. Another example where distance metric can be important is at sites over dipping faults. The distance reported at this web site is Rjb =0, whereas another analysis might use another distance metric which produces a value of R=10 km, for example, for the same site and fault. Thus, if you want to know the probability that a nearby dipping fault may rupture in the next few years, you could input a very small value of Maximum distance, like 1 or 2 km, to get a report of this probability.
</p>
<p>
  This distance (in km not miles) is something you can control. If you are interested only in very close earthquakes, you could make this a small number like 10 or 20 km. If you are interested in big events that might be far away, you could make this number large, like 200 or 500 km. The report will tell you rates of small events as well as large, so you should expect a high rate of M5 earthquakes within 200 km or 500 km of your favorite site, for example. Most of these small events would not be felt. If an M8 event is possible within 200 km of your site, it would probably be felt even at this large of a distance.
</p>
