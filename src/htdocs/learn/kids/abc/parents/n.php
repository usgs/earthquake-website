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
    <img class='dropcap' src="../images/in.gif" alt="childs drawing of the letter N">
    <h2>oise</h2>
    <br style="clear:left;"/>
    <p>
      Many people describe major earthquakes as incredibly noisy, using words like rumbling and dull roar.  A common question is whether this noise is coming from the earth.  The answer is yes... and no.  The first waves (see <a href="w.php">Waves</a>) that carry the earthquake shaking through the ground are sound waves, meaning the type of wave is compressional, like the sound waves that carry noise through air (see <a href="p.php">P-wave</a>).  However, the frequency of this wave is below the range of human hearing unless you are right on top of the earthquake.  (The higher frequencies die off with distance more quickly than the low frequencies, just like you can hear a low pitched noise at a greater distance than a high pitched noise.  This is also why nearby earthquakes feel jerky while distant earthquakes produce a rolling motion.)  The noise heard in an earthquake is usually from buildings that vibrate at a higher frequency than the ground that set them creaking.  The perception of noise a few seconds &quot;before&quot; an earthquake is usually buildings creaking in response to the P-wave (see <a href="p.php">P-wave</a>).
    </p>
  </div>
</div>
