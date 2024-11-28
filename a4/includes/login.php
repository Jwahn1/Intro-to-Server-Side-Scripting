<?php

//bring the db connection
include "config.php";


session_start();
$username = sanitize_input($_POST['username']);
$password = sanitize_input($_POST['password']);



//check if this user has been registered
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "user does not exist";
    die();
   
}else{
    $user = $result->fetch_assoc();
}

//check if the password matches for the user that has been found


if(!password_verify($password,$user["password"])){
    echo "incorrect password";
    die();
}

//return to previous webpage via header and set log in flag
$_SESSION["loggedin"] = "true";
$_SESSION["username"] = $user["username"];
header("Location: ../index.php"); // Redirect to the login page
exit();

//source: Lab 2 solution
// Function to sanitize input
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>