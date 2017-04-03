<?php
      //  Author:  Tiffany Kalin
      //  Contact:
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Learning Links & Earthquake Activities';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }

      //include database
      include_once '/etc/puppet/EHPServer.class.php';
      $pdo = EHPServer::getDatabase('earthquake');

      //elementary school
      $sendLevelID = 8;
      //lesson plan
      $lessonPlanID = 6;
      $i = 0;


      $statement = $pdo->prepare("
          SELECT *
          from learn_LinkLevel
          WHERE levelID=:sendLevelID");
      try {
        // use bound parameter names
        $statement->execute(array(
          ':sendLevelID' => $sendLevelID
        ));

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
          $linkID = $row['linkID'];

          //check to see if content is a lesson plan
          $chkContentType=$pdo->prepare("
              SELECT *
              from learn_LinkContent
              WHERE linkID=:linkID AND contentID=:lessonPlanID");

          try {
            // use bound parameter names
            $chkContentType->execute(array(
              ':linkID' => $linkID,
              ':lessonPlanID' => $lessonPlanID
            ));

            $count = $chkContentType->rowCount();
            if ($count == 0) {
              $i++;
              $levelArray[$i] = $linkID;
            }

            // must close cursor before calling execute again
            $chkContentType->closeCursor();
            }
          catch (PDOException $e) {
            // don't output this on prod...
            print_r($e);
          }
          // free prepared statement
          $chkContentType = null;

          }
          // must close cursor before calling execute again
          $statement->closeCursor();

        }


      catch (PDOException $e) {
        // don't output this on prod...
      print_r($e);
      }
      // free prepared statement
      $statement = null;

      //GET ID's
      if(!empty($levelArray)){
        $showIDs = $levelArray;
      }else{
        $showIDs = "none";
      }

      // SHOW HTML
      if(($showIDs == "none") OR (empty($showIDs))){
      echo '
        <!-- START: table for no results -->
        <table cellpadding="0" cellspacing="0" class="results">
        <tr>
        <td class="resultsHead">No Search Results Match Your Query</td>
        </tr>
        </table>
        <!-- END: table for no results --->
      ';
      }else{
        foreach($showIDs as $v){
          $getLinks = $pdo->prepare("
              SELECT *
              from learn_Main
              WHERE id=:v");

          try {
            // use bound parameter names
            $getLinks->execute(array(
              ':v' => $v
            ));

            //get info from main table
            while ($row = $getLinks->fetch(PDO::FETCH_ASSOC)) {
              $linkID = $row['id'];
              $name = stripslashes($row['name']);
              $organization = stripslashes($row['organization']);
              $link = urldecode($row['link']);
              $link = $link;
              $description = stripslashes($row['description']);
              $description = str_replace("\n", "<br>", $description);

              //get info from levels table
              $showLevels = "";
              $getLevelID = $pdo->prepare("
                  SELECT *
                  from learn_LinkLevel
                  WHERE linkID=:linkID");

              try {
                $getLevelID->execute(array(
                  ':linkID' => $linkID
                ));

                while ($row_id = $getLevelID->fetch(PDO::FETCH_ASSOC)) {
                  $levelID = $row_id['levelID'];

                  //get levels
                  $getLevels = $pdo->prepare("
                      SELECT *
                      from learn_Levels
                      WHERE id=:levelID");

                  try {
                    $getLevels->execute(array(
                      ':levelID' => $levelID
                    ));

                    while ($row_level = $getLevels->fetch(PDO::FETCH_ASSOC)) {
                      $showLevels .= $row_level['level'] . "<br>";
                    }

                    $getLevels->closeCursor();
                  }
                  catch (PDOException $e) {
                    // don't output this on prod...
                    print_r($e);
                  }
                  $getLevels = null;
                }
                $getLevelID->closeCursor();
              }
              catch (PDOException $e) {
                // don't output this on prod...
                print_r($e);
              }
              $getLevelID = null;

              //get info from topics table
              $showTopics = "";
              $getTopicID = $pdo->prepare(
                "SELECT *
                from learn_LinkTopic
                WHERE linkID=:linkID");

              try {
                $getTopicID->execute(array(
                  ':linkID' => $linkID
                ));

                while ($row_topic = $getTopicID->fetch(PDO::FETCH_ASSOC)) {
                  $topicID = $row_topic['topicID'];

                  $getTopics = $pdo->prepare("
                    SELECT *
                    from learn_Topics
                    WHERE id=:topicID");

                  try {
                    $getTopics->execute(array(
                      ':topicID' => $topicID
                    ));

                    while ($row_topic_id = $getTopics->fetch(PDO::FETCH_ASSOC)) {
                      $showTopics .= $row_topic_id['topic'] . "<br>";
                    }
                    $getTopics->closeCursor();
                  }
                  catch (PDOException $e) {
                    // don't output this on prod...
                    print_r($e);
                  }
                  $getTopics = null;
                }

                $getTopicID->closeCursor();
              }
              catch (PDOException $e) {
                // don't output this on prod...
                print_r($e);
              }
              $getTopicID = null;

              //get info from content table
              $showContent = "";
              $getContentID = $pdo->prepare("
                SELECT *
                from learn_LinkContent
                WHERE linkID=:linkID");

              try {
                $getContentID->execute(array(
                  ':linkID' => $linkID
                ));

                while ($row_content = $getContentID->fetch(PDO::FETCH_ASSOC)) {
                  $contentID = $row_content['contentID'];

                  $getContent = $pdo->prepare("
                    SELECT *
                    from learn_ContentType
                    WHERE id=:contentID");

                  try {
                    $getContent->execute(array(
                      ':contentID' => $contentID
                    ));

                    while ($row_content_id = $getContent->fetch(PDO::FETCH_ASSOC)) {
                      $showContent .= $row_content_id['contentType'] . "<br>";
                    }

                    $getContent->closeCursor();
                  }
                  catch (PDOException $e) {
                    // don't output this on prod...
                    print_r($e);
                  }
                  $getContent = null;
                }

                $getContentID->closeCursor();
              }
              catch (PDOException $e) {
                // don't output this on prod...
                print_r($e);
              }
              $getContentID = null;

              //get info from region table
              $showRegions = "";
              $getRegionID = $pdo->prepare("
                SELECT *
                from learn_LinkRegion
                WHERE linkID=:linkID");

              try {
                $getRegionID->execute(array(
                  ':linkID' => $linkID
                ));

                while ($row_region = $getRegionID->fetch(PDO::FETCH_ASSOC)) {
                  $regionID = $row_region['regionID'];

                  $getRegion = $pdo->prepare("
                    SELECT *
                    from learn_Regions
                    WHERE id=:regionID");

                  try {
                    $getRegion->execute(array(
                      ':regionID' => $regionID
                    ));

                    while ($row_region_id = $getRegion->fetch(PDO::FETCH_ASSOC)) {
                      $showRegions .= $row_region_id['region'] . "<br>";
                    }

                    $getRegion->closeCursor();
                  }
                  catch (PDOException $e) {
                    // don't output this on prod...
                    print_r($e);
                  }
                  $getRegion = null;
                }

                $getRegionID->closeCursor();
              }
              catch (PDOException $e) {
                // don't output this on prod...
                print_r($e);
              }
              $getRegionID = null;

              echo
              "
                <!-- START: table for results -->
                <ul class=\"no-style\">
                <li>
                  <a href=$link>$name</a>
                  </br>$description
                </li>
                </ul>
                <!-- END: table for results --->
              ";
            }
            // must close cursor before calling execute again
            $getLinks->closeCursor();
          }
          catch (PDOException $e) {
            // don't output this on prod...
            print_r($e);
          }
          $getLinks = null;
        }
      }

      //close connection
      $pdo = null;
?>
