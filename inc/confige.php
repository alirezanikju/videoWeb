<?php

try{
$host = "localhost";
$dataBase = "video";
$userName = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$dataBase;";

$con = new PDO($dsn, $userName,$pass);

 require_once "functions.php";
 require_once "actions.php";

return $con;

}catch(Exception $e){
    echo "error";
    echo $e->getMessage();
}



