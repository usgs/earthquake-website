<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Topics';
  include 'template.inc.php';
}


include_once '/etc/puppet/EHPServer.class.php';
$pdo = EHPServer::getDatabase('earthquake');

$statement = $pdo->prepare('
    select
      t.id,
      t.topic
    from
      learn_Topics t
    where
      t.approve=:approved
      and exists (
        select * from
          learn_LinkTopic lt,
          learn_Main m
        where
          lt.topicID=t.id
          and lt.linkID=m.id
          and m.approve=:approved
      )
    order by
      t.topic
');
$statement->execute(array(
  'approved' => 'yes'
));


echo '<pre>';
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
  print_r ($row);
}
echo '</pre>';
?>
