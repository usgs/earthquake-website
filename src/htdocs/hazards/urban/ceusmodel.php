<?php
      // Author:  Tiffany Kalin
      // Contact: Rob Williams, rawilliams@usgs.gov
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Central U.S. Seismic Velocity Model';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>

<figure class="right" style="max-width:450px">
  <a href="images/model.jpg">
    <img src="images/model_sm.jpg" alt="Model Overview"/>
  </a>
  <figcaption>
  	Model overview. The regional structure is constructed by
  	extending the physical properties of most of the well-defined units to less
  	well-constrained areas in the Mississippi Embayment and the CUS: Paleozoic,
  	Crystalline Upper Crust, Lower Crust, Modified Lower Crust and Upper
  	Mantle. The Mesozoic to Cenozoic materials are represented by several units
  	within the Mississippi Embayment and a Vs30 based layer outside the
  	embayment.
  </figcaption>
</figure>

<p>
  <a href="ceus-model-v1.3.php"><b>CUSVM Version 1.3 (model and documentation)</b></a>
</p>

<p>
  Compared to what we know about earthquake hazards in California, less is known in the Central US. The main reason for this difference is the relatively few numbers of large earthquakes in the Central US compared to California.  The more frequent occurrence of small and larger earthquakes in California gives scientists data that can be used to infer the effects of historical earthquakes in the region and estimate the effects of future large earthquakes. A lack of large earthquakes in the Central US means a lack of data on stronger ground motions from big earthquakes.  When there is little observational data, scientists use models to generate estimated data. A model for estimating the effects of an earthquake includes an earthquake source and the earth through which the seismic waves travel. A <a href="BSSA-1811-1812simulation.pdf">research paper on this modeling effort</a> (4.7MB PDF) was published in the August 2015 issue of the Bulletin of the Seismological Society of America.
</p>

<p>
  Scientists can use recorded small earthquakes or mathematically simulated earthquakes as a model for a large earthquake source, but what about the earth part?  The subsurface geophysical structure, that is in this case, a combination of how fast sound waves travel through different parts of the crust and the density of these materials, can be a proxy for crustal structure, which can provide the needed crustal model.  The measurements of sound wave speeds and density in the earth come from earthquake recordings, man-made seismic sources, and drill-hole data.
</p>

<figure class="left" style="max-width:450px">
  <a href="images/topo.jpg">
    <img src="images/topo_sm.jpg" alt="Topographic map showing the extent of the CUSVM"/>
  </a>
  <figcaption>
  	Topographic map showing the extent of the CUSVM. Red circles
  	indicate earthquakes greater than magnitude 2.5 that occurred after 1972
  	(largest earthquake in this time period was the Mw 5.4 Mt. Carmel
  	earthquake in southeastern Illinois). The Mississippi Embayment and the
  	Reelfoot Rift (RFR) boundaries are depicted with red dashed and black
  	continuous lines, respectively. The plausible geometry of three major
  	faults (Northern, Reelfoot and Axial or Cottonwood Grove) is displayed in
  	white discontinuous line. Some of the geologic structures of the region are
  	also indicated, OU=Ozark Uplift, ND=Nashville Dome, CA=Cincinnati Arch,
  	IB=Illinois Basin and RCG=Rough Creek Graben.
  </figcaption>
</figure>

<p>
  The goals of this research project were to 1) build a model of the crustal structure in a 650,000 km2 area including several urban areas, such as Little Rock, AR; Evansville, IN; Memphis, TN; Nashville, TN; Louisville, KY; and St. Louis, MO, that 2) can be used to generate simulations of shaking from earthquake sources.  To test the model, the source of the <a href="/earthquakes/eventpage/nm606657">M5.2 Mt Carmel, Illinois, earthquake on April 18, 2008</a> was used with the model to simulate data, and the simulated data were then compared to the real data recorded at many seismograph stations in the central U.S.for that earthquake.  The two data sets had a good match, indicating the crustal structure model is a good approximation of actual geologic structure.
</p>

<h2>Technical Summary</h2>

<p>
  The CUS model that we present covers a region of approximately 650,000 km<sup>2</sup> and is home to more than 17 million people. The model includes several urban areas, such as Little Rock, AR; Evansville, IN; Memphis, TN; Nashville, TN; Louisville, KY; and St. Louis, MO. The CUSVM is parameterized by extending the physical properties of most of the well defined units, to less well-constrained areas, in the Mississippi Embayment and the CUS: stiff to unconsolidated Mesozoic and Cenozoic sediments, Paleozoic, crystalline upper crust, lower Crust, modified Lower Crust and Upper Mantle (e.g. Mooney et al., 1983; Ginzburg et al., 1983, Stewart, 1968; Prodehl et al., 1984).
</p>


<p>
  The post-Paleozoic structure in the Mississippi Embayment is subdivided into units whose tops are defined by prominent reflectors in available refraction/reflection lines and geologic unit boundaries detected using geophysical and geologic logs. In addition, details of the model are locally enhanced by embedding, with small variations, the St. Louis, MO and Memphis, TN metropolitan geophysical models used in the respective hazard mapping projects (Chung and Rogers, 2010; Gomberg et al., 2003; Cramer et al. 2004). Outside the embayment and the urban areas mentioned above, where shallow Vs measurements are sparse, we relied on Vs30 information derived from the correlation between Vs30 and topographic slope (Allen and Wald, 2007, 2009).
</p>

<p>
  The units are bounded with surfaces computed using a Kriging algorithm (see e.g. Isaaks and Srivastava, 1989; see Data and Resources), and in some cases corrected manually to remove spurious artifacts. We note that using units with well-defined boundaries is only an approximation of the complexity of the crust. It has been reported however, that the very sharp vertical contrasts, which potentially define our boundaries, in the geophysical properties in certain regions of the CUS seen in the abundant crustal imaging data described above, may not be present in less-well studied areas such as central Tennessee, or at least are not evident (Prodehl et al., 1984).
</p>

<p>
  Depending on the availability of information, the properties within each unit have vertical variability in all cases and in some regions horizontal variability as well. In the absence of information, except where it is mentioned in the text, we employ Brocher (2005b) Vp to Vs and mass density &rho;-Vp relationships. These empirical relationships, valid within the rage 1.5&lt;Vp&lt;8.5 km/s, were derived based on a compilation of Vp, Vs and densities for a wide variety of common lithologies and have been used in other velocity models (e.g. Brocher 2005a; Olsen et al., 2008). The model is available and distributed as a C program where Vp, Vs and density can be queried as a function of depth from the surface, henceforth depth, or elevation with mean sea level as datum (see Data and Resources below).
</p>

<h2>Data and Resources</h2>

<ul>
	<li>The <a href="http://globec.whoi.edu/software/kriging/easy_krig/easy_krig.html">Kriging Matlab toolbox software</a> used in this research was developed by Dezhang Chu with funding from the National Science Foundation through the U.S. GLOBEC Georges Bank Project's Program Service and Data Management Office.</li>

	<li><a href="http://ngmdb.usgs.gov/ngmdb/ngm_catalog.ora.html">Preliminary Integrated Geologic Map Databases for the United States</a>.</li>

	<li><a href="http://pubs.usgs.gov/sir/2008/5098/">Digital Surfaces and thickness of the hydro-geologic of the Mississippi Embayment units</a>.</li>

	<li><a href="/data/crust/nam.php">USGS North America compilation of seismic properties</a>.</li>

	<li>The elevation data used is derived using the <a href="http://nationalmap.gov/viewer.html">1-arc second USGS Digital Elevation Model</a> of the region.</li>

	<li>The Vs30 outside the Mississippi Embayment and St. Louis, MO were obtained from the <a href="/hazards/apps/vs30/">USGS Global Vs30 map server</a>.</li>

	<li>The <a href="http://www.isgs.illinois.edu/seismic-imaging-receiver-based-refraction-processing">Illinois depth to bedrock</a> was obtained from the Illinois State Geological Survey.</li>

	<li>The <a href="http://maps.indiana.edu/layerGallery.html?category=Bedrock">Indiana depth to bedrock</a> was compiled by the Indiana Geological Survey.</li>

	<li>The <a href="http://water.usgs.gov/GIS/metadata/usgswrd/XML/regolith.xml">Tennessee depth to bedrock</a> was compiled by the USGS.</li>

	<li>The ground motion data was obtained from the <a href="http://www.eas.slu.edu/Earthquake_Center/">St. Louis University Earthquake Center</a> and <a href="http://www.iris.edu/">Incorporated Research Institute for Seismology (IRIS)</a> sites.</li>

</ul>

<p>
  Most sources used to construct the velocity model are available upon request.
</p>

<h2>Scientific Staff</h2>
<ul>
  <li>Leonardo Ramírez Guzmán</li>
	<li>Rob Williams</li>
</ul>

<h2>References</h2>
<ul class="referencelist">
	 <li>
     Ramirez-Guzman, L., Olsen, K., Graves, R., Hartzell, S., Boyd, O. S., and Williams, R. A., 2015. Ground Motion Simulations of 1811–1812 New Madrid Earthquakes, Central United States, Bull. Seis. Soc. Am., 105(4), 1961–1988, doi:10.1785/0120140330.
  </li>
</ul>
