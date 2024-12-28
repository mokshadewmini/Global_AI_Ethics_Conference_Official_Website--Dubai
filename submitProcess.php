<?php

require "connection.php";

$full_name = $_POST["full_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];


if(empty($full_name)){
    echo ("Please enter your Full Name ");
}else if (empty($email)){
    echo ("Please enter your Email ");
}else if(strlen($email) >= 255){
    echo ("Email must have less than 100 characters");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email ");
}else if(empty($phone)){
    echo ("Please enter your Mobile ");
}else if(strlen($phone) != 10){
    echo ("Mobile must have 10 characters");
}else{

$rs = Database::search("SELECT * FROM `contact_details` WHERE `email`='".$email."' OR `mobile`='".$phone."'");
$n = $rs->num_rows;

if($n > 0){
    echo ("User with the same Email or Mobile already exists.");
}else{
    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");

    Database::iud("INSERT INTO `contact_details` 
    (`full_name`,`email`,`mobile`,`joined_date`) VALUES 
    ('".$full_name."','".$email."','".$phone."','".$date."')");

    echo "success";

}
    
}

?>