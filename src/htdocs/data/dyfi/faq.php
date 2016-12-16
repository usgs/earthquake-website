<?php
// Author: Lisa Wald
// Contact: Dave Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Did You Feel It? FAQ';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="dyfi.css"/>';
    include 'template.inc.php';
  }
?>

<h2>Did You Feel It?</h2>
<ul>
  <li><a href='#noeq'>Why don't you have the earthquake I felt on Did You Feel It?</a></li>
  <li><a href='#filter'>How do you filter erroneous responses in DYFI?</a></li>
  <li><a href='#correct'>I filed an unknown DYFI report before the earthquake I felt was in the system. Can I go back and change my report?</a></li>
  <li><a href='#zip'>Why isn't my Zip code on the DYFI map?</a></li>
  <li><a href='#pers'>How is the personal information that I enter in DYFI used? Can others access my personal information?</a></li>
  <li><a href='#input'>How is my DYFI input used?</a></li>
  <li><a href='#print'>Do you have a printable version of the DYFI report form for those without access to the internet?</a></li>
  <li><a href='#nozip'>How do you calculate Global DYFI in countries where there are no Zip Codes?</a></li>
  <li><a href='#geo'>What is the geocoding in DYFI, and how is it used?</a></li>
  <li><a href='nofeel'>The earthquake was in my area, but I didn't feel it. Should I still fill out the DYFI form?</a></li>
  <li><a href='#can'>Why don't you use Canadian Zip codes in DYFI?</a></li>
</ul>

<hr/>

<ul class='no-style separator'>
  <li id='noeq'>
    <p class='question'>Why don't you have the earthquake I felt on Did You Feel It?</p>
    <p>
      If the earthquake just happened a few minutes ago, you may have arrived at the Web page before our system has finished locating the earthquake and updating the Web pages. If this is so, please fill out an unknown event questionnaire and check back in a few minutes to see if your event is now in place.
    </p>
    <p>
      If the earthquake you felt occurred several years ago, chances are that it will not be in the database. DYFI was put online mainly as an information tool for current earthquakes and future damaging earthquakes. Some larger, historic events were added to the database as a calibration of the system, but some historic and past earthquakes are not on the list. Be sure to thoroughly check the archives.
    </p>
    <p>
      It may also be that you felt an earthquake just below the magnitude cutoff for an automatic triggering. Generally, new maps are automatically made for earthquakes for magnitude 3.8 and greater (2.8 in certain urban areas). However, if you felt a smaller earthquake that is not on our site, please send in an "unknown report." We review and associate the unknown reports regularly and will post maps if we receive reports on smaller earthquakes.
    </p>
    <p>
      There is also the possibility that what you felt was not an earthquake. It is not uncommon for users to fill in unknown reports for sonic booms, trucks, explosions, mine blasts, and other events, thinking they were earthquakes.
    </p>
  </li>
  <li id='filter'>
    <p class='question'>How do you filter erroneous responses in DYFI?</p>
    <p>
      Occasionally we receive bad responses from people who think it might be amusing to throw off the map with an unnaturally high response. We reserve the right to manually exclude such responses from the final product, but we also have several build-in filters. For example, the responded intensity must make sense for the distance and magnitude. It would not make sense for a magnitude 3.9 earthquake to produce Intensity VIII shaking, even at the epicenter. However, our best filter is to have multiple responses per zip code to give a reliable average of the shaking over the area. The wisdom of the crowd usually outweighs individual eccentricities, but not always.
    </p>
  </li>
  <li id='correct'>
    <p class='question'>I filed an unknown DYFI report before the earthquake I felt was in the system. Can I go back and change my report?
    <p>
      No, you can't go back and change data you have already submitted. However, your information will be automatically associated with the correct event based on time and location.
    </p>
  </li>

  <li id='zip'>
    <p class='question'>Why isn't my Zip code on the DYFI map?</p>
    <p>
      The maps are automatically generated to cover a preset distance from the epicenter of the earthquake. If you felt an earthquake but were some distance from the epicenter, your zip code may be off the border of the map (although still counted in the total number of responses). If the earthquake is felt by a sizable number of people outside the original map range, a zoomed-out map may be made manually.
    </p>
    <p>
      Also, our zip code database is always slightly out of date, even though it is periodically updated. It is possible that you may be in a zip code close to the epicenter, but it may not appear in our database. Please realize that updating the database with the newest zip code boundaries is not as simple as going to the US Postal Service. We have to go through a commercial source to get the coordinates of the zip code boundaries.
    </p>
  </li>
  <li id='pers'>
    <p class='question'>How is the personal information that I enter in DYFI used? Can others access my personal information?</p>
    <p>
      This Citizen Science tool relies fundamentally on the good will of internet users like you, and we appreciate and respect the valuable data you provide. Rest assured we have obligations to keep all personal information private and secure.
    </p>
    <p>
      The personal information is automatically processed and summarized (devoid of any personal information) in our final products such as the zip code map, for example. We do allow government researchers to use the data for scientific studies, but again, they are obligated to strip out any personal information prior to quoting or characterizing it. For example, it might be said, "an observer in San Jose noted..."
    </p>
    <p>
      While a very common, popular request is to see others' entries, we obviously cannot do so without potentially sacrificing personal information. This request comes from the media as well, but we politely decline such access.
    </p>
    <p>
      As a side note, street addresses, when provided, allow us to make a more detailed map than from Zip codes alone, and typically 90% of the entries contain that information.
    </p>
  </li>
  <li id='input'>
    <p class='question'>How is my "Did you feel it?" input used?</p>
    <p>
      You are one of almost 1 million people who have completed a DYFI questionnaire, and your input is used in a variety of ways.
    </p>
    <ul>
      <li>How it helps us:
        <ul>
          <li>Immediate high quality and large quantity of data.</li>
          <li>Cost-effective means of collecting data (replaced expensive and slow postal questionnaires).</li>
          <li>Helps constrain instrumental data used for ShakeMap and PAGER.</li>
          <li>Provides data in areas where there are no seismic instruments.</li>
          <li>Provides data for smaller earthquakes that we can't normally record.</li>
        </ul>
      </li>
      <li>How it helps others:
        <ul>
          <li>Provides a rapid assessment of the extent of shaking and damage for emergency responders.</li>
          <li>Confirms experiences of shaking for other people.</li>
        </ul>
      </li>
      <li>How it helps you:
        <ul>
          <li>You learn the difference between magnitude and intensity.</li>
          <li>Helps you feel more in control of your experience.</li>
          <li>Opportunity to share your experience with others.</li>
          <li>Opportunity to contribute to the advancement of earthquake science.</li>
        </ul>
      </li>
      <li>Some interesting and unusual observations:
        <li>Mapped out the trajectory of a space shuttle re-entry across Southern California.</li>
        <li>Sonic booms...</li>
      </li>
    </ul>
  </li>
  <li id='print'>
    <p class='question'>Do you have a printable version of the
      DYFI report form for those without access to the internet?</p>
    <p>
      We have purposefully avoided encouraging non-Web based contributions since we do not have the resources (people) to manually enter the amount of data that might entail. While we have set up a nearly fully automated system to do the intensity collection online--a huge resource savings--even this requires time in responding to inquiries. We encourage friends and family members to help fill out questionnaires online for others not having internet access. Formerly, we collected data from postal surveys, a long, slow, tedious, process, that only solicited information from zip code post-masters, not the general public. Given the incredible response via the Internet, we're certainly getting more folks involved.
    </p>
  </li>
  <li id='nozip'>
    <p class='question'>How do you calculate Global DYFI in countries where there are no Zip codes?</p>
    <p>
      We have recently expanded DYFI to a global scale. Users from all over the world can now contribute their earthquake experiences. Since Zip codes do not exist or are not available in most countries, we have simplified the system to base location on the approximate latitude and longitude of the city which the respondent was closest to. On the map, it is displayed as a filled circle, the size of which is dependent on the population of the city. Since we need to know the city's location to map it, only cities in our database can be selected by observers.
    </p>
  </li>
  <li id='geo'>
    <p class='question'>What is the geocoding in DYFI, and how is it used?</p>
    <p>
      We have the capability of adding geocoded maps for certain larger events with many hundreds (or thousands) of responses. To do this, we take the addresses that people provide when they fill out our questionnaire, and send them to TeleAtlas, a company that turns regular street addresses into precise latitude and longitude coordinates (generally 6 digits of accuracy, enough to distinguish the nearest block on a street). We then group nearby coordinates into regularly sized boxes, which are generally a few kilometers across, and calculate their intensities the same way we do for normal Zip code maps.
    </p>
    <p>
      To test this geocoding on your own address, try this <a href="http://www.mapcode.com/?name=TestDrive_Eagle">interactive script</a>. There are several advantages to using geocoding for maps, including greater precision in locating intensities and cleaner-looking maps (since Zip codes tend to be very irregularly shaped). For rapid response to earthquakes, though, Zip codes are still preferable - almost everyone knows immediately which Zip code they are in, whereas few people know their latitude and longitude (and especially not to the needed precision). Note that because roughly 5-10% of respondents do not leave their address, there are correspondingly fewer responses on a geocode map vs. a Zip code map.
    </p>
  </li>
  <li id='nofeel'>
    <p class='question'>The earthquake was in my area, but I didn't feel it. Should I still fill out the DYFI form?</p>
    <p>
      Yes. The more questionnaires that are received for your zip code, the more reliable the average intensity assigned to that zip code will be. In areas of lighter shaking, the not-felt responses are needed to prevent the average zip code intensities from being too high. the not-felt area is also useful to delimit in order to understand the full extend of shaking effects.
    </p>
  </li>
  <li id='can'>
    <p class='question'>Why don't you use Canadian Zip codes in DYFI?</p>
    <p>
      We've been working with our colleagues at the <a href="https://www.nrcan.gc.ca/earth-sciences">Canadian Geological Survey</a> to implement Canadian Postal Codes, and that will be available soon for earthquakes felt in Canada. Until then, Canadian responses will be calculated as part of Global DYFI.
    </p>
  </li>
</ul>
