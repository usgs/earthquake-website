<?php
  // Author: Lisa Wald
  // Contact: Scott Haefner or Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = 'Software to Download';
      $NAVIGATION = true;
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
      ';
      // Use Earthquake level nav file
        include_once 'functions.inc.php';
        ob_start();
        include '../_navigation.inc.php';
        $NAVIGATION = ob_get_clean();

        include 'template.inc.php';
    }
?>

<nav>
  <ul>
    <li><a href="#3DFM">3D Focal Mechanisms</a></li>
    <li><a href="#3D">3D Velocity Modeling</a></li>
    <li><a href="#cleanstrain+">Cleanstrain+</a></li>
    <li><a href="#CLUSTER">CLUSTER2000</a></li>
    <li><a href="#comcat">ComCat Wrapper Libraries</a></li>
    <li><a href="#Coulomb">Coulomb 3</a></li>
    <li><a href="#DGRFN">Direct Green&rsquo;s Function Synthetic Seismograms</a></li>
     <!--<li><a href="#isodirect">Earthquake Directivity Model</a></li> -->
    <li><a href="#EIDS">EIDS</a></li>
    <li><a href="#est_noise">Est_noise</a></li>
    <li><a href="#FPFIT, FPPLOT and FPPAGE">FPFIT, FPPLOT and FPPAGE</a></li>
    <li><a href="#gmpe">Graizer-Kalkan (2015) Ground-Motion Prediction Equation (GMPE)</a></li>
    <li><a href="#HASH">HASH</a></li>
    <li><a href="#hypoDD">HypoDD</a></li>
    <li><a href="#HYPOINVERSE">HYPOINVERSE Earthquake Location</a></li>
    <li><a href="#MacR1D">MacR1D</a></li>
    <li><a href="#Ray">MacRay</a></li>
    <li><a href="#nshmp">NSHMP Models, Codes and Catalogs</a> (National Seismic Hazard Mapping Project)</li>
    <li><a href="#OpenSHA">OpenSHA</a></li>
    <li><a href="#pdl">PDL</a></li>
    <li><a href="#PPHASEPICKER">PPHASEPICKER</a></li>
    <li><a href="#PQLX">PQLX</a></li>
    <li><a href="#Prism">Prism</a></li>
    <li><a href="#ps2ff">PS2FF</a></li>
    <li><a href="#quakeml">Quakeml</a></li>
    <li><a href="#SATSI">SATSI</a></li>
    <li><a href="#SeisRisk">SeisRisk III</a></li>
    <li><a href="#shake">ShakeCast</a></li>
    <li><a href="#slab2">Slab2</a></li>
    <li><a href="#Slick">Slick Package</a></li>
    <li><a href="#SLAMMER">SLAMMER</a></li>
    <li><a href="#STATIC1D">STATIC1D</a></li>
    <li><a href="#strainz17">Strainz17</a></li>
    <li><a href="#strec">STREC</a> - SeismoTectonic Regime Earthquake Calculator</li>
    <li><a href="#smfetch">StrongMotion Fetch</a></li>
    <li><a href="#VISCO1D">VISCO1D</a></li>
    <li><a href="#vs30global">Vs30 Global</a></li>
  </ul>
</nav>

<br style="clear:left;"/>
<hr/>
<p>USGS uses GitHub for all new software development, as well as open sourcing older software as time allows.<br/>
See how our applications work and collaborate with us at <a href="http://github.com/usgs/">USGS GitHub</a>.<br/>
<hr/>

<ul class="no-style separator linklist">

  <li class="first">
    <a href="https://pubs.usgs.gov/ds/2007/241/">
      <h2 id="3DFM">3D Focal Mechanisms</h2>
      <img src="images/3DFM.jpg" alt="3DFM Logo" width="146" height="100"/>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td><a href="mailto:klabay@usgs.gov">Keith A. Labay</a> and Peter J. Haeussler</td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>View earthquake focal mechanism symbols three dimensionally</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Windows</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>ArcScene&reg; 9.x</td>
      </tr>
      <tr>
        <th>Input:</th>
        <td>A GIS point dataset of earthquake locations containing strike, dip, and rake values for a nodal plane of each earthquake</td>
      </tr>
     <tr>
        <th>Download:</th>
        <td><a href="https://pubs.usgs.gov/ds/2007/241/">See
          online documentation</a></td>
      </tr>
    </table>
    <p>
      3D Focal Mechanisms is a tool for viewing earthquake focal mechanism symbols three dimensionally. This tool operates within the Environmental Systems Research Institute (ESRI&reg;) GIS software ArcScene&reg; 9.x. The program requires as input a GIS point dataset of earthquake locations containing strike, dip, and rake values for a nodal plane of each earthquake. Other information, such as depth and magnitude of the earthquake, may also be included in the dataset. By default for each focal point, 3DFM will create a black and white sphere or &ldquo;beach ball&rdquo; that is oriented based on the strike, dip, and rake values. If depth values for each earthquake are included, the focal symbol will also be placed at its appropriate location beneath the Earth&rsquo;s surface.
    </p>
  </li>

  <li>
    <h2 id="3D">3D Velocity Modeling</h2>
    <table>
      <tr>
        <th>Author:</th>
        <td>Cliff Thurber</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix, Mac</td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="http://www.geology.wisc.edu/~thurber/simul2000/">SIMUL2000</a></td>
      </tr>
    </table>
    <p>
      Fortran code (VMS compatible) for 3-D velocity model determination and hypocentral location with local earthquake data. Full inversion, not tomography, this is the program written by Cliff Thurber and modified by others.
    </p>
  </li>

  <li>
    <a href="ftp://ehzftp.wr.usgs.gov/langbein/CLEANST">
      <h2 id="cleanstrain+">Cleanstrain+</h2>
      <img src="images/cleanstrain.gif" alt="Cleanstrain+ Logo" width="146" height="99"/>
    </a>
    <table>
      <tr>
        <th>Author:</th>
        <td><a href="mailto:langbein@usgs.gov">John Langbein</a></td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Analyze strainmeter data in order to estimate tidal coefficients and pressure admittance</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix and/or Mac OS X (Requires Fortran compiler for Mac OS X)</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line</td>
      </tr>
      <tr>
        <th>Input:</th>
        <td>Time series of strainmeter data</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Cleaned-up strainmeter data</td>
      </tr>
      <tr>
        <th>Docs:</th>
        <td>Online documentation:
          <a href="ftp://ehzftp.wr.usgs.gov/langbein/CLEANST/README">installation, manual, examples</a>
        </td>
      </tr>
     <tr>
        <th>Download:</th>
        <td><a href="ftp://ehzftp.wr.usgs.gov/langbein/CLEANST">cleanstrain+</a></td>
      </tr>
    </table>
    <p>
      Cleanstrain+ is a program to process strainmeter data. This code will simultaneously estimate the tidal constituents, pressure admittance, offsets, rate changes, and other terms using least-squares but, importantly, incorporating the temporally correlated nature of strain data (that is, the power spectra is  red).
    </p>
  </li>

  <li>
    <h2 id="CLUSTER">CLUSTER2000</h2>
    <a href="ftp://ehzftp.wr.usgs.gov/cluster2000/cluster2000x.f">
      <img src="images/clusters.jpg" alt="Cluster Logo" width="120" height="125"/>
    </a>
    <table>
      <tr>
        <th>Author:</th>
        <td>Paul Reasenberg</td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Identify clusters (e.g., aftershocks) in an earthquake catalog</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix, or any platform with Fortran</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Parameters read from standard input</td>
      </tr>
      <tr>
        <th>Input:</th>
        <td>Catalog text file</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Several text files</td>
      </tr>
     <tr>
        <th>Download:</th>
        <td><a href="ftp://ehzftp.wr.usgs.gov/cluster2000/cluster2000x.f">Fortran source code</a> (35k), <a href="ftp://ehzftp.wr.usgs.gov/cluster2000/Makefile">Makefile</a> (233b)</td>
    </tr>
  </table>
  <p>
    CLUSTER2000 recognizes clusters in space-time in an earthquake
      catalog. It is intended for use in removing aftershocks or
      &quot;declustering&quot; the catalog. The methods used are
      described in &quot;Second-Order Moment of Central California
      Seismicity, 1969-1982&quot; (P. Reasenberg, JGR v.90., pp.5479-5495,
      1985). The current version (CLUSTER2000x) reads catalogs in
      a variety of standard formats. However, it is not fully Y2000
      compatible. While it reads the Y2K formats for HYPOINVERSE
      and HYPO71, CLUSTER2000x requires all data to belong to one
      century.
    </p>
  </li>

  <li>
    <a href="https://github.com/usgs/devcorner">
    <h2 id="comcat">ComCat Wrapper Libraries</h2>
      <img src="images/latesteqs-300.jpg" alt="screenshot of Latest Earthquakes" width="120"/>
    </a>
    </a>
    <table>
      <tr>
        <th>Author:</th>
        <td><a href="mailto:mhearne@usgs.gov">Mike Hearne</a></td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="https://github.com/usgs/devcorner">ComCat Wrapper Libraries github repository</a></td>
      </tr>
    </table>
    <p>
      Bulk access via scripts, programs, and tools for obtaining specific products from ComCat (the earthquake catalog).
    </p>
  </li>

  <li>
    <h2 id="Coulomb">Coulomb 3</h2>
    <a href="coulomb/">
      <img src="images/coulomb3.jpg" alt="Coulomb Logo" width="150" height="110" />
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td>Shinji Toda, <a href="https://profile.usgs.gov/rstein">Ross Stein</a>, <a href="http://www.whoi.edu/page.do?pid=39595">Jian Lin</a>, <a href="http://temblor.net/team/volkan-sevilgen/">Volkan Sevilgen</a></td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Stress-triggering software</td>
      </tr>
      <tr>
        <th>Platform:</th>

        <td>Matlab on Windows, Mac or Unix</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Menu driven</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Grahics and text</td>
      </tr>
      <tr>
        <th>Manual:</th>
        <td><a href="coulomb/">Online documentaiton</a></td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="coulomb/">See online documentation</a></td>
      </tr>
    </table>
    <p>
      Coulomb 3 is designed to investigate Coulomb stress changes on mapped faults and earthquake nodal planes, and is intended both for publication-directed research and for university teaching and instruction.
    </p>
    <p>
      One can calculate static displacements (on any surface or at GPS
      stations), strains, and stresses caused by fault slip, magmatic intrusion
      or dike expansion. Problems such as how an earthquake promotes or inhibits
      failure on nearby faults, or how fault slip or dike expansion will
      compress a nearby magma chamber, are germane to Coulomb. Geologic
      deformation associated with strike-slip faults, normal faults, or
      fault-bend folds is also a useful application. Calculations are made in an
      elastic halfspace with uniform isotropic elastic properties following
      Okada [1992].
    </p>
    <p>
      We believe that one learns best when one can see the most and can explore
alternatives quickly. So the principal feature of Coulomb is ease of input,
rapid interactive modification, and intuitive visualization of the results. The
program has menus, sub-menus, check-items, and dialogue boxes to ease operation.
The internal graphics are suitable for publication, and can be easily imported
into illustration or animation programs for further enhancements.
    </p>
  </li>

  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/software/DGRFN.tar">
      <h2 id="DGRFN">Direct Green&rsquo;s Function Synthetic Seismograms</h2>
      <img class="left" src="images/DGRFN.png" alt="Logo" width="144" height="104"/>
    </a>
    <table>
     <tr>
       <th>Author:</th>
       <td><a href="mailto:fpollitz@usgs.gov">Fred Pollitz</a></td>
     </tr>
     <tr>
       <th>Usage:</th>
       <td>Calculate synthetic seismograms on a radially stratified model</td>
     </tr>
     <tr>
       <th>Platform:</th>
       <td>Unix, Fortran source codes</td>
     </tr>
     <tr>
       <th>Input:</th>
       <td>Elastic parameters, density, Qp and Qs structure, finite fault parameters</td>
     </tr>
     <tr>
       <th>Output:</th>
       <td>Synthetic seismograms at Earth&rsquo;s surface or specified depth</td>
     </tr>
     <tr>
       <th>Download:</th>
        <td><a href="ftp://hazards.cr.usgs.gov/web/software/DGRFN.tar">DGRFN.tar</a> (1.6 MB)</td>
     </tr>
    </table>
    <p>
     These programs are an implementation of the Direct Green&rsquo;s Function
     method described by Friederich and Dalkolmo (1995) and Dalkolmo (1993).
     They solve the seismic wave equation in a spherically layered isotropic
     medium using a decomposition into spheroidal and toroidal motions.  For
     each spherical harmonic degree l and azimuthal order number m, the (l,m)
     response function is deternined subject to jumps in the displacement-stress
     vector at the source radius, a zero-traction boundary condition at
     Earth&rsquo;s surface, and a homogeneous isotropic elastic solid at the
     base of the specified Earth model. The computation of synthetics is stable
     at both high and low frequencies, as well as at high and low spherical
     harmonic degrees.
    </p>
  </li>

<!-- commented out until a bug is fixed at Spudich's request (2013-06-06)
<li><a name="isodirect"></a>
<h2>Earthquake Directivity Model</h2>
<a href="/research/software/isodirect/"><img class="left" src="images/isodirect.jpg" alt="Logo" width="144" height="130" /></a>
<table cellspacing="1" class="tabular">
  <tr>
    <th>Author:</th>
    <td><a href="mailto:spudich@usgs.gov">Paul Spudich</a></td>
  </tr>
  <tr>
    <th>Usage:</th>
    <td>Calculate seismic directivity</td>
  </tr>
  <tr>
    <th>Platform:</th>
    <td>Any platform running MATLAB</td>
  </tr>
  <tr>
    <th>Interface:</th>
    <td>MATLAB command line</td>
  </tr>
  <tr>
    <th>Input:</th>
    <td>Function calling arguments</td>
  </tr>
  <tr>
    <th>Output:</th>
    <td>.txt and .mat files</td>
  </tr>
  <tr>
    <th>Download:</th>
    <td><a href="/research/software/isodirect/">See online documentation</a></td>
  </tr>
</table>
<p>Isodirect1 is a MATLAB-language function for modeling seismic directivity at user-selected sites around a user-defined fault.  Isodirect1.m implements the Spudich and Chiou (Earthquake Spectra, 2008) directivity model.  The results of isodirect1.m should be combined with the ground motion predictions of a non-directive predictive model like any of the four NGA models.  Input to isodirect1.m consists of the coordinates of a set of sites where directivity predictions are desired, the coordinates of the corners of one or more fault segments, hypocenter location, earthquake magnitude and slip rake, desired periods for output.  Output consists of directivity amplifications for all input sites, plus many intermediate results, such as the points on the fault closest to the input sites, rupture distances, etc.</p>
</li>
-->

  <li>
    <a href="/research/software/eids/">
      <h2 id="EIDS">EIDS - Earthquake Information Distribution System</h2>
    </a>
    <table>
      <tr>
        <th>Contacts:</th>
        <td><a href="mailto:jmfee@usgs.gov">Jeremy Fee</a> and <a href="mailto:oppen@usgs.gov">Dave Oppenheimer</a></td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Distribution of earthquake data over the Internet</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Any O/S that supports Java</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Runs in background</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Files containing information about earthquakes</td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="/research/software/eids/">See online documentation</a></td>
      </tr>
    </table>
    <p>
      NOTE: EIDS has been replaced by <a href="#PDL">PDL</a>.  EIDS is only needed as a component of PDL for advanced users who are running a PDL hub.
    </p>
    <p>
      The Earthquake Information Distribution System (EIDS) provides a method for receiving earthquake data over the Internet in near-real time.  EIDS replaces the Quake Data Distribution System (QDDS) and provides either CUBE or EQXML formatted output messages.
    </p>
  </li>

  <li>
    <h2 id="est_noise">Est_noise</h2>
    <a href="https://escweb.wr.usgs.gov/share/langbein/Web/OUT/est_noise/">
      <img src="images/est_noise.png" alt="Logo" width="150"/>
    </a>
    <table>
      <tr>
        <th>Author:</th>
        <td>John Langbein</td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Analyze time-series data to quantify temporal correlations and
      simultaneously estimate rates, offsets, and other functional dependencies.</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix or Mac. Requires a Fortran compiler
      </td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line</td>
      </tr>
      <tr>
        <th>Input:</th>
        <td>Time series data</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Measures of power-law noise, white noise, and more.
      Estimates of rates, offsets, and more, along with their standard errors.</td>
      </tr>
      <tr>
        <th>Download</th>
        <td><a href="https://escweb.wr.usgs.gov/share/langbein/Web/OUT/est_noise/">est_noise.tar.gz</a></td>
      </tr>
    </table>
    <p>
      est_noise is a time-series analysis program that allows the user to fit
      various, standard functions to their data (rates, offsets, rate-changes,
      sinusoidals, exponentials, and/or user-defined functions) and
      simultaneously quantifies the amount of temporal correlation in the
      time-series data. Importantly, the presence of temporal correlations in
      data can significantly impact the estimates of standard errors of the
      parameters that define the functions describing the time-variations in the
      data. est_noise is bundled with other programs that can help the user to
      clean up their data prior to analysis, and assess the quality of the
      estimates of noise from est_noise. est_noise has been used to analyze GPS
      and borehole strainmeter data, and it can be applied to other data types.
    </p>
  </li>

  <li>
    <a href="ftp://ehzftp.wr.usgs.gov/oppen/fpfit/fpfit.txt">
      <h2 id="FPFIT, FPPLOT and FPPAGE">FPFIT, FPPLOT and FPPAGE</h2>
      <img src="images/beach_ball.gif" alt="Logo" width="100" height="120" />
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td>Paul Reasenberg and <a href="mailto:oppen@usgs.gov">David Oppenheimer</a></td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Calculate and plotfault-plane solutions from first-motion
          data</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Grahics and text</td>
      </tr>
      <tr>
        <th>Manual:</th>
        <td>Online <a href="ftp://ehzftp.wr.usgs.gov/oppen/fpfit/fpfit.txt">documentation</a> and <a href="ftp://ehzftp.wr.usgs.gov/oppen/fpfit/OFR_85-739.doc">USGS Open-File report</a></td>
      </tr>
      <tr>
        <th>Tutorial:</th>
        <td>Included in dowload file</td>
      </tr>
     <tr>
        <th>Download:</th>
        <td><a href="ftp://ehzftp.wr.usgs.gov/oppen/fpfit/fpfit_source.tar">fpfit_source.tar</a> (1.3 MB)</td>
      </tr>
    </table>
    <p>
      FPFIT is a Fortran program that computes double-couple fault
        plane solutions from P-wave first motion data using a grid
        search method. The companion programs FPPLOT and FPPAGE plot
        the results on stereo nets for interactive viewing or for
        printing. There are additional programs in the package to
        create summary tables and to plot P&amp;T axes for suites
        of mechanisms on stereo nets.
    </p>
  </li>

  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/software/GMPE-GK2015.zip">
      <h2 id="gmpe">Graizer-Kalkan (2015) Ground-Motion Prediction Equation</h2>
      <img src="images/gmpe.png" alt="logo" width="150"/>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td>Vladimir Graizer, <a href="mailto:ekalkan@usgs.gov">Erol Kalkan</a></td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Ground motion predictions for engineering applications</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>MatLAB on Windows, Mac or Linux</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Graphics and text</td>
      </tr>
      <tr>
        <th>Manual:</th>
        <td>Comments in source code; <a href="https://pubs.usgs.gov/of/2015/1009/">Open-File Report</a> and <a href="ftp://hazards.cr.usgs.gov/web/software/GMPE-2016_Graizer_Kalkan_BSSA.pdf">BSSA article</a></td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="ftp://hazards.cr.usgs.gov/web/software/GMPE-GK2015.zip"</a> (7.1 Kb)</td>
      </tr>
    </table>
    <p>
      Graizer-Kalkan (2015) ground motion prediction equation (GMPE) is designed to predict peak-ground acceleration and 5% damped pseudo-spectral acceleration response ordinates for shallow-crustal continental earthquakes to be used in earthquake-engineering applications including probabilistic and deterministic seismic hazard analyses. The GK15 can be used for earthquakes with moment magnitudes 5.0&ndash;8.0, distances 0&ndash;250 km, average shear-wave velocities 200&ndash;1,300 m/s, and spectral periods 0.01&ndash;5 s.  The GK15 GMPE is coded as a MatLAB function (titled &ldquo;GK15.m&rdquo;) in the zip file. An example MatLAB code (&ldquo;runGK15.m&rdquo;) to generate a 5% damped pseudo-spectral acceleration response spectrum for a given hazard condition is also provided. The user can change the input parameters to construct a site-specific response spectrum considering different hazard conditions.
    </p>
  </li>

  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/software/hash.v1.2.tar.gz">
      <h2 id="HASH">HASH 1.2</h2>
      <img src="images/HASH.gif" alt="Hash Logo" width="120" height="145"/>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td><a href="mailto:jhardebeck@usgs.gov">Jeanne Hardebeck</a> and Peter Shearer</td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Calculates earthquake focal mechanisms</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line / text input files</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Text files</td>
      </tr>
     <tr>
        <th>Download:</th>
        <td><a href="ftp://hazards.cr.usgs.gov/web/software/hash.v1.2.tar.gz">hash.v1.2.tar.gz</a> (1.1 MB)</td>
      </tr>
    </table>
    <p>
      HASH is a Fortran 77 code that computes double-couple earthquake
        focal mechanisms from P-wave first motion polarity observations,
        and optionally S/P amplitude ratios. HASH is designed to produce
        stable high-quality focal mechanisms, and tests the solution sensitivity
        to possible errors in the first-motion input and the computed
        take-off angles. The technique is described by Hardebeck and Shearer
        (BSSA 92, pp. 2264-2276, 2002.) Examples are provided for data in FPFIT
        input format. The code is designed to be as input-format independent
        as possible, so only minor editing is needed to use data in
      other formats.
    </p>
  </li>

  <li>
    <a href="http://www.ldeo.columbia.edu/~felixw/hypoDD.html">
      <h2 id="hypoDD">HypoDD</h2>
      <img src="images/doublediff2_sm.gif" alt="HypoDD Logo" width="120" height="206"/>
    </a>
    <table>
      <tr>
        <th>Author:</th>
        <td><a href="mailto:felixw@ldeo.columbia.edu">Felix Waldhauser</a></td>
      </tr>
      <tr>
        <th>Maintenance:</th>
        <td><a href="mailto:felixw@ldeo.columbia.edu">Felix Waldhauser</a>, <a href="mailto:julian@usgs.gov">Bruce Julian</a>, <a href="mailto:ellsworth@usgs.gov">Bill Ellsworth</a>, Keith Richards-Dinger </td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Implements the double-difference earthquake location algorithm</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line / text input files</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Text files</td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="http://www.ldeo.columbia.edu/~felixw/hypoDD.html">hypoDD</a></td>
      </tr>
    </table>
    <p>
      HypoDD is a Fortran computer program package for relocating
        earthquakes with the double-difference (DD) algorithm of Waldhauser
        and Ellsworth (2000). The DD technique takes advantage of
        the fact that if the hypocentral separation between two earthquakes
        is small compared to the event-station distance and the scale
        length of velocity heterogeneity, then the ray paths between
        the source region and a common station are similar along almost
        the entire ray path (Frechet, 1985; Got et al., 1994).
    </p>
  </li>

  <li>
    <h2 id="HYPOINVERSE">HYPOINVERSE Earthquake Location</h2>
    <a href="ftp://ehzftp.wr.usgs.gov/klein/hyp1.40">
      <img src="images/hypo.gif" alt="Logo" width="119" height="127"/>
    </a>
    <table>
      <tr>
        <th>Author:</th>
        <td><a href="mailto:klein@usgs.gov">Fred Klein</a></td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Locate earthquakes and determine magnitudes in a local
          or regional seismic network</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix or Vax, Fortran source code</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line, files or keyboard</td>
      </tr>
      <tr>
        <th>Input:</th>
        <td>ASCII text</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>ASCII text</td>
      </tr>
      <tr>
        <th>Manual:</th>
        <td>Extensive open-file document, in Microsoft Word and
          postscript formats</td>
      </tr>
      <tr>
        <th>Tutorial:</th>
        <td>Simple examples included in manual </td>
      </tr>
      <tr>
        <th>Download:</th>
        <td>
          <a href="ftp://ehzftp.wr.usgs.gov/klein/hyp1.40">version 1.4</a> (9.0 MB)<br />
        </td>
      </tr>
    </table>
    <p>
      HYPOINVERSE2000 determines earthquake locations and magnitudes
from seismic network data like first-arrival P and S arrival
times, amplitudes and coda durations. The present versions
HYPOINVERSE2000 (version 1.2 or 1.3) are in routine use by many networks. Hypoinverse version 1.3 is the standard
location program supplied with the Earthworm seismic acquisition
and processing system (AQMS) and has thus gotten wide use. Crustal
models can be multiple to cover different regions, and either
flat layer or flat layer with linear velocity gradients. Version 1.3
also supports negative magnitudes, independent S models, and crustal models from the HYPOELLIPSE program, including layer models, gradient over halfspace models, depths relative to sea level, negative depths above sea level, and use of station elevations. It is Y2000 compatible.
    </p>
  </li>

  <li>
    <h2 id="MacR1D">MacR1D</h2>
    <a href="ftp://hazards.cr.usgs.gov/web/software/MacR1D-V1.17-Executables.tar.gz">
      <img src="images/MacR1D.gif" alt="Ray Tracing Logo" width="120" height="140"/>
    </a>
    <table>
      <tr>
        <th>Author:</th>
        <td><a href="mailto:luetgert@usgs.gov">Jim Luetgert</a></td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>1-D travel time calculation</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Mac OS X</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Menu driven</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>PICT file</td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="ftp://hazards.cr.usgs.gov/web/software/MacR1D-V1.17-Executables.tar.gz">MacR1D V1.17</a> (1.6 MB)</td>
      </tr>
    </table>

    <p>
      MacR1D is a one-dimensional seismic travel-time calculator for Macintosh.
      Travel-times vs distance are calculated for P and S arrivals (sorry, no
      converted phases or multiples) for sources at any depth. These may be
      compared to observed travel-times. This is a very quick way to define 1-d
      velocity models from observed arrival pics.
    </p>
  </li>

  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/software/MacRay-V2.29-Executables.tar.gz">
      <h2 id="Ray">MacRay</h2>
      <img src="images/MacRay.gif" alt="Ray Tracing Logo" width="100" height="80"/>
    </a>
    <table>
      <tr>
        <th>Author:</th>
        <td><a href="mailto:luetgert@usgs.gov">Jim Luetgert</a></td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>General purpose 2-D seismic seismic ray tracer</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Mac OS X or PC</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Menu driven</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>PICT file</td>
      </tr>
      <tr>
        <th>Download:</th>
        <td>Mac OS X - <a href="ftp://hazards.cr.usgs.gov/web/software/MacRay-V2.29-Executables.tar.gz">MacRay V2.29</a> (3.5 MB); PC - <a HREF="ftp://ehzftp.wr.usgs.gov/luetgert/software/Macintosh_Software/RAY84PC.zip">RAY84PC</a> (1.2 MB)</td>
      </tr>
    </table>
    <p>
      MacRay is a general purpose two-dimensional seismic ray-tracer for
      Macintosh. Originally written to trace rays through 2-dimensional p-wave
      models, MacRay has grown to support 2-d models defined in Vp, Vs and
      density.  In addition to being able to model the full range of simple to
      complex raypaths, the 2-d gravity response of the model may also be
      calculated. For surveys providing seismic P, S and converted wave arrivals
      in addition to gravity measurements, the full suite of physical properties
      may be modeled; Vp, Vs, density, Poisson's ratio, Vp/Vs, Shear modulus,
      Bulk modulus, Young's modulus, Lame's parameter, lithostatic pressure.
    </p>
    <p>
      With the addition of an assumed or measured geothermal gradient, we can model the pressure and temperature conditions at any point in our earth model.  A recent addition to MacRay allows you to define the features of a pressure-temperature diagram (e.g. metamorphic grade, solidus) and map those P-T regions back into the earth model.
    </p>
    <p>
      The PC version is a port of Ray84 written for Vax. It was ported by <a HREF="mailto:ht@seis.geol.ku.dk">Hans Thybo</a> of Copenhagen University, Denmark.
    </p>
  </li>

  <li>
    <h2 id="nshmp">NSHMP Models, Codes and Catalogs - National Seismic Hazard Mapping Project</h2>
    <a href="https://github.com/usgs/nshmp-haz">
    <img src="images/hazmap-2x.gif" alt="US hazard map" width="120"/></a>
    <table>
      <tr>
        <th>Author:</th>
        <td>National Seismic Hazard Mapping Project</td>
      </tr>
      <tr>
        <th>Downloads:</th>
        <td>
          <ul>
            <li><a href="https://github.com/usgs/nshmp-haz">NSHMP Hazard Codes github repository</a></li>
            <li><a href="https://github.com/usgs/nshmp-model-cous-2014">NSHMP Hazard Model for Conterminous U.S. - 2014 github repository</a></li>
            <li><a href="https://github.com/usgs/nshmp-model-cous-2008">NSHMP Hazard Model for Conterminous U.S. - 2008 github repository</a></li>
            <li><a href="https://github.com/usgs/nshmp-haz-catalogs">NSHMP Hazard Catalogs github repository</a></li>
          </ul>
        </td>
       </tr>
    </table>
    <p>
      Models, Codes and Catalogs used to produce the National Seismic Hazard Maps.
    </p>
  </li>

  <li>
    <a href="http://www.opensha.org/">
    <h2 id="OpenSHA">OpenSHA</h2>
      <img src="images/OpenSHA_logo_sm.jpg" alt="OpenSHA Logo" width="120" height="92"/>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td><a href="mailto:field@usgs.gov">Ned Field (USGS/SCEC)</a>,
  Nitin Gupta (USC/SCEC), Vipin Gupta (USC/SCEC), Peter Powers, Kevin Miner, and others.</td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Open-source seismic hazard analysis</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Any O/S that supports Java</td>
      </tr>
      <tr>
        <th>Manual:</th>
        <td><a href="http://www.opensha.org/">See online documentation</a></td>
      </tr>
     <tr>
        <th>Download:</th>
        <td><a href="http://www.opensha.org/">See online documentation</a></td>
      </tr>
    </table>
    <p>
      OpenSHA is an effort to develop object-oriented, web- & GUI-enabled, open-source, and freely available code for conducting Seismic Hazard Analyses (SHA).  Our goal is to provide a framework where any arbitrarily complex (e.g., physics based) earthquake-rupture forecast, ground-motion, or engineering-response model can &ldquo;plug in&rdquo; for analysis without having to change what&rsquo;s being plugged into.
    </p>
  </li>
  <li>

  <li>
    <a href="https://github.com/usgs/pdl">
    <h2 id="pdl">PDL</h2>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td><a href="mailto:jmfee@usgs.gov">Jeremy Fee</a>/td>
      </tr>
      <tr>
         <th>Download:</th>
         <td><a href="https://github.com/usgs/pdl">PDL github repository</a></td>
       </tr>
    </table>
    <p>
      The Product Distribution Layer (PDL) is a USGS platform for receiving earthquake data over the Internet in near-real time.  PDL provides standard solutions for distribution, cataloging, and triggered processing, of earthquake information.  It is cross platform, and integrates with external systems using Command Line or Java APIs.
    </p>
    <p>
      PDL replaces the Earthquake Information Distribution System (EIDS) and Quake Data Merge (QDM) applications.
    </p>  </li>

  <li>
    <a href="ftp://ehzftp.wr.usgs.gov/shaefner/PphasePicker.zip">
      <h2 id="PPHASEPICKER">P-Phase Picker</h2>
      <img src="images/logo.png" alt="phasepicker logo" width="150"/>
    </a>
    <table>
     <tr>
       <th>Author:</th>
       <td><a href="https://profile.usgs.gov/ekalkan">Erol Kalkan</a></td>
     </tr>
     <tr>
       <th>Usage:</th>
       <td>Automatic P-phase arrival time picker</td>
     </tr>
     <tr>
       <th>Platform:</th>
       <td>Windows, Mac or Linux</td>
     </tr>
     <tr>
       <th>Interface:</th>
       <td>MatLAB command line</td>
     </tr>
     <tr>
       <th>Output:</th>
       <td>Graphics and text</td>
     </tr>
     <tr>
       <th>Manual:</th>
       <td>Comments in source code; and BSSA article in zip file</td>
     </tr>
     <tr>
       <th>Download:</th>
       <td><a href="ftp://ehzftp.wr.usgs.gov/shaefner/PphasePicker.zip">PphasePicker.zip</a> (8.2 MB)</td>
     </tr>
    </table>
    <p>
       P<sub>PHASE</sub>P<sub>ICKER</sub> is a powerful tool for automatically picking P-phase onsets with high precision without requiring detection interval or threshold settings. The algorithm detects P-phase onset in single-component acceleration or broadband velocity records using the histogram method. P<sub>PHASE</sub>P<sub>ICKER</sub> has been integrated into the &ldquo;Automated Processing and Review Interface for Strong Motion Data (PRISM)&rdquo; software of the U.S. Geological Survey in order to identify the pre-event time-window for systematic and automated processing of large numbers of accelerograms. P<sub>PHASE</sub>P<sub>ICKER</sub> is written in Java and MatLAB. An example MatLAB code is provided in zip file to show how to run P<sub>PHASE</sub>P<sub>ICKER</sub> using a sample waveform. Its MatLAB version requires MatLAB&rsquo;s signal processing toolbox.
    </p>
  </li>

  <li>
    <a href="pqlx.php">
      <h2 id="PQLX">PQLX</h2>
      <img src="images/pqlx_sm.jpg" alt="PQLX"/>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td>
          <a href="mailto:mcnamara@usgs.gov">Dan McNamara</a>, Richard Boaz
        </td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Evaluate seismic station performance</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>GUI</td>
      </tr>
      <tr>
        <th>Input:</th>
        <td>standard seismic data formats</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>MySQL database, images, plots</td>
      </tr>
      <tr>
        <th>Examples:</th>
        <td><a href="pqlx.php">See sample data and response file</a></td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="pqlx.php">See online documentation</a></td>
      </tr>
    </table>
    <p>
      PQLX  is open-source software system for evaluating seismic station
      performance and data quality. The software consists of a server and
      client but also includes data extraction and manipulation tools. Given
      waveform data and instrument response files, PQLX server calculates trace
      statistics, Power Spectral Densities (PSD), and Probability Density
      Functions (PDF) and writes the results to a MySQL database for quick
      access.
    </p>
  </li>

  <li>
    <a href="prism/">
      <h2 id="Prism">Prism: Processing and Review Interface for Strong Motion Data</h2>
      <img src="prism/prism.png" alt="Prism logo" width="150">
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td><a href="mailto:jmjones@usgs.gov">Jeanne Jones</a>, <a href="https://profile.usgs.gov/ekalkan">Erol Kalkan</a>, <a href="mailto:cdstephens@usgs.gov">Christopher Stephens</a> and <a href="mailto:png@usgs.gov">Peter Ng</a></td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Automatically process raw strong-motion records in COSMOS V0 format
          and generate COSMOS V1, V2 and V3 products.</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Windows, Mac or Linux</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line and GUI</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Graphics and text files</td>
      </tr>
      <tr>
        <th>Manual:</th>
        <td>Open file reports and Javadoc</td>
      </tr>
      <tr>
        <th>Release Date</th>
        <td>Version 1.0, February 2017</td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="prism/">See online documentation</a></td>
      </tr>
    </table>
    <p>PRISM is open-source software used for automatically processing strong-motion records, and is intended to be used by individuals or strong-motion networks. The software package includes a review tool, which is an interactive graphical user interface (GUI) for visually inspecting, editing and processing. PRISM is coded in Java language, and does not dependent on closed-source or proprietary software.</p>
    <p>PRISM is easy to install and run as a stand-alone system on common operating systems such as Linux, Mac and Windows.</p>
    <p>PRISM was designed to be flexible and extensible in order to accommodate implementation of new processing techniques. Strong-motion processing steps in the automated workflow are clearly defined, and use a set of customizable parameters—specified in a configuration file—to generate COSMOS V1 (acceleration with mean removed), V2 (baseline-corrected and filtered acceleration, velocity and displacement), and V3 (response spectra, Fourier spectra and intensity measures) data products.</p>
  </li>

  <li>
    <a href="https://github.com/usgs/ps2ff">
      <h2 id="ps2ff">PS2FF</h2>
      <img src="images/ps2ff.png" alt="PS2FF"/>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td>
          <a href="mailto:emthompson@usgs.gov">Eric Thompson</a>, Charles Worden
        </td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Produce approximated rupture distances from point source information</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>OSX or Linux</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line</td>
      </tr>
      <tr>
        <th>Input:</th>
        <td>config_file.ini file</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>CSV file</td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="https://github.com/usgs/ps2ff">ps2ff github repository</a></td>
      </tr>
    </table>
    <p>
      Produce approximated finite fault distances and variance corrections given point source information, for example, Repi (epcentral distance) to Rjb (Joyner-Boore distance) or Rrup (closest distance to rupture).
    </p>

  </li>

<!-- commented out with permission of Paul Earle on 08/08/2012

<li><a name="QDDS" id="QDDS"></a>
<h2>Quake Data Distribution System (QDDS)</h2>
  <a href="#EIDS"><img class="left" src="images/QDDS.gif" alt="QDDS Logo" width="120" height="120" /></a>
  <table cellspacing="1" class="tabular">
    <tr>
      <th>Contacts:</th>
      <td><a href="mailto:oppen@usgs.gov">Dave Oppenheimer</a></td>
    </tr>
    <tr>
      <th>Usage:</th>
      <td>Distribution of earthquake data over the Internet</td>
    </tr>
    <tr>
      <th>Platform:</th>
      <td>Any O/S that supports Java</td>
    </tr>
    <tr>
      <th>Interface:</th>
      <td>Runs in background</td>
    </tr>
    <tr>
      <th>Output:</th>
      <td>Files containing information about earthquakes</td>
    </tr>
    <tr>
      <th>Examples:</th>
      <td>Included in dowload file</td>
    </tr>
    <tr>
      <th>Download:</th>
      <td><a href="#EIDS">QDDS has been replaced by EIDS</a></td>
    </tr>
  </table>
  <p>The Quake Data Distribution System (QDDS) provides a method
        for distributing earthquake data over the Internet in near-real
        time using a structure similar to a classical client-server
        system called a hub-leaf system. Leaves are of two types &mdash;
        transient and permanent. Transient leaves can only receive
        messages distributed by the hubs. Transient leaves can self-register
        with the hubs and immediately begin receiving earthquake information.
        Permanent leaves (i.e., seismic networks) can also originate
        information and send it to one or more hubs for redistribution
        to permanent and transient leaves.</p>
  <p><a href="#EIDS">QDDS has been replaced by EIDS</a></p>
</li>
<li><a name="QDM" id="QDM"></a>
<h2>Quake Data Merge Real Time Merged Catalog (QDM)</h2>
  <a href="ftp://ehzftp.wr.usgs.gov/QDM/QDM.html"><img class="left" src="images/QDM.gif" alt="QDM Logo" width="120" height="120" /></a>
  <table cellspacing="1" class="tabular">
    <tr>
      <th>Contacts:</th>
      <td><a href="mailto:AlanJones@stny.rr.com">Alan Jones</a> and <a href="mailto:oppen@usgs.gov">Dave Oppenheimer</a></td>
    </tr>
    <tr>
      <th>Usage:</th>
      <td>Produces a single, merged earthquake catalog using
            the most authoritative earthquake information</td>
    </tr>
    <tr>
      <th>Platform:</th>
      <td>Any O/S that supports Java</td>
    </tr>
    <tr>
      <th>Interface:</th>
      <td>Runs in background</td>
    </tr>
    <tr>
      <th>Output:</th>
      <td>Files containing information about earthquakes</td>
    </tr>
    <tr>
      <th>Examples:</th>
      <td>Included in dowload file</td>
    </tr>
    <tr>
      <th>Download:</th>
      <td><a href="ftp://ehzftp.wr.usgs.gov/QDM/QDM.html">See online documentation</a></td>
    </tr>
  </table>
  <p>The Quake Data Merge Real Time Merged Catalog (QDM) software
        receives earthquake summary information and additional text
        from seismographic networks, eliminates duplicate and redundant
        information reported by different seismic networks, and produces
        a single, authoritative earthquake catalog. The process to
        generate this &ldquo;composite&rdquo; catalog follows selection rules
        set out by the ANSS to determine which earthquake information
        has the most authoritative information. This catalog can
        be used as input to other applications that require access
        to earthquake information in near-real time. The most likely
        method for receiving the event and text information is through
        the <a href="#QDDS">QDDS system</a>.</p>
</li>

-->

<!-- Commented out until an OSX port is ready (at Luetgert's request)
<li><a name="Range" id="Range"></a>
<h2>Range</h2>
  <img class="left" src="images/globe_arrow.gif" alt="Range Logo" width="92" height="92" />
  <table cellspacing="1" class="tabular">
    <tr>
      <th>Author:</th>
      <td><a href="mailto:luetgert@usgs.gov">Jim Luetgert</a></td>
    </tr>
    <tr>
      <th>Usage:</th>
      <td>Calculates distance and azimuth between two points</td>
    </tr>
    <tr>
      <th>Platform:</th>
      <td>Mac OS9</td>
    </tr>
    <tr>
      <th>Interface:</th>
      <td>Menu driven</td>
    </tr>
    <tr>
      <th>Output:</th>
      <td>ASCII text</td>
    </tr>
    <tr>
      <th>Manual:</th>
      <td>ASCII text</td>
    </tr>
   <tr>
      <th>Download:</th>
      <td><a href="ftp://ehzftp.wr.usgs.gov/luetgert/software/Macintosh_Software/Range.sea.hqx">Range.sea.hqx</a> (200 Kb)</td>
    </tr>
  </table>
  <p>Range is a utility program for calculating the distance,
        azimuth and back azimuth between two points. The principal
        window is largely self-explanatory, allowing the user to specify
        the display mode for Latitude/Longitude pairs, etc. A secondary
        dialog window allows you to specify the ellipsoid and units
        to be used for the conversion. A text window is used to save
        calculated values in a log.</p>
</li>
-->

  <li>
    <a href="https://github.com/usgs/Quakeml">
      <h2>Quakeml</h2>
      <img src="images/quakeml.gif" alt="screenshot of XML" width="120"/>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td>ANSS QuakeML Standards Working Group</td>
      </tr>
      </tr>
        <th>Download:</th>
        <td><a href="https://github.com/usgs/Quakeml">Quakeml github repository</a></td>
      </tr>
    </table>
    <p>A uniform ANSS standard for seismic parametric data.</p>
  </li>

  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/software/SATSI_140818.tar.gz">
      <h2 id="SATSI">SATSI</h2>
      <img src="images/satsi.jpg" alt="SATSI Logo" width="120" height="111"/>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td><a href="mailto:jhardebeck@usgs.gov">Jeanne Hardebeck</a> and Andy Michael</td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Spatially and/or temporally varying stress field from focal mechanisms</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix (or any platform with C)</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line / text input files</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Text files</td>
      </tr>
     <tr>
        <th>Download:</th>
        <td><a href="ftp://hazards.cr.usgs.gov/web/software/SATSI_140818.tar.gz">SATSI_140818.tar.gz</a> (63kB)</td>
      </tr>
    </table>
    <p>
      SATSI (Spatial And Temporal Stress Inversion) is a modified version of Michael's (JGR 1984, 1987) code that inverts focal mechanism data for a spatially and/or temporally varying stress field.  The inversion finds the least complex stress field model that is consistent with the data.  It uses an adaptive smoothing method that discriminates between variations that are or aren't strongly required by the data and retains only variations that are well-resolved.  The technique is described and validated in Hardebeck and Michael (JGR 111, B11310, doi:10.1029/2005JB004144, 2006.)  The tar file contains C codes implementing the inversion method for 2D and 4D stress fields (1D and 3D fields can be treated as simplified cases), and example input data and Perl scripts.
    </p>
  </li>

  <li>
  <a href="seisrisk.php">
    <h2 id="SeisRisk">SeisRisk III</h2>
  </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td>National Seismic Hazard Mapping Group</td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Pre-1996 and outside US seismic hazard maps</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix (or any platform with C)</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line / text input files</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Text files</td>
      </tr>
        <th>Download:</th>
        <td><a href="seisrisk.php">See online documentation</a></td>
      </tr>
    </table>
    <p>
      Seisrisk III is the last published version of a series of programs used to produce probabilistic earthquake ground motion hazard maps for the United States from 1972 to 1992.
    </p>
  </li>

  <li>
    <a href="shakecast.php">
      <h2 id="shake">ShakeCast &ndash; ShakeMap RSS Reader</h2>
      <img src="images/ShakeCast.Icon.jpg" alt="ShakeCast Logo" width="120" height="99"/>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td><a href="mailto:klin@usgs.gov">Kuo-Wan Lin</a> and David Wald</td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Automated ShakeMap delivery to users, facilitating use of ShakeMap products and post-download post-commands (script startup)</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>MS Windows operating system (XP, 7/8 Server); Linux. ShakeCast AMI (CentOS-6) using Amazon Web Services (AWS) & VM (Linux, Win Server) Interface PERL, MySQL, Apache, HTML5; responsive web</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Scripts / text configuration files</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Email & txt messaging, PDF facility report, Web-based GUI using Google Maps.</td>
      </tr>
        <th>Download:</th>
        <td><a href="shakecast.php" >See online documentation</a></td>
      </tr>
    </table>
    <p>
      Delivers maps of areas affected by an earthquake.  Areas of interest can be defined, and shaking thresholds can be set to trigger automatic notifications.  Easy to integrate with in-house systems.
    </p>
  </li>

  <li>
    <a href="https://github.com/usgs/slab2">
      <h2 id="slab2">Slab2</h2>
      <img src="images/slab2.gif" alt="example of output" width="120"/>
    </a>
    <table>
      <tr>
        <th>Author:</th>
        <td><a href="mailto:ghayes@usgs.gov">Gavin Hayes</a></td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="https://github.com/usgs/slab2">Slab2 github repository</a></td>
      </tr>
    </table>
    <p>
      A three-dimensional compilation of global subduction geometries, separated into regional models for each major subduction zone.
    </p>
  </li>

  <li>
    <h2 id="Slick">Slick Package</h2>
    <table>
      <tr>
        <th>Author:</th>
        <td><a href="mailto:michael@usgs.gov">Andy Michael</a></td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Stress inversion from slip data</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Unix, PC (or any platform with C)</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Command line, can be run as batch mode</td>
      </tr>
      <tr>
        <th>Bound Program:</th>
        <td><a href="ftp://ehzftp.wr.usgs.gov/michael/software/onnet">Onnet</a>, Stereonet
          plotting package</td>
      </tr>
      <tr>
        <th>Output:</th>
        <td>Text, graphics via onnet stereonet plotting program</td>
      </tr>
      <tr>
        <th>Manual:</th>
        <td>ASCII Text and Postscript files in included in download
          file</td>
      </tr>
      <tr>
        <th>Tutorial:</th>
        <td>Included in download file</td>
      </tr>
      <tr>
        <th>Download:</th>
        <td>Unix - <a href="ftp://ehzftp.wr.usgs.gov/michael/software/stress.tar.Z">stress.tar.Z</a> (41k); PC - <a href="ftp://ehzftp.wr.usgs.gov/michael/software/stresspc.zip">stresspc.zip</a> (160k)</td>
      </tr>
    </table>
    <p>The slick package uses fault slip data (either field observations
        or from focal mechamism) to find the stress tensor that best
        explains the observations. Inputs are the orientation and
        slip direction of a set of fault planes. Outputs are the oreintation
        and shape of the stress ellipsoid, including confidence regions,
        and statistics used to judge the success of the inversion.
        This method uses the linear inversion agorithm and non-parametric
        bootstrap statistics.
    </p>
    <p>
        Unix: The code to invert fault slip data for the stress tensor.
        format is compressed tar. To extract on a Unix system use
        the command % zcat stress.tar.Z | tar xf - It will expand
        into a number of files in your current directory. You also
        need to get the <a href="ftp://ehzftp.wr.usgs.gov/michael/software/onnet">onnet
        plotting package</a>.
    </p>
    <p>
        PC:Same as stress.tar.Z but containing Leigh House
        of Los Alamos' conversion of the software to PC compatibility.
        The zip was done with Zip 1.0 (29 September 1991).
    </p>
  </li>

  <li>
    <a href="https://pubs.usgs.gov/tm/12b1/">
      <h2 id="SLAMMER">SLAMMER - Seismic Landslide Movement Modeled using Earthquake Records</h2>
      <img src="images/SLAMMERicon.jpg" alt="Logo" width="120" height="120"/>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td><a href="mailto:jibson@usgs.gov">Randall W. Jibson</a>, Ellen M. Rathje, Matthew W. Jibson and Yong W. Lee</td>
      </tr>
      <tr>
        <th>Usage:</th>
        <td>Estimate co-seismic landslide displacement using rigid and flexible sliding-block analyses</td>
      </tr>
      <tr>
        <th>Platform:</th>
        <td>Any O/S that supports Java (version 7 or later)</td>
      </tr>
      <tr>
        <th>Interface:</th>
        <td>Java GUI</td>
      </tr>
      <tr>
        <th>Download:</th>
        <td><a href="https://pubs.usgs.gov/tm/12b1/">https://pubs.usgs.gov/tm/12b1/</a></td>
      </tr>
    </table>
    <p>
      SLAMMER is a Java program that facilitates performing a variety of
      sliding-block analyses to evaluate seismic slope performance.
      Functionalities include both rigorous and simplified analyses of rigid
      sliding blocks (i.e. Newmark analysis) and flexible sliding blocks (i.e.
      decoupled and fully coupled approaches). Both rigorous and empirical
      simplified methods are included in the program. More than 2,100 recorded
      ground motions from the PEER Ground Motion Database are included with
      the program, and users can import their own ground-motion records for
      analysis.
    </p>
  </li>

  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/software/STATIC1D.tar.gz">
      <h2 id="STATIC1D">STATIC1D</h2>
      <img src="images/static1d.png" width="144" height="144" alt="icon"/>
    </a>
    <table>
     <tr>
       <th>Author:</th>
       <td><a href="mailto:fpollitz@usgs.gov">Fred Pollitz</a></td>
     </tr>
     <tr>
       <th>Usage:</th>
       <td>Calculate static displacements and gravity change from earthquake faulting on a radially stratified model</td>
     </tr>
     <tr>
       <th>Platform:</th>
       <td>Unix, Fortran source codes</td>
     </tr>
     <tr>
       <th>Input:</th>
       <td>Elastic parameters, density, finite fault parameters</td>
     </tr>
     <tr>
       <th>Output:</th>
       <td>Displacements and gravity anomaly at Earth&rsquo;s surface or specified depth</td>
     </tr>
     <tr>
       <th>Examples:</th>
       <td>Contained in downloadable file</td>
     </tr>
     <tr>
       <th>Download:</th>
       <td><a href="ftp://hazards.cr.usgs.gov/web/software/STATIC1D.tar.gz">STATIC1D.tar.gz</a> (3 MB)</td>
     </tr>
   </table>
   <p>
     These programs solve the equations of static equilibrium in a spherically
     layered isotropic medium using a decomposition into spheroidal and toroidal
     motions.  For each spherical harmonic degree l and azimuthal order number
     m, the (l,m) response function is deternined subject to jumps in the
     displacement-stress vector at the source radius, a zero-traction boundary
     condition at Earth&rsquo;s surface, and a homogeneous isotropic elastic
     solid at the base of the specified Earth model. The programs are flexible,
     being suitable for calculations of the static displacement field at
     distances ranging from local to global.
    </p>
  </li>

  <li>
    <a href="strainz17.php">
      <h2 id="strainz17">Strainz17: Earthquake strains and rotations</h2>
      <img src="images/strainz17.gif" width="144" alt="plot"/>
    </a>
    <table>
      <tr>
       <th>Author:</th>
       <td><a href="mailto:spudich@usgs.gov">Paul Spudich</a></td>
      </tr>
      <tr>
       <th>Usage:</th>
       <td>Calculate strains and rotations of an array</td>
      </tr>
      <tr>
       <th>Platform:</th>
       <td>Any platform running MATLAB</td>
      </tr>
      <tr>
       <th>Interface:</th>
       <td>MATLAB command line</td>
      </tr>
      <tr>
       <th>Input:</th>
       <td>Seismograms from several stations, via function&rsquo;s calling arguments</td>
      </tr>
      <tr>
       <th>Output:</th>
       <td>.txt, .mat, and .pdf files</td>
      </tr>
      <tr>
       <th>Examples:</th>
       <td>Contained in downloadable file</td>
      </tr>
      <tr>
       <th>Download:</th>
       <td><a href="strainz17.php">See online documentation</a></td>
      </tr>
    </table>
    <p>
      Strainz17.m is a MATLAB-language function for deriving the best-fitting uniform strain tensor and rigid body rotation as functions of time, based on ground displacement or velocity recordings made on an array of sensors.  Strainz17.m implements the theory in Spudich et al. (J. Geophys. Res., 1995) and Spudich and Fletcher (Bull. Seismol. Soc. Am., 2008).  In addition to the strainz1717.m function, the downloadable file provides sample input and output data, and it provides functions for running the sample test cases.
    </p>
  </li>

  <li>
    <a href="https://github.com/usgs/strec">
      <h2 id="strec">STREC - SeismoTectonic Regime Earthquake Calculator</h2>
    </a>
    <table>
      <tr>
       <th>Author:</th>
       <td><a href="mailto:mhearne@usgs.gov">Mike Hearne</a></td>
      </tr>
      <tr>
       <th>Download:</th>
       <td><a href="https://github.com/usgs/earthquake-hazard-tool">STREC github repository</a></td>
      </tr>
    </table>
    <p>
      Automatically determines the earthquake type (subduction zone interface, active crustal shallow, stable continental region, etc.) and the earthquake focal mechanism.
    </p>
  </li>

  <li>
    <a href="https://github.com/usgs/strongmotionfetch">
      <h2 id="smfetch">StrongMotion Fetch</h2>
    </a>
    <table>
      <tr>
       <th>Author:</th>
       <td><a href="mailto:mhearne@usgs.gov">Mike Hearne</a></td>
      </tr>
      <tr>
       <th>Download:</th>
       <td><a href="https://github.com/usgs/strongmotionfetch">StrongMotion Fetch github repository</a></td>
      </tr>
    </table>
    <p>
      Provides functionality to download and/or process strong motion data from various networks (Japan, New Zealand, IRIS, etc.) and save the peak ground motions in either ShakeMap "station" XML format or spreadhsheet format.
    </p>
  </li>

  <li>
    <a href="ftp://hazards.cr.usgs.gov/web/software/VISCO1D-v3-manual.pdf">
      <h2 id="VISCO1D">VISCO1D</h2>
      <img src="images/visco1d.jpg" width="144" alt="plot"/>
    </a>
    <table>
      <tr>
       <th>Author:</th>
       <td><a href="mailto:fpollitz@usgs.gov">Fred Pollitz</a></td>
      </tr>
      <tr>
       <th>Usage:</th>
       <td>Calculate displacements/velocities and strain/strain rates</td>
      </tr>
      <tr>
       <th>Platform:</th>
       <td>Unix, Fortran source codes</td>
      </tr>
      <tr>
       <th>Interface:</th>
       <td>Command line</td>
      </tr>
      <tr>
       <th>Input:</th>
       <td>Viscoelastic model parameters, finite-fault source parameters</td>
      </tr>
      <tr>
       <th>Output:</th>
       <td>Viscoelastic-relaxation deformation fields at earth&rsquo;s surface or at depth</td>
      </tr>
      <tr>
        <th>Manual:</th>
        <td><a href="ftp://hazards.cr.usgs.gov/web/software/VISCO1D-v3-manual.pdf">VISCO1D Manual</a> (1.3 MB PDF), <a href="ftp://hazards.cr.usgs.gov/web/software/VISCO1D-v3-tutorial.pdf">VISCO1D Tutorial</a> (3.4 MB PDF)</td>
      </tr>
      <tr>
       <th>Download:</th>
       <td><a href="ftp://hazards.cr.usgs.gov/web/software/VISCO1D-v3.zip">VISCO1D Software </a>(1.5 MB ZIP)</td>
      </tr>
    </table>
    <p>
      VISCO1D-v3 is a program package to calculate quasi-static deformation on a layered spherical Earth from a specified input source (fault plane parameters) at specified points on the surface or at depth.
    </p>
    <p>
      It uses a spherical harmonic expansion of the global deformation field and evaluates a sum of viscoelastic normal modes in a semi-analytic computation.
    </p>
    <p>
      Version 3 of VISCO1D-v3 is now available (updated on Jan. 29, 2007).
    </p>
  </li>

<!-- Commented out until an OSX port is ready (at Luetgert&rsquo;s request)
<li><a name="UTM" id="UTM"></a>
<h2>UTM</h2>
  <img class="left" src="images/globe.gif" alt="Logo" width="91" height="91" />
  <table cellspacing="1" class="tabular">
    <tr>
      <th>Author:</th>
      <td><a href="mailto:luetgert@usgs.gov">Jim Luetgert</a></td>
    </tr>
    <tr>
      <th>Usage:</th>
      <td>Converts coordinates to / from UTM to Lat / Long</td>
    </tr>
    <tr>
      <th>Platform:</th>
      <td>Mac OS9</td>
    </tr>
    <tr>
      <th>Interface:</th>
      <td>Menu driven</td>
    </tr>
    <tr>
      <th>Output:</th>
      <td>ASCII text</td>
    </tr>
    <tr>
      <th>Manual:</th>
      <td>ASCII text</td>
    </tr>
   <tr>
      <th>Download:</th>
      <td><a href="ftp://ehzftp.wr.usgs.gov/luetgert/software/Macintosh_Software/UTM.sea.hqx">UTM.sea.hqx</a> (150 Kb)</td>
    </tr>
  </table>
  <p>UTM is an interactive application for converting
        coordinates back and forth between Universal Transverse Mercator
        (UTM) and geographic (Latitude/Longitude). UTM provides for
        a wide selection of spheroids.</p>
</li>
-->

  <li>
    <a href="https://github.com/usgs/earthquake-global_vs30">
      <h2>Vs30 Global</h2>
    </a>
    <table>
      <tr>
        <th>Authors:</th>
        <td>Bruce Worden</td>
      </tr>
      </tr>
        <th>Download:</th>
        <td><a href="https://github.com/usgs/earthquake-global_vs30">Vs30 Global github repository</a></td>
      </tr>
    </table>
    <p>
      Creates a global topographic-slope based Vs30 model, and then inserts regional maps into the global map where they are available.
    </p>
  </li>

</ul>
