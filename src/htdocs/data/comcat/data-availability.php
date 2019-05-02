<?php
  // Author: Lisa Wald
  // Contact: Paul Earle,
  // Last modified: 03/03/2016
  if (!isset($TEMPLATE)) {
    $TITLE = 'ComCat Documentation - Data Availability';
    $NAVIGATION = true;

    date_default_timezone_set('UTC');
    define('RFC_DATE', 'D, d M Y H:i:s \G\M\T');
    $time = time();
    $lastModified = gmdate(RFC_DATE, $time);
    $MAX_AGE = 86400; // 1 day

    header('Cache-Control: public, max-age=' . $MAX_AGE);
    header('Expires: ' . gmdate(RFC_DATE, $time + $MAX_AGE));
    header('Last-Modified: ' . $lastModified);

    $catalogUrl = 'https://earthquake.usgs.gov/data/comcat/catalog/index.json.php';
    $catalogs = json_decode(file_get_contents($catalogUrl), true);

    function getCatalog ($id) {
      global $catalogs;
      foreach ($catalogs as $catalog) {
        if ($catalog['id'] === $id) {
          return $catalog;
        }
      }

      return array(
        'id' => $id,
        'title' => $id,
        'url' => "./catalog/${id}/"
      );
    }

    include_once '/etc/puppet/EHPServer.class.php';
    $pdo = EHPServer::getDatabase('product_index');
    $statement = $pdo->query('
    SELECT
      source,
      (FROM_UNIXTIME(0) + INTERVAL (MIN(eventTime)/1000) SECOND) AS start,
      (FROM_UNIXTIME(0) + INTERVAL (MAX(eventTime)/1000) SECOND) AS end
    FROM
      event
    WHERE
      eventTime IS NOT NULL AND
      source IS NOT NULL
    GROUP BY
      source
    ');
    include 'template.inc.php';
  }
?>

<h2>Data Availability as of <?= $lastModified ?></h2>
<table>
  <thead>
    <tr>
      <th>Catalog</th>
      <th>Time Period</th>
    </tr>
  </thead>

  <tbody>
    <?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)) : ?>
      <tr>
        <?php $catalog = getCatalog($row['source']); ?>
        <td style="max-width: 60em;">
          <?= strtoupper($catalog['id']) ?> -
          <a href="<?= $catalog['url'] ?>"><?= $catalog['title'] ?></a>
        </td>
        <td>
          <?= $row['start'] ?>
          to
          <?= $row['end']; ?>
        </td>
      </tr>
    <?php endwhile; ?>
   </tbody>
</table>

<h2>"Missing" Earthquakes</h2>

<ul>
	<li>Why are there &ldquo;missing&rdquo; earthquakes?</li>
	<li>There is an earthquake on another website; why is it not here?</li>
</ul>

<p>
The maps and lists show events which have been located by the USGS and
contributing agencies within the last 30 days. They should not be considered
to be complete lists of all events in the US and adjacent areas and
especially should not be considered to be complete lists of all events M4.5+
in the world.
</p>

<p>In most cases, we locate and report on earthquakes worldwide of magnitude 5.0 and larger in 30 minutes or less. Additionally, we locate and report on earthquakes magnitude 4.0 and larger within the contiguous US and populated regions of Alaska within 30 minutes. Earthquakes of magnitude 2.0 or greater within the US and populated regions of Alaska are often rapidly reported if they occur within the <a href="/monitoring/anss/">region of a contributing local seismic network</a>.</p>

<p>We may not rapidly locate earthquakes smaller than 5.0 outside the US unless they have caused significant damage or are widely felt. Earthquakes this small rarely cause significant damage. At times, some other agency may report an earthquake with a larger magnitude than what we compute from our data, especially for non-US events near magnitude 5.0. If our magnitude for the event is less than magnitude 5.0, we may not issue a rapid report for it.</p>

<p>Earthquakes occurring outside the US and smaller than about magnitude 4.5 can be difficult for the USGS to locate if there are not enough data. The USGS continues to receive data from observatories throughout the world for several months after the events occur. Using those data, we add new events and revise existing events in later publications. For a description of these later publications and the data available, see <a href="/data/">Data</a>.</p>

<p>There are many regional networks around the world that can record smaller earthquakes in their region than the NEIC global network can, and in many cases these regional networks do not share their data with the NEIC.  So if you think there is a missing earthquake on our maps and lists, please see the national and regional links for the area of interest on these webpages:</p>

<ul>
	<li><a href="/earthquakes/byregion/">Earthquake Info by State/Territory</a></li>
	<li><a href="/monitoring/institutions.php">Geophysics Institutions Throughout the World</a></li>
</ul>

<p>See also:</p>
<ul>
  <li><a href="/contactus/golden/neic.php#resp">National Earthquake Information Center</li> "Response Events"
  <li><a href="/learn/faq.php">FAQs about Latest Earthquake Information and Other Topics</a></li>
</ul>
