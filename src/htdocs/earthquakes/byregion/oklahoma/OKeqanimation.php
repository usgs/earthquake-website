<?php
  // Author: Lisa Wald
  // Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
  $TITLE = 'Information by Region-Oklahoma';
  $NAVIGATION = true;
  $WIDGETS = 'jwplayer';
  $HEAD = "<style>
            #jwplayer-video0 {
            margin: 0 16px 1em 0;
            }
            </style>";
  $CONTACT = 'olboyd@usgs.gov';
  include 'template.inc.php';
  }
?>

<h2>Animation of Oklahoma Seismicity: June 9, 2008 - February 25, 2017</h2>

<video src="OKSeis_17-07-23_16x9.mp4" poster="OKseismicity-poster.gif" width="960" height="540" controls></video>
