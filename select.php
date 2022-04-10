<?php
include_once "config.php";
$sql = $pdo->prepare("SELECT * FROM percent");
$sql->execute();
$row =$sql->fetchAll(PDO::FETCH_OBJ);
//var_dump($row);

