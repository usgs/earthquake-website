<?php
  // Author: Lisa Wald
  // Contact: Lisa Wald
  // Last modified: 05/23/2016, Lisa Wald
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

<h2>Animation of Oklahoma Seismicity: June 9, 2008 - April 3, 2016</h2>

<video src="OKSeis_16-04-06_16x9.mp4" poster="images/OKseismicity-poster.gif" width="960" height="540" controls></video>
