<?php
      //	Author:	Tiffany Kalin
      //	Contact: Lisa Wald
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Earthquake Topics';
      $NAVIGATION	= true;
      $HEAD = '<link rel="stylesheet" href="styles.css"/>';
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
          where t.id=:topicID AND
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
            $pic = '<img class="topic-image" src="/education/images-topics/' . $row['pic'] . '" alt=""/>';
          }
          $TITLE = $pic . $TITLE . $topic;
          echo "$pic";
          echo "<h2>$topic</h2>";
        }

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
    }

//ONE TOPIC
if ($topicID != 0) {
  $backLink = '<p><a href="/education/topics.php">&laquo; Back to Topics</a></p>';

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
      print "<strong>No Matching Links were Found</strong>";
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
      trigger_error($e->getMessage());
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

      print '<div>';

      //display links
      $num_links = count($links);
      print '<strong>' . $num_links . ' matching link';
      if ($num_links != 1) {
        print 's';
      }
      print " found</strong>";
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
      trigger_error($e->getMessage());
    }

    // free prepared statement
    $statement = null;

    //close db connection
    $pdo = null;

    return;
}

?>
