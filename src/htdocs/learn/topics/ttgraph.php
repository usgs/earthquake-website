<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	10/5/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Earthquake Travel Times';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }
?>

<p>High resolution graph in <a href="images/ttgraph.pdf"> PDF format</a> (1MB)</p>

<!-- take out?
<p>
Graph from Michelle Hall-Wallace's
<a href="http://www.geo.arizona.edu/K-12/azpepp/seismicity/location/distance/ttc.html">
Arizona PEPP pages.</a>
</p>
-->

<h2>Travel Time Curves</h2>
<p><img src="images/ttgraph.gif" alt="Travel time graph" /></p>

<h2>Table of P and S-P versus distance</h2>

<p>P and S-P travel times as a function of source distance for an earthquake 33 km deep. The Time of the first arriving P phase is given, along with the time difference between the S and P phases. The latter time is known as the S minus P time.
</p>

<p>
	<!--<table>
		<thead>
			<tr>
				<th>Delta</th>
				<th>Time of P</th>
				<th>S-P Time</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<table>
						<thead>
							<tr>
								<th>Deg</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>0.0</td>
							</tr>
						</tbody>
					</table>
				</td>
				<td>
					<table>
						<thead>
							<tr>
								<th>M</th>
								<th>S</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>0</td>
								<td>5.4</td>
							</tr>
						</tbody>
					</table>
				</td>
				<td>
					<table>
						<thead>
							<tr>
								<th>M</th>
								<th>S</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>0</td>
								<td>4.0</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>-->
		<!-- keep pre?-->
<div style="font-family: courier">

<pre>
 Delta Time of P  S-P Time
  Deg   M   S     M   S
  0.0   0   5.4   0   4.0
  0.5   0  10.6   0   7.8
  1.0   0  17.7   0  13.5
  1.5   0  24.6   0  19.0
  2.0   0  31.4   0  24.4
  2.5   0  38.3   0  29.9
  3.0   0  45.2   0  35.4
  3.5   0  52.1   0  40.9
  4.0   0  58.9   0  46.4
  4.5   1   5.8   0  51.9
  5.0   1  12.7   0  57.4
  5.5   1  19.6   1   2.8
  6.0   1  26.4   1   8.3
  6.5   1  33.3   1  13.8
  7.0   1  40.2   1  19.2
  7.5   1  47.0   1  24.7
  8.0   1  53.9   1  30.1
  8.5   2   0.7   1  35.6
  9.0   2   7.6   1  41.0
  9.5   2  14.4   1  46.5
 10.0   2  21.3   1  51.9
 11.0   2  35.0   2   2.7
 12.0   2  48.7   2  13.5
 13.0   3   2.3   2  24.3
 14.0   3  16.0   2  35.0
 15.0   3  29.5   2  45.8
 16.0   3  42.5   2  57.1
 17.0   3  55.2   3   8.7
 18.0   4   7.5   3  20.5
 19.0   4  18.8   3  33.4
 20.0   4  29.7   3  43.8
 21.0   4  40.6   3  52.9
 22.0   4  51.3   4   1.8
 23.0   5   1.9   4   9.2
 24.0   5  11.6   4  15.7
 25.0   5  20.7   4  22.6
 26.0   5  29.8   4  29.4
 27.0   5  38.8   4  36.2
 28.0   5  47.7   4  42.9
 29.0   5  56.6   4  49.8
 30.0   6   5.5   4  56.6
 31.0   6  14.3   5   3.4
 32.0   6  23.1   5  10.2
 33.0   6  31.9   5  17.0
 34.0   6  40.5   5  23.8
 35.0   6  49.2   5  30.5
 36.0   6  57.8   5  37.3
 37.0   7   6.3   5  44.0
 38.0   7  14.7   5  50.7
 39.0   7  23.1   5  57.4
 40.0   7  31.4   6   4.0
 41.0   7  39.7   6  10.7
 42.0   7  47.9   6  17.3
 43.0   7  56.0   6  23.9
 44.0   8   4.1   6  30.4
 45.0   8  12.1   6  37.0
 46.0   8  20.0   6  43.5
 47.0   8  27.8   6  49.9
 48.0   8  35.6   6  56.4
 49.0   8  43.3   7   2.8
 50.0   8  50.9   7   9.1
 51.0   8  58.5   7  15.5
 52.0   9   6.0   7  21.8
 53.0   9  13.4   7  28.1
 54.0   9  20.7   7  34.3
 55.0   9  28.0   7  40.5
 56.0   9  35.2   7  46.6
 57.0   9  42.3   7  52.8
 58.0   9  49.4   7  58.8
 59.0   9  56.3   8   4.9
 60.0  10   3.2   8  10.9
 61.0  10  10.1   8  16.9
 62.0  10  16.8   8  22.8
 63.0  10  23.5   8  28.7
 64.0  10  30.1   8  34.5
 65.0  10  36.7   8  40.3
 66.0  10  43.2   8  46.1
 67.0  10  49.5   8  51.8
 68.0  10  55.9   8  57.5
 69.0  11   2.1   9   3.1
 70.0  11   8.3   9   8.7
 71.0  11  14.4   9  14.3
 72.0  11  20.4   9  19.8
 73.0  11  26.4   9  25.2
 74.0  11  32.3   9  30.6
 75.0  11  38.1   9  36.0
 76.0  11  43.8   9  41.3
 77.0  11  49.5   9  46.6
 78.0  11  55.1   9  51.8
 79.0  12   0.6   9  57.0
 80.0  12   6.0  10   2.1
 81.0  12  11.4  10   7.2
 82.0  12  16.7  10  12.3
 83.0  12  21.9  10  17.3
 84.0  12  27.0  10  22.2
 85.0  12  32.0  10  27.1
 86.0  12  37.0  10  31.9
 87.0  12  41.9  10  36.7
 88.0  12  46.7  10  41.4
 89.0  12  51.4  10  46.1
 90.0  12  56.1  10  50.7
 91.0  13   0.7  10  55.2
 92.0  13   5.4  10  59.5
 93.0  13  10.0  11   3.7
 94.0  13  14.5  11   7.9
 95.0  13  19.1  11  12.0
 96.0  13  23.6  11  16.1
 97.0  13  28.1  11  20.1
 98.0  13  32.6  11  24.1
 99.0  13  37.0  11  28.1
100.0  13  41.5  11  32.0
101.0  13  45.9  11  35.8
102.0  13  50.4  11  39.7
103.0  13  54.8  11  43.6
104.0  13  59.2  11  47.5
105.0  14   3.7  11  51.4
</pre>

</div>
</p>

<p>This table is based on the iasp91 model of Kennett and Engdahl (1991) and was generated with the program ARTIM written by R. Buland.</p>

<cite>
Kennett, B. L. N. and E. R. Engdahl (1991). Travel times for global earthquake location and phase identification, Geophys. J. Int., v 105, p 429-465.
</cite>
