<?php
include('db.php');
try{
  // $query = $db->query("SELECT id,title FROM movies order by id desc");
  //   $results=$query->fetchAll
  $query = $db->query("SELECT id,title FROM movies order by id desc");
  $results = $query->fetchAll(PDO::FETCH_ASSOC);
  var_dump($results);
}catch( PDOException $Exception ) {
  echo $Exception->getMessage();
};
 ?>
