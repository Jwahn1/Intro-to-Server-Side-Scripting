<?php
session_start();
$newPassword = $_POST["newPassword"];
$confirmPassword = $_POST["confirmPassword"];
$database = fopen("../database/users.csv","r+");
$data;
$user;


if($newPassword == $confirmPassword){
    //find the old password
    for($i = 0 ; $i<$_SESSION['location']; $i++){
        $user = fgetcsv($database);
    }

    //replace with new password
    $user[1] = password_hash($newPassword,PASSWORD_DEFAULT);
    $data = implode(",",$user);

    //restart file so we can get to the line we want to change
    fclose($database);
    $database = fopen("../database/users.csv","r+");

    //replace the old password name with the new one
    for($i = 0 ; $i<$location; $i++){
        fgetcsv($database);
    }

    fwrite($database,$data);

    fclose($database);
    session_destroy();
    header('location:http://localhost/2170/a2/index.php');
    exit();
}else{
    echo 'Please re-enter your new password';
}




?>