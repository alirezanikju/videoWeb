<?php

try{
$host = "localhost";
$dataBase = "video";
$userName = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$dataBase;";

$con = new PDO($dsn, $userName,$pass);

return $con;

}catch(Exception $e){
    echo $e->getMessage();
}



