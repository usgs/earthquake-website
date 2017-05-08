<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'How Thick is the Earth&rsquo;s Crust?';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
?>


<h2></h2>
<p>This contour map was created directly from the 5 x 5 degree gridded crustal model CRUST 5.1 (Mooney et al., 1998) plus complementary information. An initial contour map was created using the command &ldquo;grdcontour&rdquo; in GMT, and the resultant map was adjusted in Adobe Illustrator to honor individual point measurements and newly available information from Russia.
The final contour map honors all available seismic refraction measurements for features with a dimension greater than 2 degrees. To a first approximation, the continents and their margins are outlined by the 30 km contour.  That portion of the continental interior enclosed by the 40 km contour, and regions with crustal thickness of 45 to 50 km are found on all well surveyed continents (i.e., North and South America, Australia, and Eurasia). Continental crust with a thickness in excess of 50 km is exceedingly rare and accounts for less than 10% of the continental crust. These observations, now available on a global basis, provide important constraints on the evolution of the crust and sub-crustal lithosphere.</p>

        <figure style="max-width: 636px">
				<img src="/data/crust/images/topo.jpg" alt="A Contour Map of the World's Crustal Thickness" /></a>
         <figcaption>This contour map of the thickness of the Earth&rsquo;s crust was developed
  from the CRUST
  5.1 model. The contour interval is 10 km; we also include the 45
km contour for greater detail on the continents.</figcaption></figure>

<h2>Scientific Staff</h2>
<ul>
	<li><a href="mailto:mooney@usgs.gov">Walter Mooney</a>, Earthquake Science Center.</li>
</ul>
