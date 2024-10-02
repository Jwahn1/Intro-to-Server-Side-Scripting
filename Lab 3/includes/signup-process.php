<?php

$email = $_POST['email'];
$password = $_POST['password'];
$signupForm = "$email,$password\n";
$database = fopen("../db/user-data.csv","r");
$alreadyRegistered = false;

//first we want to check if this used email is already in the database
while ($storeEmail = fgetcsv($databse)) {
    if($storeEmail[1] == $email){
        $alreadyRegistered = true;
    }
}
 
if($alreadyRegistered){    
    echo  "User already exists. Please log in.";
}else{
    //append email and password to database
    fwrite($databse, $signupForm);
    fclose($databse);
}








?>