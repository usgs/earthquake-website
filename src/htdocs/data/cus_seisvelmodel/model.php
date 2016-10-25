<?php
  // Author: Lisa Wald
  // Contact: Rob Williams, rawilliams@usgs.gov
  // Last modified: 07/18/2016
    if (!isset($TEMPLATE)) {
      $TITLE = 'CUSVM Version 1.3 Model and Documentation';
      $NAVIGATION = true;
      include 'template.inc.php';
    }
?>

<p><strong><a href="ftp://hazards.cr.usgs.gov/web/nshm/urban/cusvm1.3.tar.gz">Download CUSVM version 1.3</a></strong> (272MB)<br/>
   GeodataQ source code, surfaces,velocity grids, vs30 grids and control file
</p>

<h2>Summary and General Requirements</h2>
<p>
  The velocity model extension is:
</p>

<table>
  <tr>
    <td>Minimum longitude=</td>
    <td>-92.9</td>
  </tr>
  <tr>
    <td>Maximum longitude=</td>
    <td>-85.1</td>
  </tr>
  <tr>
    <td>Minimum latitude=</td>
    <td>33.1</td>
  </tr>
  <tr>
    <td>Maximum latitude=</td>
    <td>39.9</td>
  </tr>
  <tr>
    <td>Minimum depth=</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Maximum depth=</td>
    <td>60e3</td>
  </tr>
</table>

<p>However, If you request a value outside this region it will return a value.</p>

<p>The tarball includes all the directories with the files you will need:</p>
<ul>
  <li>Database - includes all the unconformities, horizons, and surfaces of the model as well as the velocity distributions.</li>
  <li>GeoDataQ - includes the query program "GeoDataQ", source and make files.</li>
  <li>Example - includes one example on how to query the database.</li>
  <li>GUI - a MatLab GUI that calls the system and plots cross-sections, map views, and point property profiles.</li>
  <li>Geographic_Info - geographic references used by the GUI.</li>
</ul>

<h2>How to Un-Tar and Compile</h2>
<ol>
  <li>Un-tar the files in DDDIR (or wherever you put the tar file):<br/>
    <pre> % gunzip cusvm1.3.tar.gz
          % tar -xvf cusvm1.3.tar
    </pre>
  </li>
  <li>Make executable the file compile_copy and run it:<br/>
    <pre> % chmod +x compile_copy
          % ./compile_copy
    </pre>
  </li>
  <li>Geodata must be created in GDDIR.</li>
  </ol>

<h2>Example, Input, and Output File Format (Points)</h2>
<p>
  There are several ways you can query the velocity model (lines,grids, request depth to surfaces). The most useful for wave propagation simulation grids is to request points. In order to inspect the model we recommend to use the GUI.
</p>
<p>The command line for geodataq is:</p>
<p>
  Usage: <pre> % geodataq typeofquery velorveldepthorbdrortopo db in rout</pre>
</p>
<p>where</p>
<pre>
                  typeofquery:  (0) points or (1) lines or planes
     velorveldepthorbdrortopo:  (0) velocity & density (asl)
                                (1) velocity & density (depth from surface)
                                (2) velocity & density (squeeze to msl != 1)
                                (3) elevation topo
                                (4) elevation bedrock
                                (5) depth to bedrock
                           db:  path to a database
                           in:  input file, query specifications
                         rout:  output path (directory),
                                output file named output.out
</pre>

<p>The typeofquery for points is (0). The  input file format is:</p>
<pre>
NumberOfStations
                lon_point_1  lat_point_1 elevation_or_depth_point_1
                lon_point_2  lat_point_2 elevation_or_depth_point_2

                For example, the query of two point would be:

                2
                -90.5 35.5 10
                -88.3 37.4 100
</pre>
<p>In EXAMPLES you should find a file called input_example.in.</p>

<p>The command line to run input_example.in if geodataq or geodataq.exe is in GDDIR:</p>
<pre>
        % ./geodataq 0 0 GDDIR/DATABASE/ GDDIR/EXAMPLE/input_example.in  GDDIR/
</pre>
<p>
  A file named output.out (at GDDIR) is created. The output has the same information as the input and the values of vp,vs and rho in m/s and kg/m^3. The last column indicates the unit where the point is located. The output.out file for input_example.in is:
</p>
<pre>
	-90.500000 35.500000 10.000000 1550.292660 382.796149 1667.000000 3
	-88.300000 37.400000 100.000000 2657.534211 409.354537 2139.454134 7
</pre>
<p>The damping is left as a parameter to be chosen by the user.</p>

<h2>How to Set Up the Matlab GUI for Linux</h2>

<p>
  The GUI provided in this distribution (CUSVM Version 1.3) calls the code "geodataq" and takes advantage of the built in visualization capabilities of Matlab. It is intended to serve as a help to inspect the model.
</p>

<ol>
  <li>
    From GDDIR (directory where you untar and unzip cusvm1.3.tar.gz) run:<br/>
    <pre> % chmod +x compile_copy
          % ./compile_copy
    </pre>
  </li>
  <li>
    <p>Open matlab and run:<br/>
    <pre> % cd GDDIR/GUI
          % geodataqgui
    </pre></p>
    <p><img src="images/gui.gif" alt="gui"/></p>
  </li>
  <li>
    <p>Choose the DATABASE path (Init Database).</p>
    <p><img src="images/gui_dbpath.gif" alt="gui_dbpath"/></p>
  </li>
  <li>
    <p>Add references.</p>
    <p><img src="images/gui_gpath.jpg" alt="gui_gpath"/></p>
  </li>
  <li>
    <p>Choose the type of query and the property to be displayed.</p>
    <p><img src="images/gui_queryexample.jpg" alt="gui_queryexample"/></p>
  </li>
</ol>

<h2>References</h2>
<ul class="referencelist">
	  <li>
	  Allen, T.I., and Wald, D.J. (2007). Topographic slope as a proxy
	  for global seismic site conditions (VS30) and amplification around
	  the globe: U.S. Geological Survey Open-File Report 2007-1357, 69 pp.
	  </li>
	  <li>
	  Chung, J.W and J. D. Rogers (2010). GIS-based virtual geotechnical
	  database for the St. Louis Metro Area, Environ. Eng. Geosci. 16,
	  no. 2, 143-62.
	  </li>
	  <li>
	  Cramer, C. H., J. S. Gomberg, E. S. Schweig, B. A. Waldron, and
	  K. Tucker (2004). The Memphis, Shelby County, Tennessee,
	  Seismic Hazard Maps, U.S. Geological Survey Open-File Report 04-1294
	  </li>
	  <li>
	  Ginzburg, A., W.D. Mooney,  A.W. Walter, W.J.
	  Lutter, J.H. Healy (1983). Deep structure of
	  northern Mississippi Embayment,  AAPG Bull. 67, 2031-2046.
	  </li>
	  <li>
	  Gomberg, J., B. Waldron, E. Schweig, H. Hwang, A. Webbers,
	  R. Van Arsdale, K. Tucker, R. Williams, R. Street, P. Mayne,
	  W. Stephenson, J. Odum,, C. Cramer, R. Updike, R. Hutson, and
	  M. Bradley (2003). Lithology and shear velocity in Memphis, Tennessee,
	  Bul. Seismol. Soc. Am. 93, 986-97.
	  </li>
	  <li>
	  Mooney, W., M. Andrews, A. Ginzburgh, D. Peters,
	  and R. Hamilton (1983). Crustal structure of the
	  Northern Mississppi embayment and a comparison
	  with other continental rift zones. Tectonophysics
	  94, 327-348.
	  </li>
	  <li>
	  Prodehl, C. J. Schlittenhardt and S.W. Stewart (1984).
	  Crustal structure of the Appalachian Highlands in Tennessee,
	  Tectonophysics 109, 1-2, 61-76.
	  </li>
	  <li>
	  Stewart, S. W. (1968). Crustal structure in Missouri by
	  seismic-refraction methods, Bull. Seism. Soc. Am. 58, 291-323.
	  </li>
</ul>
<hr/>

<p>Use of this model should reference:</p>
<ul class="referencelist">
  <li>
Ramirez-Guzman, L., Boyd, O. S., Hartzell, S., and Williams, R. A., 2012. Seismic Velocity Model of the Central United States (Version 1): Description and Simulation of the 18 April 2008 Mt. Carmel, Illinois Earthquake, Bull. Seis. Soc. Am., 102(6), 2622?2645, doi:10.1785/0120110303.  </li>
</ul>

<p>
  <b>Contact:</b>
  <a href="mailto:LRamirezG@iingen.unam.mx">Leonardo Ramirez-Guzman</a>
</p>
