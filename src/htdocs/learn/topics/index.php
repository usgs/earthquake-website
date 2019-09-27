<?php
      //  Author: Tiffany Kalin
      //  Contact: Lisa Wald
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Earthquake Topics';
      $HEAD = '
        <link rel="stylesheet" href="index.css"/>
        <link rel="stylesheet" href="/lib/leaflet-0.7.7/leaflet.css"/>
        <link rel="stylesheet" href="/lib/hazdev-leaflet-0.1.3/hazdev-leaflet.css"/>';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }

include_once '/etc/puppet/EHPServer.class.php';

$pdo = EHPServer::getDatabase('earthquake');
echo '
<div class="row">
  <div class="column two-of-three">
    <h2>Popular</h2>
    <ul>
      <li>
        <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/science/science-earthquakes">
        The Science of Earthquakes</a> - the basics in brief.
      </li>
      <li>
        <a href="https://www.usgs.gov/natural-hazards/earthquake-hazards/science/earthquake-animations">
        Animations for Earthquake Terms &amp; Concepts</a>
      </li>
      <li>
        <a href="https://pubs.usgs.gov/gip/dynamic/dynamic.html">
        This Dynamic Earth: The Story of Plate Tectonics</a> - comprehensive overview of plate tectonics with excellent graphics.
      </li>
      <li>
        <a href="https://pubs.usgs.gov/imap/2800/">
        This Dynamic Planet</a> - World Map of Volcanoes, Earthquakes, Impact Craters, and Plate Tectonics.
      </li>
      <li>
        <a href="https://prd-wret.s3-us-west-2.amazonaws.com/assets/palladium/production/atoms/files/EQ101.pdf">
        EQ101 Presentation</a> - the basics with lots of images.
      </li>
      <li>
        <a href="http://education.usgs.gov/" target="_blank">
        USGS Education Web Site</a>
      </li>
      <li>
        <a href="http://store.usgs.gov/" target="_blank">
        USGS Store - Publications and Products</a>
      </li>
      <li>
        <a href="https://www.nationalmap.gov/" target="_blank">
        USGS National Atlas Maps</a>
      </li>
      <li>
        <a href="https://www.iris.edu/hq/programs/education_and_outreach"  target="_blank">IRIS Education and Public Outreach</a> - amazing collection of resources!
      </li>
      <li>
        <a href="http://ds.iris.edu/aed2/all_links/">The Active Earth</a> - an index to all IRIS geoscience webpages.
      </li>
    </ul>
    <ul class="alert" style="margin-right:16px">
      <li><a href="all.php"><strong>All Resources</strong></a></li>
      <li><a href="usgs.php"><strong>USGS Only Resources</strong></a></li>
    </ul>

    <h2>Resources by Level</h2>

    <div class="row">

      <div class="text elementary">
        <a href="search.php?sendLevelID=8" id ="font"><h3>Elementary</h3></a>
      </div>

      <div class="text middle">
        <a href="search.php?sendLevelID=9" id ="font"><h3>Middle School</h3></a>
      </div>
    </div>

    <div class="row">

      <div class="text high">
        <a href="search.php?sendLevelID=10" id="font"><h3>High School</h3></a>
      </div>

      <div class="text college">
        <a href="search.php?sendLevelID=11" id="font"><h3>College</h3></a>
      </div>
    </div>

    <h2>Search</h2>';
    echo '
    <form action="/education/search.php" method="get">
      <fieldset style="border:0">
        <ol class="no-style">
          <li>';
    $all = param('all');

    $params = array(
      'topic' => array('param' => 'sendTopicID', 'label' => 'Topic'),
      'level' => array('param' => 'sendLevelID', 'label' => 'Level'),
      'content' => array('param' => 'sendContentID', 'label' => 'Content Type'),
      'region' => array('param' => 'sendRegionID', 'label' => 'Region'));

    $categories = $pdo->prepare("
      select 0 as rank, 'topic' as type, t.id, t.topic as name from learn_Topics t where exists (select lt.linkID from learn_Main lm, learn_LinkTopic lt where lm.id=lt.linkID and lt.topicID=t.id) union
      select 1 as rank, 'content' as type, id, contentType as name from learn_ContentType union
      select 2 as rank, 'level' as type, id, level as name from learn_Levels union
      select 3 as rank, 'region' as type, r.id, r.region as name from learn_Regions r where exists (select * from learn_Main lm, learn_LinkRegion lr where lm.id=lr.linkID and lr.regionID=r.id)
      order by rank, name
    ");

    try {
      $categories->execute(array(
      ));

      $last_type = '';
      $value = 0;
      while ($category = $categories->fetch(PDO::FETCH_ASSOC)) {
        $type = $category['type'];
        $id = $category['id'];
        $name = $category['name'];

        if ($last_type != $type) {
          if ($last_type != '') {
            print '</select></li><li>';
          }
          $last_type = $type;

          $param = $params[$type]['param'];
          $label = $params[$type]['label'];

          $value = intval(param($param));
          print '<label for="' . $param . '">' . $label . '</label> ' .
            '<select id="' . $param . '" name="' . $param . '"><option value="">All</option>';
        }

        $selected = '';
        if ($all == '' && $value == $id) { $selected = ' selected="selected"'; }
        printf('<option value="%s"%s>%s</option>', $id, $selected, $name);
      }

      $categories->closeCursor();
    } catch (PDOException $e) {
      // don't output this on prod...
      trigger_error($e->getMessage());
    }
    $categories = null;

    echo '
        </select></li>
      </ol>

      </fieldset>
      <footer class="footer" aria-label="Search form footer" style="margin-right:16px">
        <button type="submit" id="fdsn-submit">Search</button>
        <span class="output-descriptor"></span>
        <div class="search-error"></div>
      </footer>
    </form>';

    echo '

    ';

echo '
  </div>
  <div class="column one-of-three alert">
    <h2>Choose a Topic</h2>';
    //ALL TOPICS

    $statement = $pdo->prepare("
    		select t.id, t.topic
    		from learn_Topics t
    		where
    			exists (select * from learn_LinkTopic lt, learn_Main m where lt.topicID=t.id and lt.linkID=m.id)
    		order by t.topic");

    try {
      // use bound parameter names
    	$statement->execute(array(
    	   ':approve' => 'yes'
    	));

    	// process data
    	$last_init = '';
    	$jumpnav = array();
    	$content = '';
    	while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    	   $id = $row['id'];
         $topic = $row['topic'];

    		 $content .= '<li><a href="/education/topics.php?topicID=' . $id . '">' . $topic . '</a></li>';

    	}

      $content .= '</ul>'; // close last letter's list
      print '<ul id="topics-list" class="no-style"><li>' . $content . '</li></ul>';

    	// must close cursor before calling execute again
    	$statement->closeCursor();
    } catch (PDOException $e) {
      // don't output this on prod...
    	trigger_error($e->getMessage());
    }

    // free prepared statement
    $statement = null;

    // close database connection
    $pdo = null;
echo'
  </div>
</div>';
?>
