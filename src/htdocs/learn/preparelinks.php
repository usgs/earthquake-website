<?php
      //	Author:	Tiffany Kalin
      //	Contact:
      //	Last	modified:	12/08/2016
      if	(!isset($TEMPLATE))	{
      $TITLE	=	'Preparedness Information and Response Agencies';
      $NAVIGATION	= true;
      include	'template.inc.php';
      }

			$preparednessID = 25;

			include_once '/etc/puppet/EHPServer.class.php';

			$pdo = EHPServer::getDatabase('earthquake');
			$statement = $pdo->prepare("
				SELECT m.id, m.link, m.name, m.description, m.organization
				FROM learn_Main m
				WHERE approve='yes'
				AND
				EXISTS(
					SELECT * FROM learn_LinkTopic lt
					WHERE lt.topicID=:topicID AND lt.linkID=m.id)
				AND
				EXISTS
					(SELECT * FROM learn_LinkLevel ll
					WHERE ll.linkID=m.id AND ll.levelID=13)
				ORDER BY m.name");

			try {
			// use bound parameter names
			$statement->execute(array(
				'topicID' => $preparednessID
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

?>

<figure class="right">
	<img src="/learn/images/Izmit_damage.jpg" class="border" border="0" alt="Photo of damange after earthquake in Izmit, Turkey." />
	<figcaption>
		Damage in Izmit, Turkey after the M7.6 August 17, 1999 earthquake.
	</figcaption>
</div>

<ul class="no-style">
<?php
	foreach ($links as $id => $link) {
		print "<li><a href=" . urldecode($link['link']) .">". stripslashes(str_replace('&', '&amp;', $link['name'])) . "</a><br/>";
		print stripslashes(str_replace('&', '&amp;', $link['description']));
		print '</li><br/>';
	}
?>
</ul>
