<?php
session_start();
$userName = $_POST["username"];
$database = fopen("../database/users.csv","r");
$usernameCorrect = false;
//first we look for the user
while ($storeUser = fgetcsv($database)) {
    if($storeUser[0] == $userName ) {
        $usernameCorrect = true;
        //having found the user we can then grab the security question and answer
        $_SESSION['question'] = $storeUser[3];
        $_SESSION['answer'] = $storeUser[4];
    }
}

//if we found the user we set a flag in the session array and head back
if($usernameCorrect){
    $_SESSION['userFound'] = $userName;
    header('location:http://localhost/2170/a2/password_problems.php');
    
    exit();
//if we didnt find the user we want to reset the session array
}else{
    echo " this user does not exist";
    session_destroy();
}

?>