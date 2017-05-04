<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Science Center Campus Video';
  $HEAD = '';
  $FOOT = '';

  include 'template.inc.php';
}

?>

<p>This short, 7-minute video gives an overview of the USGS Earthquake Science
  Center in Menlo Park, California. It briefly introduces you to the San
  Francisco Bay Area, shows the campus and facilities, and includes interviews
  with scientists describing their work.</p>

<video src="https://escweb.wr.usgs.gov/content/contactus/menlo/campus/USGSMenloPark.mp4"
    width="100%" controls="controls" poster="poster.jpg">
  <track label="English" kind="captions" src="captions.vtt" default="default" />
</video>
