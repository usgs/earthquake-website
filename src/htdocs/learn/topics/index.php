<?php
      //  Author:  Tiffany Kalin
      //  Contact:
      //  Last  modified:  1/27/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Earthquake Topics';
      $HEAD = '<link rel="stylesheet" href="index.css"/>';
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
      <li><a href="all.php"><h4>All Resources</h4></a></li>

      <li><a href="usgs.php"><h4 style="margin-top:0px">USGS Only Resources</h4></a></li>

      <li><a href="/learn/animations/">
        Animations for Earthquake Terms &amp; Concepts</a></li>

      <li><a href="https://pubs.usgs.gov/gip/dynamic/dynamic.html">
        This Dynamic Earth: The Story of Plate Tectonics</a> - excellent comprehensive overview of plate tectonics with excellent graphics, online USGS general interest publication.</li>

      <li><a href="https://pubs.usgs.gov/imap/2800/">
        This Dynamic Planet</a> - World Map of Volcanoes, Earthquakes, Impact Craters, and Plate Tectonics.</li>

      <li>EQ101 Presentation - <a href="/learn/topics/EQ101.zip">
        PowerPoint Zip file (6.5MB)</a> or <a href="/learn/topics/EQ101.pdf">PDF</a></li>

      <li><a href="/other_eqsites.php">
        Other Earthquake Websites</a></li>

      <li><a href="/learn/kids/eqscience.php">
        The Science of Earthquakes</a> - the basics in brief</li>

      <li><a href="http://education.usgs.gov/" target="_blank">
        USGS Education Web Site</a></li>

      <li><a href="http://store.usgs.gov/" target="_blank">
        USGS Store - Publications and Products</a></li>

      <li><a href="http://www.nationalatlas.gov/" target="_blank">
        USGS National Atlas Maps</a></li>
    </ul>
    <hr />
    <h2>Resources by Level</h2>

    <div class="row">

      <div class="text blue">
        <a href="search.php?sendLevelID=8"><h3>Elementary</h3></a>
      </div>

      <div class="text blue">
        <a href="search.php?sendLevelID=9"><h3>Middle School</h3></a>
      </div>
    </div>

    <div class="row">

      <div class="text blue">
        <a href="search.php?sendLevelID=10"><h3>High School</h3></a>
      </div>

      <div class="text blue">
        <a href="search.php?sendLevelID=11"><h3>College</h3></a>
      </div>
    </div>

    <hr />
    <h2>Search</h2>';
    echo '
    <form action="/learn/topics/search.php" method="get">
      <fieldset>
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
      print_r($e);
    }
    $categories = null;

    echo '
        </select></li>
        <li><input type="submit" value="Search"/></li>
      </ol>
      </fieldset>
    </form>';

echo '
  </div>
  <div class="column one-of-three">
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

    		 $content .= '<li><a href="/learn/topics/topics.php?topicID=' . $id . '">' . $topic . '</a></li>';

    	}

      $content .= '</ul>'; // close last letter's list
      print '<ul id="topics-list" class="no-style"><li>' . $content . '</li></ul>';

    	// must close cursor before calling execute again
    	$statement->closeCursor();
    } catch (PDOException $e) {
      // don't output this on prod...
    	print_r($e);
    }

    // free prepared statement
    $statement = null;

    // close database connection
    $pdo = null;
echo'
  </div>
</div>';
?>
