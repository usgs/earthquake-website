<?php
  // Author: Lisa Wald
  // Contact: Steve Hickman,

  if (!isset($TEMPLATE)) {
    $TITLE = 'Earthquake Science Center, Menlo Park, CA';
    $NAVIGATION = true;
    $HEAD = '
      <style>
        .directions {
          margin-top: -.75em;
        }
      </style>
    ';

    include 'template.inc.php';
  }
?>

<div class="row">
  <div class="column two-of-five">
    <h2>Center Director</h2>
    <p>Steve Hickman</p>

    <h2>Public information</h2>
    <p>
      <a href="mailto:garcia@usgs.gov">Susan Garcia</a><br />
      (650) 439-2668
    </p>

    <h2>Addresses</h2>
    <p>
      <b>Moffett Field</b><br />
      U.S. Geological Survey<br />
      Earthquake Science Center<br />
      350 N. Akron Road<br />
      Moffett Field, CA 94035
      <p class="directions">
        <a href="https://www.google.com/maps/search/350+N.+Akron+Road+Moffett+Field,+CA+94035/@37.4121026,-122.0594695,17z/data=!3m1!4b1" title="Interactive map and driving directions">Directions</a>
      </p>
    </p>
    <p>
      <b>Menlo Park</b><br />
      U.S. Geological Survey<br />
      345 Middlefield Road<br/>
      MS 977<br/>
      Menlo Park, California 94025
      <p class="directions">
        <a href="https://www.google.com/maps/place/345+Middlefield+Rd,+Menlo+Park,+CA+94025/@37.4564874,-122.1734351,17z/data=!3m1!4b1!4m5!3m4!1s0x808fbb527b1c3be3:0x1dcf07a4bc2295a2!8m2!3d37.4564874!4d-122.1712464" title="Interactive map and driving directions">Directions</a>
      </p>
    </p>

    <h2>Media only</h2>
    <p>
      Susan Garcia<br />
      (650) 346-0998 (cell)
    </p>
  </div>

  <div class="column three-of-five">
    <h2>Menlo Park Campus Layout</h2>
    <img src="images/menloCampus.gif" alt="map of Menlo campus" width="600" />
  </div>
</div>
