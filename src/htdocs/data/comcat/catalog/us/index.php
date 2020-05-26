<?php
 $HEAD = '<link rel="stylesheet" href="pde.css"/>';
 include '../_catalog.inc.php';
?>

<h3>The Preliminary Determination of Epicenters (PDE) Bulletin</h3>

<p>The NEIC global earthquake bulletin is called the <strong>Preliminary Determination of Epicenters or PDE</strong>. We use the word "Preliminary" for our final bulletin because the Bulletin of the International Seismological Centre is considered to be the final global archive of parametric earthquake data, in other words phase arrival (“pick”)  times and amplitudes.</p>

<h2>Timeline of Data Format Availability</h2>

<table>
<tr>
  <th>Format</th>
  <th>Jan 1964</th>
  <th>Jan 1981</th>
  <th>Feb 1981</th>
  <th>Jan 1990</th>
  <th>Jan 1999</th>
  <th>Jul 2013</th>
  <th>Aug 2013</th>
  <th>Present</th>
</tr>
<tr>
  <td>scans</td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/scans/">&nbsp;</a></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/scans/">&nbsp;</a></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>mchedr</td>
  <td></td>
  <td></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/mchedr/">&nbsp;</a></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/mchedr/">&nbsp;</a></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/mchedr/">&nbsp;</a></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/mchedr/">&nbsp;</a></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>ehdf</td>
  <td></td>
  <td></td>
  <td></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/ehdf/">&nbsp;</a></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/ehdf/">&nbsp;</a></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/ehdf/">&nbsp;</a></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>isf</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/isf/">&nbsp;</a></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/isf/">&nbsp;</a></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>isf2</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/isf2.0/">&nbsp;</a></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/isf2.0/">&nbsp;</a></td>
</tr>
<tr>
  <td>QuakeML</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/quakeml/">&nbsp;</a></td>
  <td class="avail"><a href="ftp://hazards.cr.usgs.gov/NEICPDE/quakeml/">&nbsp;</a></td>
</tr>
</table>
<p>Click timeline bar to access data.</p>
<hr/>

<h2>Data Availability</h2>

<h3>August 2013 to the Present:</h3>
<p>The final PDE files are completed in weekly increments, with no separate monthly compilation (see below).  The files are numbered by year and week (e.g. 201340), with “week 53” containing the data for the last day of the year, or last 2 days in case the year was a leap year.  The first “official” files of this new process are the ones named 201331. Note that the 201330 files were actually the last full week of July and data are also contained in the July 2013 monthly file as described below.</p>


<p><strong>Data can be retrieved here: <a href="ftp://hazards.cr.usgs.gov/NEICPDE">ftp://hazards.cr.usgs.gov/NEICPDE</a><br/>
Available formats: quakeML1.2 and ISF2.0 (see below)</strong></p>


<h3>February 1981 through August 2013:</h3>
<p>The final PDE was prepared in monthly increments, officially named the PDE Monthly Listing. Digital data files containing pick and amplitude measurements for this stage of review span from as early as 1981 through July 2013 and were posted in one-month increments once final review for that time period was completed. Until this process was stopped at the end of July 2013, once the monthly PDE files were posted, the corresponding weekly PDE files for that time period were removed from the FTP site, because they had been completely replaced by the information in the monthly PDE. In general, only minor changes were made to the solutions in this stage of review, but it is possible that new events were added, old events modified and occasionally some old events from the weekly PDE were removed. Macroseismic comments and additional information about geological effects for significant earthquakes may be modified on the USGS Earthquake Hazards Program website at any time after the monthly PDE has been finalized, but in general those changes will not be made in the files on the FTP site.</p>

<p>Historically the PDE contained two processing steps prior to the monthly PDE, the daily PDE, also referred to as the Quick Epicenter Determinations (QED or PDE-Q) and the weekly PDE (PDE-W) These files are no longer available because they are superseded by the monthly files.</p>


<p><strong>Data can be retrieved here: <a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata">ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata</a><br/>
Available formats: mchedr (1981/02 through 2013/07, ISF (1990 through 2013/7), and ehdf (1990 through 2013/7)</strong></p>


<h3>January 1964 through January 1981:</h3>
<p>The final PDE does not exist in machine readable format prior to February 1981. These data exist as scanned paper files.</p>


<p><strong>Scans can be retrieved here: <a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/scans">ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/scans</a></strong></p>


<h2>File formats</h2>

<p>PDE data are distributed in several formats and the file names in the ftp directories indicate the format type of the file.</p>

<h3>QuakeML 1.2</h3>
<p><a href="https://quake.ethz.ch/quakeml">QuakeML</a> is a flexible, extensible and modular XML representation of seismological data which is intended to cover a broad range of fields of application in modern seismology. QuakeML is an open global standard and is developed by a distributed team in a transparent collaborative manner. The advantage to QuakeML is that it uses a modern XML based format which allows for transmission of much more information than is possible with most of our older formats. These files are the most complete representation of the PDE and contain hypocenter parameters, macroseismic observations, and phase and amplitude data. The files are voluminous, with even a zipped file of one week of data averaging 3-6 Mbytes.</p>

<h3>ISF (IASPEI Seismic Format)</h3>
<p><a href="http://www.isc.ac.uk/standards/isf/">ISF</a> files are created to share data with the International Seismological Centre but are used at other data centers and contain hypocenter parameters, macroseismic observations, and phase and amplitude data. ISF format was approved by the International Association of Seismology and Physics of the Earth’s Interior (IASPEI), and is an extension of the IMS 1.0 data format created by the International Data Center of the Comprehensive Test Ban Treaty Organization (IDC/CTBTO). As with IMS 1.0, ISF has both a bulletin and arrivals format. ISF files are available only for final monthly data, in bulletin format. These are available in monthly files  from January 1999 through July 2013, and in weekly files from August 2013 through the present time. Selected routine mining blasts within United States territory are provided in files named isfexpYYYYMM.dat (using bulletin format) from October 1999 through July 2013. Beginning with August 2013, those selected routine mining explosions are included in the weekly isf files and identified as explosions.</p>

<h3>ISF2.0</h3>
<p>ISF2.0 is similar to ISF format except the phase lines have been extended to include station naming that allows for station Network, Location, and Channel (full documentation pending)</p>

<h3>mchedr (machine readable Earthquake Data Report)</h3>
<p><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/mchedr/mchedr.txt">mchedr</a> contains hypocenter parameters, macroseismic observations, and phase and amplitude data. This format is available from February 1981 through July 2013. It is no longer produced.</p>

<h3>ehdf (extended Hypocenter Data File)</h3>
<p><a href="ftp://hazards.cr.usgs.gov/NEICPDE/olderPDEdata/ehdf/ehdf.txt">ehdf</a> contains only hypocenter data and flags for macroseismic and geological effects, one event per line. This format is available from January 1990 through July 2013. It is no longer produced.</p>

<h2>Significant Changes in PDE Processing</h2>

<h3>1-January-2004</h3>

<p>
  The earth model used to calculate PDE hypocenters changed from the Jeffreys-Bullen earth model to the AK135 earth model.
</p>

<h3 id="additional">Additional Information</h3>
<ul>
  <li>
    <a href="https://earthquake.usgs.gov/data/comcat/contributor/us/">Network Contributors</a>
  </li>
<li>
  <a href="/contactus/golden/neic.php">National Earthquake Information Center (NEIC)</a>
</li>
</ul>
