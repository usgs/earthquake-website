<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/../lib/Features.class.php';

date_default_timezone_set('UTC');

$EQ_FEATURES = new Features();
$EQ_FEATURES->id = 'usgs_earthquake_research_2015';
$EQ_FEATURES->title = 'Science for Everyone';
$EQ_FEATURES->author = 'U.S. Geological Survey';
$EQ_FEATURES->siteUrl = 'https://earthquake.usgs.gov/research/everyone/';
$EQ_FEATURES->baseUrl = '';


$EQ_FEATURES->items[] = array(
  'id' => '2015-07-01',
  'title' => 'The "Snow Plow Theory" of Early-Arriving Tsunamis',
  'content' => 'What is a splay fault, and how can they affect tsunamis?.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2015/splays/',
  'modified' => strtotime('2015-07-01'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/2015/splays/images/2004-tsunami.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/2015/splays/images/2004-tsunami.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2015-05-01',
  'title' => 'Seismology in the City',
  'content' => 'How seismologists can use noise to see under the ground.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2015/seismology-in-the-city/',
  'modified' => strtotime('2015-05-01'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/2015/seismology-in-the-city/images/seis-city-thumb.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/2015/seismology-in-the-city/images/seis-city-thumb.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2015-01-01',
  'title' => 'How Big and How Frequent Are Earthquakes on the Wasatch Fault?',
  'content' => 'Paleoseismology along the Wasatch Fault in Utah is helping to estimate the shaking risk to nearby towns.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2015/wasatch/',
  'modified' => strtotime('2015-01-01'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/2015/wasatch/images/grid.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/2015/wasatch/images/grid.jpg'
);
