<?php



function  maxVal( $input , $len){

    if(strlen($input) >= $len){
        return true;
    } else{
        return false;
    }
}

function require_val($input){
    if(empty($input)){
        return true;
    }else{
        return false;
    }
}

function validateEmail($email){
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    return false;
}else{
    return true;
}
}



?>