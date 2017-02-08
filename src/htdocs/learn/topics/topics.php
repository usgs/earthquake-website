<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	12/05/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Earthquake Topics';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }

    $topicID = intval(param('topicID'));

    //changes title --> necessary? how to do?
    if ($topicID != 0) {
      include_once '/etc/puppet/EHPServer.class.php';

      $pdo = EHPServer::getDatabase('earthquake');
      $statement = $pdo->prepare("
          select t.topic, t.pic
          from learn_Topics t
          where t.approve='yes' AND t.id=:topicID AND
          exists (select * from learn_LinkTopic lt, learn_Main m where lt.topicID=t.id and lt.linkID=m.id)");
      try {
        // use bound parameter names
        $statement->execute(array(
        'topicID' => $topicID
        ));

        // process data
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
          $topic = $row['topic'];
          //$topic = " &mdash; " . $row['topic'];

          $pic = '';
          if (isset($row['pic'])) {
            $pic = '<img class="right" src="/learn/images/topics/' . $row['pic'] . '" alt=""/>';
          }
          $TITLE = $pic . $TITLE . $topic;
          echo "<h1>$topic</h1>";
        }

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
    }

?>
<!--<p>
  <a href="all.php">View all topic links<br /></a>
  <a href="usgs.php">View USGS links only</a><br />
  <a href="search.php">Search Topics </a>
</p>-->

<?php
//link back to page
print "
<a class='prev' href=\"index.php\">
  <span class='material-icons prev'>&#xe5c4;</span>
  <strong>Back to Main Page for Learn Topics</strong>
</a>";

//ONE TOPIC
if ($topicID != 0) {
  $backLink = '<p><a href="/learn/topics/topics.php">&laquo; Back to Topics</a></p>';

  //print $backLink;
  include_once '/etc/puppet/EHPServer.class.php';

  $pdo = EHPServer::getDatabase('earthquake');
  $statement = $pdo->prepare("select m.id, m.link, m.name, m.description, m.organization from learn_Main m where
          exists (select * from learn_LinkTopic where topicID=:topic and linkID=m.id)
          order by m.name");

  try {
    // use bound parameter names
    $statement->execute(array(
      ':topic' => $topicID
    ));

    //no results
    $count = $statement->rowCount();
    if (!$statement || $count == 0) {
      print "<h2>No Matching Links were Found</h2>";
      return;
    }

    // process data
    $links = array();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $links["{$row['id']}"] = array(
        'name' => $row['name'],
        'link' => $row['link'],
        'description' => $row['description'],
        'organization' => $row['organization']);
      }

      $ids = array_keys($links);
      $ids = join(',', $ids);

      // must close cursor before calling execute again
      $statement->closeCursor();
    } catch (PDOException $e) {
      // don't output this on prod...
      print_r($e);
    }

    // free prepared statement
    $statement = null;

    //build search query, pulls all pieces in one query
    $statement = $pdo->prepare("
        select 'topic' as type, lt.linkID, lt.topicID as id, '' as name from learn_LinkTopic lt where lt.linkID in ({$ids})");

    try {
      // use bound parameter names
      $statement->execute();

      // process data
      $ref = array();
      while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        if ($row['linkID'] == 0) {
          $ref[$row['type']]["{$row['id']}"] = $row['name'];
        } else {
          $links["{$row['linkID']}"][$row['type']][] = $row['id'];
        }
      }

      print '<div class="ten column" id="topics">';

      //display links
      $num_links = count($links);
      print '<h2>' . $num_links . ' matching link';
      if ($num_links != 1) {
        print 's';
      }
      print " found</h2>";
      print '<ul>';

      foreach ($links as $id => $link) {
        printf('<li><a href=%s>%s</a> &mdash; %s (%s)</li>',
        urldecode($link['link']),
        stripslashes($link['name']),
        stripslashes($link['description']),
        stripslashes($link['organization']));
      }
      print '</ul>';

      // must close cursor before calling execute again
      $statement->closeCursor();
    } catch (PDOException $e) {
      // don't output this on prod...
      print_r($e);
    }

    // free prepared statement
    $statement = null;

    //close db connection
    $pdo = null;

    return;
}

?>
