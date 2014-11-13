<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Hazards Program';
  $HEAD = '<link rel="stylesheet" href="index.css"/>';
  include_once 'classes/ImageList.class.php';
  include_once '_features.inc.php';
  include 'template.inc.php';
}
?>

<?php
  echo $EQ_FEATURES->toHtml(3);
?>

<hr/>

<div class="row">
  <div class="one-of-two column">
<?php
  $list = new ImageList();

  $list->addItem(
    '/earthquakes/', //link
    '/images/earthquakes_button_square.gif', //image
    'Earthquakes', //title
    'Information about real-time earthquakes, online catalog search of
        archives, seismicity maps and statistics.'); //content

  $list->addItem(
    '/hazards/', //link
    '/images/hazards_button_square.gif', //image
    'Hazards', //title
    'US faults, information about seismic hazards in various areas,
        tools for seismic design values.'); //content

  $list->addItem(
    '/learn/', //link
    '/images/learn_button_square.gif', //image
    'Learn', //title
    'The science of earthquakes, FAQ, glossary, links to earthquake
        topics, Earthquakes for kids.'); //content

  $list->display();
?>
  </div>
  <div class="one-of-two column">
  <?php
    $list = new ImageList();

    $list->addItem(
      '/data/', //link
      '/images/data_products.gif', //image
      'Data & Products', //title
      'Monitoring, station, and other various seismic data available for
          download. Data products to view and download.'); //content

    $list->addItem(
      '/monitoring/', //link
      '/images/monitoring_button_square.gif', //image
      'Monitoring', //title
      'Global, national and regional networks recording earthquakes and
          crustal movements, maps, station information, real-time seismic
          waveforms.'); //content

    $list->addItem(
      '/research/', //link
      '/images/research_button_square.jpg', //image
      'Research', //title
      'Research projects in the Earthquake Hazards Program, external
          research support, science center activities, software.'); //content

    $list->display();
  ?>
  </div>
</div>

<section class="row nehrp">
  <img src="/images/nehrp.png" alt="NEHRP logo" />
  <p>
    The USGS Earthquake Hazards Program is part of the
    <a href="http://www.nehrp.gov/" target="_blank">National Earthquake
    Hazards Reduction Program</a> (NEHRP), established by Congress in 1977.
    We monitor and report earthquakes, assess earthquake impacts and hazards,
    and research the causes and effects of earthquake.
  </p>
</section>
