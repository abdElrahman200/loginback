<?php include('db.php') ?>

<?php
function req($value){
    if(strlen($value)>0){return true;}
    else{return false;}
};

function sanstring($value){
    $str = filter_var($value,FILTER_SANITIZE_STRING);
    return $str;
}

function valid($email){
    $str = filter_var($email,FILTER_VALIDATE_EMAIL);
    return $email;
}

function sanemail($email){
    $str = filter_var($email,FILTER_SANITIZE_EMAIL);
    return $email;
}

function minimam($value,$num){
    if(strlen($value)<$num){return false;}
    else{return true;}
}

function confirm($pass,$confirmpass){
    if(strlen($pass)===strlen($confirmpass)){
        return true ;
    }else{return false;}
}

function phone($value){
    if(strlen($value)>8) {
        return true;}
        else{return false;}
}



?>