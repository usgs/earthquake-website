<?php
  // Author: Lisa Wald
  // Contact: Jeanne Hardebeck,
  // Last modified: Lisa Wald, 2016/08/10
  if (!isset($TEMPLATE)) {
    $TITLE = 'Rock Physics Labs - Current Projects';
    $NAVIGATION = true;
    $HEAD = '
      <link rel="stylesheet" href="../index.css"/>
    ';
  // Use Earthquake level nav file
    include_once 'functions.inc.php';
    ob_start();
    include '_navigation.current.inc.php';
    $NAVIGATION = ob_get_clean();

    include 'template.inc.php';
  }
?>

<h2>SAFOD Deep Drillhole - Physical Properties of Fault Core Material</h2>

<figure class='right'>
	<img src="images/SAFOD1.jpg" alt="schematic of SAFOD drill rig"/>
	<figcaption>
    Cross section of the San Andreas fault at Parkfield showing the SAFOD drillhole angling towards repeating earthquakes (in purple) within the fault zone. Colored contours depict a 2-D model of the electrical resistivity structure with depth, which clearly demarks the San Andreas fault.
  </figcaption>
</figure>

<p>
  The San Andreas Fault Observatory at Depth (SAFOD) near Parkfield, California broke ground in 2004 to drill a deep hole in the vicinity of several magnitude 6 earthquakes along the San Andreas fault.  This drillhole provides the unique opportunity to study both the dynamics of an active fault and the physical properties of core material extracted from the depths at which earthquakes originate.  Drilling started vertically on the west side of the fault, then the borehole was angled to cross the fault at a depth of 2.7 km and continue into the rock on the east side of the fault. The USGS Rock Physics Laboratories&rsquo; role in this project includes measurements of friction and failure strength of the rocks and fault gouge material, as well as permeability, electrical resistivity, and petrographic studies of the core samples.
</p>

<h2>Significant finds from the laboratory</h2>

<p>
  Core was recovered from two locations at about 2.7 km vertical depth that correspond to the places where the well casing of the drillhole was being deformed due to fault creep. The two creeping strands of the fault are narrow zones of fault gouge, 1.6 and 2.6 m in width, that are the products of reactions between serpentine, originating from the fault itself, and the adjoining sedimentary wall rocks.  Both gouge zones consist of serpentinite and sedimentary rock dispersed in a matrix of magnesium-rich clays. The mineralogy in these creeping sections supports the long-held view that the presence of serpentine is related to fault creep behavior.
</p>

<p>
  We also found that the friction of the fault gouge in the actively shearing areas was much lower than that of the surrounding rocks due to the presence of the weak clay minerals saponite and corrensite found in the core samples.  Since the stress orientation and heat flow around the San Andreas fault suggest a coefficient of friction of 0.2 or less, similar to the measured friction of the fault gouge, the inferred low strength of the fault can be explained entirely by the properties of the fault gouge at the SAFOD location without requiring high fluid pressure, shear heating or other strength-reducing mechanisms.
</p>

<p>
  Permeability of the fault gouge from these shearing areas (10<sup>-20</sup> to 10<sup>-23</sup> m<sup>2</sup>) was generally two orders of magnitude lower than the surrounding rocks due to the fine-grained, clay-rich nature of the gouge.  Such extremely low permeability would create a barrier to fluid flow across the fault at that depth; this is supported by gas analysis carried out across the San Andreas Fault at Parkfield, which shows that waters on either side of the fault do not mix.  Electrical resistivity values were also 1&ndash;2 orders of magnitude lower in the actively shearing zones, in agreement with downhole resistivity data.  Laboratory electrical resistivity measurements help correlate the down-hole resistivity log, which is averaged over large depth intervals, to individual rock or fault gouge units.
</p>

<figure>
	<img src="images/SAFOD2.jpg" alt="photo of a core sample" width="784" />
	<figcaption>
    This image shows a section of the retrieved core in the actively deforming zone of the San Andreas fault (depth is marked in feet).  Note the complicated structure, with several different rock types in close proximity. The serpentinite block is &lsquo;floating&rsquo; within a 1.6 meter wide zone that is one of two actively creeping strands of the San Andreas Fault at this location. The creeping zone is filled with foliated fault gouge that is clay-rich and very weak.  The measured physical properties of samples taken from this core vary with rock type.
  </figcaption>
</figure>
