<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$database = fopen("../database/users.csv","r");
$usernameCorrect = false;
$passwordCorrect = false;

// Validate form input
if (empty($username) || empty($password)) {
    echo "All fields are required.";
    exit;
}

//first we want to check if this used email is already in the database, then check the password
while ($storeUser = fgetcsv($database)) {
    if($storeUser[0] == $username ) {
        $usernameCorrect = true;
    }
    //
    if(password_verify($password,$storeUser[1])){
        $passwordCorrect = true;
    }
}

if(!$usernameCorrect){    
    echo "Error 404, Email not found";
}elseif(!$passwordCorrect){
    echo "The inputted password is wrong";
}else{
    //here we wanna login, are we  starting a session here or what exactly?
    echo "success";
    $_SESSION["loggedin"] = "true";
    header('location:http://localhost/2170/a2/index.php');
    exit();
}
?>