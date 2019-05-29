<?php

// Creates quad.kml file
// Usage: php csv2kml.php > quads.kml

$kml = "";
$lines = file('quads.csv');
$placemarks = "";
$count = 0;

foreach ($lines as $line_num => $line) {
  $count ++;
  if ($count != 1) { // Skip header line

    list ($id, $name, $lon, $lat, $layer_apfaults, $layer_qfaults, $layer_landslides, $layer_liquefac, $layer_geology, $layer_eqs, $layer_hillshades) = explode(",", $line);

    $filename = str_replace(" ", "_", $name);

    $north = $lat + .0625;
    $south = $lat - .0625;
    $east = $lon + .0625;
    $west = $lon - .0625;

    $options = "";
    if (preg_match('/YES/', $layer_apfaults)) $options .= "				<tr><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/kml/AP_Faults/APFaults_$filename.kmz\"><img src=\"quads/ge.gif\" border=\"0\"></a></td><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/apfaults.php\"><img src=\"quads/info.gif\" border=\"0\"></a></td><td>Alquist-Priolo Faults</td></tr>\n";
    if (preg_match('/YES/', $layer_eqs)) $options .= "				<tr><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/kml/Historic_Eqs/Hist_Eqs_$filename.kmz\"><img src=\"quads/ge.gif\" border=\"0\"></a></td><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/earthquakes.php\"><img src=\"quads/info.gif\" border=\"0\"></a></td><td>Earthquakes</td></tr>\n";
    if (preg_match('/YES/', $layer_geology)) $options .= "				<tr><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/kml/Geology/Geology_$filename.kmz\"><img src=\"quads/ge.gif\" border=\"0\"></a></td><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/geology.php\"><img src=\"quads/info.gif\" border=\"0\"></a></td><td>Geology</td></tr>\n";
    if (preg_match('/YES/', $layer_hillshades)) $options .= "				<tr><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/kml/Hillshades/Hillshade_$filename.kmz\"><img src=\"quads/ge.gif\" border=\"0\"></a></td><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/hillshades.php\"><img src=\"quads/info.gif\" border=\"0\"></a></td><td>Hillshades</td></tr>\n";
    if (preg_match('/YES/', $layer_landslides)) $options .= "				<tr><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/kml/Landslides/Landslides_$filename.kmz\"><img src=\"quads/ge.gif\" border=\"0\"></a></td><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/landslides.php\"><img src=\"quads/info.gif\" border=\"0\"></a></td><td>Landslides</td></tr>\n";
    if (preg_match('/YES/', $layer_liquefac)) $options .= "				<tr><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/kml/Liquefaction/Liquefaction_$filename.kmz\"><img src=\"quads/ge.gif\" border=\"0\"></a></td><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/liquefaction.php\"><img src=\"quads/info.gif\" border=\"0\"></a></td><td>Liquefaction Susceptibility</td></tr>\n";
    if (preg_match('/YES/', $layer_qfaults)) $options .= "				<tr><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/kml/Q_Faults/QFaults_$filename.kmz\"><img src=\"quads/ge.gif\" border=\"0\"></a></td><td><a href=\"https://earthquake.usgs.gov/learn/topics/geologicmaps/qfaults.php\"><img src=\"quads/info.gif\" border=\"0\"></a></td><td>Quaternary Faults</td></tr>\n";

    $placemarks .= <<<EOD
  	<Placemark>
  		<name>$name</name>
  		<Snippet maxLines="0"></Snippet>
  		<description><![CDATA[
  			<h3>$name</h3>
  			<table>
$options
  			</table>
  		]]></description>
  		<LookAt>
  			<longitude>$lon</longitude>
  			<latitude>$lat</latitude>
  			<altitude>0</altitude>
  			<range>21000</range>
  			<tilt>0</tilt>
  			<heading>0</heading>
  		</LookAt>
  		<Region>
  			<LatLonAltBox>
  				<north>$north</north>
  				<south>$south</south>
  				<east>$east</east>
  				<west>$west</west>
  			</LatLonAltBox>
  			<Lod>
  				<minLodPixels>125</minLodPixels>
  				<maxLodPixels>-1</maxLodPixels>
  				<minFadeExtent>0</minFadeExtent>
  				<maxFadeExtent>0</maxFadeExtent>
  			</Lod>
  		</Region>
  		<styleUrl>#bubble</styleUrl>
  		<Point>
  			<coordinates>$lon,$lat,0</coordinates>
  		</Point>
  	</Placemark>

EOD;


  }
}


/*
---------------------------- KML output below ------------------------------------
*/

$xml_header = '<?xml version="1.0" encoding="UTF-8"?>';
print <<<EOD
$xml_header
<kml xmlns="http://earth.google.com/kml/2.2" xmlns:atom="http://www.w3.org/2005/Atom" xml:lang="en-US">
<atom:author>
  <atom:name>U.S. Geological Survey</atom:name>
</atom:author>
<atom:link href="https://earthquake.usgs.gov" />
<Folder>
	<name>Bay Area Geologic Layers</name>
  <description>Access Earthquakes, Faults, Geology, Hillshades, Landslides, Liquefaction by Quad for the SF Bay Area</description>
	<Placemark>
		<name>Quadrangle outlines</name>
		<Style>
			<LineStyle>
				<color>ff0000ff</color>
			</LineStyle>
		</Style>
		<MultiGeometry>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,38.25,1 -121.625,38.375,1 -121.5,38.375,1 -121.5,38.25,1 -121.625,38.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,38.625,1 -122.5,38.75,1 -122.375,38.75,1 -122.375,38.625,1 -122.5,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,38.375,1 -122,38.5,1 -121.875,38.5,1 -121.875,38.375,1 -122,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.625,1 -121.75,37.75,1 -121.625,37.75,1 -121.625,37.625,1 -121.75,37.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.375,38.625,1 -123.375,38.75,1 -123.25,38.75,1 -123.25,38.625,1 -123.375,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,37,1 -122.375,37.125,1 -122.25,37.125,1 -122.25,37,1 -122.375,37,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38.125,1 -121.75,38,1 -121.875,38,1 -121.875,38.125,1 -121.75,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38,1 -121.75,37.875,1 -121.875,37.875,1 -121.875,38,1 -121.75,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.25,38.375,1 -123.25,38.5,1 -123.125,38.5,1 -123.125,38.375,1 -123.25,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.75,1 -123,38.875,1 -122.875,38.875,1 -122.875,38.75,1 -123,38.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.125,1 -122.125,38,1 -122.25,38,1 -122.25,38.125,1 -122.125,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,36.5,1 -121.25,36.625,1 -121.125,36.625,1 -121.125,36.5,1 -121.25,36.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.25,1 -122.125,37.125,1 -122.25,37.125,1 -122.25,37.25,1 -122.125,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.25,38.75,1 -123.25,38.875,1 -123.125,38.875,1 -123.125,38.75,1 -123.25,38.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38.125,1 -121.875,38.125,1 -121.875,38.25,1 -121.75,38.25,1 -121.75,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.375,1 -123,38.25,1 -123.125,38.25,1 -123.125,38.375,1 -123,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38,1 -122.625,37.875,1 -122.75,37.875,1 -122.75,38,1 -122.625,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,38,1 -121.625,38.125,1 -121.5,38.125,1 -121.5,38,1 -121.625,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.875,1 -121.75,38,1 -121.625,38,1 -121.625,37.875,1 -121.75,37.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38,1 -122.125,37.875,1 -122.25,37.875,1 -122.25,38,1 -122.125,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.625,1 -122.25,38.625,1 -122.25,38.75,1 -122.125,38.75,1 -122.125,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.75,1 -121.75,37.875,1 -121.625,37.875,1 -121.625,37.75,1 -121.75,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.5,1 -121.75,37.375,1 -121.875,37.375,1 -121.875,37.5,1 -121.75,37.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.5,1 -122.625,38.625,1 -122.5,38.625,1 -122.5,38.5,1 -122.625,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.375,1 -123,38.5,1 -122.875,38.5,1 -122.875,38.375,1 -123,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.5,1 -122.125,38.375,1 -122.25,38.375,1 -122.25,38.5,1 -122.125,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,36.375,1 -121.75,36.5,1 -121.625,36.5,1 -121.625,36.375,1 -121.75,36.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.125,1 -122.125,37.25,1 -122,37.25,1 -122,37.125,1 -122.125,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.625,1 -123,38.5,1 -123.125,38.5,1 -123.125,38.625,1 -123,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,37.5,1 -121.625,37.625,1 -121.5,37.625,1 -121.5,37.5,1 -121.625,37.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-120.875,36.75,1 -120.875,36.625,1 -121,36.625,1 -121,36.75,1 -120.875,36.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,36.625,1 -121.25,36.75,1 -121.125,36.75,1 -121.125,36.625,1 -121.25,36.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,38.5,1 -122.375,38.625,1 -122.25,38.625,1 -122.25,38.5,1 -122.375,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,36.87500000000001,1 -121.625,37,1 -121.5,37,1 -121.5,36.87500000000001,1 -121.625,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,36.5,1 -121.625,36.625,1 -121.5,36.625,1 -121.5,36.5,1 -121.625,36.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,37.875,1 -122,38,1 -121.875,38,1 -121.875,37.875,1 -122,37.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,37.75,1 -121.625,37.875,1 -121.5,37.875,1 -121.5,37.75,1 -121.625,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.875,1 -123,38.75,1 -123.125,38.75,1 -123.125,38.875,1 -123,38.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.125,1 -122.25,38.125,1 -122.25,38.25,1 -122.125,38.25,1 -122.125,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.375,1 -122.625,38.25,1 -122.75,38.25,1 -122.75,38.375,1 -122.625,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,37.125,1 -121.25,37.25,1 -121.125,37.25,1 -121.125,37.125,1 -121.25,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.25,1 -122.125,37.375,1 -122,37.375,1 -122,37.25,1 -122.125,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,38.125,1 -122.375,38.25,1 -122.25,38.25,1 -122.25,38.125,1 -122.375,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.125,1 -122.125,37,1 -122.25,37,1 -122.25,37.125,1 -122.125,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38.5,1 -121.75,38.625,1 -121.625,38.625,1 -121.625,38.5,1 -121.75,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,38.125,1 -122,38.25,1 -121.875,38.25,1 -121.875,38.125,1 -122,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.625,1 -122.625,38.75,1 -122.5,38.75,1 -122.5,38.625,1 -122.625,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,37.75,1 -122,37.875,1 -121.875,37.875,1 -121.875,37.75,1 -122,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38.5,1 -121.75,38.375,1 -121.875,38.375,1 -121.875,38.5,1 -121.75,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.875,37.875,1 -122.875,38,1 -122.75,38,1 -122.75,37.875,1 -122.875,37.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38.375,1 -121.75,38.25,1 -121.875,38.25,1 -121.875,38.375,1 -121.75,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38,1 -123,38.125,1 -122.875,38.125,1 -122.875,38,1 -123,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,37.875,1 -123,38,1 -122.875,38,1 -122.875,37.875,1 -123,37.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38,1 -123,37.875,1 -123.125,37.875,1 -123.125,38,1 -123,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.125,1 -123,38,1 -123.125,38,1 -123.125,38.125,1 -123,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,37.625,1 -122,37.75,1 -121.875,37.75,1 -121.875,37.625,1 -122,37.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.5,1 -123,38.375,1 -123.125,38.375,1 -123.125,38.5,1 -123,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,38.25,1 -122,38.375,1 -121.875,38.375,1 -121.875,38.25,1 -122,38.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,37.375,1 -121.625,37.5,1 -121.5,37.5,1 -121.5,37.375,1 -121.625,37.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.25,1 -122.125,38.375,1 -122,38.375,1 -122,38.25,1 -122.125,38.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.125,1 -122.125,38.25,1 -122,38.25,1 -122,38.125,1 -122.125,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,37.75,1 -123.125,37.75,1 -123.125,37.875,1 -123,37.875,1 -123,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37,1 -122.125,37.125,1 -122,37.125,1 -122,37,1 -122.125,37,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.25,38.5,1 -123.25,38.625,1 -123.125,38.625,1 -123.125,38.5,1 -123.25,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,37.125,1 -122.375,37.25,1 -122.25,37.25,1 -122.25,37.125,1 -122.375,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.625,1 -123,38.75,1 -122.875,38.75,1 -122.875,38.625,1 -123,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,37,1 -121.625,37.125,1 -121.5,37.125,1 -121.5,37,1 -121.625,37,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.5,37,1 -121.5,37.125,1 -121.375,37.125,1 -121.375,37,1 -121.5,37,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.25,1 -122.625,38.375,1 -122.5,38.375,1 -122.5,38.25,1 -122.625,38.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.5,36.5,1 -121.5,36.625,1 -121.375,36.625,1 -121.375,36.5,1 -121.5,36.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.5,38.875,1 -123.5,38.75,1 -123.625,38.75,1 -123.625,38.875,1 -123.5,38.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.375,38.75,1 -123.375,38.875,1 -123.25,38.875,1 -123.25,38.75,1 -123.375,38.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.5,1 -123,38.625,1 -122.875,38.625,1 -122.875,38.5,1 -123,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.875,1 -122.125,38.75,1 -122.25,38.75,1 -122.25,38.875,1 -122.125,38.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,37.375,1 -122.5,37.5,1 -122.375,37.5,1 -122.375,37.375,1 -122.5,37.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.625,1 -122.125,37.75,1 -122,37.75,1 -122,37.625,1 -122.125,37.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.875,38.5,1 -122.875,38.625,1 -122.75,38.625,1 -122.75,38.5,1 -122.875,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.5,36.75,1 -121.5,36.87500000000001,1 -121.375,36.87500000000001,1 -121.375,36.75,1 -121.5,36.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,38,1 -122,38.125,1 -121.875,38.125,1 -121.875,38,1 -122,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,37.625,1 -122.375,37.75,1 -122.25,37.75,1 -122.25,37.625,1 -122.375,37.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.875,38,1 -122.875,38.125,1 -122.75,38.125,1 -122.75,38,1 -122.875,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,37.25,1 -121.625,37.375,1 -121.5,37.375,1 -121.5,37.25,1 -121.625,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,38.125,1 -121.625,38.25,1 -121.5,38.25,1 -121.5,38.125,1 -121.625,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,38.75,1 -122.5,38.875,1 -122.375,38.875,1 -122.375,38.75,1 -122.5,38.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38,1 -121.75,38.125,1 -121.625,38.125,1 -121.625,38,1 -121.75,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.875,38.625,1 -122.875,38.75,1 -122.75,38.75,1 -122.75,38.625,1 -122.875,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.375,1 -122.625,38.5,1 -122.5,38.5,1 -122.5,38.375,1 -122.625,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,38.75,1 -122.375,38.875,1 -122.25,38.875,1 -122.25,38.75,1 -122.375,38.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.625,1 -121.75,37.5,1 -121.875,37.5,1 -121.875,37.625,1 -121.75,37.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,37.25,1 -122.375,37.375,1 -122.25,37.375,1 -122.25,37.25,1 -122.375,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.625,1 -122.125,38.5,1 -122.25,38.5,1 -122.25,38.625,1 -122.125,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.75,1 -122.125,37.875,1 -122,37.875,1 -122,37.75,1 -122.125,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,37,1 -122,37.125,1 -121.875,37.125,1 -121.875,37,1 -122,37,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38.25,1 -121.75,38.375,1 -121.625,38.375,1 -121.625,38.25,1 -121.75,38.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.25,1 -121.75,37.375,1 -121.625,37.375,1 -121.625,37.25,1 -121.75,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.75,1 -121.75,37.625,1 -121.875,37.625,1 -121.875,37.75,1 -121.75,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-120.875,36.625,1 -120.875,36.5,1 -121,36.5,1 -121,36.625,1 -120.875,36.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.125,1 -121.75,37,1 -121.875,37,1 -121.875,37.125,1 -121.75,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.5,37.5,1 -121.5,37.625,1 -121.375,37.625,1 -121.375,37.5,1 -121.5,37.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,37.125,1 -122,37.25,1 -121.875,37.25,1 -121.875,37.125,1 -122,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,38,1 -122.375,38.125,1 -122.25,38.125,1 -122.25,38,1 -122.375,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,36.75,1 -121.75,36.625,1 -121.875,36.625,1 -121.875,36.75,1 -121.75,36.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,36.87500000000001,1 -121.25,37,1 -121.125,37,1 -121.125,36.87500000000001,1 -121.25,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.625,1 -122.625,38.5,1 -122.75,38.5,1 -122.75,38.625,1 -122.625,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.5,38.75,1 -123.5,38.875,1 -123.375,38.875,1 -123.375,38.75,1 -123.5,38.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.5,1 -121.75,37.625,1 -121.625,37.625,1 -121.625,37.5,1 -121.75,37.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38.625,1 -121.75,38.5,1 -121.875,38.5,1 -121.875,38.625,1 -121.75,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,37.625,1 -121.625,37.75,1 -121.5,37.75,1 -121.5,37.625,1 -121.625,37.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,37.375,1 -122,37.5,1 -121.875,37.5,1 -121.875,37.375,1 -122,37.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.25,1 -122.25,37.25,1 -122.25,37.375,1 -122.125,37.375,1 -122.125,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.5,37.125,1 -121.5,37.25,1 -121.375,37.25,1 -121.375,37.125,1 -121.5,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,37.5,1 -122.5,37.625,1 -122.375,37.625,1 -122.375,37.5,1 -122.5,37.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,37.5,1 -122.625,37.625,1 -122.5,37.625,1 -122.5,37.5,1 -122.625,37.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,36.5,1 -122,36.625,1 -121.875,36.625,1 -121.875,36.5,1 -122,36.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,36.625,1 -122,36.75,1 -121.875,36.75,1 -121.875,36.625,1 -122,36.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.5,1 -122.125,38.625,1 -122,38.625,1 -122,38.5,1 -122.125,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.125,1 -121.75,37.25,1 -121.625,37.25,1 -121.625,37.125,1 -121.75,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,36.87500000000001,1 -121.75,36.75,1 -121.875,36.75,1 -121.875,36.87500000000001,1 -121.75,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.5,37.375,1 -121.5,37.5,1 -121.375,37.5,1 -121.375,37.375,1 -121.5,37.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,36.375,1 -121.875,36.375,1 -121.875,36.5,1 -121.75,36.5,1 -121.75,36.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.375,1 -121.75,37.5,1 -121.625,37.5,1 -121.625,37.375,1 -121.75,37.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.375,1 -122.125,38.25,1 -122.25,38.25,1 -122.25,38.375,1 -122.125,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.5,36.625,1 -121.5,36.75,1 -121.375,36.75,1 -121.375,36.625,1 -121.5,36.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,36.625,1 -121.25,36.5,1 -121.375,36.5,1 -121.375,36.625,1 -121.25,36.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37,1 -121.75,37.125,1 -121.625,37.125,1 -121.625,37,1 -121.75,37,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.625,1 -122.75,38.625,1 -122.75,38.75,1 -122.625,38.75,1 -122.625,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,37.125,1 -121.625,37.25,1 -121.5,37.25,1 -121.5,37.125,1 -121.625,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.5,37.25,1 -121.5,37.375,1 -121.375,37.375,1 -121.375,37.25,1 -121.5,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38.375,1 -122.125,38.5,1 -122,38.5,1 -122,38.375,1 -122.125,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.375,1 -122.125,37.5,1 -122,37.5,1 -122,37.375,1 -122.125,37.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,37.25,1 -121.25,37.125,1 -121.375,37.125,1 -121.375,37.25,1 -121.25,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,38.25,1 -122.375,38.375,1 -122.25,38.375,1 -122.25,38.25,1 -122.375,38.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,36.625,1 -121.625,36.75,1 -121.5,36.75,1 -121.5,36.625,1 -121.625,36.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.5,1 -122.125,37.625,1 -122,37.625,1 -122,37.5,1 -122.125,37.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,37.5,1 -122,37.625,1 -121.875,37.625,1 -121.875,37.5,1 -122,37.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,36.375,1 -121.25,36.5,1 -121.125,36.5,1 -121.125,36.375,1 -121.25,36.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38,1 -122.625,38.125,1 -122.5,38.125,1 -122.5,38,1 -122.625,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.75,1 -122.25,37.75,1 -122.25,37.875,1 -122.125,37.875,1 -122.125,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,37.75,1 -122.375,37.875,1 -122.25,37.875,1 -122.25,37.75,1 -122.375,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-120.875,36.87500000000001,1 -120.875,36.75,1 -121,36.75,1 -121,36.87500000000001,1 -120.875,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,37,1 -121.25,37.125,1 -121.125,37.125,1 -121.125,37,1 -121.25,37,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,37.125,1 -121.25,37,1 -121.375,37,1 -121.375,37.125,1 -121.25,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,36.75,1 -121.25,36.625,1 -121.375,36.625,1 -121.375,36.75,1 -121.25,36.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.5,1 -122.125,37.375,1 -122.25,37.375,1 -122.25,37.5,1 -122.125,37.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.5,36.375,1 -121.5,36.5,1 -121.375,36.5,1 -121.375,36.375,1 -121.5,36.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.125,36.625,1 -121.125,36.75,1 -121,36.75,1 -121,36.625,1 -121.125,36.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.125,1 -122.75,38.125,1 -122.75,38.25,1 -122.625,38.25,1 -122.625,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,38,1 -122.5,38.125,1 -122.375,38.125,1 -122.375,38,1 -122.5,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.125,1 -122.625,38.25,1 -122.5,38.25,1 -122.5,38.125,1 -122.625,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,37.125,1 -122.5,37.25,1 -122.375,37.25,1 -122.375,37.125,1 -122.5,37.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.375,38.5,1 -123.375,38.625,1 -123.25,38.625,1 -123.25,38.5,1 -123.375,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.5,38.5,1 -123.5,38.625,1 -123.375,38.625,1 -123.375,38.5,1 -123.5,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,37.75,1 -122.625,37.875,1 -122.5,37.875,1 -122.5,37.75,1 -122.625,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.875,38.125,1 -122.875,38.25,1 -122.75,38.25,1 -122.75,38.125,1 -122.875,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,36.75,1 -121.75,36.87500000000001,1 -121.625,36.87500000000001,1 -121.625,36.75,1 -121.75,36.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,36.75,1 -121.25,36.87500000000001,1 -121.125,36.87500000000001,1 -121.125,36.75,1 -121.25,36.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,36.375,1 -121.625,36.5,1 -121.5,36.5,1 -121.5,36.375,1 -121.625,36.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.625,1 -122.125,37.5,1 -122.25,37.5,1 -122.25,37.625,1 -122.125,37.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,37.875,1 -122.375,38,1 -122.25,38,1 -122.25,37.875,1 -122.375,37.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38.125,1 -121.75,38.25,1 -121.625,38.25,1 -121.625,38.125,1 -121.75,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.125,36.75,1 -121.125,36.87500000000001,1 -121,36.87500000000001,1 -121,36.75,1 -121.125,36.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,38.375,1 -122.5,38.5,1 -122.375,38.5,1 -122.375,38.375,1 -122.5,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,38.5,1 -122.5,38.625,1 -122.375,38.625,1 -122.375,38.5,1 -122.5,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,36.625,1 -121.75,36.75,1 -121.625,36.75,1 -121.625,36.625,1 -121.75,36.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.125,36.5,1 -121.125,36.625,1 -121,36.625,1 -121,36.5,1 -121.125,36.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.5,36.87500000000001,1 -121.5,37,1 -121.375,37,1 -121.375,36.87500000000001,1 -121.5,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,37.75,1 -122.5,37.875,1 -122.375,37.875,1 -122.375,37.75,1 -122.5,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,37.625,1 -122.5,37.75,1 -122.375,37.75,1 -122.375,37.625,1 -122.5,37.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,37.625,1 -122.625,37.75,1 -122.5,37.75,1 -122.5,37.625,1 -122.625,37.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.125,1 -122.625,38,1 -122.75,38,1 -122.75,38.125,1 -122.625,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,37.25,1 -122.5,37.375,1 -122.375,37.375,1 -122.375,37.25,1 -122.5,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.25,1 -121.875,37.25,1 -121.875,37.375,1 -121.75,37.375,1 -121.75,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,37.25,1 -122,37.375,1 -121.875,37.375,1 -121.875,37.25,1 -122,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,36.75,1 -121.625,36.87500000000001,1 -121.5,36.87500000000001,1 -121.5,36.75,1 -121.625,36.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.75,1 -122.125,37.625,1 -122.25,37.625,1 -122.25,37.75,1 -122.125,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,37.5,1 -122.375,37.625,1 -122.25,37.625,1 -122.25,37.5,1 -122.375,37.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,37.875,1 -122.5,38,1 -122.375,38,1 -122.375,37.875,1 -122.5,37.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,37.875,1 -122.625,38,1 -122.5,38,1 -122.5,37.875,1 -122.625,37.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,36.87500000000001,1 -122.125,37,1 -122,37,1 -122,36.87500000000001,1 -122.125,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,36.87500000000001,1 -122.25,36.87500000000001,1 -122.25,37,1 -122.125,37,1 -122.125,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.5,1 -122.625,38.375,1 -122.75,38.375,1 -122.75,38.5,1 -122.625,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.25,1 -121.75,37.125,1 -121.875,37.125,1 -121.875,37.25,1 -121.75,37.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,38.375,1 -121.75,38.5,1 -121.625,38.5,1 -121.625,38.375,1 -121.75,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,38.125,1 -122.5,38.25,1 -122.375,38.25,1 -122.375,38.125,1 -122.5,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,36.625,1 -121.75,36.5,1 -121.875,36.5,1 -121.875,36.625,1 -121.75,36.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.875,38.375,1 -122.875,38.5,1 -122.75,38.5,1 -122.75,38.375,1 -122.875,38.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,36.375,1 -122,36.5,1 -121.875,36.5,1 -121.875,36.375,1 -122,36.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,36.375,1 -121.375,36.375,1 -121.375,36.5,1 -121.25,36.5,1 -121.25,36.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.5,38.25,1 -122.5,38.375,1 -122.375,38.375,1 -122.375,38.25,1 -122.5,38.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,36.87500000000001,1 -122,37,1 -121.875,37,1 -121.875,36.87500000000001,1 -122,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,36.5,1 -121.75,36.625,1 -121.625,36.625,1 -121.625,36.5,1 -121.75,36.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.5,38.625,1 -123.5,38.75,1 -123.375,38.75,1 -123.375,38.625,1 -123.5,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.5,38.625,1 -123.625,38.625,1 -123.625,38.75,1 -123.5,38.75,1 -123.5,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,37.75,1 -121.875,37.75,1 -121.875,37.875,1 -121.75,37.875,1 -121.75,37.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.875,38.75,1 -122.875,38.875,1 -122.75,38.875,1 -122.75,38.75,1 -122.875,38.75,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,36.87500000000001,1 -121.375,36.87500000000001,1 -121.375,37,1 -121.25,37,1 -121.25,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.125,1 -123,38.25,1 -122.875,38.25,1 -122.875,38.125,1 -123,38.125,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123.25,38.625,1 -123.25,38.75,1 -123.125,38.75,1 -123.125,38.625,1 -123.25,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.125,36.375,1 -121.125,36.5,1 -121,36.5,1 -121,36.375,1 -121.125,36.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.25,36.87500000000001,1 -121.25,36.75,1 -121.375,36.75,1 -121.375,36.87500000000001,1 -121.25,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.875,38.25,1 -122.875,38.375,1 -122.75,38.375,1 -122.75,38.25,1 -122.875,38.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.25,1 -123,38.375,1 -122.875,38.375,1 -122.875,38.25,1 -123,38.25,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,38,1 -122.125,38.125,1 -122,38.125,1 -122,38,1 -122.125,38,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.125,37.875,1 -122.125,38,1 -122,38,1 -122,37.875,1 -122.125,37.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,38.625,1 -122.375,38.75,1 -122.25,38.75,1 -122.25,38.625,1 -122.375,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-123,38.625,1 -123.125,38.625,1 -123.125,38.75,1 -123,38.75,1 -123,38.625,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,36.87500000000001,1 -121.75,37,1 -121.625,37,1 -121.625,36.87500000000001,1 -121.75,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.75,36.87500000000001,1 -121.875,36.87500000000001,1 -121.875,37,1 -121.75,37,1 -121.75,36.87500000000001,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.625,38.875,1 -122.625,38.75,1 -122.75,38.75,1 -122.75,38.875,1 -122.625,38.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122,38.5,1 -122,38.625,1 -121.875,38.625,1 -121.875,38.5,1 -122,38.5,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,37.375,1 -122.375,37.5,1 -122.25,37.5,1 -122.25,37.375,1 -122.375,37.375,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-121.625,37.875,1 -121.625,38,1 -121.5,38,1 -121.5,37.875,1 -121.625,37.875,1 </coordinates>
			</LineString>
			<LineString>
				<tessellate>1</tessellate>
				<coordinates>
-122.375,38.375,1 -122.375,38.5,1 -122.25,38.5,1 -122.25,38.375,1 -122.375,38.375,1 </coordinates>
			</LineString>
		</MultiGeometry>
	</Placemark>
	<Document>
		<name>Available Quadrangles</name>
		<open>1</open>
		<Style id="bubble">
		  <IconStyle><color>ff0000ff</color><scale>0.8</scale><Icon><href>http://maps.google.com/mapfiles/kml/pal4/icon26.png</href></Icon></IconStyle>
		  <LabelStyle><scale>0.8</scale></LabelStyle>
		  <BalloonStyle><text><![CDATA[<font face="Verdana"><img src="https://earthquake.usgs.gov/img/ge/banner.jpg" alt="USGS" width="400" height="40" />$[description]</font>]]></text></BalloonStyle>
		</Style>
$placemarks
	</Document>
</Folder>
</kml>

EOD;

?>
