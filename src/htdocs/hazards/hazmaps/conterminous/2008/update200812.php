<?php
  // Author: Lisa Wald
  // Contact:
    if (!isset($TEMPLATE)) {
      $TITLE = '2008 U.S. Hazard Maps - Revision II, December 2008';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<p>
	The 2008 U.S. Geological Survey National Seismic Hazard Maps were released in
	April 2008 (with minor updates in <a href="update200805.php">May 2008</a>).
	This document describes the changes that were made between May 2008 and
	December 2008, when the final version of the hazard curves from which the
	maps were interpolated and submitted to the Building Seismic Safety Committee
	to derive the seismic design maps in the 2009 NEHRP Recommended Provisions.
	This December 2008 version of the hazard curves is also the basis for the
	design maps in the 2010 ASCE-7 Minimum Design for Buildings and Other
	Structures, which in turn have been accepted for inclusion in the 2012
	International Building Code. The modifications between May and December of
	2008 generally result in small changes with a few exceptions.
</p>

<ol>
	<li>
		Gutenberg-Richter branches of the Imperial, Death Valley, and Hosgri
		faults (California) that dip very steeply were calculated using
		distances that were up to 3 km off what they should have been. The
		offset of the down-dip rupture scenario was calculated for an assumed
		45 degree dip instead of the assigned dip and resulted in broader
		hanging-wall areas. Impact of change: resulted in up to 5&#37; decreases
		in ground motions within 5 km of the hanging-wall side of the fault and
		5&#37; increases in ground motions on the foot-wall side of the fault.
	</li>
	<li>
		The West Valley Fault (Utah) was truncated against the Wasatch Fault
		and moved to the Granger section instead of the Taylorville section of
		the fault. Impact of change: lowered ground motions about 20&#37; mostly
		along and to the east of the Salt Lake segment of the Wasatch Fault
		(~20 km X 20 km region). The new West Valley Fault model was developed
		in cooperation with the Utah Geological Survey and the University of
		Utah.
	</li>
	<li>
		The Atkinson and Boore subduction zone interface equation was modified
		for 5 Hz based on a newly published erratum from the authors (Atkinson
		and Boore, 2008). Impact of change: increased 5 Hz ground motions by
		less than 5&#37; across the Pacific NW region.
	</li>
	<li>
		Central and Eastern U.S. background earthquakes were calculated for a
		north-south orientation instead of assuming the average strike as
		defined in the USGS Open-file report. Impact of change: resulted in
		less than 2&#37; decreases and increases in ground motion across the CEUS.
	</li>
	<li>
		Magnitudes applied to the Geomatrix attenuation relation for deep
		earthquake sources assumed Mb rather than moment magnitudes (M). Impact
		of change: increased ground motions by less than 2&#37; in the Puget Sound
		region.
	</li>
	<li>
		Gutenberg-Richter branch weights of the logic tree for the Wallowa,
		East and West Klamath Graben, and Sky Lakes faults (Oregon) were
		doubled. Impact of change: reduction of ground motion up to 20&#37; in the
		area close to those faults.
	</li>
	<li>
		Boore and Atkinson (2008) NGA attenuation relation implementation
		contained a small error in one parameter. Impact of change: resulted in
		less than 1&#37; increases and decreases in the ground motions from the
		gridded seismicity portion of the model.
	</li>
</ol>
