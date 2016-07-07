<?php
  // Author: Lisa Wald
  // Contact: Bill Leith, leith@usgs.gov
  // Last modified: 07/07/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Regional Catalogs';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<h2>Composite Regional Catalogs of Russion and the Former Soviet Union</h2>

<div class='row'>
  <div class='column three-of-five'>
    <img src="../images/composite.gif" alt="Regional Earthquakes in Russia"/>
  </div>
  <div class='column two-of-five'>
    <div class='row'>
      <div class='column one-of-two'>
        <a href="aldan.php">Aldan</a><br/>
        <a href="altai.php">Altai</a><br/>
        <a href="arctic.php">Arctic</a><br/>
        <a href="baltic.php">Baltic</a><br/>
        <a href="baykal.php">Baykal</a><br/>
        <a href="carpathia.php">Carpathia</a><br/>
        <a href="caucasus.php">Caucasus</a><br/>
        <a href="centralasia.php">Central Asia</a><br/>
        <a href="chukotka.php">Chukotka</a><br/>
        <a href="crimea.php">Crimea</a><br/>
        <a href="kamchatka.php">Kamchatka</a><br/>
        <a href="kazakhstan.php">Kazakhstan</a><br/>
        <a href="kopetdagh.php">Kopet Dagh</a><br/>
        <a href="kurile.php">Kurile</a><br/>
      </div>
      <div class='column one-of-two'>
        <a href="kazakhstan.php">Kazakhstan</a><br/>
        <a href="kopetdagh.php">Kopet Dagh</a><br/>
        <a href="kurile.php">Kurile</a><br/>
        <a href="laptev.php">Laptev</a><br/>
        <a href="primore.php">Primore</a><br/>
        <a href="wrussia.php">Western Russia</a><br/>
        <a href="sakhalin.php">Sakhalin</a><br/>
        <a href="sayan.php">Sayan</a><br/>
        <a href="esiberia.php">Eastern Siberia</a><br/>
        <a href="wsiberia.php">Western Siberia</a><br/>
        <a href="tienshan.php">Tien Shan</a><br/>
        <a href="ukraine.php">Ukraine</a><br/>
        <a href="ural.php">Ural</a><br/>
      </div>
    </div>
  </div>
</div>

<p>
  Our principal goal in compiling the Composite Regional Catalogs is to archive as much of the available information as possible, with no lower magnitude cutoff and no "standardization” of magnitudes.  When integrating the data from the various “ancestral” catalogs, the following approach was taken.
</p>

<p>
  If, for particular seismic event, two (or three) source catalogs report identical origin time and coordinates, the event occupies a single record in the database.  Other parameters are placed in different columns. In the column "Source" these two or three initial catalogs are pointed in "chronological order" of publication (OBN, ESSN, NEW/GNRL).  Other parameters, from different surveys are placed in the same record, in different fields.  They are:
</p>

<p>from ESSN:
  <ul>
    <li>K = energy class</li>
    <li> M(K) = magnitude calculated from K : M(K)=(K-4)/1.8 ]</li>
  </ul>
</p>

<p>from OBN:
  <ul>
    <li>MLH, Mpsp, and Mplp magnitudes</li>
  </ul>
</p>

<p>from GNRL:
  <ul>
    <li>M = the "unified magnitude"</li>
    <li>M(_) = indicating the parameter used to calculate M</li>
    <li>Io = intensity at the epicenter</li>
    <li>Azim = Azimuth</li>
  </ul>
</p>

<p>
  If the times and/or coordinates are different in initial catalogs (estimated independently), two events are reported, with each source data in a separate record.
</p>

<p>
  Events are grouped into composite catalogs by <a href="images/regionaliz.jpg">geographic region</a>. Note that this “regionalization” of the Catalog does not precisely coincide with the zones for which each of the separate regional surveys are or were responsible.  For example, the Baikal Survey processed and included in its catalog some events with longitudes less than 100°, they were incorporated into the Sayan Regional Catalog.  Another example is the situation for Siberia, where the Yakutsk survey is responsible for the huge area, including the Aldan, East Siberia and Chukotka.
</p>

<p>
  For several regions (Turkmenia, Central Asia, Primorie &amp; Priamurie, Sakhalin, Kurile, Kamchatka), ESSN data are not yet available in digital form, so only the Obninsk and General catalogs were used in the compilations to date.
</p>

<p>
  The catalogs can be divided into two time periods: “historical” (prior to 1962) and “modern (from 1962 through 1999).  The first period includes the available data on errors, as estimated or assumed by the compilers of the New and General catalogs.  In the so-called “modern observation period,” the errors are smaller then in the historical period.  Note also that error estimates were not included in all of the regional catalogs, and when they were reported, they were mostly assumed values.  For example, the density of seismic stations was generally not sufficient to discriminate a depth of 5, 10, or even from 15 km.  Therefore, the depths of many events are presumed.  The accuracy of these determinations can be evaluated by comparing separate analyses of the data for events that were recorded and processed by neighboring surveys, by regional and independent (e.g., Obninsk) determinations, or by comparing with the revised estimations by authors of the General Catalog or other special studies.  For these reasons, the data about accuracy are not included in 1962-99 Catalogs.
</p>
