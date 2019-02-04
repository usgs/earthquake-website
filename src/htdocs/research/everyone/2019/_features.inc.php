<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/../lib/Features.class.php';

date_default_timezone_set('UTC');

$EQ_FEATURES = new Features();
$EQ_FEATURES->id = 'usgs_earthquake_research_2019';
$EQ_FEATURES->title = 'Science for Everyone';
$EQ_FEATURES->author = 'U.S. Geological Survey';
$EQ_FEATURES->siteUrl = 'https://earthquake.usgs.gov/research/everyone/';
$EQ_FEATURES->baseUrl = '';


$EQ_FEATURES->items[] = array(
  'id' => '2019-02-04',
  'title' => 'Preserving Historic Earthquake Records and Photos of the Instruments that Recorded Them',
  'content' => '',
  'link' => 'https://earthquake.usgs.gov/research/everyone/2019/asl-historical/',
  'modified' => strtotime('2018-02-04'),
  'thumbnail' => 'https://earthquake.usgs.gov/research/everyone/2019/asl-historical/images/benioff.jpg',
  'image' => 'https://earthquake.usgs.gov/research/everyone/2019/asl-historical/images/benioff.jpg'
);
