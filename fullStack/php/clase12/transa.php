<?php
$opt = [ PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION ];
$db = new PDO('mysql:host=127.0.0.1;dbname=movies_db;port=3306','root','',$opt);
$db->beginTransaction();
try {
  //         EJ 4
  // $query = $db->query("SELECT DISTINCT title FROM movis");
  // $results = $query->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($results);
  // $stmt=$db->prepare("INSERT INTO movies (title,rating,awards,release_date,length,genre_id) VALUES ('pepe2','2','3','2018-03-03','123','1')");
  // var_dump($stmt);
  // $stmt->execute();

  //     EJ 1
  // $stmt=$db->prepare("INSERT INTO movies (title,rating,awards,release_date,length,genre_id) VALUES ('pepe2','2','3','2018-03-03','123','1')");
  // var_dump($stmt);
  // $stmt->execute();

  // $stmt=$db->prepare("INSERT INTO movies (title,rating,awards,release_date,length,genre_id) VALUES ('pepe3','2','3','2018-03-03','123','1')");
  // var_dump($stmt);
  // $stmt->execute();

  $stmt=$db->exec("INSERT INTO movies (title,rating,awards,release_date,length,genre_id) VALUES ('pepe3','2','3','2018-03-03','123','1')");
  var_dump($stmt);


  $db->commit();
} catch (PDOException $ex) {
  $db->rollBack();
  echo "Error";
  echo $ex->getMessage();
}

 ?>
