<?php
  // Author: Lisa Wald
  // Contact:
    if (!isset($TEMPLATE)) {
      $TITLE = '2002 U.S. Hazard Maps - Revision I, April 2002';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

	<p>
		In April 2003, we made changes in the input parameters of seven California
		faults used in the national seismic hazard maps. This results in minor
		changes in the hazard maps for parts of California. These input changes
		are described below and were done in cooperation with the California
		Geological Survey.
	</p>
	<p>
		In addition to the fault changes, we have now added a distance taper to
		the hazard calculation for California A-type faults. In the revised ground
		motions maps, we linearly taper the ground motion hazard (frequency of
		exceedance) for California A-faults at distances between 200 km and 250
		km, for all periods. This tapering eliminates the sharp fall-off of 1 Hz
		S.A. probabilistic ground motions in western Arizona apparent in the
		original 2002 maps, which occurred at 200 km distance from the San Andreas
		and Imperial faults. This 200 km distance was the maximum distance used in
		the hazard calculation for WUS faults. In the revised maps, the 200 km
		maximum distance is retained for all other faults in the Western U.S.
	</p>

	<h3>Modifications to the 2002 California ground motion maps</h3>
	<p>
		We have made modifications to seven California faults to account for
		differences between the way the parameters were calculated in 1996 and in
		2002. These modifications are listed below:
	</p>
	<ol>
		<li>
			Cucamonga fault: In 1996 we used M 7.0 to account for 2 m average
			displacements along the fault. In 2002 we used the Ellsworth and Hanks
			and Bakun relations to calculate magnitudes of M 6.9 and 6.7. In the
			revision we fixed the magnitude at M 6.9 (consistent with the Ellsworth
			relation) to account for the fault scarps and the recurrence time of
			650 years, as in the 1996 model. The new GR incremental a-value is
			2.52973.
		</li>
		<li>
			Landers fault: In 1996 we used the magnitude of the 1992 Landers
			earthquake (M7.3) for the maximum magnitude of the fault. In 2002 we
			used the Ellsworth and Hanks and Bakun relations to calculate
			magnitudes of 7.2 and 7.1. In the revision we have reapplied the
			historical maximum magnitude of 7.3 with a recurrence time of 5000
			years, as in 1996. The new GR incremental a-value is 1.47714.
		</li>
		<li>
			Owens Valley fault: In 1996 we used the historical M 7.6 from the 1872
			earthquake to account for the maximum magnitude. In 2002 we used the
			Ellsworth and Hanks and Bakun relations to calculate magnitude 7.4. In
			the revision we have reapplied the historical maximum magnitude of 7.6
			with a recurrence time of 4000 years, as in 1996. The new GR
			incremental a-value is 1.76868.
		</li>
		<li>
			Garberville fault: In 1996 we applied a M 6.9 with a 220 year
			recurrence. In 2002 we applied a M 6.7 (based on Ellsworth and Hanks
			and Bakun relations) with about a 100 year rate. In the revision we
			have all owed a M 7.5 to float anywhere along the Maacama-Garberville
			faults with a recurrence time of 220 years. The new GR incremental
			a-value is 2.85961.
		</li>
		<li>
			Honey Lake fault: In 1996 we characterized the fault using a M 6.9
			earthquake with recurrence of 1493 years based on paleoseismic data. In
			2002 we used M 7.0 and 6.8 with recurrence times of 748 and 375 years
			based on the magnitudes from Ellsworth and Hanks and Bakun. In the
			revision we have reverted back to the 1996 model, having a M 6.9
			earthquake with recurrence of 1493 years. The new GR incremental
			a-value is 2.32690.
		</li>
		<li>
			Pleito fault: In 1996 we applied a M 7.2 earthquake, in 2002 we applied
			a M 7.4 earthquake based on an incorrect fault width. In the revision
			we applied a M 7.0 and 6.9 earthquake based on the relations of
			Ellsworth and Hanks and Bakun. The new GR incremental a-value is
			2.13675 and 2.27285.
		</li>
		<li>
			Monte-Vista-Shannon fault: In 1996 we used a M 6.8 earthquake to
			characterize the fault. In 2002 we used a M 6.9 and 7.0 based the
			relations of Hanks and Bakun and Ellsworth calculated using an
			incorrect fault width. In the revision we have fixed the width and
			recalculated the magnitudes to obtain M 6.7 events. The new GR
			incremental a-value is 1.76127.
		</li>
	</ol>
