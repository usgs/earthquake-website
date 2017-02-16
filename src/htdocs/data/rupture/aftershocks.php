<?php

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
  function dirError ($directory) {
    exec("ls $directory", $ls, $ls_status);

    return $ls_status;
  }

  $id = "";
  $error = "";
  $allowed = '/^[\d|-]*$/'; //used to sanitize input parameter (only numerals, hyphen)
  if (isSet($_GET['id']) && (preg_match($allowed, $_GET['id'])) && (!dirError("$data_dir/" . $_GET['id'] . "/aftershocks/"))) {
    $id = $_GET['id'];
  }

  if ($id) {
    $dir = $id;
    $blurb_file = "$data_dir/$dir/aftershocks/asblurb.txt";
    $blurb_handle = fopen ($blurb_file, "rb");
    $blurb_contents = fread ($blurb_handle, filesize($blurb_file));
    fclose ($blurb_handle);

    $link_contents = getContents("$data_dir/$dir/link.txt");
    list ($mag, $name, $date, $time, $lat, $lon, $depth, $eqid) = preg_split("/\r|\n|\r\n/", $link_contents);

    $TITLE = sprintf("Aftershock Map for M%s %s Earthquake", $mag, $name);
    $subtitle = "$date $time";
  }
  else {
    $error = true;
    $TITLE = "Event Not Found";
  }

  $HEAD = '';
  $FOOT = '';

  include 'template.inc.php';
}

if ($error) {
  print "&laquo; <a href=\"/research/rupture/\">Back to event table</a>";
} else {

?>

<h2 class="aftershock datetime"><?php echo $subtitle; ?></h2>
<p><?php print $blurb_contents; ?></p>
<img src="data/<?php print $dir; ?>/aftershocks/map.png" alt="rupture map" />
<img src="data/<?php print $dir; ?>/aftershocks/xsection.png" alt="rupture cross section" />
<p class="clear">&laquo; <a href="../?id=<?php print $dir; ?>">Back to directivity plot</a> for this event</p>

<?php } ?>
