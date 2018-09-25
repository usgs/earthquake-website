<?php
if (!isset($TEMPLATE)) {
  $TITLE = '3-D Geologic and Seismic Velocity Models of the San Francisco Bay Region Documentation';
  $HEAD = '';
  $FOOT = '';
  $NAVIGATION = true;

  include 'template.inc.php';
}

?>
<h2>Bounding boxes of the models</h2>

<figure class="right" >
  <img src="images/model_bbox.jpg" alt="Model bounding boxes" />
  <figcaption>Bounding boxes of detailed and regional (extended) velocity model regions. Gray lines denote major roads and white lines delineate major faults.</figcaption>
</figure>

  <p>
    The detailed model is surrounded by the regional (extended) model to permit capturing large length scale features of seismic wave propagation along the northern San Andreas fault outside the domain of the detailed model. In the regional model details away from the San Andreas fault are grossly generalized in places. The regional model fits around the detailed model so it does not include the region covered by the detailed model.
  </p>

  <p>
  The detailed and regional velocity models are rectangular volumes in a Transverse Mercator (TM) projection with the following parameters:
  <ul>
    <li>Scale factor for central meridian: 0.99960000</li>
    <li>Longitude of central meridian: -123.00000</li>
    <li>Latitude of origin: 35.00000</li>
    <li>False easting: 0.00000</li>
    <li>False northing: 0.00000</li>
    <li>Azimuths of sides: 53.638, 323.638</li>
  </ul>
  </p>

  <p>
    <a href="docs/USGSBayAreaVelModel.kml">KML file</a> with bounding boxes.
  </p>


  <div class="clear">
  <p>
    Coordinates are WGS84 longitude/latitude. Models extend from sea level or top of ground surface down to 45 km below sea level. The model includes the material properties of water for the Pacific Ocean.
  </p>
  <table class="tabular">
    <tr>
      <th class="blank"></th>
      <th colspan="2">Detailed</th>
      <th colspan="2">Regional (Extended)</th>
    </tr>
    <tr>
      <th>Approx. Dimensions</th>
      <td>290km</td>
      <td>140km</td>
      <td>650km</td>
      <td>330km</td>
    </tr>
    <tr>
      <th>SE corner (lon,lat)</th>
      <td>-120.644051</td><td>37.050062</td>
      <td>-118.944514</td><td>36.702176</td>
    </tr>
    <tr>
      <th>SW corner (lon,lat)</th>
      <td>-121.922036</td><td>36.320331</td>
      <td>-121.930857</td><td>35.009018</td>
    </tr>
    <tr>
      <th>NW corner (lon,lat)</th>
      <td>-123.858493</td><td>38.424179</td>
      <td>-126.353173</td><td>39.680558</td>
    </tr>
    <tr>
      <th>NE corner (lon,lat)</th>
      <td>-122.562365</td><td>39.174505</td>
      <td>-123.273199</td><td>41.484869</td>
    </tr>
  </table>
  </div>

<h2>Geologic Block Model</h2>

<h3>Introduction</h3>

<p>
The detailed and regional (extended) 3-D geologic models of Central California, centered on the San Francisco Bay region, were made using the Dynamic Graphics <a href="http://www.dgi.com/">EarthVision(TM)</a> software.  This
program builds 3-D models starting with a hierarchy of fault surfaces that divide the volume of interest into <b>Fault Blocks</b>.  These fault blocks are further subdivided by <b>Zone Surfaces</b> that most commonly represent contacts between rock units within a fault block.
</p>

<p>
Fault and zone surfaces were exported from the EarthVision (EV) model using an EV utility named "ev_ev2gocad", which outputs a file in the TSurf format</a> used by the <a href="http://www.earthdecision.com/home.html">GOCAD(TM) software</a>.  The TSurf format represents a surface by specifying the locations a number of triangles which approximate the surface.
</p>

<p>
Various options for viewing TSurf files may be found under "Tools" on the <a
href="http://structure.harvard.edu/cfm/tools.html">SCEC Community Fault Model</A> website.  There are also scripts
available in the tarball to project the tsurfs and to convert the projected versions to the <B>.vtp</B> format for viewing in the <a href="http://www.paraview.org/">ParaView</a> 3-D visualization software.
</p>

<h3>Documentation</h3>

<ul>
  <li><a href="slices.php">Slices</a> through the detailed model</li>
  <li>Fault block <a href="images/hierarchy.png">hierarchy</a></li>
  <li><a href="docs/DetailedFaultBlocks.txt">Text file</a> of detailed model block and zone labels</li>
  <li><a href="docs/RegionalFaultBlocks.txt">Text file</a> of regional model block and zone labels</li>
  <li>Version <a href="blockmodel_history.php">history</a></li>
</ul>

<h2>Seismic Velocity Model</h2>

<h3>Introduction</h3>

<p>
The velocity model is stored in <a href="http://www-2.cs.cmu.edu/~euclid/">Etree database</a> files. We provide a library to query the database from C++, C, and Fortran 77. The query software is called cencalvm (current version is 0.6.5) and is generally updated independently of the velocity model. In order to use the seismic velocity model, you need to download the Etree database file for the detailed model and install the query software. Downloading the Etree database file for the regional (extended) model is optional.
</p>

<h3>Documentation</h3>

<ul>
  <li><a href="https://github.com/usgs/earthquake-cencalvm">Query software</a></li>
  <li>Version <a href="velocitymodel_history.php">history</a></li>
</li>

<h3>Resolution</h3>

  <ul class="titles">
	<h5>Detailed model
	  <table class="tabular">
	    <tr>
	      <th>Elevation<sup>1</sup></th>
	      <th>Horiz. Resolution</th>
	      <th>Vertical Resolution</th>
	    </tr>
	    <tr>
	      <td>z &gt; -400m</td>
	      <td>100m</td>
	      <td>25m</td>
	    </tr>
	    <tr>
	      <td>-400m &gt; z &gt; -3200m</td>
	      <td>200m</td>
	      <td>50m</td>
	    </tr>
	    <tr>
	      <td>-3200m &gt; z &gt; -6400m</td>
	      <td>400m</td>
	      <td>100m</td>
	    </tr>
	    <tr>
	      <td>-6400m &gt; z &gt; -45000m</td>
	      <td>800m</td>
	      <td>200m</td>
	    </tr>
	  </table>
	</h5>
	<h5>Transition from detailed model to extended model. This is
	a region 3.2km in width surrounding the detailed model. It is
	part of the extended model.
	  <table class="tabular">
	    <tr>
	      <th>Elevation<sup>1</sup></th>
	      <th>Horiz. Resolution</th>
	      <th>Vertical Resolution</th>
	    </tr>
	    <tr>
	      <td>z &gt; -3200m</td>
	      <td>200m</td>
	      <td>50m</td>
	    </tr>
	    <tr>
	      <td>-3200m &gt; z &gt; -6400m</td>
	      <td>400m</td>
	      <td>100m</td>
	    </tr>
	    <tr>
	      <td>-6400m &gt; z &gt; -45000m</td>
	      <td>800m</td>
	      <td>200m</td>
	    </tr>
	  </table>
	</h5>
	<h5>Extended model
	  <table class="tabular">
	    <tr>
	      <th>Elevation<sup>1</sup></th>
	      <th>Horiz. Resolution</th>
	      <th>Vertical Resolution</th>
	    </tr>
	    <tr>
	      <td>z &gt; -6400m</td>
	      <td>400m</td>
	      <td>100m</td>
	    </tr>
	    <tr>
	      <td>-6400m &gt; z &gt; -45000m</td>
	      <td>800m</td>
	      <td>200m</td>
	    </tr>
	  </table>
	</h5>
      </ul>
      <sup>1</sup>Elevation is given with respect to mean sea level, so -400m
      corresponds to 400m below mean sea level.
    </p>
