<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Seismic Design Maps';
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $NAVIGATION = true;
    //$CONTACT = ""/*who is the contact now?*/;
    $STYLES = '
      .intro a {font-style:italic;}
    ';
    $FOOT = '<script src="/lib/hazdev-webutils.js"></script>' .
            '<script src="index.js"></script>';
    include 'template.inc.php';
  }

  $not_found = 0;
  $thisdir = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']);
  include_once "./pdfs.inc.php";

  if (isset($_GET['code'])) {
    if (!isset($DESIGNMAPS_KEY[$_GET['code']]) ||
      !isset($DESIGNMAPS_KEY[$_GET['code']][$_GET['edition']])) {
      header('HTTP/1.1 404 Not Found');
      $not_found = 1;
    } else {
      $TITLE = 'Seismic Design Maps for ' .
        $DESIGNMAPS_KEY[$_GET['code']]['display-name'] . ' (' .
        $_GET['edition'] . ')';
    }
  }

  if ($not_found) {
    print '<p>Unknown code or edition, please check your link</p>';
    exit;
  }
?>

<?php
  if (isset($_GET['code'])) {
    $code_contents = $DESIGNMAPS_KEY[$_GET['code']];
    $edition_contents = $code_contents[$_GET['edition']];
?>
<div>
<?php
    foreach ($edition_contents as $region => $region_contents) {
      if ($region == 'filename-prefix') continue;

      print '<div><h2>' . htmlspecialchars($region);

      if (isset($region_contents['extra'])) {
        print ' <span class="extra">(' . $region_contents['extra'] .
          ')</span>';
      }

      print '</h2><ul class="no-style">';

      foreach ($region_contents as $map_type => $map_filename) {
        if ($map_type == 'extra') continue;

        print '<li><a href="' . $APP_URL_PATH .
          'ftp://hazards.cr.usgs.gov/web/earthquake-designmaps/pdfs/' .
          $edition_contents['filename-prefix'] .
          htmlspecialchars($map_filename) . '">' .
          (isset($MAPTYPE_KEY[$map_type]) ? $MAPTYPE_KEY[$map_type] : $map_type) .
          '</a></li>';
      }

      print '</ul></div>';
    }
?>
</div>
<?php
  } else {
?>

<p class="intro">
  Seismic design maps from various design code reference documents are
  available below as PDF files. The data from these maps can be read more
  easily using our <a href="../usdesign.php">U.S. Seismic "DesignMaps"</a>.
</p>

<div id="design-codes" class="column contains-eight">

<?php foreach ($DESIGNMAPS_KEY as $code_name => $code_contents) {
  outputCodeListing($code_name, $code_contents);
} ?>

</div>

<?php } ?>
