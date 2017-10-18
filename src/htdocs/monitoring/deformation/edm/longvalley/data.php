<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Data from the Long Valley two-color EDM network';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>

<p>
  Please note: these data are preliminary and may or may not contain errors.
  I have tried to adjust the measurements for various sorts of problems
  including changes in set-up heights, difference between reflectors, changes
  in the apparent 'length' of the 2-color EDM due to various repairs and
  component changes. In addition, for the frequently measured baselines from
  CASA, I have tried to remove short-term fluctuations that are common to all
  7 (or 8) baselines that are measured frequently. These &ldquo;better quality
  data&rdquo; are available under the topic &ldquo;Frequent measurements from
  Casa; Instrument drift removed&rdquo;
</p>
<p>
  The format of the data &ldquo;year, julian day, displacement, standard error,
  instrument number&rdquo; The julian day is local, pacific standard time. The
  displacement is in millimeters. The standard error is an estimate of the
  white noise component of the measurement error. Additional random walk noise
  is apparent in the data. see: Langbein and Johnson, Correlated errors in
  geodetic time-series; Implications for time-dependent deformation, J.
  Geophs. Res, v102, 591-603, 1997.
</p>

<h2><a href="data/lat_long_lv.dat">Site locations</a></h2>
<p>These site locations are scaled from a 7.5 minute topographical map</p>

<h2>Frequent measurements from Casa; Instrument drift removed</h2>
<ul>
  <li><a href="data/krak.dil">krak</a></li>
  <li><a href="data/hot.dil">hot</a></li>
  <li><a href="data/shark.dil">shark</a></li>
  <li><a href="data/tilla.dil">tilla</a></li>
  <li><a href="data/miner.dil">miner</a></li>
  <li><a href="data/knolls.dil">knolls</a></li>
  <li><a href="data/saw.dil">saw</a></li>
  <li><a href="data/sherwin.dil">sherwin</a></li>
</ul>

<h2>Frequent measurements from Casa; no short term drift removed</h2>
<ul><li><a href="data/krak.prm">krak</a></li>
  <li><a href="data/hot.prm">hot</a></li>
  <li><a href="data/shark.prm">shark</a></li>
  <li><a href="data/tilla.prm">tilla</a></li>
  <li><a href="data/miner.prm">miner</a></li>
  <li><a href="data/knolls.prm">knolls</a></li>
  <li><a href="data/saw.prm">saw</a></li>
  <li><a href="data/sherwin.prm">sherwin</a></li>
</ul>

<h2>Infrequent measurements from Casa</h2>
<ul><li><a href="data/6ege.cas">6ege</a></li>
  <li><a href="data/cerro.cas">cerro</a></li>
  <li><a href="data/convict.cas">convict</a></li>
  <li><a href="data/diablo.cas">diablo</a></li>
  <li><a href="data/diablo3.cas">diablo3</a></li>
  <li><a href="data/duke.cas">duke</a></li>
  <li><a href="data/hot.cas">hot</a></li>
  <li><a href="data/jcm.cas">jcm</a></li>
  <li><a href="data/knob.cas">knob</a></li>
  <li><a href="data/knolls.cas">knolls</a></li>
  <li><a href="data/krak.cas">krak</a></li>
  <li><a href="data/linc.cas">linc</a></li>
  <li><a href="data/lomike.cas">lomike</a></li>
  <li><a href="data/lookout.cas">lookout</a></li>
  <li><a href="data/meadow.cas">meadow</a></li>
  <li><a href="data/mike.cas">mike</a></li>
  <li><a href="data/mill.cas">mill</a></li>
  <li><a href="data/miner.cas">miner</a></li>
  <li><a href="data/mouse.cas">mouse</a></li>
  <li><a href="data/numike.cas">numike</a></li>
  <li><a href="data/pile.cas">pile</a></li>
  <li><a href="data/rodger.cas">rodger</a></li>
  <li><a href="data/saw.cas">saw</a></li>
  <li><a href="data/sewer.cas">sewer</a></li>
  <li><a href="data/shark.cas">shark</a></li>
  <li><a href="data/sherwin.cas">sherwin</a></li>
  <li><a href="data/slide.cas">slide</a></li>
  <li><a href="data/smoat1.cas">smoat1</a></li>
  <li><a href="data/smoat2.cas">smoat2</a></li>
  <li><a href="data/smoat3.cas">smoat3</a></li>
  <li><a href="data/smokey.cas">smokey</a></li>
  <li><a href="data/taxi2.cas">taxi2</a></li>
  <li><a href="data/thermal.cas">thermal</a></li>
  <li><a href="data/tilla.cas">tilla</a></li>
  <li><a href="data/tup.cas">tup</a></li>
  <li><a href="data/wall.cas">wall</a></li>
  <li><a href="data/whit.cas">whit</a></li>
</ul>

<h2>Infrequent measurements from Whitmore (wht)</h2>
<ul><li><a href="data/convict.wht">convict</a></li>
  <li><a href="data/d124.wht">d124</a></li>
  <li><a href="data/duck.wht">duck</a></li>
  <li><a href="data/grate.wht">grate</a></li>
  <li><a href="data/gull.wht">gull</a></li>
  <li><a href="data/miner.wht">miner</a></li>
  <li><a href="data/pile.wht">pile</a></li>
  <li><a href="data/u911.wht">u911</a></li>
</ul>

<h2>Infrequent measurements from Miner (min)</h2>
<ul><li><a href="data/hot.min">hot</a></li>
  <li><a href="data/jcm.min">jcm</a></li>
  <li><a href="data/knolls.min">knolls</a></li>
  <li><a href="data/lomike.min">lomike</a></li>
  <li><a href="data/meadow.min">meadow</a></li>
  <li><a href="data/mike.min">mike</a></li>
  <li><a href="data/numike.min">numike</a></li>
  <li><a href="data/sewer.min">sewer</a></li>
  <li><a href="data/shark.min">shark</a></li>
  <li><a href="data/smoat1.min">smoat1</a></li>
  <li><a href="data/smoat3.min">smoat3</a></li>
  <li><a href="data/taxi.min">taxi</a></li>
  <li><a href="data/tilla.min">tilla</a></li>
</ul>

<h2>Infrequent measurements from Mill (mll)</h2>
<ul><li><a href="data/george.mll">george</a></li>
  <li><a href="data/horse.mll">horse</a></li>
  <li><a href="data/knolls.mll">knolls</a></li>
  <li><a href="data/lincoln.mll">lincoln</a></li>
  <li><a href="data/mammoth.mll">mammoth</a></li>
  <li><a href="data/mary.mll">mary</a></li>
  <li><a href="data/meadow.mll">meadow</a></li>
  <li><a href="data/mike.mll">mike</a></li>
</ul>

<h2>Infrequent measurements from Lookout (lok)</h2>
<ul><li><a href="data/bald.lok">bald</a></li>
  <li><a href="data/dead.lok">dead</a></li>
  <li><a href="data/holes.lok">holes</a></li>
  <li><a href="data/knob.lok">knob</a></li>
  <li><a href="data/krak.lok">krak</a></li>
  <li><a href="data/micro.lok">micro</a></li>
  <li><a href="data/mike.lok">mike</a></li>
  <li><a href="data/obsidian.lok">obsidian</a></li>
  <li><a href="data/sage.lok">sage</a></li>
</ul>

<h2>Infrequent measurements from Crater (cra)</h2>
<ul><li><a href="data/bachar.cra">bachar</a></li>
  <li><a href="data/bald1.cra">bald1</a></li>
  <li><a href="data/hartley.cra">hartley</a></li>
  <li><a href="data/june.cra">june</a></li>
  <li><a href="data/lava.cra">lava</a></li>
  <li><a href="data/lichen.cra">lichen</a></li>
  <li><a href="data/obsid.cra">obsid</a></li>
  <li><a href="data/trifle.cra">trifle</a></li>
</ul>
