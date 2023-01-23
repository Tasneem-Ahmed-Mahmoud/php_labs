<?php
include_once("./general.php");
include_once("./config.php");
include_once("./function.php");
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
if(require_val($name)){
$error[]="name is required";
}elseif(maxVal($name,100)){
    $error[]="name must be less than 100"; 
}
// validate email
if(require_val($email)){
    $error[]="email is required";
    }elseif(validateEmail($email)){
        $error[]="in valide email"; 
    }
    // validate message
    if(require_val($message)){
        $error[]="message is required";
        }elseif(maxVal($message,255)){
            $error[]="message must be less than 255"; 
        }

        if(!empty($error)){
$_SESSION["error"]=$error;

        }else{
$user="$visited_date_time,$id,$email,$name".PHP_EOL;
$file=fopen("file.text","a");
fwrite($file,$user); 
        }
 

}
header("location:index.php");
die;






