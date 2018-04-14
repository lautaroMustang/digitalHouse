<?php
include('db.php');
$query=$db->prepare('SELECT * FROM series WHERE id='.$_GET['id']);
$query->execute();
$result=$query->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?=var_dump($result)?>

  </body>
</html>
