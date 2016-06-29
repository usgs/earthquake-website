<?php

include_once 'Features.class.php';

date_default_timezone_set('UTC');

$EQ_FEATURES = new Features();
$EQ_FEATURES->id = 'usgs_earthquake_home';
$EQ_FEATURES->title = 'USGS Earthquake Hazards Program Featured Items';
$EQ_FEATURES->author = 'U.S. Geological Survey';
$EQ_FEATURES->siteUrl = 'http://earthquake.usgs.gov/';
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
   'id' => 'latest-eqs',
   'title' => 'Latest Earthquakes',
   'content' => 'Latest earthquakes map and list (past 24 hours, M2.5+). Tap/click on "gear icon" for options and settings.',
   'link' => '/earthquakes/map/',
   'modified' => strtotime('2016-06-01'),
   'thumbnail' => '/earthquakes/images/latesteqs-300for150.gif',
   'image' => '/earthquakes/images/latesteqs-300for150.gif'
 );


$EQ_FEATURES->items[] = array(
  'id' => '2016-utah-high',
  'title' => 'New Report Forecasts the High Likelihood of Damaging Earthquakes During the Lifetime of Many Utah Residents',
  'content' => 'In the first comprehensive study of its kind for Utah, Earthquake Probabilities for the Wasatch Front Region in Utah, Idaho, and Wyoming forecasts the chances for damaging earthquakes in the Wasatch Front region.',
  'link' => 'http://www.usgs.gov/newsroom/article.asp?ID=4511',
  'modified' => strtotime('2016-04-19'),
  'thumbnail' => 'images-featured/utah-high.png',
  'image' => 'images-featured/utah-high.png'
);

$EQ_FEATURES->items[] = array(
  'id' => '2016-campaign-prep-sca',
  'title' => 'New Campaign Urges Earthquake Preparedness In Quake-Prone Southern California',
  'content' => 'USGS and Clear Channel Outdoor Americas Partner to Bring Vital Earthquake Safety Information to the Public During this Year’s Earthquake Preparedness Month.',
  'link' => 'http://www.usgs.gov/newsroom/article.asp?ID=4509',
  'modified' => strtotime('2016-04-12'),
  'thumbnail' => 'images-featured/campaign-prep-sca.jpg',
  'image' => 'images-featured/campaign-prep-sca.jpg'
);
