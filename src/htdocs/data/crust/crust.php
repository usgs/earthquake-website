<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Crust 5.1';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}
?>

<h2>A Global Crustal Model</h2>
        <figure style="max-width: 810px">
				<img src="images/thick2.gif" alt="Map of the Global Crustal Thickness in a 5 degree by 5 degree grid" /></a></figure>

      <p>This global model of the Earth&rsquo;s crust based
        on seismic refraction data published in the period 1948-1995 and a detailed
        compilation of ice and <a href="sedthick.html">sediment
        thickness</a>. A total of 560 seismic refraction measurement have been
        used to determine the crustal structure on continents and their margins.
        Oceanic crust is modeled with both a standard model for normal oceanic
        crust, and variants for non-standard regions, such as oceanic plateaus.
        Our model (CRUST 5.1) consists of 2,592 5 x 5 degree tiles in which
        the crust and uppermost mantle are described by eight layers: (1) ice,
        (2) water, (3) soft sediments, (4) hard sediments,
        (5) crystalline upper, (6) middle, and (7) lower crust,
        and (8) uppermost mantle. Topography and bathymetry are adopted from a
        standard database (ETOPO5). Compressional wave velocity in each layer
        is based on field measurements, and shear wave velocity and density are
        estimated using recently published empirical Vp-Vs and Vp-density relationships.
        (<a href="crustaltypes.html">see
        crustal type</a>) </p>
        <p>A new aspect of this compilation is the use of statistics
to predict crustal structure in areas without field measurements. In these
unmeasured areas, the thickness of ice, water and sediments is taken from
published compilations, and the velocity structure of the crystalline crust
and uppermost mantle is estimated from the statistical average of regions
with a similar crustal age and tectonic setting.</p>

      <p>Our crustal model differs from previous
        models in that: (1) the thickness and seismic/density structure of sedimentary
        basins is accounted for more completely; (2) the velocity structure of
        unmeasured regions is estimated using a significantly larger database
        of crustal structure; (3) the compressional wave, shear wave, and density
        structure have been explicitly specified using newly available constraints
        from field and laboratory studies. We compare surface wave phase velocities
        predicted by our model with observations. There is close agreement between
        <a href="love.html">observed
        and predicted Love waves</a> with a period of 40 s. These phases are primarily
        sensitive to the shear velocity and density structure in the upper 40
        km. (<a href="rayleigh.html">see
        also Rayleigh wave anomalies</a>) Our global crustal model is a significant
        improvement over previous models and is applicable to a wide range of
        geophysical calculations of Earth structure. We illustrate this with a
        simple calculation of crustal isostacy that shows good agreement between
        predicted and real topography, the difference
        (<a href="residual.html">residual
        topography</a>) mainly being due to lateral variations in the density
        of the uppermost mantle. </p>
        <p>Histograms of <a href="histoThick.html">crustal thickness</a> and <a href="histoVel.html">average P-wave velocity</a>
for six continental crustal types.</p>

<h3><a href="http://igppweb.ucsd.edu/~gabi/crust.html">Download CRUST 5.1 model</a>
(A new <a href="http://igppweb.ucsd.edu/~gabi/crust2.html">2
  x 2 degree model</a> is available)</h3>
<p><a href="models.php">Other models of the Earth</a> &raquo;</p>
