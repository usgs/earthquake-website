<?php
// Author: Lisa Wald
// Contact: Dave Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'PAGER FAQ';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="faq.css"/>';
    include 'template.inc.php';
  }
?>

<ul>
  <li><a href="#whatis">What is PAGER?</a></li>
  <li><a href="#email">Are PAGER results available by e-mail?</a></li>
  <li><a href="#howlong">How long after an earthquake are PAGER results available?</a></li>
  <li><a href="#wait">Why not wait to send a PAGER message until you're 100% positive about the exact numbers?</a></li>
  <li><a href="#freq">How frequently will yellow, orange, and red PAGER alerts occur?</a></li>
  <li><a href="#who">Who uses the PAGER product?</a></li>
  <li><a href="#calc">How are the estimated ground motion intensities calculated in PAGER?</a></li>
  <li><a href="#life">By linking economic losses with human losses to create a PAGER alert, is the USGS putting a value on human life?</a></li>
  <li><a href="#acc">How can you be sure that your PAGER loss or impact estimates will be accurate?</a></li>
  <li><a href="#howwork">How does PAGER work?</a></li>
  <li><a href="#print">Is there a concise, printable version of PAGER results?</a></li>
  <li><a href="#new">Is PAGER a new program/system or just an update?</a></li>
  <li><a href="#other">PAGER addresses losses directly due to earthquake shaking. What about tsunami and other potential hazards related to the earthquake (fire, landslides, liquefaction)?</a></li>
  <li><a href="#update">What happens when reported damage and casualty reports become available? Do you update the PAGER loss model?</a></li>
  <li><a href="#info">What if the PAGER information is wrong? How will we be able to trust the information that you provide?</a></li>
  <li><a href="#scale">What is the Earthquake Impact Scale that is used in PAGER?</a></li>
  <li><a href="#which">Which earthquakes are analyzed by the PAGER system?</a></li>
</ul>

<hr/>

<ul class='no-style separator'>
  <li id='whatis'>
    <p class='question'>What is PAGER?</p>
    <p>
      PAGER stands for the Prompt Assessment of Global Earthquakes for Response. It is an automated system that takes in seismic data from remote sensors in order to rapidly estimate earthquake shaking and the scope and impact of earthquakes around the world. In its previous form, which has been available since 2007, PAGER delivered rapid estimates of the total number of people and settlements exposed to a wide range of shaking from light to catastrophic. Currently, PAGER also provides first-order/factor-of-ten/order of magnitude estimates of potential fatalities, as well as the approximate economic impact the earthquake may cause. Since the PAGER loss estimations are available well in advance of ground-truth observations or news accounts, they can play a primary alerting role for domestic as well as international earthquake disasters.
    </p>
    <p>
      Neither earthquake magnitude nor macroseismic intensity provides sufficient information to judge the overall impact of an earthquake. While higher magnitude earthquakes have greater energy release and can potentially affect a much larger area, losses depend directly on the exposure and vulnerability of a population to specific levels of shaking. Earthquakes also have highly variable effects on society; the complex and variable nature of the effects for differing events can be attributed to a number of contributing factors, primarily the highly variable nature of the hazard distribution (predominantly, shaking intensity), the population exposure, the vulnerability of the built environment, and the resilience of the communities affected. These factors can now, in part, be rapidly assessed following significant earthquake disasters. This is the essence of the PAGER system.
    </p>
  </li>
  <li id='email'>
    <p class='question'>Are PAGER results available by e-mail?</p>
    <p>
      Currently, PAGER results are not directly available to the public through e-mail. However, users can sign up for earthquake alerts through the USGS <a href="/ens/">Earthquake Notification Service (ENS)</a>. This service lets you sign up for alerts from custom geographic regions and magnitude ranges. PAGER results for a specific earthquake can be found by following the link provided in the ENS message and looking under the "Maps” tab. There is up to a 5-minute delay from the time the initial earthquake solution is posted to the web and when the PAGER results are available to view.
    </p>
  </li>
  <li id='howlong'>
    <p class='question'>How long after an earthquake are PAGER results available?</p>
    <p>
      For earthquakes larger than magnitude 5.5, PAGER estimates are generally available online within 20-30 minutes of the earthquake's occurrence and are updated as more information becomes available. Domestically, particularly in California, ShakeMap and thus PAGER results are produced within about 10 minutes of the earthquake occurrence. However, in all cases, information on the extent of shaking will be uncertain in the minutes and hours following an earthquake and typically these improve as additional sensor data and reported intensities are acquired and incorporated. Users of PAGER loss estimates should account for uncertainty and <strong>always seek the most current PAGER release (Version Number) for any earthquake</strong>.
    </p>
    <p>
      PAGER alerts will go out automatically after the earthquake information is reviewed by seismic analysts at the NEIC or other regional seismic networks. For earthquakes that result in initial "orange" or "red" PAGER alert levels, seismologists will further review the earthquake information as well as the PAGER results prior to releasing loss information to users. This may result in additional delays on the order of 10 to 20 minutes, or longer in some cases. For initial "orange" or "red" alerts, exposure-based PAGER information will still go out immediately to all users.
    </p>
  </li>
  <li id='wait'>
    <p class='question'>Why not wait to send a PAGER message until you're 100% positive about the exact numbers?</p>
    <p>
      It is practically impossible to be 100% positive about the exact numbers. For instance, there are still conflicting reports about the death toll and economic loss for the Haitian earthquake. Hence, the loss models are based on uncertain loss data. Also, part of PAGER’s value is the speed at which it releases its estimates. First responders rely on PAGER to give them an informed estimate where their efforts will be most needed. Loss estimates are inherently uncertain, but that does not mean they are not extremely useful in reducing the amount of time for proper response.
    </p>
  </li>
  <li id='freq'>
    <p class='question'>How frequently will yellow, orange, and red PAGER alerts occur?</p>
    <p>
      Over the past 38 years there would have been approx. 17,792 green, 568 yellow, 52 orange, and 49 red alerts. This frequency equates to approximately 15 yellow, 1-2 orange, and 1-2 red alerts per year. Domestically, in the United States, high-fatality alert levels are much less frequent due to improved building codes and practices in areas of high seismicity. Hence, domestic alerting based on economic impact may be more suitable for response purposes.
    </p>
  </li>
  <li id='who'>
    <p class='question'>Who uses the PAGER product?</p>
    <p>
      Since the information PAGER delivers is a fundamental improvement over simply providing a magnitude and location, or even a ShakeMap, many users have already adopted PAGER results.
    </p>
    <ol>
      <li>
        Emergency managers and responders. Primary, critical users will be government officials and agencies, such as USAID, and relief organizations, such as the Red Cross. They will be local, national, and international. PAGER will allow them to determine, almost immediately, the potential extent of the impact, its scale and dimensions, and potentially, the areas likely to be hardest hit. These factors along with their own in-house expertise will help dictate the nature of the response for different institutions.
      </li>
      <li>
        The media. PAGER is already widely used by the media and many web sites. The numbers of people exposed to each shaking intensity is now routinely reported (quoted) from USGS web pages, and images of the ShakeMap, shaking intensity contours, and other maps are routinely depicted or modified for newspaper, web pages, and other outlets. With the new version of PAGER, the use of these maps and assessments is likely to increase further. As a primary source of information, the media's endorsement of PAGER for communicating earthquake information will greatly expand the number of people who receive and benefit from PAGER information.
      </li>
      <li>
        Businesses, earthquake insurers and re-insurers and financial institutions. Major earthquakes affect regional and national economies, and their impacts can be widespread and devastating economically. Businesses and financial institutions benefit from independent, openly available, and documented sources of loss estimates and can use them for activating their own response activities.
      </li>
      <li>
        Engineers, scientists, educators, and individuals. PAGER data, maps, products, and web pages are widely used by these groups as well. In fact, during each earthquake, our PAGER webpage, as well as our other earthquake response products, receive tens of thousands of hits, and people are very responsive with how they use PAGER results.
        <ul>
          <li>
            Civil and Earthquake Engineers begin post-earthquake evaluations with more understanding of the situation given ShakeMap and PAGER products.
          </li>
          <li>
            Scientists and field investigators use PAGER and ShakeMap to help evaluate the situation on the ground while news is still scarce to decide on deploying field teams and data collection.
          </li>
          <li>
            Educators already routinely use PAGER results to educate students on the differences between the hazard (shaking distribution) and the risk (how vulnerable are different populations?).
          </li>
          <li>
            PAGER can help individuals assess the impact to their area and their surroundings, or those areas around the world where their friends or relatives live or travel.
          </li>
        </ul>
      </li>
    </ol>
    <p>
      It is very important that the global community understand that vulnerable buildings are the main source of casualties and economic losses from earthquakes around the world, and PAGER aims to increase this awareness.
    </p>
  </li>
  <li id='calc'>
    <p class='question'>How are the estimated ground motion intensities calculated in PAGER?</p>
    <p>
      The ground motion intensities are calculated using the USGS ShakeMap system. A ShakeMap is a representation of ground shaking produced by an earthquake; it is a combination of observed and estimated shaking values. ShakeMaps are better constrained when numerous seismic stations (triangles) or macroseismic values (circles) provide intensity observations. Global ShakeMaps (GSM) are primarily predictive, so the ground shaking intensities are inherently uncertain. The ground shaking intensity at sites throughout the region depends on the earthquake's magnitude, the geometry, size, and depth of the ruptured fault, the distance from the earthquake fault, the rock and soil conditions at sites, and variations in the propagation of seismic waves from the earthquake due to complexities in the structure of the Earth's crust.
    </p>
  </li>
  <li id='life'>
    <p class='question'>By linking economic losses with human losses to create a PAGER alert, is the USGS putting a value on human life?</p>
    <p>
      No. The economic loss and casualty estimations are independent of each other. If the loss of life is expected to exceed 100, then an orange alert is assigned for loss of life, no matter what the economic loss is estimated. The two alerts are then compared, and the higher is always chosen. Thus, for example, if there is a green alert for loss of life, but an orange alert for economic losses, then an overall orange alert is issued. The same for if an orange alert is estimated for loss of life, but a green alert is assigned for economic losses,the overall alert would be orange. The system is by no means suggesting that 1,000 lives are equal to $1 billion. Those are simply the numbers chosen for the triggers due to past experiences for response.
    </p>
    <p>
      This system is designed to help relief organizations and response agencies determine the likely impacts of the earthquake as soon after the event as possible. The colored alert system does not rank the earthquake in importance; it simply indicates the estimated economic and human losses of the earthquake in the crucial, initial hours after an event, in order to better prepare responders.
    </p>
    <p>
      The ratio of fatalities to economic losses will be higher in developing countries, particularly those with building inventories that are highly vulnerable to earthquake shaking, than in countries that have a high percentage of earthquake-resistant buildings.
    </p>
  </li>
  <li id='acc'>
    <p class='question'>How can you be sure that your PAGER loss or impact estimates will be accurate?</p>
    <p>
      Any alert system involves a tradeoff between accuracy and speed (and cost). Perfect <strong>accuracy</strong> is not a requirement for producing very <strong>useful</strong>, actionable information for the response communities. By the nature of the rapid approach, and with uncertain earthquake information and uncertain building vulnerability data, PAGER loss estimates will always be uncertain.  For this reason, the human and economic loss results that PAGER will produce will fall under ranges of likelihoods. By using the uncertainties directly in describing the <strong>range</strong> of loss estimates, PAGER impact assessment can be used to very quickly determine if the earthquake is likely to be benign, serious, very serious, or catastrophic. In most cases, with time and additional information available, PAGER's results will become more accurate.
    </p>
    <p>
      There will be infrequent cases where the PAGER estimates will be inaccurate, and even outside the stated range of the postulated uncertainties. Population exposure is uncertain and varies by time of day, but these variations are not globally available so they are not currently considered for loss estimates in PAGER. Inaccurate results can also occur if the earthquake information provided to PAGER is wrong (for example, if the earthquake depth is 50 km, but is initially reported to be 10 km). The USGS/PAGER team has instituted safeguards to avoid obvious errors of this type, but inaccurate input to the PAGER system is still possible. In addition, we have instituted a review system for PAGER "orange" and "red" alerts, such that they will be manually reviewed by seismologists prior to release. "Green" and "yellow" PAGER alerts will be automatically released. The review process may add an additional 20-30 minutes, or longer, in some cases.
    </p>
  </li>
  <li id='howwork'>
    <p class='question'>How does PAGER work?</p>
    <p>
      In general, the shaking-related impact of an earthquake is controlled by the distribution and severity of shaking, the population exposed to each shaking intensity level, and how vulnerable that population is to building damage at each intensity level. Population vulnerability is dominated by where they are at the time of the earthquake and the degree of seismic resistance of the local building stock. The PAGER system takes all these factors into account.
    </p>
    <p>
      At the heart of PAGER are the timely and accurate earthquake location and magnitude determinations that the USGS has been producing for decades. PAGER uses these earthquake parameters to calculate estimates of ground shaking by using the methodology and software developed for <a href=" /data/shakemap/">ShakeMap</a>. The ShakeMap system produces maps of regional ground shaking using a site-specific ground-motion amplification map, seismic wave attenuation equations, and reported or recorded intensities and ground motions. The number of people exposed to each shaking intensity level is then calculated by combining the maps of estimated ground shaking with a comprehensive worldwide population database (<a href="http://www.ornl.gov/sci/landscan/">Landscan</a>, from the Department of Energy's Oak Ridge National Laboratory).
    </p>
    <p>
      Next, based on the population exposed to each intensity level of shaking, the PAGER system estimates total losses based on country-specific models developed from economic and casualty data collected from past earthquakes. To calibrate the loss models, the USGS has generated an Atlas of approximately 6,000 ShakeMaps for significant global earthquakes that have occurred during the last 40 years. The calibration of loss methodologies relies on this Atlas and on fatality and damage data collected by the NEIC.
    </p>
    <p>
      In order to estimate the empirical fatality rate for countries with few or no fatality data, <a href="references.php#JaiswalEtAl2009">Jaiswal and others (2009)</a> proposed aggregation of fatal events from like-countries at a regional level through a scheme that focuses on likely indicators of comparable country vulnerability. Using this model, PAGER can estimate total fatalities for future earthquakes within an average factor of five to ten, with higher accuracy for more fatal events. The error estimated in hindcasting the total shaking deaths using the empirical model already incorporates:
    </p>
    <ul>
      <li>
        the total variability that comes from the uncertainty in shaking hazard for each earthquake
      </li>
      <li>the uncertainty in the population exposure</li>
      <li>
        possible errors in the number of recorded deaths in the catalog for these events
      </li>
    </ul>
  </li>
  <li id='print'>
    <p class='question'>Is there a concise, printable version of PAGER results?</p>
    <p>
      Yes, the "onePAGER" contains all the major elements produced by PAGER in a Portable Document Format (PDF) file. It is available via link on the PAGER event specific web pages.
    </p>
    <p><a href="onepager.php">onePAGER Information</a></p>
    <p>The "onePAGER" can be delivered to critical users via email alerts.</p>
  </li>
  <li id="new">
    <p class='question'>Is PAGER a new program/system or just an update?</p>
    <p>
      The current version of PAGER builds on the previously available PAGER system, which has been publically released since 2007. PAGER provided near-real time ShakeMaps and population exposures at each intensity level for significant earthquakes around the globe, but not loss estimates. The upgrade to PAGER uses that same population/intensity information, and adds estimates of earthquake impact. PAGER will now be able to provide governments and relief workers crucial information about which general areas are likely to be hardest hit, and it will do so within an hour after the earthquake strikes. The core elements of the new feature will be the projected loss of life and the projected economic losses from the earthquake. These new aspects will better enable relief workers and first responders to organize the proper level of response and to direct it to the hardest hit areas in a quick and timely manner until detailed accounts become available from affected areas.
    </p>
  </li>
  <li id='other'>
    <p>
      PAGER addresses losses directly due to earthquake shaking. What about tsunami and other potential hazards related to the earthquake (fire, landslides, liquefaction)?
    </p>
    <p>
      Year in and year out the vast majority of lives lost due to earthquakes come from earthquake shaking. For most earthquakes, shaking-related casualties (mainly, due to building collapse or damage) are the main problem. Notable exceptions do occur, and a long-term strategy will be to include as many of the earthquake-induced perils in the PAGER calculations as possible.
    </p>
    <ul>
      <li>
        The USGS does NOT provide tsunami warnings. Tsunami warnings are issued by the <a href="http://ntwc.arh.noaa.gov/">National Oceanic and Atmospheric Administration (NOAA)</a>.
      </li>
      <li>
        PAGER's summary "onePAGER" notes if there are any known "secondary" hazards associated with recent earthquakes in the region. <strong>In addition, if a high likelihood of tsunami is determined, PAGER's summary content will provide a prominent (RED BOLD) link to NOAA's tsunami warning web pages.</strong>
      </li>
      <li>
        For landslides and liquefaction, the PAGER team is conducting research and development to address the losses due to these triggered/secondary hazards as well, and these will be provided when the procedures and algorithms are proven effective.
      </li>
    </ul>
  </li>
  <li id='update'>
    <p class='question'>What happens when reported damage and casualty reports become available? Do you update the PAGER loss model?</p>
    <p>
      No. PAGER loss model results are estimated losses and remain independent of the actual reported losses. Later (greater than one year), the reported losses are used to update the loss model for that region or country. One reason PAGER model results are not updated is that reported losses tend to slowly increase over the days, weeks, and even months following a deadly earthquake as reports continue to come in and improve. Estimated losses project the final, total estimated losses.
    </p>
  </li>
  <li id='info'>
    <p class='question'>What if the PAGER information is wrong? How will we be able to trust the information that you provide?</p>
    <p><span class='answer'>A:</span>
      <ol>
        <li>
          The important thing to remember is that PAGER will provide a range of possibilities. That said, this program does entail risk, and it will sometimes be incorrect in its estimates. However, with each successive earthquake we expand our knowledge of its effects and can refine PAGER's program. This system is constantly updated to reflect our ever-expanding understanding of earthquakes and their consequences. The USGS team is working with a team of international regional experts to continually enhance the system with local knowledge.
        </li>
        <li>
          PAGER will provide alerts for many, many earthquakes (hundreds per year). For most earthquakes, PAGER will quickly and accurately confirm that losses will not be expected. (This, too, is very useful, to avoid personnel at many agencies from activating unnecessarily). For about one or two dozen events, some casualties will be expected, and for several each year, many casualties will be expected. PAGER will build confidence in users by showing that over the long run it successfully determines which events fall into each category, even if occasionally the best estimate is off.
        </li>
        <li>
          Users of PAGER products should understand the potential uncertainties and or inaccuracies associated with PAGER's rapid loss-estimation capability. Individual or institutional users should use their own judgment and seek additional sources of information or advice before any decision making.
        </li>
      </ol>
  </li>
  <li id='scale'>
    <p class='question'>What is the Earthquake Impact Scale that is used in PAGER?</p>
    <p>
      PAGER employs a new Earthquake Impact Scale (EIS) that is based on two complementary criteria. The first criterion is the estimated cost of damage; this is most suitable for domestic events and those in earthquake-resistant communities. The second criterion, representing estimated ranges of fatalities, is generally more appropriate for global events, particularly in developing countries.
    </p>
    <p>
      Simple thresholds, derived from the systematic analysis of past earthquake impact and associated response levels, proved to be quite effective in communicating predicted impact and response needed after an event, characterized by alerts of green (little or no impact), yellow (regional impact and response), orange (national-scale impact and response), and red (international response). Corresponding fatality thresholds for yellow, orange, and red alert levels are 1, 100, and 1000, respectively. For damage impact, yellow, orange, and red thresholds are triggered by estimated losses reaching $1M, $100M, and $1B (USD), respectively.
    </p>
    <p>
      The rationale for this dual approach to earthquake alerting stems from the recognition that relatively high fatalities, injuries, and homelessness dominate in countries where local building practices typically lend themselves to high collapse and casualty rates, and it is these impacts that drive prioritization for international response. In contrast, it is often financial and overall societal impacts that trigger the level of response in regions or countries where prevalent earthquake resistant construction practices greatly reduce building collapse and resulting fatalities.
    </p>
    <p>
      More details about EIS can be found in the <a href="https://pubs.usgs.gov/fs/2010/3036/">PAGER Fact Sheet</a>, and in the manuscript by <a href="https://earthquake.usgs.gov/earthquakes/pager/references.php#WaldEtAl2010b">Wald and others (2010)</a>.
    </p>
  </li>
  <li id='which'>
    <p class='question'>Which earthquakes are analyzed by the PAGER system?</p>
    <p>
      PAGER shaking intensity, population exposure, loss estimates, and supporting products are generated for all earthquakes of magnitude 5.5, or greater, worldwide. Additionally, PAGER results are generated for smaller earthquakes, greater than about magnitude 3.5-4.0, in the contiguous United States, Hawaii, and Alaska region.
    </p>
  </li>
</ul>
