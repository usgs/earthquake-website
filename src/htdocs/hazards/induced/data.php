<?php
  // Author: Lisa Wald
  // Contact: Mark Peterson,
  // Last modified: 03/24/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'Data for 2016 One-Year Seismic Hazard Forecast';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<h2>Download Data Files</h2>

<p>
	These files contain space-delimited, rectangular gridded data over the Conterminous 48 States in 0.05 degree increments in longitude (x-value) and latitude (y-value). See below for more information about the <ahref="#fileformat">format of these data files</a>.
</p>

<table cellpadding="0" cellspacing="0" border="0" class="tabular" id="tbldata">
	<thead>
		<tr>
			<th scope="col" class="type">Data Type</th>
			<th scope="col" class="sa">Spectral Acceleration</th>
			<th scope="col" class="period">Probability of Exceedance</th>
			<th scope="col" class="download">Download</th>
		</tr>
	</thead>
	<tbody>

		<tr>
			<td>Gridded Hazard Map</td>
			<td>Peak Ground Acceleration</td>
			<td>1% in 1 year</td>
      <td><a href="/static/web/nshm/induced/onePercent_1YrModel.pga.1pc1.zip">Text</a> (3.3MB)</td>
		</tr>

		<tr>
			<td>Gridded Hazard Map</td>
			<td>1 Hz (1 sec)</td>
			<td>1% in 1 year</td>
      <td><a href="/static/web/nshm/induced/onePercent_1YrModel.1hz.1pc1.zip">Text</a> (3.5MB)</td>
		</tr>

		<tr>
			<td>Gridded Hazard Map</td>
			<td>5 Hz (0.2 sec)</td>
			<td>1% in 1 year</td>
      <td><a href="/static/web/nshm/induced/onePercent_1YrModel.5hz.1pc1.zip">Text</a> (3.5MB)</td>
		</tr>

		<tr>
			<td>Hazard Curve Data</td>
			<td>Peak Ground Acceleration</td>
			<td>N/A</td>
      <td><a href="/static/web/nshm/induced/hazardCurve_1YrModel.pga.truncated.asc.zip">Text</a> (24.4MB)</td>
		</tr>

		<tr>
			<td>Hazard Curve Data</td>
			<td>5 Hz (0.2 sec)</td>
			<td>N/A</td>
      <td><a href="/static/web/nshm/induced/hazardCurve_1YrModel.5hz.truncated.asc.zip">Text</a> (24.4MB)</td>
		</tr>

		<tr>
			<td>Hazard Curve Data</td>
			<td>1 Hz (1 sec)</td>
			<td>N/A</td>
      <td><a href="/static/web/nshm/induced/hazardCurve_1YrModel.1hz.truncated.asc.zip">Text</a> (22.6MB)</td>
		</tr>

	</tbody>
</table>

<h2 style="clear: left;">Gridded Hazard Maps (1% in 1 Year)</h2>
<ul>
  <li><a href="/static/web/nshm/induced/plot_1YrModel_pga_1pc1.pdf">Map of PGA for 1% Probability of Exceedence in 1 Year</a> (PDF)</li>
  <li><a href="/static/web/nshm/induced/plot_1YrModel_1hz_1pc1.pdf">Map of 1 Hz for 1% Probability of Exceedence in 1 Year</a> (PDF)</li>
  <li><a href="/static/web/nshm/induced/plot_1YrModel_5hz_1pc1.pdf">Map of 5 Hz for 1% Probability of Exceedence in 1 Year</a> (PDF)</li>
</ul>

<a name="fileformat"></a>
<h2 style="clear: left;">Data File Formats</h2>

<div class="formatDesc">
	<h3>&ldquo;Hazard Curves&rdquo; Files</h3>
  <h4>filename, hazardCurve_*.asc</h4>
	<p>
    These files contain hazard curves for the gridded geographic points described above. All the hazard curves in the file share the same set of intensity measure levels or ground motion levels (x-values). The first three lines are header lines. The final field of line 2 contains the spectral period in seconds. The period convention for PGA is to present results as 0.0 s period. The last field of line 3 indicates the number of ground motion levels for the given period. The following lines (with 1 value per line) contain the x-values (intensity measure levels) for all the curves in the file, in units of g. Subsequent lines contain hazard values for a single geographic point. The first two values specify the latitude and longitude (respectively) for the curve while subsequent values (on that same line) contain mean annual frequencies of exceedance ordered corresponding to the x-values at the top of the file.
	</p>
</div>

<div class="formatDesc">
	<h3>&ldquo;1&#37; in 1 Year&rdquo; Files</h3>
  <h4>filename, onePercent_*.1pc1</h4>
	<p>
		These files contain ground motion values for the gridded geographic points
		as described above. The ground motion units are in <em>g</em> where 1g =
		980.5 cm/s/s and are defined for the B/C boundary
		(V<sub>s</sub><sup>30</sup> = 760 m/s). Data contained in these files
		specify a single geographic point per line starting with longitude and
		latitude values (respectively), with the third and final value of each
		line specifying the ground motion for that geographic point.
	</p>
  <p>
    Plots are included for the 1% in 1 year data files (filename, plot_1YrModel_*.pdf).
  </p>
</div>
