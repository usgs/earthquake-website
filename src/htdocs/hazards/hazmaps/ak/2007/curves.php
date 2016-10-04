<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	10/3/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Hazard Curves';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<p class="column seven">
	Below is a listing of the various sets of hazard curves created for this
	update. Please note that each of these files contains data for specific
	parameters and sub-regions of Alaska and may contain zero-values at locations
	that do not meet the specific criteria for that file. This does not mean the
	hazard was zero, but rather much more likely that the specific location did
	not match the parameters of the file. The listing below names every file,
	however for a more complete description of each download, please <a
	href="../documentation/">review Table 3 of the complete documentation</a>.
	For more information about how to read binary formats, see our <a
	href="index.php">side note about file formats</a>.
</p>
<table>
	<caption>For full descriptions of data files, see Table 3 of the <a
	href="../documentation/">complete documentation</a></caption>

	<thead>
		<tr>
			<th>Description</th>
			<th>Downloads</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Combined Total Hazard</td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/Combined_revF.010.bin.gz">Binary</a><a href="curves/Combined_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Combined Total Hazard</td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/Combined_revF.020.bin.gz">Binary</a><a href="curves/Combined_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Combined Total Hazard</td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/Combined_revF.030.bin.gz">Binary</a><a href="curves/Combined_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Combined Total Hazard</td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/Combined_revF.050.bin.gz">Binary</a><a href="curves/Combined_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Combined Total Hazard</td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/Combined_revF.100.bin.gz">Binary</a><a href="curves/Combined_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Combined Total Hazard</td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/Combined_revF.200.bin.gz">Binary</a><a href="curves/Combined_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Combined Total Hazard</td>
			<td>PGA<a href="curves/Combined_revF.pga.bin.gz">Binary</a><a href="curves/Combined_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deep Earthquakes<span>G-R 5 to 7.5 at 50-80km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/AKDEEP.out_revF.010.bin.gz">Binary</a><a href="curves/AKDEEP.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deep Earthquakes<span>G-R 5 to 7.5 at 50-80km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/AKDEEP.out_revF.020.bin.gz">Binary</a><a href="curves/AKDEEP.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deep Earthquakes<span>G-R 5 to 7.5 at 50-80km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/AKDEEP.out_revF.030.bin.gz">Binary</a><a href="curves/AKDEEP.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deep Earthquakes<span>G-R 5 to 7.5 at 50-80km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/AKDEEP.out_revF.050.bin.gz">Binary</a><a href="curves/AKDEEP.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deep Earthquakes<span>G-R 5 to 7.5 at 50-80km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/AKDEEP.out_revF.100.bin.gz">Binary</a><a href="curves/AKDEEP.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deep Earthquakes<span>G-R 5 to 7.5 at 50-80km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/AKDEEP.out_revF.200.bin.gz">Binary</a><a href="curves/AKDEEP.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deep Earthquakes<span>G-R 5 to 7.5 at 50-80km depth</span></td>
			<td>PGA<a href="curves/AKDEEP.out_revF.pga.bin.gz">Binary</a><a href="curves/AKDEEP.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr><td>Deeper Earthquakes<span>G-R 5 to 7.5 at 80-120km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/AKDEEPER.out_revF.010.bin.gz">Binary</a><a href="curves/AKDEEPER.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deeper Earthquakes<span>G-R 5 to 7.5 at 80-120km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/AKDEEPER.out_revF.020.bin.gz">Binary</a><a href="curves/AKDEEPER.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deeper Earthquakes<span>G-R 5 to 7.5 at 80-120km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/AKDEEPER.out_revF.030.bin.gz">Binary</a><a href="curves/AKDEEPER.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deeper Earthquakes<span>G-R 5 to 7.5 at 80-120km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/AKDEEPER.out_revF.050.bin.gz">Binary</a><a href="curves/AKDEEPER.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deeper Earthquakes<span>G-R 5 to 7.5 at 80-120km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/AKDEEPER.out_revF.100.bin.gz">Binary</a><a href="curves/AKDEEPER.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deeper Earthquakes<span>G-R 5 to 7.5 at 80-120km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/AKDEEPER.out_revF.200.bin.gz">Binary</a><a href="curves/AKDEEPER.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Deeper Earthquakes<span>G-R 5 to 7.5 at 80-120km depth</span></td>
			<td>PGA<a href="curves/AKDEEPER.out_revF.pga.bin.gz">Binary</a><a href="curves/AKDEEPER.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Eastern Aleutians and 1964 zone<span>Characteristic 9.2 at 20-42km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/megaeast.out_revF.010.bin.gz">Binary</a><a href="curves/megaeast.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Eastern Aleutians and 1964 zone<span>Characteristic 9.2 at 20-42km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/megaeast.out_revF.020.bin.gz">Binary</a><a href="curves/megaeast.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Eastern Aleutians and 1964 zone<span>Characteristic 9.2 at 20-42km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/megaeast.out_revF.030.bin.gz">Binary</a><a href="curves/megaeast.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Eastern Aleutians and 1964 zone<span>Characteristic 9.2 at 20-42km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/megaeast.out_revF.050.bin.gz">Binary</a><a href="curves/megaeast.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Eastern Aleutians and 1964 zone<span>Characteristic 9.2 at 20-42km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/megaeast.out_revF.100.bin.gz">Binary</a><a href="curves/megaeast.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Eastern Aleutians and 1964 zone<span>Characteristic 9.2 at 20-42km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/megaeast.out_revF.200.bin.gz">Binary</a><a href="curves/megaeast.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Eastern Aleutians and 1964 zone<span>Characteristic 9.2 at 20-42km depth</span></td>
			<td>PGA<a href="curves/megaeast.out_revF.pga.bin.gz">Binary</a><a href="curves/megaeast.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Entire Aleutian Arc<span>G-R 7 to 8 at 20-50km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/megaAll.out_revF.010.bin.gz">Binary</a><a href="curves/megaAll.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Entire Aleutian Arc<span>G-R 7 to 8 at 20-50km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/megaAll.out_revF.020.bin.gz">Binary</a><a href="curves/megaAll.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Entire Aleutian Arc<span>G-R 7 to 8 at 20-50km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/megaAll.out_revF.030.bin.gz">Binary</a><a href="curves/megaAll.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Entire Aleutian Arc<span>G-R 7 to 8 at 20-50km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/megaAll.out_revF.050.bin.gz">Binary</a><a href="curves/megaAll.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Entire Aleutian Arc<span>G-R 7 to 8 at 20-50km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/megaAll.out_revF.100.bin.gz">Binary</a><a href="curves/megaAll.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Entire Aleutian Arc<span>G-R 7 to 8 at 20-50km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/megaAll.out_revF.200.bin.gz">Binary</a><a href="curves/megaAll.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Entire Aleutian Arc<span>G-R 7 to 8 at 20-50km depth</span></td>
			<td>PGA<a href="curves/megaAll.out_revF.pga.bin.gz">Binary</a><a href="curves/megaAll.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Far Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/megaF.out_revF.010.bin.gz">Binary</a><a href="curves/megaF.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Far Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/megaF.out_revF.020.bin.gz">Binary</a><a href="curves/megaF.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Far Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/megaF.out_revF.030.bin.gz">Binary</a><a href="curves/megaF.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Far Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/megaF.out_revF.050.bin.gz">Binary</a><a href="curves/megaF.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Far Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/megaF.out_revF.100.bin.gz">Binary</a><a href="curves/megaF.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Far Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/megaF.out_revF.200.bin.gz">Binary</a><a href="curves/megaF.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Far Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td>
			<td>PGA<a href="curves/megaF.out_revF.pga.bin.gz">Binary</a><a href="curves/megaF.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>Characteristic 7.5 at 15km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/AKF5.out_revF.010.bin.gz">Binary</a><a href="curves/AKF5.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>Characteristic 7.5 at 15km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/AKF5.out_revF.020.bin.gz">Binary</a><a href="curves/AKF5.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>Characteristic 7.5 at 15km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/AKF5.out_revF.030.bin.gz">Binary</a><a href="curves/AKF5.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>Characteristic 7.5 at 15km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/AKF5.out_revF.050.bin.gz">Binary</a><a href="curves/AKF5.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>Characteristic 7.5 at 15km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/AKF5.out_revF.100.bin.gz">Binary</a><a href="curves/AKF5.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>Characteristic 7.5 at 15km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/AKF5.out_revF.200.bin.gz">Binary</a><a href="curves/AKF5.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>Characteristic 7.5 at 15km depth</span></td>
			<td>PGA<a href="curves/AKF5.out_revF.pga.bin.gz">Binary</a><a href="curves/AKF5.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>G-R 6.5 to 7.5 at 15km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/AKF4.out_revF.010.bin.gz">Binary</a><a href="curves/AKF4.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>G-R 6.5 to 7.5 at 15km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/AKF4.out_revF.020.bin.gz">Binary</a><a href="curves/AKF4.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>G-R 6.5 to 7.5 at 15km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/AKF4.out_revF.030.bin.gz">Binary</a><a href="curves/AKF4.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>G-R 6.5 to 7.5 at 15km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/AKF4.out_revF.050.bin.gz">Binary</a><a href="curves/AKF4.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>G-R 6.5 to 7.5 at 15km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/AKF4.out_revF.100.bin.gz">Binary</a><a href="curves/AKF4.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>G-R 6.5 to 7.5 at 15km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/AKF4.out_revF.200.bin.gz">Binary</a><a href="curves/AKF4.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak Island/Narrow Cape<span>G-R 6.5 to 7.5 at 15km depth</span></td>
			<td>PGA<a href="curves/AKF4.out_revF.pga.bin.gz">Binary</a><a href="curves/AKF4.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak segment<span>Characteristic 8.8 at 20-42km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/megaD.out_revF.010.bin.gz">Binary</a><a href="curves/megaD.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak segment<span>Characteristic 8.8 at 20-42km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/megaD.out_revF.020.bin.gz">Binary</a><a href="curves/megaD.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak segment<span>Characteristic 8.8 at 20-42km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/megaD.out_revF.030.bin.gz">Binary</a><a href="curves/megaD.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak segment<span>Characteristic 8.8 at 20-42km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/megaD.out_revF.050.bin.gz">Binary</a><a href="curves/megaD.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak segment<span>Characteristic 8.8 at 20-42km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/megaD.out_revF.100.bin.gz">Binary</a><a href="curves/megaD.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak segment<span>Characteristic 8.8 at 20-42km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/megaD.out_revF.200.bin.gz">Binary</a><a href="curves/megaD.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Kodiak segment<span>Characteristic 8.8 at 20-42km depth</span></td>
			<td>PGA<a href="curves/megaD.out_revF.pga.bin.gz">Binary</a><a href="curves/megaD.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather (49mm/yr)<span>G-R 7.6-8.1 at 15km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/AKF0.out_revF.010.bin.gz">Binary</a><a href="curves/AKF0.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather (49mm/yr)<span>G-R 7.6-8.1 at 15km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/AKF0.out_revF.020.bin.gz">Binary</a><a href="curves/AKF0.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather (49mm/yr)<span>G-R 7.6-8.1 at 15km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/AKF0.out_revF.030.bin.gz">Binary</a><a href="curves/AKF0.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather (49mm/yr)<span>G-R 7.6-8.1 at 15km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/AKF0.out_revF.050.bin.gz">Binary</a><a href="curves/AKF0.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather (49mm/yr)<span>G-R 7.6-8.1 at 15km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/AKF0.out_revF.100.bin.gz">Binary</a><a href="curves/AKF0.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather (49mm/yr)<span>G-R 7.6-8.1 at 15km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/AKF0.out_revF.200.bin.gz">Binary</a><a href="curves/AKF0.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather (49mm/yr)<span>G-R 7.6-8.1 at 15km depth</span></td>
			<td>PGA<a href="curves/AKF0.out_revF.pga.bin.gz">Binary</a><a href="curves/AKF0.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather Offshore (49.5/48 mm/yr)<span>Characteristic 8.1/(7.7/8.0) at 15km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/AKF1.out_revF.010.bin.gz">Binary</a><a href="curves/AKF1.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather Offshore (49.5/48 mm/yr)<span>Characteristic 8.1/(7.7/8.0) at 15km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/AKF1.out_revF.020.bin.gz">Binary</a><a href="curves/AKF1.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather Offshore (49.5/48 mm/yr)<span>Characteristic 8.1/(7.7/8.0) at 15km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/AKF1.out_revF.030.bin.gz">Binary</a><a href="curves/AKF1.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather Offshore (49.5/48 mm/yr)<span>Characteristic 8.1/(7.7/8.0) at 15km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/AKF1.out_revF.050.bin.gz">Binary</a><a href="curves/AKF1.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather Offshore (49.5/48 mm/yr)<span>Characteristic 8.1/(7.7/8.0) at 15km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/AKF1.out_revF.100.bin.gz">Binary</a><a href="curves/AKF1.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather Offshore (49.5/48 mm/yr)<span>Characteristic 8.1/(7.7/8.0) at 15km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/AKF1.out_revF.200.bin.gz">Binary</a><a href="curves/AKF1.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Queen Charlotte/Fairweather Offshore (49.5/48 mm/yr)<span>Characteristic 8.1/(7.7/8.0) at 15km depth</span></td>
			<td>PGA<a href="curves/AKF1.out_revF.pga.bin.gz">Binary</a><a href="curves/AKF1.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Semidi region<span>G-R 8 to 8.5 at 20-50km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/megaB.out_revF.010.bin.gz">Binary</a><a href="curves/megaB.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Semidi region<span>G-R 8 to 8.5 at 20-50km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/megaB.out_revF.020.bin.gz">Binary</a><a href="curves/megaB.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Semidi region<span>G-R 8 to 8.5 at 20-50km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/megaB.out_revF.030.bin.gz">Binary</a><a href="curves/megaB.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Semidi region<span>G-R 8 to 8.5 at 20-50km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/megaB.out_revF.050.bin.gz">Binary</a><a href="curves/megaB.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Semidi region<span>G-R 8 to 8.5 at 20-50km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/megaB.out_revF.100.bin.gz">Binary</a><a href="curves/megaB.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Semidi region<span>G-R 8 to 8.5 at 20-50km depth</span></td>
			<td>2.0 Sec SA (0.5 Hz)<a href="curves/megaB.out_revF.200.bin.gz">Binary</a><a href="curves/megaB.out_revF.200.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Semidi region<span>G-R 8 to 8.5 at 20-50km depth</span></td>
			<td>PGA<a href="curves/megaB.out_revF.pga.bin.gz">Binary</a><a href="curves/megaB.out_revF.pga.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Shallow earthquakes<span>G-R 5 to 7.3 at 0-50km depth</span></td>
			<td>0.1 Sec SA (10.0 Hz)<a href="curves/AKML75.out_revF.010.bin.gz">Binary</a><a href="curves/AKML75.out_revF.010.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Shallow earthquakes<span>G-R 5 to 7.3 at 0-50km depth</span></td>
			<td>0.2 Sec SA (5.0 Hz)<a href="curves/AKML75.out_revF.020.bin.gz">Binary</a><a href="curves/AKML75.out_revF.020.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Shallow earthquakes<span>G-R 5 to 7.3 at 0-50km depth</span></td>
			<td>0.3 Sec SA (3.33 Hz)<a href="curves/AKML75.out_revF.030.bin.gz">Binary</a><a href="curves/AKML75.out_revF.030.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Shallow earthquakes<span>G-R 5 to 7.3 at 0-50km depth</span></td>
			<td>0.5 Sec SA (2.0 Hz)<a href="curves/AKML75.out_revF.050.bin.gz">Binary</a><a href="curves/AKML75.out_revF.050.txt.gz">Text</a></td>
		</tr>
		<tr>
			<td>Shallow earthquakes<span>G-R 5 to 7.3 at 0-50km depth</span></td>
			<td>1.0 Sec SA (1.0 Hz)<a href="curves/AKML75.out_revF.100.bin.gz">Binary</a><a href="curves/AKML75.out_revF.100.txt.gz">Text</a></td>
		</tr>
		<tr><td>Shallow earthquakes<span>G-R 5 to 7.3 at 0-50km depth</span></td><td class="downloads">2.0 Sec SA (0.5 Hz)<a href="curves/AKML75.out_revF.200.bin.gz">Binary</a><a href="curves/AKML75.out_revF.200.txt.gz">Text</a></td></tr><tr><td>Shallow earthquakes<span>G-R 5 to 7.3 at 0-50km depth</span></td><td class="downloads">PGA<a href="curves/AKML75.out_revF.pga.bin.gz">Binary</a><a href="curves/AKML75.out_revF.pga.txt.gz">Text</a></td></tr><tr><td>Source zones corresponding to megathrust<span>G-R 5 to 7 at 0-50km depth</span></td><td class="downloads">0.1 Sec SA (10.0 Hz)<a href="curves/AKMT.out_revF.010.bin.gz">Binary</a><a href="curves/AKMT.out_revF.010.txt.gz">Text</a></td></tr><tr><td>Source zones corresponding to megathrust<span>G-R 5 to 7 at 0-50km depth</span></td><td class="downloads">0.2 Sec SA (5.0 Hz)<a href="curves/AKMT.out_revF.020.bin.gz">Binary</a><a href="curves/AKMT.out_revF.020.txt.gz">Text</a></td></tr><tr><td>Source zones corresponding to megathrust<span>G-R 5 to 7 at 0-50km depth</span></td><td class="downloads">0.3 Sec SA (3.33 Hz)<a href="curves/AKMT.out_revF.030.bin.gz">Binary</a><a href="curves/AKMT.out_revF.030.txt.gz">Text</a></td></tr><tr><td>Source zones corresponding to megathrust<span>G-R 5 to 7 at 0-50km depth</span></td><td class="downloads">0.5 Sec SA (2.0 Hz)<a href="curves/AKMT.out_revF.050.bin.gz">Binary</a><a href="curves/AKMT.out_revF.050.txt.gz">Text</a></td></tr><tr><td>Source zones corresponding to megathrust<span>G-R 5 to 7 at 0-50km depth</span></td><td class="downloads">1.0 Sec SA (1.0 Hz)<a href="curves/AKMT.out_revF.100.bin.gz">Binary</a><a href="curves/AKMT.out_revF.100.txt.gz">Text</a></td></tr><tr><td>Source zones corresponding to megathrust<span>G-R 5 to 7 at 0-50km depth</span></td><td class="downloads">2.0 Sec SA (0.5 Hz)<a href="curves/AKMT.out_revF.200.bin.gz">Binary</a><a href="curves/AKMT.out_revF.200.txt.gz">Text</a></td></tr><tr><td>Source zones corresponding to megathrust<span>G-R 5 to 7 at 0-50km depth</span></td><td class="downloads">PGA<a href="curves/AKMT.out_revF.pga.bin.gz">Binary</a><a href="curves/AKMT.out_revF.pga.txt.gz">Text</a></td></tr><tr><td>Transition Zone<span>Characteristic 8.2 at 0-15km depth</span></td><td class="downloads">0.1 Sec SA (10.0 Hz)<a href="curves/trans.out_revF.010.bin.gz">Binary</a><a href="curves/trans.out_revF.010.txt.gz">Text</a></td></tr><tr><td>Transition Zone<span>Characteristic 8.2 at 0-15km depth</span></td><td class="downloads">0.2 Sec SA (5.0 Hz)<a href="curves/trans.out_revF.020.bin.gz">Binary</a><a href="curves/trans.out_revF.020.txt.gz">Text</a></td></tr><tr><td>Transition Zone<span>Characteristic 8.2 at 0-15km depth</span></td><td class="downloads">0.3 Sec SA (3.33 Hz)<a href="curves/trans.out_revF.030.bin.gz">Binary</a><a href="curves/trans.out_revF.030.txt.gz">Text</a></td></tr><tr><td>Transition Zone<span>Characteristic 8.2 at 0-15km depth</span></td><td class="downloads">0.5 Sec SA (2.0 Hz)<a href="curves/trans.out_revF.050.bin.gz">Binary</a><a href="curves/trans.out_revF.050.txt.gz">Text</a></td></tr><tr><td>Transition Zone<span>Characteristic 8.2 at 0-15km depth</span></td><td class="downloads">1.0 Sec SA (1.0 Hz)<a href="curves/trans.out_revF.100.bin.gz">Binary</a><a href="curves/trans.out_revF.100.txt.gz">Text</a></td></tr><tr><td>Transition Zone<span>Characteristic 8.2 at 0-15km depth</span></td><td class="downloads">2.0 Sec SA (0.5 Hz)<a href="curves/trans.out_revF.200.bin.gz">Binary</a><a href="curves/trans.out_revF.200.txt.gz">Text</a></td></tr><tr><td>Transition Zone<span>Characteristic 8.2 at 0-15km depth</span></td><td class="downloads">PGA<a href="curves/trans.out_revF.pga.bin.gz">Binary</a><a href="curves/trans.out_revF.pga.txt.gz">Text</a></td></tr><tr><td>Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td><td class="downloads">0.1 Sec SA (10.0 Hz)<a href="curves/megaA.out_revF.010.bin.gz">Binary</a><a href="curves/megaA.out_revF.010.txt.gz">Text</a></td></tr><tr><td>Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td><td class="downloads">0.2 Sec SA (5.0 Hz)<a href="curves/megaA.out_revF.020.bin.gz">Binary</a><a href="curves/megaA.out_revF.020.txt.gz">Text</a></td></tr><tr><td>Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td><td class="downloads">0.3 Sec SA (3.33 Hz)<a href="curves/megaA.out_revF.030.bin.gz">Binary</a><a href="curves/megaA.out_revF.030.txt.gz">Text</a></td></tr><tr><td>Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td><td class="downloads">0.5 Sec SA (2.0 Hz)<a href="curves/megaA.out_revF.050.bin.gz">Binary</a><a href="curves/megaA.out_revF.050.txt.gz">Text</a></td></tr><tr><td>Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td><td class="downloads">1.0 Sec SA (1.0 Hz)<a href="curves/megaA.out_revF.100.bin.gz">Binary</a><a href="curves/megaA.out_revF.100.txt.gz">Text</a></td></tr><tr><td>Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td><td class="downloads">2.0 Sec SA (0.5 Hz)<a href="curves/megaA.out_revF.200.bin.gz">Binary</a><a href="curves/megaA.out_revF.200.txt.gz">Text</a></td></tr><tr><td>Western Aleutians<span>G-R 8 to 9.2 at 20-50km depth</span></td><td class="downloads">PGA<a href="curves/megaA.out_revF.pga.bin.gz">Binary</a><a href="curves/megaA.out_revF.pga.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>Characteristic 7.9/7.9/7.1 at 15/15/15.529km depth</span></td><td class="downloads">0.1 Sec SA (10.0 Hz)<a href="curves/AKF2.out_revF.010.bin.gz">Binary</a><a href="curves/AKF2.out_revF.010.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>Characteristic 7.9/7.9/7.1 at 15/15/15.529km depth</span></td><td class="downloads">0.2 Sec SA (5.0 Hz)<a href="curves/AKF2.out_revF.020.bin.gz">Binary</a><a href="curves/AKF2.out_revF.020.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>Characteristic 7.9/7.9/7.1 at 15/15/15.529km depth</span></td><td class="downloads">0.3 Sec SA (3.33 Hz)<a href="curves/AKF2.out_revF.030.bin.gz">Binary</a><a href="curves/AKF2.out_revF.030.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>Characteristic 7.9/7.9/7.1 at 15/15/15.529km depth</span></td><td class="downloads">0.5 Sec SA (2.0 Hz)<a href="curves/AKF2.out_revF.050.bin.gz">Binary</a><a href="curves/AKF2.out_revF.050.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>Characteristic 7.9/7.9/7.1 at 15/15/15.529km depth</span></td><td class="downloads">1.0 Sec SA (1.0 Hz)<a href="curves/AKF2.out_revF.100.bin.gz">Binary</a><a href="curves/AKF2.out_revF.100.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>Characteristic 7.9/7.9/7.1 at 15/15/15.529km depth</span></td><td class="downloads">2.0 Sec SA (0.5 Hz)<a href="curves/AKF2.out_revF.200.bin.gz">Binary</a><a href="curves/AKF2.out_revF.200.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>Characteristic 7.9/7.9/7.1 at 15/15/15.529km depth</span></td><td class="downloads">PGA<a href="curves/AKF2.out_revF.pga.bin.gz">Binary</a><a href="curves/AKF2.out_revF.pga.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>G-R 6.5 to 7.9 / 6.5 to 7.1 at 15/15/15.529km depth</span></td><td class="downloads">0.1 Sec SA (10.0 Hz)<a href="curves/AKF3.out_revF.010.bin.gz">Binary</a><a href="curves/AKF3.out_revF.010.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>G-R 6.5 to 7.9 / 6.5 to 7.1 at 15/15/15.529km depth</span></td><td class="downloads">0.2 Sec SA (5.0 Hz)<a href="curves/AKF3.out_revF.020.bin.gz">Binary</a><a href="curves/AKF3.out_revF.020.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>G-R 6.5 to 7.9 / 6.5 to 7.1 at 15/15/15.529km depth</span></td><td class="downloads">0.3 Sec SA (3.33 Hz)<a href="curves/AKF3.out_revF.030.bin.gz">Binary</a><a href="curves/AKF3.out_revF.030.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>G-R 6.5 to 7.9 / 6.5 to 7.1 at 15/15/15.529km depth</span></td><td class="downloads">0.5 Sec SA (2.0 Hz)<a href="curves/AKF3.out_revF.050.bin.gz">Binary</a><a href="curves/AKF3.out_revF.050.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>G-R 6.5 to 7.9 / 6.5 to 7.1 at 15/15/15.529km depth</span></td><td class="downloads">1.0 Sec SA (1.0 Hz)<a href="curves/AKF3.out_revF.100.bin.gz">Binary</a><a href="curves/AKF3.out_revF.100.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>G-R 6.5 to 7.9 / 6.5 to 7.1 at 15/15/15.529km depth</span></td><td class="downloads">2.0 Sec SA (0.5 Hz)<a href="curves/AKF3.out_revF.200.bin.gz">Binary</a><a href="curves/AKF3.out_revF.200.txt.gz">Text</a></td></tr><tr><td>Western and Eastern Denali<span>G-R 6.5 to 7.9 / 6.5 to 7.1 at 15/15/15.529km depth</span></td><td class="downloads">PGA<a href="curves/AKF3.out_revF.pga.bin.gz">Binary</a><a href="curves/AKF3.out_revF.pga.txt.gz">Text</a></td></tr><tr><td>Yakataga<span>G-R 7 to 8.1 at 15km depth</span></td><td class="downloads">0.1 Sec SA (10.0 Hz)<a href="curves/yak.out_revF.010.bin.gz">Binary</a><a href="curves/yak.out_revF.010.txt.gz">Text</a></td></tr><tr><td>Yakataga<span>G-R 7 to 8.1 at 15km depth</span></td><td class="downloads">0.2 Sec SA (5.0 Hz)<a href="curves/yak.out_revF.020.bin.gz">Binary</a><a href="curves/yak.out_revF.020.txt.gz">Text</a></td></tr><tr><td>Yakataga<span>G-R 7 to 8.1 at 15km depth</span></td><td class="downloads">0.3 Sec SA (3.33 Hz)<a href="curves/yak.out_revF.030.bin.gz">Binary</a><a href="curves/yak.out_revF.030.txt.gz">Text</a></td></tr><tr><td>Yakataga<span>G-R 7 to 8.1 at 15km depth</span></td><td class="downloads">0.5 Sec SA (2.0 Hz)<a href="curves/yak.out_revF.050.bin.gz">Binary</a><a href="curves/yak.out_revF.050.txt.gz">Text</a></td></tr><tr><td>Yakataga<span>G-R 7 to 8.1 at 15km depth</span></td><td class="downloads">1.0 Sec SA (1.0 Hz)<a href="curves/yak.out_revF.100.bin.gz">Binary</a><a href="curves/yak.out_revF.100.txt.gz">Text</a></td></tr><tr><td>Yakataga<span>G-R 7 to 8.1 at 15km depth</span></td><td class="downloads">2.0 Sec SA (0.5 Hz)<a href="curves/yak.out_revF.200.bin.gz">Binary</a><a href="curves/yak.out_revF.200.txt.gz">Text</a></td></tr><tr><td>Yakataga<span>G-R 7 to 8.1 at 15km depth</span></td><td class="downloads">PGA<a href="curves/yak.out_revF.pga.bin.gz">Binary</a><a href="curves/yak.out_revF.pga.txt.gz">Text</a></td></tr></tbody>
</table>
