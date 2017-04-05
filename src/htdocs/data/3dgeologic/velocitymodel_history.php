<?php
if (!isset($TEMPLATE)) {
  $TITLE = '3-D Geologic and Seismic Velocity Models of the San Francisco Bay Region Documentation';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>

<h2>Velocity Model Releases</h2>

<h3>Version 08.3.0</h3>

<ul>
<li>Switched from Olsen et al model for Qp and Qs to Brocher
(2008) model for Qp and Qs that is based on Graves's
model.</li>
<li>Reduced Vp and Vs in granites, Francsican, gabrro,
lower crust, and upper mantle.</li>
	<li>Increased Vp and Vs by 10% in the La Honda basin. More
	work is still needed to constrain the seismic velocities in
	this basin.</li>
      </ul>

<h3>Version 05.1.0</h3>

<p>
This release of the USGS Bay Area Velocity Model includes both a detailed model and an extended (regional) model. The extended model extends the velocity model to approximately 650 km x 330 km x 45 km. Note that the extended model contains much less detail than the detailed model, hence the names. Additionally, the detailed model has been extended down to a depth of 45 km.
</p>


<h3>Version 05.0.0</h3>

<p>
Initial release of the USGS Bay Area Velocity Model. It fills the volume covered by the detailed 3-D geologic model.
</p>
