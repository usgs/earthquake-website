<?php

$display_result_count = 1;

include_once '/etc/puppet/EHPServer.class.php';

$pdo = EHPServer::getDatabase('earthquake');

/** These are displayed from multiple files, so a relative path cannot work. */
$LEARNING_IMAGES_PATH = "images/";

//check input
$all = param('all');
$usgs = param('usgs');
$level = intval(param('sendLevelID'));
$topic = intval(param('sendTopicID'));
$region = intval(param('sendRegionID'));
$type = intval(param('sendContentID'));
if ($all == "" && $usgs == '' && $level == 0 && $topic == 0 && $region == 0 && $type == 0) {
  //no input
  return;
}

//build link id sub query
$topic_name = "All";
$content_name = "All";
$level_name = "All";
$region_name = "All";
$query = "select m.id, m.link, m.name, m.description, m.organization from learn_Main m where 1=1"; //so additional elements can be added to query
if ($all == "") {
  if ($usgs != '') {
    $query .= " and ucase(m.organization) LIKE '%USGS%'";
  }
  if ($level != 0) {
     $query .= " and exists (select * from learn_LinkLevel where levelID=$level and linkID=m.id)";

     // print out the level chosen
      $level_statement = $pdo->prepare('
      select \'level\' as type, id, level as name
      from learn_Levels
      where id=:level
      order by name');

      try {
        // use bound parameter names
        $level_statement->execute(array(
          ':level' => $level
        ));

        // process data
        while ($row = $level_statement->fetch(PDO::FETCH_ASSOC)) {
          $level_name = $row['name'];
        }

        // must close cursor before calling execute again
        $level_statement->closeCursor();
      } catch (PDOException $e) {
        // don't output this on prod...
        trigger_error($e->getMessage());
      }

      // free prepared statement
      $level_statement = null;
  }
  if ($topic != 0) {
    $query .= " and exists (select * from learn_LinkTopic where topicID=$topic and linkID=m.id)";

    //get the topic chosen
     $topic_statement = $pdo->prepare("
     select 'topic' as type, t.id, t.topic as name
     from learn_Topics t
     where t.id = :tid and
        exists (select lt.linkID from learn_Main lm, learn_LinkTopic lt where lm.id=lt.linkID and lt.topicID=t.id)");

     try {
       // use bound parameter names
       $topic_statement->execute(array(
         ':tid' => $topic
       ));

       // process data
       while ($row = $topic_statement->fetch(PDO::FETCH_ASSOC)) {
         $topic_name = $row['name'];
       }

       // must close cursor before calling execute again
       $topic_statement->closeCursor();
     } catch (PDOException $e) {
       // don't output this on prod...
       trigger_error($e->getMessage());
     }

     // free prepared statement
     $topic_statement = null;
  }
  if ($region != 0) {
    $query .= " and exists (select * from learn_LinkRegion where regionID=$region and linkID=m.id)";

    //get the region chosen
     $region_statement = $pdo->prepare("
        select 'region' as type, r.id, r.region as name
        from learn_Regions r
        where r.id = :rid and
            exists (select * from learn_Main lm, learn_LinkRegion lr where lm.id=lr.linkID and lr.regionID=r.id)");

     try {
       // use bound parameter names
       $region_statement->execute(array(
         ':rid' => $region
       ));

       // process data
       while ($row = $region_statement->fetch(PDO::FETCH_ASSOC)) {
         $region_name = $row['name'];
       }

       // must close cursor before calling execute again
       $region_statement->closeCursor();
     } catch (PDOException $e) {
       // don't output this on prod...
       trigger_error($e->getMessage());
     }

     // free prepared statement
     $region_statement = null;
  }
  if ($type != 0) {
    $query .= " and exists (select * from learn_LinkContent where contentID=$type and linkID=m.id)";

    //get the type chosen
     $type_statement = $pdo->prepare("
        select 'content' as type, id, contentType as name
        from learn_ContentType
        where id = :cid");

     try {
       // use bound parameter names
       $type_statement->execute(array(
         ':cid' => $type
       ));

       // process data
       while ($row = $type_statement->fetch(PDO::FETCH_ASSOC)) {
         $content_name = $row['name'];
       }

       // must close cursor before calling execute again
       $type_statement->closeCursor();
     } catch (PDOException $e) {
       // don't output this on prod...
       trigger_error($e->getMessage());
     }

     // free prepared statement
     $type_statement = null;
  }
}
$query .= " order by m.name";

$rs = $pdo->prepare($query);
try {
  $rs->execute(array(
  ));

  if (!$rs || $rs->rowCount() == 0) {
    //link back to page
    print "
    <a class='prev' href=\"index.php\">
      <span class='material-icons prev'>&#xe5c4;</span>
      <strong>Back to Main Page for Learn Topics</strong>
    </a>";

    print '<div>';
    print "<h2>No Matching Links were Found</h2>";
    print '</div>';
    return;
  }

  $links = array();
  while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
    $links["{$row['id']}"] = array(
      'name' => $row['name'],
      'link' => $row['link'],
      'description' => $row['description'],
      'organization' => $row['organization']);
  }

  $rs->closeCursor();
} catch (PDOException $e) {
  // don't output this on prod...
  trigger_error($e->getMessage());
}
$rs = null;

$ids = array_keys($links);
$ids = join(',', $ids);
//build search query, pulls all pieces in one query
$query = "
  select 'topic' as type, lt.linkID, lt.topicID as id, '' as name from learn_LinkTopic lt where lt.linkID in ({$ids}) union
  select 'content' as type, lc.linkID, lc.contentID as id, '' from learn_LinkContent lc where lc.linkID in ({$ids}) union
  select 'level' as type, ll.linkID, ll.levelID as id, '' from learn_LinkLevel ll where ll.linkID in ({$ids}) union
  select 'region' as type, lr.linkID, lr.regionID as id, '' from learn_LinkRegion lr where lr.linkID in ({$ids}) union
  select 'reftopic' as type, 0, t.id, t.topic from learn_Topics t union
  select 'refcontent' as type, 0, c.id, c.contentType from learn_ContentType c union
  select 'reflevel' as type, 0, l.id, l.level from learn_Levels l union
  select 'refregion' as type, 0, r.id, r.region from learn_Regions r
";

//run query
$rs = $pdo->prepare($query);

try {
  $rs->execute(array(
  ));

  //populate link and reference array
  $ref = array();
  while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
    if ($row['linkID'] == 0) {
      $ref[$row['type']]["{$row['id']}"] = $row['name'];
    } else {
      $links["{$row['linkID']}"][$row['type']][] = $row['id'];
    }
  }

  $rs->closeCursor();
} catch (PDOException $e) {
  // don't output this on prod...
  trigger_error($e->getMessage());
}
$rs = null;

print '<div class="ten column" id="topics">';

//display links
if (isset($display_result_count) && $display_result_count && $all == '' && $usgs == 0) {

  //show what was chosen
  echo "<h2>Your choices are:</h2>
  <table>
    <tr>
      <th>Topic</th>
      <th>Content Type</th>
      <th>Level</th>
      <th>Region</th>
    </tr>
    <tr>
      <td>$topic_name</td>
      <td>$content_name</td>
      <td>$level_name</td>
      <td>$region_name</td>
    </tr>
  </table>
  ";

  //display number of links
  $num_links = count($links);
  print '<p><strong>' . $num_links . ' matching link';
  if ($num_links != 1) {
    print 's';
  }
  print ' found</strong></p>';
}

if (isset($display_list)) {
  print '<ul>';
} else {
print '
<table cellpadding="5" cellspacing="0">
  <thead>
  <tr>
    <th id="topic_link" colspan="4" scope="rowgroup">Link</th>
  </tr>
  <tr>
    <th scope="col">Organization</th>
    <th scope="col">Topics</th>
    <th scope="col">Content Types</th>
    <th scope="col">Levels</th></tr>
  </thead>
  <tbody>';

}


foreach ($links as $id => $link) {

  if (isset ($display_list)) {
    printf('<li><a href=%s>%s</a> &mdash; %s (%s)</li>',
      urldecode($link['link']),
      stripslashes($link['name']),
      stripslashes($link['description']),
      stripslashes($link['organization']));
    continue;
  }

  printf('<tr><td colspan="4" headers="topic_link" scope="rowgroup"><hr/><p><strong><a href=%s>%s</a></strong> &mdash; %s</p>',
    urldecode($link['link']),
    stripslashes($link['name']),
    stripslashes($link['description']));

  print '<tr><td valign="top">' . stripslashes($link['organization']) . '</td><td valign="top">';
    if(isset($link['topic'])) {
      print '<ul>';
      foreach ($link['topic'] as $topicID) {
        printf('<li>%s</li>', $ref['reftopic']["{$topicID}"]);
      }
      print '</ul>';
    }

  print '</td><td valign="top">';
    if (isset($link['content'])) {
      print '<ul class="content-types">';
      foreach ($link['content'] as $typeID) {
        printf('<li><img src="%s%s.gif" alt="icon"/>%s</li>',
          $LEARNING_IMAGES_PATH,
          str_replace(" ", "_", str_replace("&", "", $ref['refcontent']["{$typeID}"])),
          $ref['refcontent']["{$typeID}"]);
      }
      print '</ul>';
    }

  print '</td><td valign="top">';
    if (isset($link['level'])) {
      print '<ul>';
      foreach ($link['level'] as $levelID) {
        printf('<li>%s</li>', $ref['reflevel']["{$levelID}"]);
      }
      print '</ul>';
    }

  print '</td></tr>';
}

if (isset($display_list)) {
  print '</ul>';
} else {
print '
  </tbody>
  </table>';
}
print '</div>';

//close database connection
$pdo = null;

?>
