<?php
$title=$_POST['title'];
include('db.php');
$sql = "INSERT INTO movies (title,length)
        VALUES ( ". $title .", ". $length.")";
 ?>
