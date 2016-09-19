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


	$plotname   = 'Standard Normal Approximations';
	$xaxislabel = 'X';
	$yaxislabel = 'Y';

	$fontfile = $_SERVER['DOCUMENT_ROOT'] . '/hazards/products/hi/maps/curves/arial.ttf';

	$PLOT_TYPES = array('SCATTERPLOT' => 'Scatterplot', 'LINE' => 'Line');
	$logscale = (param('logscale', 'false')=='true')?true:false;
	$plottype = param('plottype', $PLOT_TYPES['LINE']);
	$num_tickmarks = param('num_tickmarks', 10);
	$show_curves = param('show', 'weighted_large,weighted_small,linear_large,' .
		'linear_small,loglinear_large,loglinear_small');
	$show_curves = explode(',', $show_curves);

	// Plotting parameters
	$gpxmin = $graphpadding; $gpxmax = $graphwidth - $graphpadding;
	$gpymin = $graphheight - $graphpadding; $gpymax = $graphpadding;

	$weighted_large = array(
		'-5.0000'=>'0.0000',
		'-3.0000'=>'0.0044',
		'-3.0000'=>'0.0044',
		'-2.6667'=>'0.0114',
		'-2.3333'=>'0.0262',
		'-2.0000'=>'0.0540',
		'-1.6667'=>'0.0995',
		'-1.3333'=>'0.1640',
		'-1.0000'=>'0.2420',
		'-1.0000'=>'0.2420',
		'-0.9000'=>'0.2661',
		'-0.8000'=>'0.2897',
		'-0.7000'=>'0.3123',
		'-0.6000'=>'0.3332',
		'-0.5000'=>'0.3521',
		'-0.4000'=>'0.3683',
		'-0.3000'=>'0.3814',
		'-0.2000'=>'0.3910',
		'-0.1000'=>'0.3970',
		'-0.0000'=>'0.3989',
		'0.1000'=>'0.3970',
		'0.2000'=>'0.3910',
		'0.3000'=>'0.3814',
		'0.4000'=>'0.3683',
		'0.5000'=>'0.3521',
		'0.6000'=>'0.3332',
		'0.7000'=>'0.3123',
		'0.8000'=>'0.2897',
		'0.9000'=>'0.2661',
		'1.0000'=>'0.2420',
		'1.0000'=>'0.2420',
		'1.2500'=>'0.1826',
		'1.5000'=>'0.1295',
		'1.7500'=>'0.0863',
		'2.0000'=>'0.0540',
		'2.2500'=>'0.0317',
		'2.5000'=>'0.0175',
		'2.7500'=>'0.0091',
		'3.0000'=>'0.0044',
		'5.0000'=>'0.0000'
	);

	$linear_large = array(
		'-5.0000'=>'0.0000',
		'-4.7500'=>'0.0000',
		'-4.5000'=>'0.0000',
		'-4.2500'=>'0.0000',
		'-4.0000'=>'0.0001',
		'-3.7500'=>'0.0004',
		'-3.5000'=>'0.0009',
		'-3.2500'=>'0.0020',
		'-3.0000'=>'0.0044',
		'-2.7500'=>'0.0091',
		'-2.5000'=>'0.0175',
		'-2.2500'=>'0.0317',
		'-2.0000'=>'0.0540',
		'-1.7500'=>'0.0863',
		'-1.5000'=>'0.1295',
		'-1.2500'=>'0.1826',
		'-1.0000'=>'0.2420',
		'-0.7500'=>'0.3011',
		'-0.5000'=>'0.3521',
		'-0.2500'=>'0.3867',
		'0.0000'=>'0.3989',
		'0.2500'=>'0.3867',
		'0.5000'=>'0.3521',
		'0.7500'=>'0.3011',
		'1.0000'=>'0.2420',
		'1.2500'=>'0.1826',
		'1.5000'=>'0.1295',
		'1.7500'=>'0.0863',
		'2.0000'=>'0.0540',
		'2.2500'=>'0.0317',
		'2.5000'=>'0.0175',
		'2.7500'=>'0.0091',
		'3.0000'=>'0.0044',
		'3.2500'=>'0.0020',
		'3.5000'=>'0.0009',
		'3.7500'=>'0.0004',
		'4.0000'=>'0.0001',
		'4.2500'=>'0.0000',
		'4.5000'=>'0.0000',
		'4.7500'=>'0.0000',
		'5.0000'=>'0.0000'
	);

	$loglinear_large = array(
		'-5.0000'=>'0.0000',
		'-4.7438'=>'0.0000',
		'-4.4876'=>'0.0000',
		'-4.2314'=>'0.0001',
		'-3.9752'=>'0.0001',
		'-3.7190'=>'0.0004',
		'-3.4628'=>'0.0010',
		'-3.2065'=>'0.0023',
		'-2.9503'=>'0.0051',
		'-2.6941'=>'0.0106',
		'-2.4379'=>'0.0204',
		'-2.1817'=>'0.0369',
		'-1.9255'=>'0.0625',
		'-1.6693'=>'0.0990',
		'-1.4131'=>'0.1470',
		'-1.1569'=>'0.2043',
		'-0.9007'=>'0.2659',
		'-0.6445'=>'0.3241',
		'-0.3883'=>'0.3700',
		'-0.1321'=>'0.3955',
		'0.1241'=>'0.3959',
		'0.3804'=>'0.3711',
		'0.6366'=>'0.3258',
		'0.8928'=>'0.2678',
		'1.1490'=>'0.2062',
		'1.4052'=>'0.1486',
		'1.6614'=>'0.1004',
		'1.9176'=>'0.0634',
		'2.1738'=>'0.0376',
		'2.4300'=>'0.0208',
		'2.6862'=>'0.0108',
		'2.9424'=>'0.0053',
		'3.1986'=>'0.0024',
		'3.4548'=>'0.0010',
		'3.7110'=>'0.0004',
		'3.9673'=>'0.0002',
		'4.2235'=>'0.0001',
		'4.4797'=>'0.0000',
		'4.7359'=>'0.0000',
		'4.9921'=>'0.0000'
	);

	$weighted_small = array(
		'-5.0000'=>'0.0000',
		'-3.0000'=>'0.0044',
		'-3.0000'=>'0.0044',
		'-2.3333'=>'0.0262',
		'-1.6667'=>'0.0995',
		'-1.0000'=>'0.2420',
		'-1.0000'=>'0.2420',
		'-0.8000'=>'0.2897',
		'-0.6000'=>'0.3332',
		'-0.4000'=>'0.3683',
		'-0.2000'=>'0.3910',
		'-0.0000'=>'0.3989',
		'0.2000'=>'0.3910',
		'0.4000'=>'0.3683',
		'0.6000'=>'0.3332',
		'0.8000'=>'0.2897',
		'1.0000'=>'0.2420',
		'1.0000'=>'0.2420',
		'1.5000'=>'0.1295',
		'2.0000'=>'0.0540',
		'2.5000'=>'0.0175',
		'3.0000'=>'0.0044',
		'5.0000'=>'0.0000'
	);
	$linear_small = array(
		'-5.0000'=>'0.0000',
		'-4.5000'=>'0.0000',
		'-4.0000'=>'0.0001',
		'-3.5000'=>'0.0009',
		'-3.0000'=>'0.0044',
		'-2.5000'=>'0.0175',
		'-2.0000'=>'0.0540',
		'-1.5000'=>'0.1295',
		'-1.0000'=>'0.2420',
		'-0.5000'=>'0.3521',
		'0.0000'=>'0.3989',
		'0.5000'=>'0.3521',
		'1.0000'=>'0.2420',
		'1.5000'=>'0.1295',
		'2.0000'=>'0.0540',
		'2.5000'=>'0.0175',
		'3.0000'=>'0.0044',
		'3.5000'=>'0.0009',
		'4.0000'=>'0.0001',
		'4.5000'=>'0.0000',
		'5.0000'=>'0.0000'
	);

	$loglinear_small = array(
		'-5.0000'=>'0.0000',
		'-4.4745'=>'0.0000',
		'-3.9491'=>'0.0002',
		'-3.4236'=>'0.0011',
		'-2.8982'=>'0.0060',
		'-2.3727'=>'0.0239',
		'-1.8472'=>'0.0724',
		'-1.3218'=>'0.1665',
		'-0.7963'=>'0.2905',
		'-0.2708'=>'0.3846',
		'0.2546'=>'0.3862',
		'0.7801'=>'0.2943',
		'1.3055'=>'0.1701',
		'1.8310'=>'0.0746',
		'2.3565'=>'0.0248',
		'2.8819'=>'0.0063',
		'3.4074'=>'0.0012',
		'3.9328'=>'0.0002',
		'4.4583'=>'0.0000',
		'4.9838'=>'0.0000'
	);

	$curves = array(
		'linear_large' => array(
			'data' => $linear_large,
			'label' => 'Linear Sample (40)',
			'color' => 'RED'
		),
		'loglinear_large' => array(
			'data' => $loglinear_large,
			'label' => 'Log Sample (40)',
			'color' => 'PURPLE'
		),
		'weighted_small' => array(
			'data' => $weighted_small,
			'label' => 'Weighted Sample (20)',
			'color' => 'GREEN'
		),
		'linear_small' => array(
			'data' => $linear_small,
			'label' => 'Linear Sample (20)',
			'color' => 'YELLOW'
		),
		'loglinear_small' => array(
			'data' => $loglinear_small,
			'label' => 'Log Sample (20)',
			'color' => 'ORANGE'
		),
		'weighted_large' => array(
			'data' => $weighted_large,
			'label' => 'Weighted Sample (40)',
			'color' => 'BLUE'
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
	$PURPLE = imagecolorallocate($GRAPH, 0x99, 0x33, 0xFF);
	$ORANGE = imagecolorallocate($GRAPH, 0xFF, 0x66, 0x00);

	$COLOR_PALLET = array(
		'WHITE' => $WHITE,
		'LGREY' => $LGREY,
		'GREY'  => $GREY,
		'DGREY' => $DGREY,
		'BLACK' => $BLACK,
		'RED'   => $RED,
		'GREEN' => $GREEN,
		'BLUE'  => $BLUE,
		'YELLOW' => $YELLOW,
		'PURPLE' => $PURPLE,
		'ORANGE' => $ORANGE
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

	//$fp = fopen('/tmp/vals.txt', 'a+');

	foreach($curves as $index=>$curve) {
		if ( ! in_array($index, $show_curves) ) { continue; }
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
	$gxmin -= abs($gxmin/4); $gxmax += ($gxmax/4);
	$gymin -= abs($gymin/4); $gymax += ($gymax/4);

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
	foreach($curves as $index=>$curve) {
		if ( ! in_array($index, $show_curves) ) { continue; }
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
