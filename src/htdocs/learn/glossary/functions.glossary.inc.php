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

       function glossary_term($name, $id, $db) {
        $r = array();

        if($name != "") {
        //check url for term
          $term = mysql_real_escape_string( $name );

          $word = mysql_query("SELECT * from glossary WHERE lower(term)=lower('$term')", $db);
          if ( mysql_num_rows($word) != 0 ) {
            $r = mysql_fetch_array( $word );
          }
        }

        if ( sizeof( $r ) == 0 && $id != "") {
          $id = intval( $id );

          $word = mysql_query( "SELECT * from glossary WHERE id=$id", $db );
          if ( mysql_num_rows( $word ) != 0 ) {
            $r = mysql_fetch_array( $word );
          }
        }

        return($r);
      }

      function glossary_previous($name, $db) {
        $r = array();

        $term = mysql_real_escape_string($name);
        $previous = mysql_query("SELECT term, strcmp(lcase(term), lcase('" . $term . "')) as compared from glossary order by compared, term desc", $db);
        if(mysql_num_rows($previous) != 0) {
          $r = mysql_fetch_array($previous);
          if($r["compared"] != -1) {
            $r = array();
          }
        }

        return($r);
      }


      function glossary_next($name, $db) {
        $r = array();

        $term = mysql_real_escape_string($name);
        $next = mysql_query("SELECT term, strcmp(lcase(term), lcase('" . $term . "')) as compared from glossary order by compared desc, term", $db);
        if(mysql_num_rows($next) != 0) {
          $r = mysql_fetch_array($next);
          if($r["compared"] != 1) {
            $r = array();
          }
        }

        return($r);
      }


      function glossary_index($alpha) {
        $r = "";
        $where = "";
        $alpha = mysql_real_escape_string(strtolower($alpha));
        if($alpha != "" && $alpha != "all") {
          $where = " WHERE lcase(term) like lcase('${alpha}%') ";
        }

        $r .= "";
        $terms = mysql_query("SELECT * from glossary $where ORDER BY term");
        $letter = "";
        while($row = mysql_fetch_array($terms)) {
          $term = $row["term"];
          $first = strtoupper($term{0});
          if(preg_match("/^[A-Z]/", $first)) {
            if($letter != $first) {
              if($letter != "") {
                $r .= "</ul>";
              }
              $letter = $first;
              $r .= "<h2>$letter</h2><ul>";
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

        return($r);
      }



      function display_glossary_term($row, $db) {
        $termID = $row["id"];
        $term = $row["term"];
        $definition = stripslashes(db_flash_translate($row["definition"]));
        $definition = str_replace("\n", "<br />", $definition);
        $img1 = $row["img1"];
        $img1Desc = stripslashes($row["img1Desc"]);
        $img2 = $row["img2"];
        $img2Desc = stripslashes($row["img2Desc"]);
        $link = urldecode($row["link"]);
        $linkTerm = stripslashes($row["linkTerm"]);

        $r = "";

        $r .= "<ul class=\"imagelist\">";
        $r .= "<li class=\"first\">";
        $r .= "<h2>$term</h2>";
        $r .= "<p>$definition</p>";
        $r .= "<hr class=\"clear\" />";
        if(!empty($link)){
          $r .= "<p><a href=\"$link\">$linkTerm</a></p>";
        }
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

      function glossary_term_navigation($term, $db) {
          $r = "";

        $previous = glossary_previous($term, $db);
        $next = glossary_next($term, $db);

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
