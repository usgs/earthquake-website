<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Featured Items';
  $HEAD = '<link rel="stylesheet" href="index.css"/>';
  include 'classes/ImageList.class.php';
  include 'template.inc.php';
}
?>

<div class="row">
  <div class="one-of-two column">
    <a href="earthquake/map/" class="earthquake-image">
        <img src="images/mapinterface.gif"></a>
    <span class="mobile-text">
      <img src="images/mobile-friendly_sm.gif"/>
      View recent events or search for past earthquakes,
      optimized for mobile and desktop.
    <a href="/earthquakes/map/doc_whicheqs.php">
      Which earthquakes are included on the map?
      </a></span>
  </div>

  <div class="one-of-two column">
<?php
    $list = new ImageList();

    $list->addItem(
      'http://www.shakeout.org', //link
      'images/the-great-shakeout-oct-16-2014.gif', //image
      'The Great ShakeOut - Oct 16, 2014', //title
      'This year\'s edition of The Great ShakeOut is scheduled for
          October 16, 2014, at 10:16 AM local time. Participants across
          the nation and around the world are encouraged to practice the safety
          actions of &ldquo;drop, cover, and hold on&rdquo;, and to explore other
          earthquake preparedness steps.'); //content

    $list->addItem(
      'http://www.usgs.gov/newsroom/article.asp?ID=4028', //link
      'images/seismometers-to-measure-dc-shaking.jpg', //image
      'Seismometers to Measure DC Shaking', //title
      'Thirty seismometers are being installed in the Nation\'s capital this
          winter to monitor ground tremors to better estimate the intensity of
          ground shaking that can be expected during future earthquakes in the
          area.'); //content

    $list->display();
?>
  </div>
</div>

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
        'hazards', //title
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
        '/prepare/', //link
        '/images/prepare_button_square.png', //image
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
</div>
