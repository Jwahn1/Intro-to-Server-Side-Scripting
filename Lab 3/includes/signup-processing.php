<?php

$email = $_POST['email'];
$password = $_POST['password'];
$signupForm = "$email,$password\n";
$database = fopen("../db/user-data.csv","r+");
$alreadyRegistered = false;
$storeEmail = "";

//first we want to check if this used email is already in the database
while ($storeEmail = fgetcsv($database)) {
    if($storeEmail[0] == $email){
        $alreadyRegistered = true;
    }
}
 
if($alreadyRegistered){    
    echo  "User already exists. Please log in.";
}else{
    //append email and password to database
    fwrite($database, $signupForm);
    fclose($database);
    echo"success";
}








?>