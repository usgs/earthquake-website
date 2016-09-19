<?php
	//---------------------------------------------------------------------------
	// Utility sub-routines
	//---------------------------------------------------------------------------
	function point2pixel($x, $y) {

		// Coordinate plane minimum and maximum arithmetic values.
		global $gxmin; global $gxmax;
		global $gymin; global $gymax;

		// Coordinate plane minimum and maximum pixel values.
		global $gpxmin; global $gpxmax;
		global $gpymin; global $gpymax;

		/**
		 * For the conversion we figure the % distance of the requested point
		 * compared to the total arithmetic span, then we determine the number of 
		 * pixels that % maps into based on the pixel span.
		 *
		 * Since images work on a top-down coordinate system (origin in upper
		 * left), we subtract for y values, but add for x values. This is also the
		 * reason why the min and max values are reversed between x and y
		 * calculations.
		 */
		$px = $gpxmin + ((($x-$gxmin)/($gxmax-$gxmin))*($gpxmax-$gpxmin));
		$py = $gpymin - ((($y-$gymin)/($gymax-$gymin))*($gpymin-$gpymax));

		return array($px, $py);
	}

	function plot_point($img, $point, $color) {
		$px = $point[0];
		$py = $point[1];
		imagefilledrectangle($img, $px - 1, $py - 1, $px + 1, $py + 1, $color);
	}

	function plot_line($img, $p1, $p2, $color, $thick=3) {
		$x1 = $p1[0]; $x2 = $p2[0];
		$y1 = $p1[1]; $y2 = $p2[1];

		if ($thick == 1) { return imageline($img, $x1, $y1, $x2, $y2, $color); }

		$t = $thick / 2 - 0.5;
		if ($x1 == $x2 || $y1 == $y2) {
			return imagefilledrectangle(
					$img,
					round(min($x1, $x2) - $t),
					round(min($y1, $y2) - $t),
					round(max($x1, $x2) + $t),
					round(max($y1, $y2) + $t),
					$color
				);
		}

		$k = ($y2 - $y1) / ($x2 - $x1); //y = kx + q
		$a = $t / sqrt(1 + pow($k, 2));
		$points = array(
			round($x1 - (1+$k)*$a), round($y1 + (1-$k)*$a),
			round($x1 - (1-$k)*$a), round($y1 - (1+$k)*$a),
			round($x2 + (1+$k)*$a), round($y2 - (1-$k)*$a),
			round($x2 + (1-$k)*$a), round($y2 + (1+$k)*$a),
		);

		imagefilledpolygon($img, $points, 4, $color);
		return imagepolygon($img, $points, 4, $color);
	}

	//---------------------------------------------------------------------------
	// Read input parameters
	//---------------------------------------------------------------------------

	$graphwidth   = '800'; // Pixels. Total width of image.
	$graphheight  = '600'; // Pixels. Total height of image.
	$graphpadding = '80'; // Pixels. How far to offset the graph from image edge.

	$titlefontsize = 18;
	$axisfontsize   = '12';
	$tickfontsize   = '10';
	$legendfontsize = '10';


	$plotname   = 'Honolulu, HI Hazard Curves';
	$xaxislabel = 'Intensity Measure Level';
	$yaxislabel = 'Frequency of Exceedance';

	$fontfile = 'arial.ttf';

	$PLOT_TYPES = array('SCATTERPLOT' => 'Scatterplot', 'LINE' => 'Line');
	$logscale = (param('logscale', 'true')=='true')?true:false;
	$plottype = param('plottype', $PLOT_TYPES['LINE']);
	$num_tickmarks = param('num_tickmarks', 10);

	// Plotting parameters
	$gpxmin = $graphpadding; $gpxmax = $graphwidth - $graphpadding;
	$gpymin = $graphheight - $graphpadding; $gpymax = $graphpadding;

	$pga = array(
 		'0.005' => '1.2043E-01',
      '0.007' => '9.557E-02',
      '0.010' => '7.475E-02',
      '0.014' => '5.7092E-02',
      '0.019' => '4.146E-02',
      '0.027' => '2.8138E-02',
      '0.038' => '1.7817E-02',
      '0.053' => '1.0532E-02',
      '0.074' => '5.9038E-03',
      '0.103' => '3.1735E-03',
      '0.145' => '1.5858E-03',
      '0.203' => '7.4289E-04',
      '0.284' => '3.133E-04',
      '0.397' => '1.1464E-04',
      '0.556' => '3.4743E-05',
      '0.778' => '8.5853E-06',
      '1.090' => '1.713E-06',
      '1.520' => '2.8915E-07',
      '2.130' => '3.9241E-08'
	);

	$five_hz = array(
		'0.005' => '1.860E-01',
      '0.007' => '1.5884E-01',
      '0.011' => '1.266E-01',
      '0.017' => '9.5824E-02',
      '0.025' => '6.8668E-02',
      '0.038' => '4.6067E-02',
      '0.057' => '2.8778E-02',
      '0.085' => '1.6682E-02',
      '0.128' => '8.9839E-03',
      '0.192' => '4.5088E-03',
      '0.288' => '2.0944E-03',
      '0.432' => '8.7956E-04',
      '0.649' => '3.2089E-04',
      '1.300' => '3.6237E-05',
      '1.950' => '7.0744E-06',
      '2.920' => '1.0106E-06',
      '4.380' => '1.0126E-07',
      '6.570' => '7.0409E-09'
	);
	$three_hz = array( // Note: This is really 3.33Hz or 0.3 sec.
		'0.005' => '1.8363E-01',
      '0.007' => '1.5661E-01',
      '0.011' => '1.2417E-01',
      '0.017' => '9.2803E-02',
      '0.025' => '6.5223E-02',
      '0.038' => '4.2851E-02',
      '0.057' => '2.6294E-02',
      '0.085' => '1.5034E-02',
      '0.128' => '7.9999E-03',
      '0.192' => '3.9581E-03',
      '0.288' => '1.8081E-03',
      '0.432' => '7.4624E-04',
      '0.649' => '2.6854E-04',
      '1.300' => '3.0458E-05',
      '1.950' => '6.1204E-06',
      '2.920' => '9.1557E-07',
      '4.380' => '9.6444E-08',
      '6.570' => '6.9484E-09'
	);
	$one_hz = array(
		'0.002' => '1.6937E-01',
      '0.004' => '1.4155E-01',
      '0.006' => '1.0761E-01',
      '0.008' => '7.3795E-02',
      '0.013' => '4.5517E-02',
      '0.019' => '2.5802E-02',
      '0.029' => '1.3459E-02',
      '0.043' => '6.6095E-03',
      '0.064' => '3.0916E-03',
      '0.096' => '1.3849E-03',
      '0.144' => '5.8225E-04',
      '0.216' => '2.2228E-04',
      '0.324' => '7.4418E-05',
      '0.487' => '2.0768E-05',
      '0.730' => '4.7052E-06',
      '1.090' => '8.5031E-07',
      '1.640' => '1.152E-07',
      '2.460' => '1.2311E-08',
      '3.690' => '1.0202E-09',
      '5.540' => '6.3222E-11'
	);

	$curves = array(
		'pga' => array(
			'data' => $pga,
			'label' => 'PGA',
			'color' => 'BLUE'
		),
		'five_hz' => array(
			'data' => $five_hz,
			'label' => '0.2 Sec. SA',
			'color' => 'RED'
		),
		'three_hz' => array(
			'data' => $three_hz,
			'label' => '0.3 Sec. SA',
			'color' => 'GREEN'
		),
		'one_hz' => array(
			'data' => $one_hz,
			'label' => '1.0 Sec. SA',
			'color' => 'YELLOW'
		)
	);

	//---------------------------------------------------------------------------
	// Create the graphing canvas and set up some 'environment' stuff.
	//---------------------------------------------------------------------------

	// Canvas
	$GRAPH  = imagecreate($graphwidth, $graphheight);

	// Colors
	$WHITE  = imagecolorallocate($GRAPH, 0xFF, 0xFF, 0xFF);
	$LGREY  = imagecolorallocate($GRAPH, 0xCC, 0xCC, 0xCC);
	$GREY   = imagecolorallocate($GRAPH, 0x99, 0x99, 0x99);
	$DGREY  = imagecolorallocate($GRAPH, 0x33, 0x33, 0x33);
	$BLACK  = imagecolorallocate($GRAPH, 0x00, 0x00, 0x00);
	$RED    = imagecolorallocate($GRAPH, 0x99, 0x00, 0x00);
	$GREEN  = imagecolorallocate($GRAPH, 0x00, 0x66, 0x33);
	$BLUE   = imagecolorallocate($GRAPH, 0x00, 0x33, 0x66);
	$YELLOW = imagecolorallocate($GRAPH, 0xCC, 0x99, 0x00);

	$COLOR_PALLET = array(
		'WHITE' => $WHITE,
		'LGREY' => $LGREY,
		'GREY'  => $GREY,
		'DGREY' => $DGREY,
		'BLACK' => $BLACK,
		'RED'   => $RED,
		'GREEN' => $GREEN,
		'BLUE'  => $BLUE,
		'YELLOW' => $YELLOW
	);

	//---------------------------------------------------------------------------
	// Create the plotting axis and graph title.
	//---------------------------------------------------------------------------

	// Draw a 2 pixel wide 'line' (rectangle) for the X-Axis
	imagefilledrectangle($GRAPH, $graphpadding, $graphheight - $graphpadding - 2,
		$graphwidth - $graphpadding, $graphheight - $graphpadding, $GREY);

	// Draw a 2 pixel wide 'line' (rectangle) for the Y-Axis
	imagefilledrectangle($GRAPH, $graphpadding, $graphpadding,
		$graphpadding + 2, $graphheight - $graphpadding, $GREY);

	// --- Label the X-Axis --- //
	// Get the bounding box of the text so we can position well.
	$bounds = imagettfbbox($axisfontsize, 0, $fontfile, $xaxislabel);
	// Compute x position so text is horizontally centered.
	$x = ($graphwidth/2) - ( ($bounds[2] - $bounds[0])/2);
	// Compute y position so text has 35px padding between axis and top of text.
	$y = $graphheight - $graphpadding + 35 + ($bounds[3] - $bounds[5]);
	// Now we can simply write the text. 0 = text angle.
	imagettftext($GRAPH, $axisfontsize, 0, $x, $y, $DGREY, $fontfile,
		$xaxislabel);

	// --- Label the Y-Axis --- //
	// Get bounding box of text so we can position well.
	$bounds = imagettfbbox($axisfontsize, 90, $fontfile, $yaxislabel);
	// Compute x position so text has 50px padding between axis and side of text.
	$x = $graphpadding - 50 - ($bounds[1] - $bounds[2]);
	// Compute y position so text is vertically centered.
	$y = $graphpadding + ( ($graphheight-(2*$graphpadding) )/2) +
			(($bounds[7] - $bounds[5])/2);
	// Now we can simply write the text. 90 = text angle.
	imagettftext($GRAPH, $axisfontsize, 90, $x, $y, $DGREY, $fontfile,
		$yaxislabel);


	//---------------------------------------------------------------------------
	// Plot each of the curves.
	//---------------------------------------------------------------------------

	// First determine the plotting extents.
	$gxmin = null; $gxmax = null;
	$gymin = null; $gymax = null;

	foreach($curves as $curve) {
		$data = $curve['data'];
		$keys = array_keys($data);
		$vals = array_values($data);

		$tmp_gxmin = min($keys); $tmp_gxmax = max($keys);
		$tmp_gymin = min($vals); $tmp_gymax = max($vals);

		if($gxmin){$gxmin=min($gxmin,$tmp_gxmin);}else{$gxmin=$tmp_gxmin;}
		if($gxmax){$gxmax=max($gxmax,$tmp_gxmax);}else{$gxmax=$tmp_gxmax;}
		if($gymin){$gymin=min($gymin,$tmp_gymin);}else{$gymin=$tmp_gymin;}
		if($gymax){$gymax=max($gymax,$tmp_gymax);}else{$gymax=$tmp_gymax;}
	}

	// Add some padding so curve doesn't hit edges of graph
	$gxmin -= ($gxmin/2); $gxmax += ($gxmax/2);
	$gymin -= ($gymin/2); $gymax += ($gymax/2);

	if($logscale) {
		$gxmin = log($gxmin); $gxmax = log($gxmax);
		$gymin = log($gymin); $gymax = log($gymax);
		$legendpos = point2pixel($gxmin, $gymin);
		$legendxoffset = 10;
		$legendyoffset = -10;
	} else {
		$legendpos = point2pixel($gxmax, $gymax);
		$legendxoffset = -100;
		$legendyoffset = 10;
	}

	// Plot x axis tickmarks
	for($i = $gxmin; $i <= $gxmax; $i += ( ($gxmax - $gxmin) / $num_tickmarks)) {
		$mark = point2pixel($i, $gymin);
		$xpos = $mark[0]; $ypos = $mark[1];
		$bounds = imagettfbbox($tickfontsize,0,$fontfile,number_format($i,2));
		$xpos = intval($xpos - (($bounds[2]-$bounds[0])/2));
		imagettftext($GRAPH, $tickfontsize, 0, $xpos, $ypos+20, $DGREY, $fontfile,
			number_format($i, 2)
		);
	}

	// Plot y axis tick marks
	for($i = $gymin; $i <= $gymax; $i += ( ($gymax - $gymin) / $num_tickmarks)) {
		$mark = point2pixel($gxmin, $i);
		$xpos = $mark[0]; $ypos = $mark[1];
		$bounds = imagettfbbox($tickfontsize,0,$fontfile,number_format($i,2));
		$xpos = intval($xpos - (($bounds[2]-$bounds[0])));
		imagettftext($GRAPH, $tickfontsize, 0, $xpos-5, $ypos, $DGREY, $fontfile,
			number_format($i, 2)
		);
	}

	
	// Now we can actually plot the curves
	foreach($curves as $curve) {
		$data = $curve['data'];
		$color = $COLOR_PALLET[$curve['color']];
		$label = $curve['label'];

		imagettftext($GRAPH, $legendfontsize, 0, $legendpos[0] + $legendxoffset,
			$legendpos[1] + $legendyoffset, $color, $fontfile, $label);
		if ($logscale) { $legendyoffset -= 20; } else { $legendyoffset += 20; }

		$prev = array();
		$new  = array();

		foreach($data as $x=>$y) {
			if ($logscale) { $x = log($x); $y = log($y);}

			if ($plottype == $PLOT_TYPES['SCATTERPLOT']) {
				plot_point($GRAPH, point2pixel($x, $y), $color);
			} else {
				$new = point2pixel($x, $y);
				if (!empty($prev) && !empty($new))
					plot_line($GRAPH, $prev, $new, $color);
				$prev = $new;
			}
		}
	}

	// Print a plot title
	// Get the bounding box of the text so we can position well.
	$bounds = imagettfbbox($titlefontsize, 0, $fontfile, $plotname);
	// Compute x position so text is horizontally centered.
	$x = ($graphwidth/2) - ( ($bounds[2] - $bounds[0])/2);
	// Compute y position so text has 20px padding from img edge and top of text.
	$y = 20 + ($bounds[3] - $bounds[5]);
	// Now we can simply write the text. 0 = text angle.
	imagettftext($GRAPH, $titlefontsize, 0, $x, $y, $BLACK, $fontfile,
		$plotname);


	//---------------------------------------------------------------------------
	// Output the results
	//---------------------------------------------------------------------------
	header('Content-Type: image/png');
	imagepng($GRAPH);
	imagedestroy($GRAPH);
?>
