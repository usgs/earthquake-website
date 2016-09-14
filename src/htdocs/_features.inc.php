<?php

include_once 'Features.class.php';

date_default_timezone_set('UTC');

$EQ_FEATURES = new Features();
$EQ_FEATURES->id = 'usgs_earthquake_home';
$EQ_FEATURES->title = 'USGS Earthquake Hazards Program Featured Items';
$EQ_FEATURES->author = 'U.S. Geological Survey';
$EQ_FEATURES->siteUrl = 'http://earthquake.usgs.gov/';
$EQ_FEATURES->baseUrl = '';

$EQ_FEATURES->items[] = array(
 'id' => 'latest-eqs',
 'title' => 'Latest Earthquakes',
 'content' => 'Latest earthquakes map and list (past 24 hours, M2.5+). Tap/click on "gear icon" for options and settings.',
 'link' => 'earthquakes/map/',
 'modified' => strtotime('2016-06-01'),
 'thumbnail' => '/images-home/latesteqs.jpg',
 'image' => '/images-home/latesteqs.jpg'
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
 'id' => 'news-sep14',
 'title' => 'Uncharted: Exploring one of America’s fastest faults',
 'content' => 'A team of USGS scientists spent 10 days in the wilderness, exploring one of the fastest-moving faults in America.',
 'link' => 'https://www.usgs.gov/news/uncharted-exploring-one-america-s-fastest-faults',
 'modified' => strtotime('2016-09-14'),
 'thumbnail' => '/images-featured/news-sep14.jpg',
 'image' => '/images-featured/news-sep14.jpg'
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
