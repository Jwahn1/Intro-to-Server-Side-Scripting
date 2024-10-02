<?php
$email = $_POST['email'];
$password = $_POST['password'];
$database = fopen("../db/user-data.csv","r");
$emailcorrect = false;
$passwordcorrect = false;

$storeEmail = "";

//first we want to check if this used email is already in the database
while ($storeEmail = fgetcsv($database)) {
    if($storeEmail[0] == $email ) {
        $emailcorrect = true;
    }
    if($storeEmail[1] == $password){
        $passwordcorrect = true;
    }
}

if(!$emailcorrect){    
    echo "Error 404, Email not found";
}elseif(!$passwordcorrect){
    echo "The inputted password is wrong";
}elseif{
    echo "successful login";
}
?>