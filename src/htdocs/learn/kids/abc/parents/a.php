<?php
// Author: Lisa Wald
// Contact: Lucy Jones
  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake ABC - Parent&apos;s Guide';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="../styles.css"/>';
    include 'template.inc.php';
  }
?>

<div class='row'>
    <div class='column one-of-five'>
      <?php
      include '../jumpmenu.inc.php';
      ?>
    </div>

    <div class='column four-of-five'>
      <img class='dropcap' src="../images/ia.gif" alt="childs drawing of the letter A">
      <h2>ftershocks</h2>
      <br style="clear:left;"/>

      <p>
        Large earthquakes hardly ever occur alone.  When one earthquake happens, we usually see another at a nearby location.  To talk about this phenomenon, seismologists coined three terms: &quot;foreshock&quot;, &quot;mainshock&quot;, and &quot;aftershock&quot;. In any cluster of earthquakes, the one with the largest magnitude is called the mainshock; anything before it is called a foreshock and anything after it is called an aftershock.
      </p>
      <p>
        The fault that moves in the mainshock experiences a great redistribution of the stress on it during the mainshock and it is that disrupted surface that produces most of the aftershocks. Sometimes the change in stress in the mainshock is great enough to trigger aftershocks on nearby faults. However, the stress change dies off quickly with distance from the fault so we rarely see aftershocks more than a few kilometers from the main fault. As a rule of thumb, we say that aftershocks are other earthquakes triggered at a distance from the mainshock fault no greater than the length of that fault.
      </p>
      <p>
        The length of the fault scales with the magnitude of the mainshock (see<A HREF="f.php"> Fault</A>) and so do the aftershocks. The aftershock zone of a magnitude 5 mainshock will be under 5 miles across, that of a magnitude 6.5 will be about 20 miles across, while that of magnitude 8 mainshock might be over 200 miles long. Bigger earthquakes have more and larger aftershocks. As the magnitude of the mainshock increases, the magnitude of the largest aftershock, on average, increases as well.
      </p>
      <p>
        The question is often asked, "How many aftershocks will there be"? On average, for each magnitude 5 aftershock in a sequence, we will see 10 magnitude 4 aftershocks, 100 magnitude 3 aftershocks, 1000 magnitude 2 aftershocks, etc. The relative number of small to large aftershocks does not appear to change with time. In general, an earthquake large enough to cause damage will produce several felt aftershocks within the first hour. The rate of aftershocks dies off quickly with time so even the second day will have many less aftershocks than the first.
      </p>
      <p>
        We call an earthquake an aftershock as long as the rate at which earthquakes are occurring in that region is greater than the rate we saw before the mainshock. How long that will be depends on the size of the mainshock (bigger earthquakes have a higher rate of aftershocks so it stays above background longer) and how active the region was before the mainshock (if it was quiet, aftershocks stay noticeable longer.)
      </p>
    </div>
</div>
