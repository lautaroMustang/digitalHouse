<?php
include('db.php');
try{
  $query = $db->query("SELECT DISTINCT title,id FROM series");
  $results = $query->fetchAll(PDO::FETCH_ASSOC);
  var_dump($results);
}catch( PDOException $Exception ) {
  echo $Exception->getMessage();
};
$id=null;
$title=null;
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <?php foreach ($results as $key => $value): ?>
        <li>
          <a href="serie.php?id=<?=$value['id']?>"><?=$value['title']?></a>
        </li>
      <?php endforeach; ?>

        <!-- <?php foreach ($results as $key => $value): ?>
          <?php foreach ($value as $llave => $valor): ?>
            <li><?=$valor?></li>
          <?php endforeach; ?>
        <?php endforeach; ?> -->


    </ul>
  </body>
</html>
