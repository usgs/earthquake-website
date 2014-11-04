<?php
  /**
   * This page is used to redirect users to the current production version of
   * the feed application. This will not get used until FeedApp-v0.1 reaches
   * EOL and is removed from the web site.
   *
   */

  $HOST = (isset($_SERVER)&&isset($_SERVER['HTTP_HOST']))?
      $_SERVER['HTTP_HOST']:'earthquake.usgs.gov';

  $VERSIONS = json_decode(file_get_contents('versions.json'), true);
  $CURRENT = $VERSIONS['current'];

  header('HTTP/1.1 307 Temporary Redirect');
  header('Location: http://' . $HOST . '/earthquakes/feed/' . $CURRENT . '/');
?>
