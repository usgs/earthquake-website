<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/../lib/Features.class.php';

date_default_timezone_set('UTC');

$EQ_FEATURES = new Features();
$EQ_FEATURES->id = 'usgs_earthquake_research_2016';
$EQ_FEATURES->title = 'Science for Everyone';
$EQ_FEATURES->author = 'U.S. Geological Survey';
$EQ_FEATURES->siteUrl = 'https://earthquake.usgs.gov/research/everyone/';
$EQ_FEATURES->baseUrl = '';


$EQ_FEATURES->items[] = array(
  'id' => '2016-06-24',
  'title' => 'Ground-Truthing After the M4.0 Earthquake in Southern Maine, October 16, 2012',
  'content' => 'Old-fashioned interviews are compared to Did You Feel It? responses for this earthquake.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/maine2012/',
  'modified' => strtotime('2016-06-24'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/maine2012/images/seis.gif',
  'image' => 'https://earthquake.usgs.gov/research/everyone/maine2012/images/seis.gif'
);

$EQ_FEATURES->items[] = array(
  'id' => '2016-02-01',
  'title' => 'M7.8 Nepal Earthquake, 2015 – A Small Push to Mt. Everest',
  'content' => 'A large shallow earthquake moves Mt. Everest 3 cm southwest.',
  'link' => 'https://earthquake.usgs.gov/research/everyone/nepal2016/',
  'modified' => strtotime('2016-02-01'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/nepal2015/images/bricks.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/nepal2015/images/bricks.jpg'
);
