
<?php
  $section = "/earthquakes/events/1906calif/18april";

  $url = $_SERVER['REQUEST_URI'];
  $matchesIntro = false;

  if (preg_match("@^{$section}/(index.php)?$@", $url)) {
    $matchesIntro = true;
  }

  echo
  "<section>",
    navItem("${section}/", "Introduction", $matchesIntro)
  ;

  if(preg_match("@^{$section}/(howlong|offset|shaking|howfast|intensity|magnitude).php$@", $url))
    {
      echo "</section>";
      echo navGroup(navItem("${section}/howlong.php", "How Big was the Earthquake?"),
          navItem("${section}/howlong.php", "How Long was the Rupture?") .
          navItem("${section}/offset.php", "How Large was the Offset?") .
          navItem("${section}/shaking.php", "How Long did the Shaking Last?") .
          navItem("${section}/howfast.php", "How Fast did the Ground Move?") .
          navItem("${section}/intensity.php", "What was the Intensity of the Shaking?") .
          navItem("${section}/magnitude.php", "What was the Magnitude?")
        );
        echo "<section>";
  }else{
    echo navItem("${section}/howlong.php", "How Big was the Earthquake?");
  }

  echo
    navItem("${section}/seismogram.php", "1906 Seismogram").
    navItem("${section}/casualties.php", "Casualties and Damage").
    navItem("${section}/whenagain.php", "When will it Happen Again?")
  ;

  if(preg_match("@^{$section}/(revolution|reid|soil|whateffect|paleo).php$@", $url))
    {
      echo "</section>";
      echo navGroup(navItem("${section}/revolution.php", "What was Learned Scientifically from 1906"),
        navItem("${section}/revolution.php", "1906 Marked the Dawn of the Scientific Revolution") .
        navItem("${section}/reid.php", "Reid's Elastic Rebound Theory") .
        navItem("${section}/soil.php", "Soil Types and Damage") .
        navItem("${section}/whateffect.php", "Big Quakes can be Followed by Decades of Inactivity") .
        navItem("${section}/paleo.php", "Paleoseismology")
      );
      echo "<section>";
    }else{
        echo navItem("${section}/revolution.php", "What was Learned Scientifically from 1906");
    }

echo
    navItem("${section}/photos.php", "1906 Earthquake Photos").
    navItem("${section}/eyewitness.php", "Eyewitness Accounts").
    navItem("${section}/othereqs.php", "Other Major Earthquakes in the SF Bay Area").
    navItem("${section}/learnmore.php", "Learn More about Earthquakes").
    navItem("${section}/acknowledgements.php", "Acknowledgements").
    navItem("${section}/references.php", "References"),
  "</section>"
  ;

?>
