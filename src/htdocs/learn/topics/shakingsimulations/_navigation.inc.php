<?php
  $section = "/learn/topics/shakingsimulations";

  print side_nav_header();
    print side_nav_item("$section/index.php", "Overview");
    print side_nav_item("$section/background.php", "Background");
    print side_nav_group("$section/hayward/", "View Animations",
      side_nav_item("$section/hayward/", "Hayward Fault Scenarios") .
      side_nav_item("$section/1906/", "1906 Earthquake") .
      side_nav_item("$section/1989/", "1989 Loma Prieta Earthquake") .
      side_nav_item("$section/shakeout/", "Southern California ShakeOut")
    );
    print side_nav_item("$section/colors.php", "Explanation of Colors");
    print side_nav_item("$section/classroom.php", "For Teachers");
    print side_nav_item("$section/people.php", "Contributors");
    print side_nav_item("$section/seealso.php", "See Also");
  print side_nav_footer();
?>

<p style="font-size: .85em;"><a href="/regional/nca/">Back to Northern CA Home</a></p>
