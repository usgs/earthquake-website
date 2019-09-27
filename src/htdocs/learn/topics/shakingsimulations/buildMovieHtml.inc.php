<?php
  function buildMovieHtml($movie, $set, $caption='',$filesize,$hdfilesize) {
    $path =  "https://escweb.wr.usgs.gov/content/education/shakingsimulations/$set";
    #$system_path = $_SERVER['DOCUMENT_ROOT'] . $path;

    $html = "<div>";
    $html .= "<h3>$caption</h3>";
    $html .= sprintf('<a href="%s/%s.mp4" title="%s">
        <img src="images/tn-%s.jpg" alt="Thumbnail of animation" width="300" height="169"/>
      </a>',
      $path,
      $movie,
      #simpleFileSize("$system_path/${movie}.mp4"),
      $filesize,
      $movie
    );
    $html .= "<ul>";
    $html .= sprintf('<li><a href="%s/%s.mp4" title="%s">Normal resolution</a></li>',
      $path,
      $movie,
      $filesize
      #simpleFileSize("$system_path/${movie}.mp4")
    );
    $html .= sprintf('<li><a href="%s/%s_hd.mp4" title="%s">HD resolution</a></li>',
      $path,
      $movie,
      $hdfilesize
      #simpleFileSize("$system_path/${movie}_hd.mp4")
    );
    $html .= "</ul></div>";

    return $html;
  }
?>
