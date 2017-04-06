<?php
  $section = "/earthquakes/events";

  echo "<a href='/earthquakes/browse/specialstudies.php' class='up-one-level'>Special Earthquake Studies</a>",

  "<section>",

    navItem("${section}/2014napa/", "M6.0 August 24, 2014 South Napa, California") .
    navItem("${section}/2011virginia/", "M5.8 August 23, 2011 Mineral, Virginia") .
    navItem("${section}/1989lomaprieta/", "October 17, 1989 Loma Prieta Earthquake") .
    navItem("${section}/alaska1964/", "The Great M9.2 Alaska Earthquake and Tsunami of March 27, 1964") .
    navItem("${section}/1906calif/", "April 18, 1906 San Francisco Earthquake") .
    navItem("${section}/1868calif/", "October 21, 1868 Hayward Fault Earthquake") .
    navItem("${section}/1857sca/", "The Great M7.9 1857 Fort Tejon Earthquake") .
    navItem("${section}/1811-1812newmadrid/", "The New Madrid Earthquakes 1811-1812") .


  "</section>"
  ;

?>
