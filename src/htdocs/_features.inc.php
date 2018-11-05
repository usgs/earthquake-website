<?php

include_once '../lib/Features.class.php';

date_default_timezone_set('UTC');

$EQ_FEATURES = new Features();
$EQ_FEATURES->id = 'usgs_earthquake_home';
$EQ_FEATURES->title = 'USGS Earthquake Hazards Program Featured Items';
$EQ_FEATURES->author = 'U.S. Geological Survey';
$EQ_FEATURES->siteUrl = 'https://earthquake.usgs.gov/';
$EQ_FEATURES->baseUrl = '';


$EQ_FEATURES->items[] = array(
  'id' => '2018-11-12',
  'title' => 'Collection of 3D Geometries for Global Subduction Zones',
  'content' => 'A new picture of the geometry of subducting slabs around the world, the locations of the world’s largest earthquakes.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2018/slab2/',
  'modified' => strtotime('2018-11-12'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/2018/slab2/images/fig1.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/2018/slab2/images/fig1.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-10-18',
  'title' => 'The Hayward Fault—Is It Due for a Repeat of the Powerful 1868 Earthquake?',
  'content' => 'USGS studies show that similar Hayward Fault quakes have repeatedly jolted the region in the past and that the fault may be ready to produce another magnitude 6.8 to 7.0 earthquake.',
  'link' => 'https://www.usgs.gov/news/hayward-fault-it-due-a-repeat-powerful-1868-earthquake',
  'modified' => strtotime('2018-10-18'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/fault-map-1868.gif',
  'image' => 'https://earthquake.usgs.gov/images-featured/fault-map-1868.gif'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-10-17',
  'title' => 'The Great ShakeOut!--2018 Edition',
  'content' => 'Do you know what to do the moment the ground starts shaking?',
  'link' => 'https://www.usgs.gov/news/great-shakeout-2018-edition',
  'modified' => strtotime('2018-10-17'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/shakeout-2018.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/shakeout-2018.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-10-12',
  'title' => 'New Methods for Dating and Sequencing Ancient Earthquakes Along the Wasatch Fault Zone',
  'content' => 'Complex geologic sites, like those between the fault segments along the Wasatch fault zone in Utah, make the dating and ordering past earthquakes a difficult task. Two new methods were used to make this task easier and to get better results.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2018/wasatch-sequencing/',
  'modified' => strtotime('2018-10-12'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/2018/wasatch-sequencing/images/Bennett_Fig4d-sm.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/2018/rodgers-creek/images/Bennett_Fig4d-sm.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-10-12',
  'title' => 'National Earthquake Information Center (NEIC) Leads Meeting on the Future of Earthquake Research and Monitoring',
  'content' => 'During the week of 9/24, the USGS National Earthquake Information Center (NEIC) led a USGS Powell Center meeting on the future of earthquake research and monitoring.',
  'link' => 'https://www.usgs.gov/center-news/national-earthquake-information-center-neic-leads-meeting-future-earthquake-research-and',
  'modified' => strtotime('2018-10-12'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/neic-powellcenter.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/neic-powellcenter.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-09-19',
  'title' => 'Science for a Risky World',
  'content' => 'USGS explores opportunities to advance its capabilities in risk assessment, mitigation, and communication in new strategic plan.',
  'link' => 'https://www.usgs.gov/news/science-a-risky-world-a-usgs-plan-risk-research-and-applications-usgs-publishes-strategic-plan',
  'modified' => strtotime('2018-09-19'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/Figure_02_hazard_and_society-venn-diagram.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/Figure_02_hazard_and_society-venn-diagram.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-09-18',
  'title' => 'Lessons from Mexico’s Earthquake Early Warning System',
  'content' => 'The devastating 2017 Puebla quake provides an opportunity to assess how citizens perceive and use the Mexico City earthquake early warning system.(EOS article)',
  'link' => 'https://eos.org/features/lessons-from-mexicos-earthquake-early-warning-system',
  'modified' => strtotime('2018-09-18'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/mex-early-warning.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/mex-early-warning.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-08-21',
  'title' => 'Hunting for Landslides from Cascadia’s Great Earthquakes',
  'content' => 'Researchers examine the rings of drowned trees in landslide-dammed lakes for clues to today’s earthquake hazards in the Pacific Northwest (image credit:Brian Atwater).(EOS article)',
  'link' => 'https://eos.org/project-updates/hunting-for-landslides-from-cascadias-great-earthquakes',
  'modified' => strtotime('2018-08-21'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/drowned-trees.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/drowned-trees.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-08-16',
  'title' => 'USGS announces awards for 2018 earthquake monitoring and research',
  'content' => 'The U.S Geological Survey announces that the agency has awarded more than $20 million in 2018 for earthquake monitoring and applied research. ',
  'link' => 'https://www.usgs.gov/news/usgs-announces-awards-2018-earthquake-monitoring-and-research-united-states',
  'modified' => strtotime('2018-08-16'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/HI-EQs-2018aug.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/HI-EQs-2018aug.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-08-13',
  'title' => 'Scientists Map Fast-moving Fault off Alaska',
  'content' => 'Researchers from NOAA, U.S. Geological Survey and their partners have completed the first high-resolution, comprehensive mapping of one of the fastest moving underwater tectonic faults in the world, located in southeastern Alaska.',
  'link' => 'https://www.usgs.gov/news/scientists-complete-mission-map-fast-moving-fault-alaska-data-will-help-coastal-communities',
  'modified' => strtotime('2018-08-13'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/Hauessler-NOAA.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/Hauessler-NOAA.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-08-06',
  'title' => 'Better Performance and New Features on Earthquake Website',
  'content' => 'Better performance and new features: landslides and liquefaction estimates, population map layer, Spanish Did You Feel It?, and aftershock forecasts.',
  'link' => 'https://www.usgs.gov/center-news/better-performance-and-new-features-earthquake-website',
  'modified' => strtotime('2018-08-06'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/ground-failure-card.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/ground-failure-card.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-08-06',
  'title' => 'Seismic Sensors Record a Hurricane’s Roar',
  'content' => 'Newly installed infrasound sensors at a Global Seismographic Network station on Puerto Rico recorded the sounds of Hurricane Maria passing overhead. (EOS article)',
  'link' => 'https://eos.org/project-updates/seismic-sensors-record-a-hurricanes-roar',
  'modified' => strtotime('2018-08-06'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/global-seismic-network-infrasound-sensor-hurricane-maria-puerto-rico.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/global-seismic-network-infrasound-sensor-hurricane-maria-puerto-rico.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-07-25',
  'title' => 'Researchers Develop Model for Predicting Landslides Caused by Earthquakes',
  'content' => 'A model developed by researchers at Indiana University and the USGS can help experts address such risks by estimating the likelihood of landslides that will be caused by earthquakes anywhere in the world within minutes.',
  'link' => 'https://www.eurekalert.org/pub_releases/2018-07/iu-ird072418.php',
  'modified' => strtotime('2018-07-25'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/ElSalvador-landslide.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/ElSalvador-landslide.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-07-16',
  'title' => 'A New Map of Rodgers Creek Fault in Sonoma County, California',
  'content' => 'A new more detailed and higher resolution map of the Rodgers Creek Fault in Sonoma County, California, has been produced using aerial photography and hillshade imagery derived from LiDAR data.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2018/rodgers-creek/',
  'modified' => strtotime('2018-07-16'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/2018/rodgers-creek/images/trace.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/2018/rodgers-creek/images/trace.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-06-18',
  'title' => 'A Possible Cause of Earthquakes in the Continental Interior',
  'content' => 'A new map of crustal stress across the U.S. shows that the plate interior stress is variable, with contributions from plate boundary stress, crustal collapse due to gravity, and more local and subtle changes to style, orientation, and earthquake rate.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2018/us-stress/',
  'modified' => strtotime('2018-06-18'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/us-stressmap.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/us-stressmap.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-06-04',
  'title' => 'Oklahoma Study Reveals Possible, Previously Unknown Sources of Earthquakes',
  'content' => 'Magnetic measurements made during low-altitude airplane flights conducted for the U.S. Geological Survey and the Oklahoma Geological Survey reveal possible deep faults that may contribute to increased seismic activity in response to wastewater injection in certain portions of Oklahoma.',
  'link' => 'https://www.usgs.gov/news/oklahoma-study-reveals-possible-previously-unknown-sources-earthquakes',
  'modified' => strtotime('2018-06-04'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/Airplane_Altus_magsensor.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/Airplane_Altus_magsensor.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-05-29',
  'title' => 'New Database Covers Geometry of Majority of World’s Subduction Zones',
  'content' => 'This spring, researchers will release an expanded database that covers the geometry of most of the world’s subducting slabs, the massive pieces of the Earth’s crust that sink into the mantle at tectonic plate boundaries. Called Slab2, the updated database will help researchers determine the impact of 3-D slab shape on megathrust earthquakes. (SSA News Release)',
  'link' => 'https://www.seismosoc.org/annual-meeting/new-database-covers-geometry-of-majority-of-worlds-subduction-zones/',
  'modified' => strtotime('2018-05-29'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/slab2.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/slab2.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-05-21',
  'title' => 'How Often Do Cascadia&CloseCurlyQuote;s Megaquakes Occur?',
  'content' => 'Devastating magnitude 8.0 to 9.0 megathrust earthquakes and accompanying tsunamis appear to have hit the U.S. Pacific Northwest and Northwest Canada about every 500 years on average. But some USGS scientists think the recurrence interval between some of these large earthquakes may be shorter. (SSA News Release)',
  'link' => 'https://www.seismosoc.org/annual-meeting/how-often-do-cascadias-megaquakes-occur/',
  'modified' => strtotime('2018-05-21'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/Cascadia-subduction.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/Cascadia-subduction.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-05-21',
  'title' => 'Seismic Hazards Put One-Third of South American Population at Risk',
  'content' => 'New seismic hazard and risk models developed by USGS for South America suggest that more than 160 million people—about one-third of the continent’s total population—live in areas with significantly elevated seismic hazard. (SSA News Release)',
  'link' => 'https://www.seismosoc.org/annual-meeting/seismic-hazards-put-one-third-of-south-american-population-at-risk/',
  'modified' => strtotime('2018-05-21'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/ssa-samer.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/ssa-samer.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-05-07',
  'title' => 'The Past Holds the Key to the Future of Aftershock Forecasting',
  'content' => 'The outcomes of past aftershock sequences can be used to describe the range of possibilities for a current sequence.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2018/non-param-aftershocks/',
  'modified' => strtotime('2018-05-07'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/non-para-cartoon.gif',
  'image' => 'https://earthquake.usgs.gov/images-featured/non-para-cartoon.gif'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-04-30',
  'title' => 'Untangling Faults at Depth &ndash; What Lies Beneath Panamint Valley, California?',
  'content' => 'The eastern edge of Panamint Valley,CA has two types of faults that can be seen in the near-surface geology. 150 geophones and a seismic source will help reveal the subsurface picture.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2018/panamint-seismic-reflection/',
  'modified' => strtotime('2018-04-30'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/panamint.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/panamint.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-04-24',
  'title' => 'East vs West Coast Earthquakes',
  'content' => 'Why was an earthquake in Virginia felt at more than twice the distance than a similar-sized earthquake in California? The answer is one that many people may not realize.',
  'link' => 'https://www.usgs.gov/news/east-vs-west-coast-earthquakes',
  'modified' => strtotime('2018-04-24'),
  'thumbnail' => '/images-featured/DYFI-Dover.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/DYFI-Dover.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-04-18',
  'title' => 'USGS Rolls Out Groundbreaking Earthquake Study: The HayWired Earthquake Scenario',
  'content' => 'USGS collaborates with key academic, state, local, and industry partners to provide a new look at what could happen during a major earthquake in the San Francisco Bay Area.',
  'link' => 'https://www.usgs.gov/news/usgs-rolls-out-groundbreaking-earthquake-study-haywired-earthquake-scenario?qt-news_science_products=1#qt-news_science_products',
  'modified' => strtotime('2018-04-18'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/HayWired.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/HayWired.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-04-04',
  'title' => 'USGS Seeks Earthquake Hazards Research Proposals',
  'content' => 'The USGS is currently soliciting project proposals for Fiscal Year 2019 grants on earthquake hazards science with an authorization to award up to $7 million.',
  'link' => 'https://www.usgs.gov/news/usgs-seeks-earthquake-hazards-research-proposals-0',
  'modified' => strtotime('2018-04-04'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/2018grants.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/2018grants.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-03-28',
  'title' => 'Early Earthquake Warning! New Study Examines Safety Potentials and Limits',
  'content' => 'USGS scientists and partners calculate possible alert times that earthquake early warning systems can provide people at different levels of ground motion from light to very strong shaking.',
  'link' => 'https://www.usgs.gov/news/early-earthquake-warning-new-study-examines-safety-potentials-and-limits-0',
  'modified' => strtotime('2018-03-28'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/eew-minson.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/eew-minson.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-03-26',
  'title' => '55-Story Tall Building – Before and After Earthquake Retrofit',
  'content' => 'A building in Japan was analyzed before and after a seismic retrofit to make it more resilient to shaking.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2018/55story-retrofit/',
  'modified' => strtotime('2018-03-26'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/55story-braces.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/s-amer-haz.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-03-14',
  'title' => 'Seismic Hazard, Risk, and Design for South America',
  'content' => 'New seismic hazard and risk assessments can help at-risk communities prepare for future earthquake disasters.',
  'link' => 'https://www.usgs.gov/news/usgs-authors-new-report-seismic-hazard-risk-and-design-south-america',
  'modified' => strtotime('2018-03-14'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/s-amer-haz.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/s-amer-haz.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-03-05',
  'title' => 'Finding Faults with Geodetic and Geologic Data: Deformation Model for the Western U.S.',
  'content' => 'A crustal deformation model developed for the Western United States fits a growing body of observations and shows where major changes in the crust are occurring. (UNAVCO article)',
  'link' => 'http://www.unavco.org/science/snapshots/solid-earth/2018/zeng.html',
  'modified' => strtotime('2018-03-05'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/zeng-wusGPS.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/zeng-wusGPS.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-02-26',
  'title' => 'February 2018 Danville, California Sequence',
  'content' => 'An earthquake swarm has been ongoing near Danville since February 16, starting with a magnitude 2.2 earthquake on 1:17 pm Pacific Time.',
  'link' => 'https://earthquake.usgs.gov/earthquakes/events/2018danville/',
  'modified' => strtotime('2018-02-26'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/tn-danville-swarms.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/danville-swarms.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-02-21',
  'title' => 'Earthquakes Follow Wastewater Disposal Patterns in Southern Kansas',
  'content' => 'Wastewater created during oil and gas production and disposed of by deep injection into underlying rock layers is the probable cause for a surge in earthquakes in southern Kansas since 2013. (SSA News)',
  'link' => 'https://www.seismosoc.org/bssa/earthquakes-follow-wastewater-disposal-patterns-southern-kansas/',
  'modified' => strtotime('2018-02-21'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/Rubinstein-EQKansas.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/Rubinstein-EQKansas.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-02-20',
  'title' => 'One of the First Black USGS Geophysicists, Pioneers Subsurface Research',
  'content' => 'USGS geophysicist Dr. Rufus Catchings, brings insights to the importance of diversity and perseverance in the earth science field.',
  'link' => 'https://www.usgs.gov/news/one-first-black-usgs-geophysicists-pioneers-subsurface-research',
  'modified' => strtotime('2018-02-20'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/Catchings_SanFrancisco.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/Catchings_SanFrancisco.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-01-31',
  'title' => 'January 23, 2018 M7.9 Gulf of Alaska Earthquake and Tsunami',
  'content' => 'What happened and a background of Alaska seismicity.',
  'link' => 'https://www.usgs.gov/news/january-23-2018-m79-gulf-alaska-earthquake-and-tsunami',
  'modified' => strtotime('2018-01-31'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/M7.9AK2018jan23.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/M7.9AK2018jan23.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-01-26',
  'title' => 'Alaska Earthquake Rattles Florida’s Groundwater Plumbing',
  'content' => 'More than 3,500 miles from the Kodiak Earthquake’s epicenter, water sloshed in USGS groundwater wells.',
  'link' => 'https://www.usgs.gov/news/alaska-earthquake-rattles-florida-s-groundwater-plumbing',
  'modified' => strtotime('2018-01-26'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/FLwell.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/FLwell.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-01-24',
  'title' => 'Rates of Large Earthquakes Not Affected By Moon Phases, Day of Year',
  'content' => 'There is an enduring myth that large earthquakes tend to happen during certain phases of the Moon or at certain times during the year. A new analysis confirms that this bit of earthquake lore is incorrect. (SRL News)',
  'link' => 'https://www.seismosoc.org/journals/rates-large-earthquakes-not-affected-moon-phases-day-year/',
  'modified' => strtotime('2018-01-24'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/mooneq.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/mooneq.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-01-24',
  'title' => 'ShakeAlert&trade;: The Path to West Coast Earthquake Early Warning',
  'content' => 'News reporters are invited to attend an illustrated public lecture to learn how U.S. Geological Survey scientists and partners are developing ShakeAlert&trade;. Public lecture to follow',
  'link' => 'https://www.usgs.gov/news/shakealert-path-west-coast-earthquake-early-warning-how-a-few-seconds-can-save-lives-and',
  'modified' => strtotime('2018-01-24'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/shakealertphone.png',
  'image' => 'https://earthquake.usgs.gov/images-featured/shakealertphone.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-01-18',
  'title' => 'USGS Scientist Mobilizes with Recon Team to Learn from Mexico&apos;s Earthquake Early Warning System',
  'content' => 'USGS seismologist Elizabeth Cochran studied the performance of Mexico City&CloseCurlyQuote;s earthquake early warning system, during devastating Sept. 19, 2017 event.',
  'link' => 'https://www.usgs.gov/news/usgs-scientist-mobilizes-recon-team-learn-mexicos-earthquake-early-warning-system',
  'modified' => strtotime('2018-01-18'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/CIRESroom.jpg',
  'image' => 'https://earthquake.usgs.gov/images-featured/CIRESroom.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-01-02',
  'title' => 'Washington DC Stone and Brick Buildings Vulnerable to Distant Quakes',
  'content' => 'New study shows that DC geologic conditions strongly affect earthquake shaking.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2018/dcshake/',
  'modified' => strtotime('2018-01-02'),
  'thumbnail' => 'https://earthquake.usgs.gov/images-featured/wa-monument.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/2018/dcshake/images/wa-monument.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-01-02',
  'title' => 'USGS scientist Rob Wesson Receives the 2017 Edward A. Flinn III Award',
  'content' => 'Robert L. Wesson received the 2017 Edward A. Flinn III Award at the American Geophysical Union Fall Meeting Honors Ceremony. The award honors those who personify the Union motto of unselfish cooperation in research. (AGU article)',
  'link' => 'https://eos.org/agu-news/robert-l-wesson-receives-2017-edward-a-flinn-iii-award',
  'modified' => strtotime('2018-01-02'),
  'thumbnail' => '/images-featured/wesson-robert-2017-flinn-award.jpg',
  'image' => '/images-featured/wesson-robert-2017-flinn-award.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-12-07',
  'title' => 'ShakeAlert&trade; System Continues Progress toward Public Use',
  'content' => 'A decade after beginning work on an earthquake early warning system, scientists and engineers are fine-tuning a U.S. West Coast prototype that could be in limited public use in 2018. (SSA article)',
  'link' => 'https://www.seismosoc.org/news/shakealert-system-continues-progress-toward-public-use/',
  'modified' => strtotime('2017-12-07'),
  'thumbnail' => '/images-featured/ShakeAlert-stas.png',
  'image' => '/images-featured/ShakeAlert-stas.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-11-21',
  'title' => 'Return to the Alaska Wilderness',
  'content' => 'A team of USGS scientists spent two weeks in the isolated Glacier Bay National Park, exploring one of the fastest-moving faults in North America.',
  'link' => 'https://www.usgs.gov/news/return-alaska-wilderness-usgs-scientists-visit-one-north-america-s-fastest-moving-faults',
  'modified' => strtotime('2017-11-21'),
  'thumbnail' => '/images-featured/Witter_gravel_1.jpg',
  'image' => '/images-featured/Witter_gravel_1.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-11-16',
  'title' => 'Mystery Quakes May Be Among World’s Longest-Lived Aftershocks',
  'content' => 'New evidence about where a major earthquake struck central Washington State 145 years ago raises the possibility that today’s unusually frequent quakes in the area still echo that 1872 event. (EOS article)',
  'link' => 'https://eos.org/articles/mystery-quakes-may-be-among-worlds-longest-lived-aftershocks',
  'modified' => strtotime('2017-11-16'),
  'thumbnail' => '/images-featured/EntiatWA.gif',
  'image' => '/images-featured/EntiatWA.gif'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-10-23',
  'title' => 'U.S. and Canadian Scientists Explore Major Undersea Earthquake Fault',
  'content' => 'An international team of scientists just finished probing the depths of the Pacific Ocean offshore of Alaska and British Columbia, to better understand the Queen Charlotte-Fairweather Fault. During the past century, the 700-mile-long fault has generated at least half a dozen major earthquakes, and future shocks threaten coastal communities in both the United States and Canada.',
  'link' => 'https://www.usgs.gov/news/us-and-canadian-scientists-explore-major-undersea-earthquake-fault',
  'modified' => strtotime('2017-10-23'),
  'thumbnail' => '/images-featured/QnCharlotte.jpg',
  'image' => '/images-featured/QnCharlotte.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-09-28',
  'title' => 'Study Confirms Large Earthquakes along Olympic Mountain Faults',
  'content' => 'A just-published study by USGS authors concludes that 3-5 large surface-rupturing earthquakes have occurred along the north edge of the Olympic Mountains during the last 13,000 years. (SSA News Release)',
  'link' => 'https://www.seismosoc.org/bssa/large-quakes-along-olympic-mountain-faults/',
  'modified' => strtotime('2017-09-28'),
  'thumbnail' => '/images-featured/Olympic-faults.jpg',
  'image' => '/images-featured/Olympic-faults.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-09-17',
  'title' => 'M5.3 2017 Soda Springs, Idaho Sequence',
  'content' => 'A summary of what we know so far about this sequence, what scientists are doing, plus earthquake forecast scenarios.',
  'link' => 'https://earthquake.usgs.gov/earthquakes/events/2017sodasprgs/',
  'modified' => strtotime('2017-09-17'),
  'thumbnail' => '/images-featured/sodasprgs-map.2017.09.17.jpg',
  'image' => '/images-featured/sodasprgs-map.2017.09.17.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-09-06',
  'title' => 'Digging Into the Past on the Teton Fault',
  'content' => 'From September 6 to 21, USGS scientists will be doing fieldwork on the Teton Fault near Jackson, Wyoming. We’ll follow their work as they prepare the area, dig the trench, gather data, and then refill the trench. Check back daily for updates.',
  'link' => 'https://www.facebook.com/notes/usgs-natural-hazards-science/digging-into-the-past-on-the-teton-fault/135315590420055/',
  'modified' => strtotime('2017-09-06'),
  'thumbnail' => '/images-featured/tetonfault.jpg',
  'image' => '/images-featured/tetonfault.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-08-14',
  'title' => 'Will the solar eclipse in North America affect faults or cause earthquakes?',
  'content' => 'No. There are partial eclipses several times a year, and these orbital alignments are no different than those that have been researched and found to have no immediate effect on the occurrence of earthquakes (if any at all). (Image courtesy of nasa.gov)',
  'link' => 'https://www.usgs.gov/faqs/can-position-moon-or-planets-affect-seismicity-are-there-more-earthquakes-morningin-eveningat-a?qt-news_science_products=7#qt-news_science_products',
  'modified' => strtotime('2017-08-14'),
  'thumbnail' => '/images-featured/solar-eclipse-nasa.jpg',
  'image' => '/images-featured/solar-eclipse-nasa.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-08-15',
  'title' => 'USGS Awards $4.9 Million to Advance ShakeAlert&trade; Early Warning System on West Coast',
  'content' => 'The U.S. Geological Survey awarded approximately $4.9 million this week to six universities and a university-governed non-profit, to support transitioning the west coast “ShakeAlert&trade;” earthquake early warning system into a production system.',
  'link' => 'https://www.usgs.gov/news/usgs-awards-49-million-advance-shakealert-earthquake-early-warning-system-west-coast?qt-news_science_products=1#qt-news_science_products',
  'modified' => strtotime('2017-08-15'),
  'thumbnail' => '/images-featured/shakealert.jpg',
  'image' => '/images-featured/shakealert.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-08-01',
  'title' => 'Harvesting Earthquake Fault Slip f­rom Laser Images of Napa&apos;s Vineyards',
  'content' => 'A new U.S. Geological Survey-led study suggests that earthquake-related deformation just below the Earth&apos;s surface can be quite different from how it is expressed at the surface.',
  'link' => 'https://www.usgs.gov/news/harvesting-earthquake-fault-slip-f-rom-laser-images-napas-vineyards',
  'modified' => strtotime('2017-08-01'),
  'thumbnail' => '/images-featured/NapaEQshallowslip.jpg',
  'image' => '/images-featured/NapaEQshallowslip.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-07-31',
  'title' => 'New Earthquake Scenario Maps and Interface',
  'content' => 'Check out the new GIS interactive map for viewing nearly 800 new ShakeMap earthquake scenarios developed for the continental United States.',
  'link' => 'http://usgs.maps.arcgis.com/apps/webappviewer/index.html?id=14d2f75c7c4f4619936dac0d14e1e468',
  'modified' => strtotime('2017-07-31'),
  'thumbnail' => '/images-featured/scenario-gismaps.gif',
  'image' => '/images-featured/scenario-gismaps.gif'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-06-23',
  'title' => 'USGS Collaborates with FEMA on National Earthquake Loss Estimate',
  'content' => 'Earthquakes are estimated to cost the nation $6.1 billion annually in building stock losses according to an updated report published today by FEMA.',
  'link' => 'https://www.usgs.gov/news/usgs-collaborates-fema-national-earthquake-loss-estimate',
  'modified' => strtotime('2017-06-23'),
  'thumbnail' => '/images-featured/EQlossEst-2017.gif',
  'image' => '/images-featured/EQlossEst-2017.gif'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-06-22',
  'title' => 'Making Subduction Zone Areas More Resilient',
  'content' => 'The USGS has developed a blueprint for advancing science and resilience from subduction zone hazards entitled &quot;Reducing Risk Where Tectonic Plates Collide&ndash;A Plan to Advance Subduction Zone Science&quot;. ',
  'link' => 'https://www.usgs.gov/news/usgs-publishes-a-new-blueprint-can-help-make-subduction-zone-areas-more-resilient',
  'modified' => strtotime('2017-06-22'),
  'thumbnail' => '/images-featured/subduction-zone-plan-pnw.jpg',
  'image' => '/images-featured/subduction-zone-plan-pnw.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-06-12',
  'title' => 'Seismic Stations at Kilauea Summit',
  'content' => 'Field engineers at the USGS Hawaiian Volcano Observatory (HVO) recently completed a multi-year effort to upgrade a subset of seismic stations at the summit of Kīlauea Volcano. (from the Volcano Hazards Program)',
  'link' => 'https://volcanoes.usgs.gov/observatories/hvo/hvo_volcano_watch.html',
  'modified' => strtotime('2017-06-12'),
  'thumbnail' => '/images-featured/kilauea.jpg',
  'image' => '/images-featured/kilauea.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-06-01',
  'title' => 'Back to the Future on the San Andreas Fault',
  'content' => 'Maybe you’ve heard that the “Big One is overdue” on the San Andreas Fault. No one can predict earthquakes, so what does the science really say? Where does the information come from? And what does it mean? Investigating past earthquakes to inform the future.',
  'link' => 'https://earthquake.usgs.gov/learn/topics/safz-paleo/',
  'modified' => strtotime('2017-06-01'),
  'thumbnail' => '/images-featured/trench-xsect.gif',
  'image' => '/images-featured/trench-xsect.gif'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-05-25',
  'title' => 'Updated USGS Earthquake Monitoring Strategy Released',
  'content' => 'The Advanced National Seismic System (ANSS) will focus on improving the robustness of essential services and retaining capacity for future innovation, and developing capacities that will improve further earthquake safety and support response and recovery, nationwide.',
  'link' => 'https://www.usgs.gov/news/updated-usgs-earthquake-monitoring-strategy-released',
  'modified' => strtotime('2017-05-25'),
  'thumbnail' => '/images-featured/anss-2017.jpg',
  'image' => '/images-featured/anss-2017.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2017-05-01',
  'title' => 'Introduction to Paleoseismology',
  'content' => 'What is paleoseismology, and how are scientists using it? An introduction that non-scientists can understand.',
  'link' => 'https://earthquake.usgs.gov/learn/topics/paleo-intro/',
  'modified' => strtotime('2017-05-01'),
  'thumbnail' => '/images-featured/paleo-intro.gif',
  'image' => '/images-featured/paleo-intro.gif'
);

 $EQ_FEATURES->items[] = array(
   'id' => '2017-04-11',
   'title' => 'Earthquake Early Warning: Vital for City Transit',
   'content' => 'Although no one can reliably predict earthquakes, today’s technology is advanced enough to rapidly detect seismic waves as an earthquake begins, calculate the maximum expected shaking, and send alerts to surrounding areas before damage can occur. This technology is known as “earthquake early warning” (EEW).',
   'link' => 'https://www.usgs.gov/news/earthquake-early-warning-vital-city-transit',
   'modified' => strtotime('2017-04-11'),
   'thumbnail' => '/images-featured/eew_banner.gif',
   'image' => '/images-featured/eew_banner.gif'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2017-04-11',
   'title' => '&quot;ShakeAlert&trade;&quot; Earthquake Early Warning System Goes West Coast Wide',
   'content' => 'The U.S. Geological Survey along with university, state and private-sector partners will highlight the rollout of Version 1.2 of the USGS ShakeAlert&trade; earthquake early warning system on April 10, 2017.',
   'link' => 'https://www.usgs.gov/news/shakealert-earthquake-early-warning-system-goes-west-coast-wide',
   'modified' => strtotime('2017-04-11'),
   'thumbnail' => '/images-featured/EEWimage390.jpg',
   'image' => '/images-featured/EEWimage390.jpg'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2017-03-29',
   'title' => 'USGS Seeks Earthquake Hazards Research Proposals',
   'content' => 'The USGS is currently soliciting project proposals for 2018 grants on earthquake hazards science.',
   'link' => 'https://www.usgs.gov/news/usgs-seeks-earthquake-hazards-research-proposals',
   'modified' => strtotime('2017-03-29'),
   'thumbnail' => '/images-featured/2018grants.jpg',
   'image' => '/images-featured/2018grants.jpg'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2017-03-20',
   'title' => 'Enormous Caribbean Waves Before 1492',
   'content' => 'Geologists have discovered evidence that unusual seas detached living corals from a Caribbean reef and scattered them far inland, as boulders, during the last centuries before Columbus arrived.',
   'link' => 'https://www.usgs.gov/news/enormous-caribbean-waves-1492',
   'modified' => strtotime('2017-03-20'),
   'thumbnail' => '/images-featured/caribbeanwaves.jpg',
   'image' => '/images-featured/caribbeanwaves.jpg'
 );

 $EQ_FEATURES->items[] = array(
   'id' => '2017-03-20',
   'title' => 'Preparing for Tsunami Hazards on Washington’s Pacific Coast',
   'content' => 'Scientists work with local communities to help residents understand how to prioritize locations for vertical evacuation structures in areas with no natural high ground.',
   'link' => 'https://www.usgs.gov/news/preparing-tsunami-hazards-washington-s-pacific-coast',
   'modified' => strtotime('2017-03-20'),
   'thumbnail' => '/images-featured/tsunami_hazard_sign_blue.jpg',
   'image' => '/images-featured/tsunami_hazard_sign_blue.jpg'
 );

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
