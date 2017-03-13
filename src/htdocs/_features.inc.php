<?php

include_once 'Features.class.php';

date_default_timezone_set('UTC');

$EQ_FEATURES = new Features();
$EQ_FEATURES->id = 'usgs_earthquake_home';
$EQ_FEATURES->title = 'USGS Earthquake Hazards Program Featured Items';
$EQ_FEATURES->author = 'U.S. Geological Survey';
$EQ_FEATURES->siteUrl = 'https://earthquake.usgs.gov/';
$EQ_FEATURES->baseUrl = '';

/**
 * Items at top of list are featured
 *
 * Each Item is an array with the following keys:
 *   id {String}
 *      unique identifier without spaces.
 *      for example:
 *         'induced'
 *
 *   title {String|HTML}
 *         item title.
 *
 *   content {String|HTML}
 *           item summary.
 *
 *   link {String}
 *        relative item link.
 *
 *   modified {Integer}
 *            unix epoch timestamp.
 *            for example:
 *                filemtime('induced/index.php')
 *                strtotime('2014-10-01')
 *
 *   thumbnail {String}
 *             relative path to thumbnail image.
 *             Used by items in atom format.
 *
 *   image {String}
 *         relative path to full size image.
 *         Only used by "featured" items in html format.
 *
 *   tags {Array<String>} optional.
 *        Array of categories for item.
 *        Only used by atom format.
 *
 *   publish {Integer} optional.
 *           a time when item should be "published".
 *           if no publish time is specified, or the time is in the past, the item will be shown.
 *           for example:
 *               strtotime('2014-10-31')
 *
 */

 $EQ_FEATURES->items[] = array(
   'id' => '2017-03-13',
   'title' => 'Listen to Earthquakes',
   'content' => 'Seismometers record vibrations from a wide assortment of ground motion events, each with its own unique seismic signature. A USGS short educational video.',
   'link' => 'https://www.usgs.gov/media/videos/listen-earthquakes',
   'modified' => strtotime('2017-03-13'),
   'thumbnail' => '/images-featured/listen-to-eqs-video.gif',
   'image' => '/images-featured/listen-to-eqs-video.gif'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2017-03-13',
   'title' => 'Hazards to California\'s Delta Water System',
   'content' => 'Earthquakes, land subsidence and flooding pose significant threats to California’s fresh water. A USGS short educational video.',
   'link' => 'https://www.usgs.gov/media/videos/hazards-californias-delta-water-system',
   'modified' => strtotime('2017-03-13'),
   'thumbnail' => '/images-featured/delta-water-haz.jpg',
   'image' => '/images-featured/delta-water-haz.jpg'
 );


 $EQ_FEATURES->items[] = array(
   'id' => '2017-03-02',
   'title' => 'Prehistoric Earthquakes Discovered Along San Andreas Fault',
   'content' => 'A new USGS study offers a view into the past behavior of large earthquakes along the southern San Andreas Fault. ',
   'link' => 'https://www.usgs.gov/news/prehistoric-earthquakes-discovered-along-san-andreas-fault',
   'modified' => strtotime('2017-03-02'),
   'thumbnail' => '/images-featured/paleo-2017mar.gif',
   'image' => '/images-featured/paleo-2017mar.gif'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2017-03-01',
   'title' => 'New USGS Maps Identify Potential Ground Shaking Hazards for 2017',
   'content' => 'One-year 2017 seismic hazard forecast for the central and eastern United States from induced and natural earthquakes that updates the 2016 one-year forecast.',
   'link' => 'https://www.usgs.gov/news/new-usgs-maps-identify-potential-ground-shaking-hazards-2017',
   'modified' => strtotime('2017-03-01'),
   'thumbnail' => '/images-featured/ProbDamageEQ_2017-150x2.gif',
   'image' => '/images-featured/ProbDamageEQ_2017-150x2.gif'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2017-02-21',
   'title' => 'A Fresh Look at Old Data Sheds Light on Central U.S. Quake Origins and Potential',
   'content' => 'Small variations in the density of the earth’s crust influence where earthquakes may occur in the central U.S. These new findings published today in Nature Communications may allow scientists to map where future seismicity in the center of the country is most likely.',
   'link' => 'https://www.usgs.gov/news/a-fresh-look-old-data-sheds-light-central-us-quake-origins-and-potential',
   'modified' => strtotime('2017-02-21'),
   'thumbnail' => '/images-featured/fresh-old.jpg',
   'image' => '/images-featured/fresh-old.jpg'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2017-02-07',
   'title' => 'Community Announcement: USGS Ground Motion Study in the Walnut Creek/Concord Area Looking for Volunteers',
   'content' => 'The U. S. Geological Survey is seeking volunteers to host temporary seismic stations in the Walnut Creek/Pleasant Hill/Concord California area. Volunteers will be assisting with a new ground motion study that will begin in March 2017.',
   'link' => 'https://www.usgs.gov/news/community-announcement-usgs-ground-motion-study-walnut-creekconcord-area-looking-volunteers',
   'modified' => strtotime('2017-02-07'),
   'thumbnail' => '/images-featured/bitterroot.gif',
   'image' => '/images-featured/bitterroot.gif'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2017-01-23',
   'title' => 'Maps Made With Light Show the Way',
   'content' => 'The USGS’ National Geospatial Program is in year one of an 8-year program to create the first publicly available, national 3D elevation map using lidar. lidar shows not only vegetation and objects on the land’s surface, but the structures beneath such as fault lines.',
   'link' => 'https://www.usgs.gov/news/maps-made-light-show-way',
   'modified' => strtotime('2017-01-23'),
   'thumbnail' => '/images-featured/K2.jpg',
   'image' => '/images-featured/K2.jpg'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2016-12-12',
   'title' => 'USGS scientists sharing science at the 2016 AGU Fall Meeting',
   'content' => 'For the 2016 American Geophysical Union (AGU) Fall Meeting, USGS scientists plan to give over 400 presentations to the largest gathering of Earth scientists in the world. The talks and posters span a wide range of topics, including earthquake early warning systems, and a late-breaking session on Oklahoma’s largest recorded earthquake. (photo by Rex Sanders USGS)',
   'link' => 'https://www.usgs.gov/news/long-days-fresh-ideas-and-new-connections-usgs-scientists-sharing-science-2016-agu-fall-meeting',
   'modified' => strtotime('2016-12-12'),
   'thumbnail' => '/images-featured/AGU_posters_crowded.JPG',
   'image' => '/images-featured/AGU_posters_crowded.JPG'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2016-11-09',
   'title' => 'Rapid Post-Earthquake Financial Decision-Making',
   'content' => 'Financial instruments have come to rely on near real-time earthquake information that allows those affected by the consequences of a disaster to quickly access financial capital. (a Natural Hazards Center summary of a USGS-authored publication)',
   'link' => 'https://hazards.colorado.edu/article/money-matters-rapid-post-earthquake-financial-decision-making',
   'modified' => strtotime('2016-11-09'),
   'thumbnail' => '/images-featured/LomaPrieta.jpg',
   'image' => '/images-featured/LomaPrieta.jpg'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2016-11-02',
   'title' => 'Some Early 20th Century Earthquakes in Los Angeles Area Might Have Been Man-Made',
   'content' => 'A new study from the USGS suggests that some early 20th century earthquakes in southern California might have been induced (man-made) by past practices that were used by the oil and gas industry.',
   'link' => 'https://www.usgs.gov/news/some-early-20th-century-earthquakes-los-angeles-area-might-have-been-man-made',
   'modified' => strtotime('2016-11-02'),
   'thumbnail' => '/images-featured/hi-nov2.gif',
   'image' => '/images-featured/hi-nov2.gif'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2016-10-25ok',
   'title' => 'Wastewater Disposal Likely Induced February 2016 Magnitude 5.1 Oklahoma Earthquake',
   'content' => 'Distant wastewater disposal wells likely induced the third largest earthquake in recent Oklahoma record, the Feb. 13, 2016, magnitude 5.1 event roughly 32 kilometers northwest of Fairview, Oklahoma.',
   'link' => 'https://www.usgs.gov/news/wastewater-disposal-likely-induced-february-2016-magnitude-51-oklahoma-earthquake',
   'modified' => strtotime('2016-10-25'),
   'thumbnail' => '/images-featured/2016-10-25.gif',
   'image' => '/images-featured/2016-10-25.gif'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2016-10-17shakeout',
   'title' => 'Get Ready to ShakeOut on October 20',
   'content' => 'Do you know what to do the moment the ground starts shaking? Drop, Cover, and Hold On!',
   'link' => 'https://www.usgs.gov/news/get-ready-shakeout-october-20',
   'modified' => strtotime('2016-10-17'),
   'thumbnail' => '/images-featured/ShakeOutDontFreakOut-2016.gif',
   'image' => '/images-featured/ShakeOutDontFreakOut-2016.gif'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2016-09-27brawley',
   'title' => 'Earthquakes in the Brawley Seismic Zone: Updated 10/06/2016',
   'content' => 'An earthquake swarm near Bombay Beach, California, started on 2016 Sept. 26 at 4:03 am (PDT) in the Brawley Seismic Zone, which lies near the southern terminus of the San Andreas Fault.',
   'link' => 'https://earthquake.usgs.gov/misc/2016-09-27.php',
   'modified' => strtotime('2016-10-06'),
   'thumbnail' => '/misc/images/2016-09-30.gif',
   'image' => '/misc/images/2016-09-30.gif'
 );

 $EQ_FEATURES->items[] = array(
 'id' => 'news-sep14',
 'title' => 'Uncharted: Exploring one of America’s fastest faults',
 'content' => 'A team of USGS scientists spent 10 days in the wilderness, exploring one of the fastest-moving faults in America.',
 'link' => 'https://www.usgs.gov/news/uncharted-exploring-one-america-s-fastest-faults',
 'modified' => strtotime('2016-09-14'),
 'thumbnail' => '/images-featured/news-sep14.jpg',
 'image' => '/images-featured/news-sep14.jpg'
);

 $EQ_FEATURES->items[] = array(
   'id' => 'news-pawnee',
   'title' => 'Magnitudes for Oklahoma Earthquakes Shift Upward',
   'content' => 'The U.S. Geological Survey is updating the official magnitude of the September 3, 2016 Pawnee, Oklahoma earthquake to Mw 5.8 (from 5.6), making it Oklahoma’s largest recorded earthquake to date.',
   'link' => 'https://www.usgs.gov/news/magnitudes-oklahoma-earthquakes-shift-upward',
   'modified' => strtotime('2016-09-08'),
   'thumbnail' => '/images-featured/pawnee.jpg',
   'image' => '/images-featured/pawnee.jpg'
 );

 $EQ_FEATURES->items[] = array(
   'id' => 'news-sep7',
   'title' => 'Photo Opportunity: Scientists Prepare for Seismic Study in East Bay',
   'content' => 'An experiment to visualize the subsurface in and around the Hayward Fault and measure how the ground in different neighborhoods responds to earthquake shaking.',
   'link' => 'https://www.usgs.gov/news/photo-opportunity-scientists-prepare-seismic-study-east-bay',
   'modified' => strtotime('2016-09-08'),
   'thumbnail' => '/images-featured/news-sep7.jpg',
   'image' => '/images-featured/news-sep7.jpg'
 );

 $EQ_FEATURES->items[] = array(
   'id' => 'news-aug29',
   'title' => 'Preventing Human-Caused Earthquakes',
   'content' => 'New research from the USGS and Univ. of Colorado shows actions taken by drillers and regulators can lessen risk in the case of earthquakes likely caused by the injection of industrial wastewater deep underground.',
   'link' => 'https://www.usgs.gov/news/preventing-human-caused-earthquakes',
   'modified' => strtotime('2016-08-29'),
   'thumbnail' => '/images-featured/news-aug29.jpg',
   'image' => '/images-featured/news-aug29.jpg'
 );

 $EQ_FEATURES->items[] = array(
   'id' => 'sjsoccer',
   'title' => 'San Jose Earthquakes Major League Soccer Team Highlights Top 10
"Seismic Moments"',
   'content' => 'In collaboration with the San Jose Earthquakes Major League Soccer team, USGS seismologist, Brad Aagaard used data from the NetQuakes instrument installed at their Avaya Stadium to determine the top 10 largest ground motions recorded on the instrument following goals scored by the team so far in the 2015 and 2016 seasons.',
   'link' => 'http://www.sjearthquakes.com/avayastadium/seismicmoments',
   'modified' => strtotime('2016-08-25'),
   'thumbnail' => '/images-featured/sj-seismic-moment.jpg',
   'image' => '/images-featured/sj-seismic-moment.jpg'
 );

$EQ_FEATURES->items[] = array(
  'id' => 'NCAprob',
  'title' => 'Earthquake outlook for the San Francisco Bay region 2014–2043',
  'content' => 'Using information from recent earthquakes, improved mapping of active faults, and a new model for estimating earthquake probabilities, the 2014 Working Group on California Earthquake Probabilities updated the 30-year earthquake forecast for California.',
  'link' => 'https://pubs.er.usgs.gov/publication/fs20163020',
  'modified' => strtotime('2016-07-22'),
  'thumbnail' => 'images-featured/NCAprob.gif',
  'image' => 'images-featured/NCAprobgif'
);

$EQ_FEATURES->items[] = array(
  'id' => '2016-utah-high',
  'title' => 'Rodgers Creek Fault Traced through Santa Rosa',
  'content' => 'For the first time, scientists at the U.S. Geological Survey have mapped the active surface trace of the Rodgers Creek Fault through the central part of the northern California city of Santa Rosa. Urban development has, until now, obscured its exact location.',
  'link' => 'https://www.usgs.gov/news/rodgers-creek-fault-traced-through-santa-rosa',
  'modified' => strtotime('2016-04-19'),
  'thumbnail' => 'images-featured/rodgers-creek.gif',
  'image' => 'images-featured/rodgers-creek.gif'
);
