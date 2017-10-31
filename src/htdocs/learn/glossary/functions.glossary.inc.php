<?php
    function glossary_navigation() {
        $r = "";

        $letters = array ("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        foreach ($letters as $k) {
          if($k != "A") {
            $r .= " | ";
          }
          $r .= '<a href="?alpha=' . $k . '">' . $k . '</a>';
        }
        $r .= '<br /><a href="?alpha=ALL">All Terms</a>';

        return($r);
      }

       function glossary_term($name, $id, $pdo) {
         $r = array();


         if($name != "") {
 				//check url for term
 					$term = $name;

          $statement = $pdo->prepare("
              SELECT * from glossary WHERE lower(term)=lower('$term')");
          try {
            // use bound parameter names
            $statement->execute(array(
            ));

            $count = $statement->rowCount();
            if ($count != 0) {
              $r = $statement->fetch(PDO::FETCH_ASSOC);
            }
            // must close cursor before calling execute again
            $statement->closeCursor();
          }
          catch (PDOException $e) {
            // don't output this on prod...
            trigger_error($e->getMessage());
          }
          // free prepared statement
          $statement = null;

 				}

 				if ( sizeof( $r ) == 0 && $id != "") {
          $id = intval( $id );
          $statement = $pdo->prepare(
              "SELECT * from glossary WHERE id=$id");
          try {
            // use bound parameter names
            $statement->execute(array(
            ));

            $count = $statement->rowCount();
            if ($count != 0) {
              $r = $statement->fetch(PDO::FETCH_ASSOC);
            }
            // must close cursor before calling execute again
            $statement->closeCursor();
          }
          catch (PDOException $e) {
            // don't output this on prod...
            trigger_error($e->getMessage());
          }
          // free prepared statement
          $statement = null;



 				}

           return($r);
      }

      function glossary_previous($name, $pdo) {
        $r = array();

        $term = $name;
        $statement = $pdo->prepare(
            "SELECT term, strcmp(lcase(term), lcase('" . $term . "')) as compared from glossary order by compared, term desc");
        try {
          // use bound parameter names
          $statement->execute(array(
          ));

          $count = $statement->rowCount();
          if ($count != 0) {
            $r = $statement->fetch(PDO::FETCH_ASSOC);
            if($r["compared"] != -1) {
              $r = array();
            }
          }
          // must close cursor before calling execute again
          $statement->closeCursor();
        }
        catch (PDOException $e) {
          // don't output this on prod...
          trigger_error($e->getMessage());
        }
        // free prepared statement
        $statement = null;

        return($r);
      }


      function glossary_next($name, $pdo) {
        $r = array();

        $term = $name;
        $statement = $pdo->prepare(
            "SELECT term, strcmp(lcase(term), lcase('" . $term . "')) as compared from glossary order by compared desc, term");
        try {
          // use bound parameter names
          $statement->execute(array(
          ));

          $count = $statement->rowCount();
          if ($count != 0) {
            $r = $statement->fetch(PDO::FETCH_ASSOC);
            if($r["compared"] != 1) {
              $r = array();
            }
          }
          // must close cursor before calling execute again
          $statement->closeCursor();
        }
        catch (PDOException $e) {
          // don't output this on prod...
          trigger_error($e->getMessage());
        }
        // free prepared statement
        $statement = null;
        return($r);
      }


      function glossary_index($alpha) {
        include_once '/etc/puppet/EHPServer.class.php';
        $pdo = EHPServer::getDatabase('earthquake');
        $r = "";
        $where = "";
        $alpha = strtolower($alpha);
        if($alpha != "" && $alpha != "all") {
          $where = " WHERE lcase(term) like lcase('${alpha}%') ";
        }

        $r .= "";
        $statement = $pdo->prepare("
            SELECT * from glossary $where ORDER BY term");

            try {
              // use bound parameter names
              $statement->execute(array(
              ));
              $letter = "";
              while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

                $term = $row["term"];
                $first = strtoupper($term{0});
                if(preg_match("/^[A-Z]/", $first)) {
                  if($letter != $first) {
                    if($letter != "") {
                      $r .= "</ul>";
                    }
                    $letter = $first;
                    $r .= "<h2>$letter</h2><ul class=\"no-style\">";
                  }

                  $colwidth = "two";
                  if (strlen($term) > 20) {
                    $colwidth = "four";
                  }
                  $colwidth = "five";
                  $r .= "<li class=\"$colwidth column\"><a href=\"?term=$term\">$term</a></li>";
                }
              }
              $r .= "</ul>";

              // must close cursor before calling execute again
              $statement->closeCursor();
            }

            catch (PDOException $e) {
              // don't output this on prod...
              trigger_error($e->getMessage());
            }

            // free prepared statement
            $statement = null;

        return($r);

      }



      function display_glossary_term($row, $pdo) {
        $termID = $row["id"];
        $term = $row["term"];
        $definition = stripslashes(($row["definition"]));
        $definition = str_replace("\n", "<br />", $definition);
        $img1 = $row["img1"];
        $img1Desc = stripslashes($row["img1Desc"]);
        $img2 = $row["img2"];
        $img2Desc = stripslashes($row["img2Desc"]);

        $r = "";

        $r .= "<ul class=\"no-style imagelist\">";
        $r .= "<li class=\"first\">";
        $r .= "<h2>$term</h2>";
        $r .= "<p>$definition</p>";
        $r .= "<hr class=\"clear\" />";

        if(!empty($img1)){
          $img1width = exec("identify -format \"%w\" " . $_SERVER['DOCUMENT_ROOT'] . "/images/glossary/$img1"  );
          $img1width = max(400, $img1width);
          $r .= "<div class=\"align-left\" style=\"width:${img1width}px\"><img class=\"noshadow\" src=\"images/$img1\" alt=\"$term\"/><p>$img1Desc</p></div>";
        }
        if(!empty($img2)){
          $img2width = exec("identify -format \"%w\" " . $_SERVER['DOCUMENT_ROOT'] . "/images/glossary/$img2"  );
          $img2width = max(400, $img2width);
          $r .= "<div class=\"align-left\" style=\"width:${img2width}px\"><img class=\"noshadow\" src=\"images/$img2\" alt=\"$term\"/><p>$img2Desc</p></div>";
        }

        $r .= "</li></ul>";


        return($r);
      }

      function glossary_term_navigation($term, $pdo) {
          $r = "";

        $previous = glossary_previous($term, $pdo);
        $next = glossary_next($term, $pdo);

        if(sizeof($previous) != 0 && preg_match("/^[A-Za-z]/", $previous["term"])) {
          $previous_link =
            "<a href=\"?term=" . $previous["term"] . "\">" .
            "&laquo; " . $previous["term"] .
            "</a>";
        } else {
          $previous_link = $term;
        }

        if(sizeof($next) != 0) {
          $next_link =
            "<a href=\"?term=" . $next["term"] . "\">" .
            $next["term"] . " &raquo;" .
            "</a>";
        } else {
          $next_link = $term;
        }

        $r .= "<div id=\"term-nav\">";
        $r .= "<div class=\"previous\">" . $previous_link . "</div>";
        $r .= "<div class=\"next\">" . $next_link . "</div>";

        $r .= "</div>";

        return($r);
      }




    ?>
