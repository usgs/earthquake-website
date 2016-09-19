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


	$plotname   = 'Hilo, HI Hazard Curves';
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
		'0.005' => '8.7187E-01',
      '0.007' => '8.1538E-01',
      '0.010' => '7.4428E-01',
      '0.014' => '6.5717E-01',
      '0.019' => '5.5227E-01',
      '0.027' => '4.3499E-01',
      '0.038' => '3.1821E-01',
      '0.053' => '2.1541E-01',
      '0.074' => '1.3773E-01',
      '0.103' => '8.5149E-02',
      '0.145' => '4.9428E-02',
      '0.203' => '2.6247E-02',
      '0.284' => '1.2054E-02',
      '0.397' => '4.7032E-03',
      '0.556' => '1.5734E-03',
      '0.778' => '4.6937E-04',
      '1.090' => '1.2735E-04',
      '1.520' => '3.2816E-05',
      '2.130' => '7.743E-06'
	);

	$five_hz = array(
		'0.005' => '9.5159E-01',
      '0.007' => '9.2432E-01',
      '0.011' => '8.783E-01',
      '0.017' => '8.0933E-01',
      '0.025' => '7.1198E-01',
      '0.038' => '5.8595E-01',
      '0.057' => '4.4206E-01',
      '0.085' => '3.0065E-01',
      '0.128' => '1.8455E-01',
      '0.192' => '1.0488E-01',
      '0.288' => '5.6111E-02',
      '0.432' => '2.6854E-02',
      '0.649' => '1.0387E-02',
      '1.300' => '1.0633E-03',
      '1.950' => '2.0099E-04',
      '2.920' => '3.3516E-05',
      '4.380' => '5.1777E-06',
      '6.570' => '7.3601E-07'
	);

	$three_hz = array( // Note: This is really 3.33Hz or 0.3 sec.
		'0.005' => '9.4272E-01',
      '0.007' => '9.1078E-01',
      '0.011' => '8.5876E-01',
      '0.017' => '7.8223E-01',
      '0.025' => '6.768E-01',
      '0.038' => '5.448E-01',
      '0.057' => '4.006E-01',
      '0.085' => '2.6577E-01',
      '0.128' => '1.6035E-01',
      '0.192' => '9.0691E-02',
      '0.288' => '4.8774E-02',
      '0.432' => '2.3553E-02',
      '0.649' => '9.1598E-03',
      '1.300' => '8.8066E-04',
      '1.950' => '1.4381E-04',
      '2.920' => '1.8791E-05',
      '4.380' => '2.2095E-06',
      '6.570' => '2.5297E-07'
	);
	$one_hz = array(
		'0.002' => '8.7274E-01',
      '0.004' => '8.0226E-01',
      '0.006' => '7.0169E-01',
      '0.008' => '5.7543E-01',
      '0.013' => '4.3654E-01',
      '0.019' => '3.0846E-01',
      '0.029' => '2.042E-01',
      '0.043' => '1.2997E-01',
      '0.064' => '8.1241E-02',
      '0.096' => '5.020E-02',
      '0.144' => '2.9429E-02',
      '0.216' => '1.5135E-02',
      '0.324' => '6.2908E-03',
      '0.487' => '1.9433E-03',
      '0.730' => '4.2148E-04',
      '1.090' => '6.147E-05',
      '1.640' => '5.4891E-06',
      '2.460' => '3.2425E-07',
      '3.690' => '1.4371E-08',
      '5.540' => '5.5836E-10'
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
