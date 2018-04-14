<?php

try {
  $opt = [ PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION ];
$db = new PDO('mysql:host=127.0.0.1;dbname=movies_db;port=3306','root','',$opt);
}
catch( PDOException $Exception ) {
echo $Exception->getMessage();
}
var_dump($db);
?>
