<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/../lib/Features.class.php';

date_default_timezone_set('UTC');

$EQ_FEATURES = new Features();
$EQ_FEATURES->id = 'usgs_earthquake_research_2018';
$EQ_FEATURES->title = 'Science for Everyone';
$EQ_FEATURES->author = 'U.S. Geological Survey';
$EQ_FEATURES->siteUrl = 'https://earthquake.usgs.gov/research/everyone/';
$EQ_FEATURES->baseUrl = '';

$EQ_FEATURES->items[] = array(
  'id' => '2018-03-26',
  'title' => '55-Story Tall Building – Before and After Earthquake Retrofit',
  'content' => 'A building in Japan was analyzed before and after a seismic retrofit to make it more resilient to shaking.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/55story-retrofit/',
  'modified' => strtotime('2018-03-26'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/55story-retrofit/images/damper.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/55story-retrofit/images/damper.jpg'
);

$EQ_FEATURES->items[] = array(
  'id' => '2018-01-02',
  'title' => 'Washington DC Stone and Brick Buildings Vulnerable to Distant Quakes',
  'content' => 'New study shows that DC geologic conditions strongly affect earthquake shaking.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/dcshake/',
  'modified' => strtotime('2018-01-02'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/dcshake/images/wa-monument.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/dcshake/images/wa-monument.jpg'
);
