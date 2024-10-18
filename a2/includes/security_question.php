<?php
session_start();
$answer = $_POST["answer"];
$database = fopen("../database/users.csv","r");
$correct = false;
$counter = 0;

while ($storeUser = fgetcsv($database)) {
    if($storeUser[0] == $_SESSION['userFound'] ) {
        //sanitize the answer as it has a /n character after it
        $storeUser[4]= sanitize_input($storeUser[4]);
        
        if($answer == $storeUser[4]){
            //having answered the security question correctly we set a flag;
            $_SESSION["securityPassed"] = true;
            $_SESSION["location"] = $counter;
            $correct = true;
            header('location:http://localhost/2170/a2/password_problems.php');
            exit();
        }
    }
    $counter++;
}


if(!$correct){
    echo "this is not the correct answer, please try again";
}


/*
    CSCI 2170: Intro to Server-Side Scripting (Fall 2024)
    Lab 2 Solution
*/
// Function to sanitize input
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>