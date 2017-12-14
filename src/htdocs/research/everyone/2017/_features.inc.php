<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/../lib/Features.class.php';

date_default_timezone_set('UTC');

$EQ_FEATURES = new Features();
$EQ_FEATURES->id = 'usgs_earthquake_research_2017';
$EQ_FEATURES->title = 'Science for Everyone';
$EQ_FEATURES->author = 'U.S. Geological Survey';
$EQ_FEATURES->siteUrl = 'https://earthquake.usgs.gov/research/everyone/';
$EQ_FEATURES->baseUrl = '';


$EQ_FEATURES->items[] = array(
  'id' => '2017-10-01',
  'title' => 'Back to the Future on the San Andreas Fault',
  'content' => 'What does the science say? Where does the information come from? And what does it mean? Investigating past earthquakes to inform the future.',
  'link' => 'https://earthquake.usgs.gov/learn/topics/safz-paleo/',
  'modified' => strtotime('2017-10-01'),
  'thumbnail' => 'https://earthquake.usgs.gov/learn/topics/safz-paleo/images/trench-xsect.gif',
  'image' => 'https://earthquake.usgs.gov/learn/topics/safz-paleo/images/trench-xsect.gif'
);
