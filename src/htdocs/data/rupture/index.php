<?php

$app_uri = 'data/rupture';
$data_dir = $_SERVER['DOCUMENT_ROOT'] . '/data/rupture/data';

if (!isset($TEMPLATE)) {

  function getContents($file) {
    $handle = fopen ($file, "rb");
    $contents = fread ($handle, filesize($file));
    fclose ($handle);
    $contents = preg_replace ("/\r\n/", "\n", $contents);
    $contents = preg_replace ("/\r/", "\n", $contents);
    rtrim ($contents);
    return $contents;
  }

  function cmp($a, $b) {
    if ($a == $b) {
      return 0;
    }
    return ($a > $b) ? -1 : 1; //sort in descending order
  }

  function dirError ($directory) {
    exec("ls $directory", $ls, $ls_status);
    return $ls_status;
  }

  function getShakemapThumb($src, $id) {
    global $app_uri, $data_dir;

    $shakemap_uri = "earthquakes/shakemap/$src/shake/$id/download";
    $source_img_uri = "$shakemap_uri/intensity.jpg";
    $source_img_dir = $_SERVER['DOCUMENT_ROOT'] . "/$source_img_uri";

    //old shakemaps used gif instead of jpg
    if (!file_exists($source_img_dir)) {
      $source_img_uri = "$shakemap_uri/intensity.gif";
      $source_img_dir = $_SERVER['DOCUMENT_ROOT'] . "/$source_img_uri";
    }

    $thumb_img = "shakemap-$src$id.jpg";
    $thumb_img_uri = "$app_uri/data/thumbnails/$thumb_img";
    $thumb_img_dir = "$data_dir/thumbnails/$thumb_img";

    create_thumb($source_img_dir, $thumb_img_dir);
    if (file_exists($thumb_img_dir)) {
      return '/' . $thumb_img_uri;
    }
  }

  function getAftershockThumb($imgId) {
    global $app_uri, $data_dir;

    $source_img_uri = "$app_uri/$imgId/aftershocks/map.png";
    $source_img_dir = "$data_dir/$imgId/aftershocks/map.png";

    $thumb_img_uri = "$app_uri/data/thumbnails/aftershock-$imgId.png";
    $thumb_img_dir = "$data_dir/thumbnails/aftershock-$imgId.png";

    create_thumb($source_img_dir, $thumb_img_dir);
    if (file_exists($thumb_img_dir)) {
      return '/' . $thumb_img_uri;
    }
  }

  function create_thumb($source_img, $thumb_img) {
    global $app_uri;

    if (! file_exists($source_img)) {
      return;
    }

    // create thumb if it does not exist or is more than one day old
    if(! file_exists("$thumb_img") || (time() - filemtime("$thumb_img") > 86400)) {
      $temp_file = "$thumb_img-tmp";

      //get temporary file to resize
      $contents = file("$source_img");

      if(!empty($contents)) {
        $handle = fopen($temp_file, "w");
        fwrite($handle, join('', $contents));
        fclose($handle);

        //resize image
        $command = "/usr/bin/convert -trim -quality 30 -resize 100 $temp_file $thumb_img";
        $result = 0;
        $convert_output = system("$command", $result);

        if(!$result) { //there was an error...
          print "<!-- Error: $command \n $result-->";
        }

        //remove temp file
        `rm $temp_file`;
      }
    }
  }

  $id = '';
  $allowed = '/^[\d|-]*$/'; //used to sanitize input parameter (only numerals, hyphen)
  if (isSet($_GET['id']) && (preg_match($allowed, $_GET['id'])) && (!dirError("$data_dir/" . $_GET['id']))) {
    $id = $_GET['id'];
  }

  if ($id) {
    $dir = $id;
    $blurb_file = "$data_dir/$dir/blurb.txt";
    $blurb_handle = fopen ($blurb_file, "rb");
    $blurb_contents = fread ($blurb_handle, filesize($blurb_file));
    fclose ($blurb_handle);

    $link_contents = getContents("$data_dir/$dir/link.txt");
    list ($mag, $name, $date, $time, $lat, $lon, $depth, $eqid) = explode ("\n", $link_contents);

    $TITLE = sprintf("Directivity Plot for M%s %s Earthquake", $mag, $name);
    $subtitle = "$date $time";
  }
  else {
    $TITLE = "Rupture Directions for Selected Northern California Earthquakes";
  }

  $HEAD = '';
  $FOOT = '';

  include 'template.inc.php';
}

  if ($id) {
/* specific event selected; display it
   -------------------------------------------------------------------- */
?>

<h2 class="datetime"><?php echo $subtitle; ?></h2>
<figure class="right">
  <img src="data/<?php print $dir; ?>/plot.gif" alt="rupture plot" width="600" style="margin: 0 auto; display: block;" />
  <figcaption><?php print $blurb_contents; ?></figcaption>
</figure>
<p>The residual PGAs and PGVs are plotted on whole stereonets. Symbols indicating the amplitude of the residual peak ground motions are plotted at the azimuths and vertical takeoff angles of the S-waves. Orange circles indicate amplified ground motions; green crosses indicate deamplified ground motions. Because we restrict the station distance, most takeoff angles are vertically upward, but the takeoff angles to the more distant stations can be slightly downward. The thick magenta lines show the rupture direction. The longer the line, the more horizontal the rupture direction.  Upward rupture directions end in arrows; downward rupture directions end in stars. The thin magenta lines around the rupture directions enclose the 2&sigma; uncertainty areas: these uncertainty areas can extend into both the upper and lower hemispheres. The blue lines show the nodal planes of the <a href="http://seismo.berkeley.edu/~dreger/mtindex.html">Berkeley Seismological Laboratory Moment Tensor</a>, which are projected onto the upper or lower hemisphere, depending on the rupture direction.  The sets of three numbers indicate the strike and dip of the nodal plane and the angle between the rupture direction and the nodal plane. If you are unfamiliar with nodal planes and stereoscopic projections, there is an excellent explanation titled <a href="http://www.learninggeoscience.net/free/00071/">Fault Plane Solutions</a>. Remember that nodal planes are determined from P-wave first motions, while the directivity is determined from S-wave peak motions.</p>
<ul class="linklist no-style">

<?php

  //check for aftershock plots, display link if found
  exec("ls $data_dir/$dir | grep 'aftershocks'", $aftershocks);
  if ($aftershocks) {
    $aftershock_link = "aftershocks.php?id=$id";
    $aftershock_img = getAftershockThumb ($dir);
    printf('<li><a href="%s"><h4>Aftershock sequence for this event</h4><img class="left" src="%s%s" alt="Aftershock map thumbnail" /></a><p>Map and cross-section</p></li>', $aftershock_link, /*server_uri()*/ '', $aftershock_img);
  }

  //display shakemap link
  $shakemap_link = "/earthquakes/shakemap/nc/shake/$eqid";
  $shakemap_img = getShakemapThumb("nc", $eqid);
  if ($shakemap_img) {
    printf('<li><a href="%s"><h4>ShakeMap for this event</h4><img class="left" src="%s%s" alt="ShakeMap thumbnail" /></a></li>', $shakemap_link, /*server_uri()*/ '', $shakemap_img);
  }
?>

</ul>
<p class="clear">&laquo; <a href="./">Rupture Directions for other Events</a></p>

<?php } else {
/* display TOC table
   -------------------------------------------------------------------- */
?>

<p>Fault rupture tends to focus wave energy along the fault, a phenomena called <a href="directivity.php" title="simple explanation of directivity">directivity</a>. The table below links to results from a simple inversion of peak ground motions to estimate rupture direction and rupture velocity. We correct the horizontal peak accelerations (PGA) and peak ground velocities (PGV) from <a href="/earthquakes/shakemap/list.php?x=1&n=nc">Northern California ShakeMap</a> data for site amplification and source-receiver distance to obtain a set of residual peak S-wave motions.  We fit these residual peak motions using the directivity function for a unilateral line source (see <a href="details.php">detailed explanation</a>). The rupture direction is not constrained to lie along a nodal plane: good solutions yield rupture directions close to a nodal plane. Events with slow rupture velocities are ambiguous: they could be either complex or bilateral ruptures, or slow unilateral ruptures. We have created seismicity maps and cross sections for earthquakes with M &ge; 4.0 and more than 7 aftershocks.</p>
<p>Our results for earthquakes occurring from 1998 to 2008 are presented in Seekins and Boatwright, 2010, <a href="bssa.php">Rupture Directivity of Moderate Earthquakes in Northern California</a>, Bull. Seismol. Soc. Am. vol 100, pp 1107-1119.</p>

<table class="tabular">
  <tr>
    <th>Mag</th><th>Location</th><th>Date</th><th>Time</th><th>Plots</th><th>Lat</th><th>Lon</th><th>Depth</th><th>Event ID</th>
  </tr>
<?php

//get list of eq directories and sort them
exec("ls $data_dir | grep '[[:digit:]]\{8\}-[[:digit:]]\+'", $dirs);
usort ($dirs, 'cmp');

//build list
foreach ($dirs as $dir) {
  $link_contents = getContents("$data_dir/$dir/link.txt");
  list ($mag, $name, $date, $time, $lat, $lon, $depth, $eqid) = explode ("\n", $link_contents);
  $options = "<a href=\"?id=$dir\">Directivity</a>";

  //check for aftershock plots, display link if found
  $aftershocks = "";
  exec("ls $data_dir/$dir | grep 'aftershocks'", $aftershocks);
  if ($aftershocks) {
    $options .= ", <a href=\"aftershocks.php?id=$dir\">Aftershocks</a>";
  }
  print "  <tr><td>$mag</td><td>$name</td><td>$date</td><td>$time</td><td>$options</td><td>$lat</td><td>$lon</td><td>$depth</td><td>$eqid</td></tr>\n";

}

?>
</table>

<?php } ?>
