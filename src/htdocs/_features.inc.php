<?php

include_once '..' . DIRECTORY_SEPARATOR .
		'lib' . DIRECTORY_SEPARATOR .
		'Features.class.php';

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
 *   summary {String|HTML}
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
 *             Used by non-"featured" items in html format, and by all items in atom format.
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
	'id' => 'latest_eq',
	'title' => 'Latest Earthquakes',
	'summary' => '<span class="mobile icon-mobile-friendly"></span>' .
	    'View recent events or search for past earthquakes, ' .
	    'optimized for mobile and desktop.',
	'disclaimer' => '<a href="/earthquakes/map/doc_whicheqs.php">' .
	    'Which earthquakes are included on the map?'.
	    '</a>',
	'link' => 'earthquake/map/',
	'modified' => strtotime('2014-11-01'),
	'thumbnail' => 'images/mapinterface.gif',
	'image' => 'images/mapinterface.gif',
	'publish' => strtotime('2014-11-01')
);

$EQ_FEATURES->items[] = array(
	'id' => 'great_shakeout_2014',
	'title' => 'The Great ShakeOut - Oct 16, 2014',
	'summary' => 'This year\'s edition of The Great ShakeOut is scheduled for October 16, 2014, at 10:16 AM local time. Participants across the nation and around the world are encouraged to practice the safety actions of &ldquo;drop, cover, and hold on&rdquo;, and to explore other earthquake preparedness steps.',
	'link' => 'http://www.shakeout.org',
	'modified' => strtotime('2014-11-01'),
	'thumbnail' => 'images/the-great-shakeout-oct-16-2014.gif',
	'image' => 'images/the-great-shakeout-oct-16-2014.gif'
);

$EQ_FEATURES->items[] = array(
	'id' => 'measure_dc_shaking',
	'title' => 'Seismometers to Measure DC Shaking',
	'summary' => 'Thirty seismometers are being installed in the Nation\'s capital this winter to monitor ground tremors to better estimate the intensity of ground shaking that can be expected during future earthquakes in the area.',
	'link' => 'http://www.usgs.gov/newsroom/article.asp?ID=4028',
	'modified' => strtotime('2014-11-01'),
	'thumbnail' => 'images/seismometers-to-measure-dc-shaking.jpg',
	'image' => 'images/seismometers-to-measure-dc-shaking.jpg'
);
