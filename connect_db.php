<?php 
$dsn = "mysql:host=localhost;port=3308;dbname=students";
$user = 'root';
$pass = '';

try{
    $con = new PDO($dsn,$user,$pass);
}catch(PDOException $ex){
    echo $ex->getMessage();
}