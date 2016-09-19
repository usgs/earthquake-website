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


	$plotname   = 'Kihei, HI Hazard Curves';
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
		'0.005' => '4.8551E-01',
      '0.007' => '4.0614E-01',
      '0.010' => '3.2506E-01',
      '0.014' => '2.4485E-01',
      '0.019' => '1.6922E-01',
      '0.027' => '1.0584E-01',
      '0.038' => '6.0359E-02',
      '0.053' => '3.1866E-02',
      '0.074' => '1.6189E-02',
      '0.103' => '8.1082E-03',
      '0.145' => '3.8706E-03',
      '0.203' => '1.7652E-03',
      '0.284' => '7.324E-04',
      '0.397' => '2.6531E-04',
      '0.556' => '7.9947E-05',
      '0.778' => '1.9701E-05',
      '1.090' => '3.9282E-06',
      '1.520' => '6.6389E-07',
      '2.130' => '9.0344E-08'
	);

	$five_hz = array(
		'0.005' => '6.4953E-01',
      '0.007' => '5.8406E-01',
      '0.011' => '4.9905E-01',
      '0.017' => '3.9928E-01',
      '0.025' => '2.9017E-01',
      '0.038' => '1.865E-01',
      '0.057' => '1.0555E-01',
      '0.085' => '5.3514E-02',
      '0.128' => '2.521E-02',
      '0.192' => '1.1435E-02',
      '0.288' => '5.0093E-03',
      '0.432' => '2.0437E-03',
      '0.649' => '7.3504E-04',
      '1.300' => '8.2026E-05',
      '1.950' => '1.5956E-05',
      '2.920' => '2.2752E-06',
      '4.380' => '2.2782E-07',
      '6.570' => '1.584E-08'
	);

	$three_hz = array( // Note: This is really 3.33Hz or 0.3 sec.
		'0.005' => '6.3254E-01',
      '0.007' => '5.6477E-01',
      '0.011' => '4.7806E-01',
      '0.017' => '3.775E-01',
      '0.025' => '2.6993E-01',
      '0.038' => '1.706E-01',
      '0.057' => '9.5217E-02',
      '0.085' => '4.7699E-02',
      '0.128' => '2.2176E-02',
      '0.192' => '9.9077E-03',
      '0.288' => '4.2684E-03',
      '0.432' => '1.7144E-03',
      '0.649' => '6.0981E-04',
      '1.300' => '6.8557E-05',
      '1.950' => '1.3736E-05',
      '2.920' => '2.0509E-06',
      '4.380' => '2.1579E-07',
      '6.570' => '1.5527E-08'
	);
	$one_hz = array(
		'0.002' => '5.3882E-01',
      '0.004' => '4.5058E-01',
      '0.006' => '3.4861E-01',
      '0.008' => '2.4664E-01',
      '0.013' => '1.5794E-01',
      '0.019' => '9.2571E-02',
      '0.029' => '4.908E-02',
      '0.043' => '2.3536E-02',
      '0.064' => '1.010E-02',
      '0.096' => '3.9602E-03',
      '0.144' => '1.4681E-03',
      '0.216' => '5.2036E-04',
      '0.324' => '1.6921E-04',
      '0.487' => '4.6765E-05',
      '0.730' => '1.0559E-05',
      '1.090' => '1.9024E-06',
      '1.640' => '2.5727E-07',
      '2.460' => '2.7444E-08',
      '3.690' => '2.2716E-09',
      '5.540' => '1.4068E-10'
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
