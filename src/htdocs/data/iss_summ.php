<?php
  // Author: Lisa Wald
  // Contact: ,
  // Last modified: 06/30/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'International Seismological Summary';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<h2>Earthquake Catalog (1918-1963) </h2>

<p><a href="issREADME.txt">README.txt</a> - description of file content<br />
  <a href="ISS.CAT">ISS.CAT</a> - This plain text file contains all hypocenters in the ISS bulletins that have available phase arrival time data listed in tabular form. Undetermined shocks and earthquakes reported by other agencies without arrival time data are not included in this file.
</p>
<p>
  The International Seismological Summary (ISS) is the most comprehensive global earthquake catalog for the time period between 1918 and 1963. The ISS is the predecessor of the <a href="http://www.isc.ac.uk/">International Seismological Centre (ISC)</a>, which has published its bulletins from the year 1964 onwards.
</p>
<p>
  The bulletins of the ISS contain both hypocenters and the phase arrival time data used to determine the hypocenters. However the ISS does not list amplitude and period data that could be used to compute magnitudes. And, while the ISC hypocenters and phase data are readily accessible in digital form, the the ISS bulletins are currently only available in printed form. A long term project is currently under way to convert the hypocenter and phase data in the ISS printed bulletins to digital form (Villase&ntilde;or et al., 1997).
</p>
<p>
  The hypocenters listed in the bulletins of the British Association for the Advancement of Science (BAAS) Seismological Committee (the predecessor of the ISS) for the period 1914-1917 have also been included in the catalog file ISS.CAT.
</p>

<h3>Caveat Emptor</h3>

<p>
  The locations in the ISS, particularly those prior to the 1940s, were determined using primitive location methods (e.g. drawing arcs on a globe) and inaccurate earth models, and mislocation errors of hundreds of km are not uncommon. Therefore, locations in the ISS should only be used to confirm that an earthquake actually occurred and there is available phase arrival time data in the bulletins. If there are enough consistent, well- distributed data, a more precise location can be obtained using modern location techniques and earth models.
</p>
<p>
  The file ISS.CAT has been produced by combining existing hypocenter files for the ISS bulletins and comparing the combined file with the actual printed bulletins. Many errors have been fixed (such as typos, missing and duplicated events, etc) but errors may still remain.
</p>

<h3>Reference</h3>
<ul class='referencelist'>
  <li>Villase&ntilde;or, A., E.A. Bergman, T.M. Boyd, E.R. Engdahl, D.W. Frazier, M.M. Harden, J.L. Orth, R.L. Parkes, and K.M. Shedlock, Toward a comprehensive catalog of global historical seismicity, Eos Trans. AGU, vol. 78, no. 50, pp. 581, 583, 588, 1997.</li>
</ul>
