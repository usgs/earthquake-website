<?php
$section = "/research/everyone";

echo "<a href='/research/everyone' class='up-one-level'>Science for Everyone</a>",

  "<section>",

    navItem("/learn/topics/paleo-intro/", "Inroduction to Paleoseismology: the Past Informs the Future") .
    navItem("${section}/maine2012/", "Ground-Truthing After the M4.0 Earthquake in Southern Maine, October 16, 2012") .
    navItem("${section}/nepal2015/", "The M7.8 Nepal Earthquake, 2015 &ndash; A Small Push to Mt. Everest") .
    navItem("${section}/splays/", "The &quot;Snow Plow Theory&quot; of Early-Arriving Tsuamis") .
    navItem("${section}/seismology-in-the-city/", "Seismology in the City") .
    navItem("${section}/wasatch/", "How Big and How Frequent Are Earthquakes on the Wasatch Fault?") ,

  "</section>"
  ;

?>
