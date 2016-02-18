<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'About ANSS Comprehensive Catalog and Important Caveats';
    $NAVIGATION = true;

    include 'template.inc.php';
  }
?>

<?php /* TABLE OF CONTENTS ----------------------------------------------- */ ?>

<h2>Table of Contents</h2>
<ul>
  <li><a href="#data-availability">Data Availability</a></li>
  <li><a href="#placenames">Placenames/ Labels</a></li>
  <li><a href="#magnitudes">Magnitudes</a></li>
  <li><a href="#map">Map</a></li>
  <li><a href="#map-layers">Map Layers</a></li>
  <li><a href="#references">References</a></li>
  <li>Metadata
    <ul>
      <li><a href="catalog/">Catalogs</a></li>
      <li><a href="contributor/">Contributor</a></li>
    </ul>
  </li>
</ul>

<p>
  The <strong>ANSS Comprehensive Catalog (ComCat)</strong> contains earthquake
  source parameters (e.g. hypocenters, magnitudes, phase picks and amplitudes)
  and other products (e.g. moment tensor solutions, macroseismic information,
  tectonic summaries, maps) produced by contributing seismic networks. This
  comprehensive collection of seismic information will eventually replace the
  <a href="http://www.quake.geo.berkeley.edu/anss/catalog-search.html">
  ANSS composite catalog hosted by the Northern California Data Center</a>;
  however, historic regional seismic network catalogs have not yet been fully
  loaded.
</p>

<p>
  Important digital catalogs of earthquake source parameters (e.g. Centennial
  Catalog, Global Centroid Moment Tensor Catalog) are currently being loaded
  into ComCat. New and updated data is added to the catalog dynamically as
  sources publish or update products. Check back for updates.
</p>

<?php /* DATA AVAILABILITY ------------------------------------------------*/ ?>
<h2 id="data-availability" class="section-header">Data Availability</h2>

<p>
  Data Availability as of 2015-03-19:
</p>

<ul>
  <li>
    Realtime Earthquake Data Sources &amp; Contributing Networks from 2013-02-02
    to present
  </li>
  <li>
    NEIC <a href="/data/pde.php">PDE Preliminary Determination of Epicenters
    Bulletin</a>
    <ul>
      <li>
        Monthly from 1973-01-01 to 2011-03-31
      </li>
      <li>
        Weekly from 2011-04-01 to 2012-10-13
      </li>
      <li>
        Daily from 2012-10-14 to 2013-02-08
      </li>
    </ul>
  </li>
  <li>
    <a href="/earthquakes/shakemap/atlas.php">Shakemap Atlas</a> from 1923 to
    2011
  </li>
  <li>
    Wphase (Duputel) from 1990 to 2012
  </li>
  <li>
    ISCGEM
  </li>
  <li>
    GCMT (Global Centroid-Moment-Tensor)
  </li>
</ul>

<p>
  Currently loading (available soon):
</p>

<ul>
  <li>
    &ldquo;Official&rdquo; magnitudes
  </li>
</ul>

<?php /* PLACENAMES LABELS ----------------------------------------------- */ ?>
<h2 id="placenames" class="section-header">Placenames/Labels</h2>

<p>
  We use a <a href="http://www.geonames.org/"  target="_blank">GeoNames</a>
  dataset to reference populated places that are in close proximity to a
  seismic event.  GeoNames has compiled a list of cities in the United States
  where the population is 1,000 or greater (cities1000.txt).  This is the
  primary list that we use when selecting nearby places.  In order to provide
  the public with a better understanding for the location of an event we try to
  list a variety of places in our nearby places list.  This includes the closest
  known populated place in relation to the seismic event (which based on our
  dataset will have a population of 1,000 or greater).  We also include the next
  3 closest places that have a population of 10,000 or greater, and finally make
  sure to include the closest capital city to the seismic event.
</p>

<p>
  The reference point for the descriptive locations is usually either the City
  Hall of the town (or prominent intersection in the middle of town if there is
  no City Hall), but please refer to the GeoNames website for the most accurate
  information on their data.
</p>

<p>
  If there is no nearby city within 300 kilometers (or if the nearby cities
  database is unavailable for some reason), the
  <a href="/learn/topics/flinn_engdahl.php">Flinn-Engdahl (F-E)</a> seismic and
  geographical regionalization scheme is used. The boundaries of these regions
  are defined at one-degree intervals and therefore differ from irregular
  political boundaries. For example, F-E region 545 (Northern Italy) also
  includes small parts of France, Switzerland, Austria and Slovenia and F-E
  region 493 (Chesapeake Bay Region) includes all of the State of Delaware, plus
  parts of the District of Columbia, Maryland, New Jersey, Pennsylvania and
  Virginia. Beginning with January 2000, the 1995 revision to the F-E code has
  been used in the QED and PDE listings.
</p>

<p>
  As an agency of the U.S. Government, we are expected to use the names and
  spellings approved by the
  <a href="http://earth-info.nga.mil/gns/html/" target="_blank">U.S. Board on
  Geographic Names</a>. Any requests to approve additional names should be made
  to the U.S. Board on Geographic Names.
</p>

<?php /* MAGNITUDES ------------------------------------------------------ */ ?>
<h2 id="magnitudes" class="section-header">Magnitudes</h2>

<p>
  The magnitude reported is that which the U.S. Geological Survey considers
  official for this earthquake, and was the best available estimate of the
  earthquake’s size, at the time that this page was created. Other magnitudes
  associated with web pages linked from here are those determined at various
  times following the earthquake with different types of seismic data. Although
  they are legitimate estimates of magnitude, the U.S. Geological Survey does
  not consider them to be the preferred "official" magnitude for the event.
</p>

<ul>
  <li>
    <a href="/earthquakes/eventpage/terms.php">More information about magnitudes
    and magnitude types</a>
  </li>
  <li>
    <a href="/aboutus/docs/020204mag_policy.php">U.S. Geological Survey
    Earthquake Magnitude Policy</a>
  </li>
</ul>

<?php /* MAP ------------------------------------------------------------- */ ?>
<h2 id="map" class="section-header">Map</h2>

<dl class="vertical">
  <dt>Map Projection</dt>
  <dd>
    The earthquake map projection is Web Mercator.
  </dd>

  <dt>Map Reference Model</dt>
  <dd>
    The reference model is WGS-84.
  </dd>

  <dt>Map Software</dt>
  <dd>
    Interactive map interface powered by
    <a href="http://leafletjs.com/" target="_blank">Leaflet</a>.
  </dd>

</dl>

<?php /* MAP LAYERS ------------------------------------------------------ */ ?>
<h2 id="map-layers" class="section-header">Map Layers</h2>

<dl class="vertical">
  <dt>Grayscale Map</dt>
  <dd>
    <p>
      This layer is from an Esri GIS service titled “Light Gray Canvas”.  This
      minimal map is used as the default because it loads more quickly in the
      browser than the other maps, and it emphasizes the earthquakes.
      <a href="http://www.arcgis.com/home/item.html?id=8b3d38c0819547faa83f7b7aca80bd76"
          target="_blank">
          Detailed information about this map is on the Esri website</a>.
    </p>

    <p>
      Sources: Esri, DeLorme, NAVTEQ.
    </p>
  </dd>

  <dt>Terrain Map</dt>
  <dd>
    <p>
      This layer is from an Esri GIS service titled “National Geographic World
      Map”.  The map was developed by National Geographic and Esri and reflects
      the distinctive National Geographic cartographic style in a multi-scale
      reference map of the world.  <a href="http://www.arcgis.com/home/item.html?id=b9b1b422198944fbbd5250b3241691b6"  target="_blank">
      Detailed information about this map is on the Esri website</a>.
    </p>
    <p>
      Sources: National Geographic, Esri, DeLorme, NAVTEQ, UNEP-WCMC, USGS,
      NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC.
    </p>
  </dd>

  <dt>Street Map</dt>
  <dd>
    <p>
      Map tiles courtesy <a href="http://www.mapquest.com/"  target="_blank">
      MapQuest</a>. Portions of the data courtesy
      <a href="http://www.nasa.gov"  target="_blank">NASA/JPL-Caltech</a> and
      <a href="http://www.fsa.usda.gov/FSA/"  target="_blank">U.S. Dept. of
      Agriculture</a>, Farm Service Agency.
    </p>
  </dd>

  <dt>Satellite Map</dt>
  <dd>
    <p>
      Map tiles courtesy <a href="http://www.mapquest.com/"  target="_blank">
      MapQuest</a>. Portions of the data courtesy
      <a href="http://www.nasa.gov"  target="_blank">NASA/JPL-Caltech</a> and
      <a href="http://www.fsa.usda.gov/FSA/"  target="_blank">U.S. Dept. of
      Agriculture</a>, Farm Service Agency.
    </p>
  </dd>

  <dt>Plate Boundaries</dt>
  <dd>
    <p>
      This data was acquired from the <a href="http://peterbird.name/publications/2003_PB2002/2003_PB2002.htm"  target="_blank">
      Peter Bird Plate Boundary Dataset</a>. NOTE: Included plate boundaries
      were chosen appropriately based on scale.
    </p>
  </dd>

  <dt>U.S. Faults</dt>
  <dd>
    <p>
      The data used for these features was acquired from the
      <a href="https://geohazards.usgs.gov/hazfaults/map2008.php">Hazard Faults
      Database for the United States</a>. See the <a href="/hazards/qfaults/">
      Quaternary Fault and Fold Database of the United States</a> for more
      information.
    </p>

    <h4 class="subheader">
      Known hazardous faults and fault zones in California and Nevada
    </h4>

    <p>
      The
      <a href="http://pubs.usgs.gov/of/1996/532/fig25ss.gif" target="_blank">
      known active fault segments in California and Nevada can be seen in Figure
      25</a> of <a href="http://pubs.usgs.gov/of/1996/532/"  target="_blank">
      USGS Open-File Report 96-532: National Seismic Hazard Maps, June 1996:
      Documentation</a> by Arthur Frankel, Charles Mueller, Theodore Barnhard,
      David Perkins, E.V. Leyendecker, Nancy Dickman, Stanley Hanson, and
      Margaret Hopper.
    </p>

    <p>
      For northern California, the potential sources of earthquakes larger than
      magnitude 6 are documented in
      <a href="http://pubs.usgs.gov/of/1996/0705/" target="_blank">
      Open-File Report 96-705: Database of Potential Sources for Earthquakes
      Larger than Magnitude 6 in Northern California</a> by the Working Group on
      Northern California Earthquake Potential (chaired by Jim Lienkaemper).
    </p>

    <p>
      For the state as a whole, see
      <a href="http://pubs.er.usgs.gov/publication/ofr96706" target="_blank">
      USGS Open-File Report 96-706: Probabilistic seismic hazard assessment for
      the State of California</a> by Petersen, M. D., Bryant, W.A., Cramer,
      C.H., Cao, T., Reichle, M.S., Frankel, A.D., Lienkaemper, J.J., McCrory,
      P.A., and Schwartz, D.P, 1996 (published jointly as
      <a href="http://www.conservation.ca.gov/cgs/rghm/psha/ofr9608/"
          target="_blank">
      California Division of Mines and Geology Open-File Report 96-08</a>.  The
      faults and fault zones described in these reports are known to have been
      active in the last 2 million years and are thought to pose a measurable
      hazard.
    </p>

    <p>
      For California the faults on the individual zoomed-in and special maps
      come from the three categories of faults believed to have been active in
      the last 700,000 years shown on the “Preliminary Fault Activity Map of
      California” by C.W. Jennings (1992, California Division of Mines and
      Geology Open-File Report 92-03). This map has been superseded by Jennings,
      C.W., 1994, Fault activity map of California and adjacent areas, with
      locations and ages of recent volcanic eruptions: California Division of
      Mines and Geology, Geologic Data Map No. 6, map scale 1:750,000.
    </p>

    <p>
      For Nevada the faults on the individual zoomed-in and special maps come
      from USGS Open-File Report 96-532 mentioned above.
    </p>

    <p>
      For more information on files and images discussed above visit the
      <a href="/hazards/products/conterminous/1996/documentation/">1996 Hazard
      Maps Documentation Page</a>.
    </p>
  </dd>

  <dt>U.S. Hazards</dt>
  <dd>
    <p>
      US hazard is from the <a href="/hazards/">USGS Seismic Hazard Mapping
      Project (NSHM)</a>
    </p>
  </dd>
</dl>


<?php /* REFERENCES------------------------------------------------------- */ ?>
<h2 id="references" class="section-header">References</h2>

<ul class="referencelist">
  <li>
    Young, J.B., Presgrave, B.W., Aichele, H., Wiens, D.A. and Flinn, E.A.,
    1996, The Flinn-Engdahl Regionalisation Scheme: the 1995 revision,
    Physics of the Earth and Planetary Interiors, v. 96, p. 223-297.
  </li>
  <li>
    Flinn, E.A., Engdahl, E.R. and Hill, A.R., 1974, Seismic and
    geographical regionalization, Bulletin of the Seismological Society of
    America, vol. 64, p. 771-993.
  </li>
  <li>
    Flinn, E.A., and Engdahl, E.R., 1965, A proposed basis for geographical
    and seismic regionalization, Reviews of Geophysics, vol. 3, p. 123-149.
  </li>
</ul>
