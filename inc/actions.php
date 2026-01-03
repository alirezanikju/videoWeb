<?php
require_once "confige.php";


//registering 
if(isset($_POST['doRegister'])){
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userPass = $_POST['userPass'];
$userConfirmPass = $_POST['userConfirmPass'];

if($userPass === $userConfirmPass){
$hashPass = password_hash($userPass, PASSWORD_DEFAULT);

    if(
        doRegister($userName,$userEmail,$hashPass)
        ){
        header("location: index.php");
        exit();
    }
}else{
    echo "پسورد و تکرار آن باید برابر باشند";
}


}

