<?php
require_once "confige.php";



function doRegister($userName,$userEmail,$pass){
global $con;



$loginData = date('Y-m-d H:i:s');

try{
$query = "INSERT INTO users(userName, userEmail, userPass, loginData) VALUES(:userName, :userEmail, :userPass, :loginData)";
$result= $con->prepare($query);
$result->bindParam(":userName",$userName);
$result->bindParam(":userEmail",$userEmail);
$result->bindParam(":userPass",$pass);
$result->bindParam(":loginData",$loginData);

if($result->execute()){
    return true;
}else{
    return false;
}

  } catch(PDOException $e) {
        echo "خطای PDO: " . $e->getMessage();
        return false;
    }

}







