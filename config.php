<?php

try{
$pdo =new PDO("mysql:host=localhost;dbname=test","root","");}
catch (Exception $e){
die($e->getMessage());
}