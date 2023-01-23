<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);
// echo $a;
session_start();
if(isset($_POST)){
    $_SESSION["users"]=$_POST;
}
$error=[];
echo $_SERVER['REQUEST_METHOD'] ;
print_r($_POST);
if($_SERVER['REQUEST_METHOD'] =="POST"  && isset($_POST["name"])){


foreach($_POST as $key => $value){
     $$key=trim($value);
}
print_r($_POST);
// validate name
if(empty($name)){
$error[]="name is required";
}elseif(strlen($name)>=100){
    $error[]="name must be less than 100"; 
}
// validate email
if(empty($email)){
    $error[]="email is required";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error[]="in valide email"; 
    }
    // validate message
    if(empty($message)){
        $error[]="message is required";
        }elseif(strlen($message)>=255){
            $error[]="message must be less than 255"; 
        }

        if(!empty($error)){
$_SESSION["error"]=$error;

        }else{
$_SESSION["user"]=["name"=> $name, "email"=>$email,"message"=>$message];

        }
 

}

// print_r($_SESSION["error"]);
// print_r($_SESSION["user"]);
header("location:index.php");
die;






