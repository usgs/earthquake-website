<?php
  // Author: Lisa Wald
  // Contact: Dave Wald, wald@usgs.gov
  // Last modified: 03/16/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'PAGER-CAT Earthquake Catalog';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<h2>Files:</h2>
<ul>
  <li>
    <a href="PAGER_CAT_2008_06_1_readme.txt">PAGER_CAT_2008_06_1_readme.txt</a> &ndash; a complete description of the fields contained in PAGER-CAT.
  </li>

  <li>
    <a href="PAGER_CAT_Sup.pdf">PAGER_CAT_Sup.pdf</a> &ndash; supplementary material outlining catalogs used in PAGER-CAT and the selection of preferred earthquake attributes.
  </li>

  <li>
    <a href="PAGER_CAT_2008_06.1.zip">PAGER_CAT_2008_06.1.zip</a> &ndash; catalog in Comma Separated Value (CSV) format directly readable by most data processing applications including, Excel and ArcGIS.
  </li>

  <li>
    <a href="PAGER_CAT_2008_06.1.mat">PAGER_CAT_2008_06.1.mat</a> &ndash; catalog in Matlab structure format.
  </li>

  <li>
    <a href="readpagercat.m">readpagercat.m</a> &ndash; Matlab script to parse PAGER_CAT_2008_06.1.mat for data selection and manipulation.
  </li>
</ul>

<h2>Overview:</h2>

<p>
  PAGER-CAT combines high-quality source (i.e., hypocentral location and magnitude) and casualty estimates gathered from several published catalogs for earthquakes of magnitude <em>M </em>5.5 and greater. It was created for calibration of earthquake fatality and loss estimation models such as those to be used by the USGS <a href="/data/pager/">Prompt Assessment of Global Earthquakes for Response (PAGER)</a> system.
</p>

<p>
  PAGER-CAT's preferred earthquake origin times and hypocenters are primarily obtained from the Centennial Catalog (Engdahl and Villase&ntilde;or, 2002) and the updated Engdahl and others (1998) earthquake catalog. The USGS&rsquo;s Preliminary Determination of Epicenters (PDE) weekly and monthly listings (Sipkin and others, 2000) are assigned as the preferred origin time and hypocenter if listings in the two former catalogs do not exist. PAGER-CAT's preferred magnitudes are moment magnitudes from the <a href="http://www.globalcmt.org/">Global Centroid Moment Tensor Project</a>. When these magnitude estimates are unavailable, PAGER-CAT uses the preferred magnitude listed in the Centennial Catalog for earthquakes before 1973 and the PDE thereafter.
</p>

<p>
  PAGER-CAT also contains reports of earthquake casualties and loss from three earthquake catalogues, the PDE, the Utsu catalog of deadly earthquakes (Utsu, 2002), and the Emergency Events Database (EM-DAT) developed and maintained by the Centre for Research on the Epidemiology of Disasters at the University of Louvain, Belgium (e.g., Hovois and others, 2007). Secondary effects, such as tsunami, landslide, fire, and liquefaction, are also reported. If deaths are caused by these secondary effects, we disaggregate the number of deaths by cause, where this information is available.
</p>

<p>
  A detailed description of the development of this PAGER-CAT is given in Allen and others (2009) and the supplementary file PAGER_CAT_Sup.pdf. Parameters and flags contained in PAGER-CAT are described in <a href="PAGER_CAT_2008_06_1_readme.txt">PAGER_CAT_2008_06_1_readme.txt</a>.
</p>

<p>
  We intend PAGER-CAT to be an improving seismological resource and encourage external input to remove errors or extend content. Please contact <a href="mailto:kmarano@usgs.gov">Kristin Marano</a> with any comments.
</p>


<h2>Release notes:</h2>

<em>Version 2008_06.1</em> <br />
Date range: 1900 to June, 2008<br />
Number of events: 22,450<br />
Release date: 4 September 2009<br />
Content as described in Allen and others, 2009.</p>
<hr/>

<h2>References</h2>
<ul class="referencelist">
  <li>Allen, T.I., Marano, K., Earle, P.S., and Wald, D.J., 2009, PAGER-CAT: A composite earthquake catalog for calibrating global fatality models: Seism. Res. Lett., v. 80, no. 1, p. 50-56.</li>

  <li>Engdahl, E.R., van der Hilst, R., and Buland, R., 1998, Global teleseismic earthquake relocation with improved travel times and procedures for depth determination: Bull. Seism. Soc. Am., v. 88, no. 3, p. 722-743.</li>

  <li>Engdahl, E.R., and Villase&ntilde;or, A., 2002, Global seismicity: 1900-1999, in Lee, W.K., Kanamori, H., Jennings, P.C., and Kisslinger, C., eds., International Handbook of Earthquake Engineering and Seismology: Amsterdam, Academic Press, p. 665-690.</li>

  <li>Hoyois, P., Below, R., Scheuren, J.M., and Guha-Sapir, D., 2007, Annual disaster statistical review: numbers and trends 2006: centre for Research on the Epidemiology of Disasters, School of Public Health, Catholic University of Louvain, 54 p.</cite>  </p>

  <li>Sipkin, S.A., Person, W.J., and Presgrave, B.W., 2000, Earthquake bulletins and catalogs at the USGS National Earthquake Information Center, IRIS Newsletter, v. 2000, no. 1, p. 2-4.</li>

  <li>Utsu, T., 2002, A list of deadly earthquakes in the World: 1500-2000, in Lee, W.K., Kanamori, H., Jennings, P.C., and Kisslinger, C., eds., International handbook of earthquake engineering and seismology: Amsterdam, Academic Press, p. 691-717.</li>
</ul>
