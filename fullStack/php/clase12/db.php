<?php
// echo '<pre>';var_dump($_POST);echo '<pre>';
$opt = [ PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION ];
$db = new PDO('mysql:host=127.0.0.1;dbname=movies_db;port=3306','root','',$opt);
try {
  $query = $db->prepare("SELECT DISTINCT title FROM movies WHERE title=:title");
  

  $stmt=$db->prepare("INSERT INTO movies (title, rating, awards, length, release_date)
  VALUES (:title,:rating,:awards,:length,:release_date)");

  $titulo="";
  $rating="";
  $premios="";
  $duracion="";
  $fecha="2018-04-14";
  $stmt->bindParam(':title', $titulo, PDO::PARAM_STR);
  $query->bindParam(':title', $titulo, PDO::PARAM_STR);
  $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
  $stmt->bindParam(':awards', $premios, PDO::PARAM_INT);
  $stmt->bindParam(':length', $duracion, PDO::PARAM_INT);
  $stmt->bindParam(':release_date', $fecha, PDO::PARAM_STR);

  $titulo=array_key_exists('titulo',$_POST)&&$_POST['titulo']?$_POST['titulo']: NULL;
  $rating=array_key_exists('rating',$_POST)&&$_POST['rating']?$_POST['rating']: NULL;
  $premios=array_key_exists('premios',$_POST)&&$_POST['premios']?$_POST['premios']: NULL;
  $duracion=array_key_exists('duracion',$_POST)&&$_POST['duracion']?$_POST['duracion']: NULL;
  $fecha=array_key_exists('release_date',$_POST)&&$_POST['release_date']?$_POST['release_date']: NULL;

  $stmt->execute();
  var_dump($stmt);

  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_ASSOC);
  var_dump($results);
}
catch( PDOException $Exception ) {
  echo $Exception->getMessage();
}

?>
