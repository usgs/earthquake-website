<?php
// Author: Lisa Wald
// Contact: Kate Scharer
  if (!isset($TEMPLATE)) {
    $TITLE = 'Establishing the Story of Past Earthquakes on the San Andreas Fault to Inform the Future - working title';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="../styles.css"/>
            <link rel="stylesheet" href="styles.css"/>';
    include 'template.inc.php';
  }
?>

<h2>Determining the Age of a Paleoearthquake</h2>
<p>
  How do you go from the observation of a prehistoric earthquake in the trench wall to the age of an earthquake? You’ll want this to understand how long ago the most recent one happened, how old the earthquake before that one is, and so on through the sequence of disrupted sediments.
</p>

<figure>
  <img src='images/trenchwall.jpg' alt='photo of trench wall on left, sketch with layers outlined on the right'/>
  <figcaption>
    Fault produced during large magnitude earthquake when organic rich layer 4 was at the ground surface. Note that silt and sand layer  5 is thicker on the left side of the fault, where it filled in the step (scarp) made by motion on the fault.  Layers 5 and 6 are not affected by the fault.  The age of the earthquake is determined by the age of layers above and below the fault tip.
  </figcaption>
</figure>

<figure class='right charcoal'>
  <img src='images/charcoal.jpg' alt='photo of trench wall with a piece of charcoal in a layer'/>
  <figcaption>
    Piece of charcoal in silt and sand layer 1 used in radiocarbon dating.
  </figcaption>
</figure>

<p>
  There are many different ways that dates are extracted from samples gathered at paleoearthquake sites.  The dating technique that’s familiar to most people, and is the most common, is radiocarbon dating.  Radiocarbon dating allows you to determine the age of material contains carbon, which is almost anything that was once a living plant or animal.  Plant remains like seeds and leaves, charcoal from past fires, and shells and soils are all datable materials using radiocarbon.
</p>

<p>
  The use of accelerator mass spectrometry, which allows you to measure the number of radiogenic carbon isoptoes and determine the age, has lead to improvements in paleoseismology.  The big advantage is actually that new lab techniques can now resolve the age of very small samples.  This means that a scientist can collect small samples the size of a grain of rice from a geologic feature instead of schlepping large, heavy samples from the field to the lab, and the data are even better, as a wide variety of material can be dated.  The age of each earthquake is bracketed by dating layers above and below the layer deformed by the prehistoric earthquake.
</p>

<figure class='left results'>
  <img src='images/calibration.gif' alt='radiocarbon dating'/>
  <figcaption>
    The sample is analyzed by AMS and the number of 14C isotopes is determined. When this is calibrated with the calibration curve (blue), the variations in 14C over time can be used to determine the age of the sample in calendar years.  It has a complex shape (grey) due to uncertainties in the laboratory age (green).  The mean radicarbon age of charcoal in layer 1 is 1102 A.D.
  </figcaption>
</figure>
<figure class='left results'>
  <img src='images/results.gif' alt='radiocarbon dating'/>
  <figcaption>
    Radiocarbon ages are determined for all of the layers to establish that the dating is robust and no contamination has occurred.  Note that samples get older with each deeper layer. The earthquake in the panel above occured when layer 4 was at the ground surface. The age of the earthquake is determined from the radiocarbon ages above and below, in this case the top and bottom of layer 4. This earthquake occured between 1457 and 1568 AD.
  </figcaption>
</figure>

<br style="clear:left;"/>

<h2>Estimating Paleoearthquake Magnitudes</h2>
<p>
  Today, a seismic network is used to determine the magnitude of an earthquake. The magnitude scale is set by the area of the fault rupture (the length and width of the fault plane) and the amount of slip, or offset, that occurred on the fault.  To estimate the age of prehistoric earthquakes, scientists pursue the amount of slip that occurred on the land surface.  One of the most common approaches is to determine how much features like streams or gullies were offset by the fault.  The size of the offset is essentially correlated to the size of the earthquake - the larger the earthquake the larger the slip.  For example, an M7 will cause the ground to be offset by an average of about 1 m, while a M7.5 has an average offset of about 2.6 m.  Secondary evidence may also be used to estimate the size of a region that was shaken by the earthquake (not just the length of the fault that ruptured). For example, the locations of sand blows and other liquefaction features or evidence of earthquake-induced landslides can be mapped across a region to determine the extent and severity of shaking.  The pattern of shaking is then compared with the pattern of earthquakes of known magnitudes to determine what magnitude best fits the observations.
</p>

<!-- NAVIGATION at bottom for ARTICLE -->
<p>
  <a class='prev' href="finding.php">
    <span class='material-icons prev'>&#xe5c4;</span>
    <strong>PREV</strong>
  </a>
  <a class='next' href="bigpicture.php">
    <strong>NEXT</strong>
  <span class='material-icons next'>&#xe5c8;</span>
  </a>
</p>
