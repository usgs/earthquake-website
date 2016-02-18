<?php
// Author: Lisa Wald
// Contact: David Wald,wald@usgs.gov
// Last modified: 08/10/2015

  if (!isset($TEMPLATE)) {
  $TITLE = 'ShakeMap Disclaimer';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<h2>General Disclaimer</h2>
<ul>
  <li>
    Some USGS information accessed through this page may be
  preliminary in nature and presented prior to final review and
  approval by the Director of the USGS.  This information is provided
  with the understanding that it is not guaranteed to be correct or
  complete, and conclusions drawn from such information are the sole
  responsibility of the user.
  </li>
</ul>

<h2> Specific Disclaimer </h2>
<ul class="separator">
  <li>
      These are automatic computer generated maps and have not necessarily
    been checked by human oversight, so they may contain errors.
    Further, the input data is raw and unchecked, and may contain errors.
  </li>
  <li>
    Contours can be misleading since data gaps may exist.
  Caution should be used in deciding which features in the contour
  patterns are required by the data. Ground motions and intensities can
  vary greatly over small distances, so these maps are only approximate;
  when maps are enlarged beyond the limits of the original data in an
  effort to show small areas, the maps are unreliable.
  </li>

  <li>
    These maps are preliminary in nature and will be updated as data
  arrives from distributed sources.
  </li>
</ul>

<h2> Estimated Intensity Map Disclaimer </h2>
<ul class="separator">
  <li>
    The estimated intensity map is derived from ground motions recorded
  by seismographs and represents Modified Mercalli Intensities (MMI's)
  that are likely to have been associated with the ground motions.
  Unlike conventional Modified Mercalli Intensities, the estimated
  intensities are not based on observations of the earthquake effects on
  people or structures.
  </li>
  <li>
    Locations within the same intensity area will not necessarily
  experience the same level of damage since damage depends heavily on
  the type of structure, the nature of the construction, and the details
  of the ground motion at that site. For this reason more or less damage
  than described in the MMI scale may occur.
  </li>
  <li>
    Large earthquakes can generate very long-period ground motions
  that can cause damage at great distances from the epicenter; although
  the intensity estimated from the ground motions may be small,
  significant effects to large structures (bridges, tall buildings,
  storage tanks) may be notable.
  </li>
  <li>
    The ground motion levels and descriptions associated with each
  intensity value are based on recent damaging earthquakes. There may
  be revisions in these parameters as more data become available or
  from further improvements in methodology.
  </li>
</ul>
