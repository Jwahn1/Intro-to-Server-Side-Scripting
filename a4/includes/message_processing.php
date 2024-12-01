<?php
//bring the db connection
include "config.php";
session_start();

$user_target = $_POST["user_target"];
$message_contents = $_POST["message"];
$user_sender = $_SESSION["username"];
$timestamp = date("Y-m-d H:i:s");

if($user_target == $user_sender){
    echo "cant send a message to oneself";
    die();
}

//first we have to retrieve the id's of the sender and the reciever

//sender id
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $user_sender);
$stmt->execute();
$result= $stmt->get_result();
$sender_info = $result->fetch_assoc();


//target id
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $user_target);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "user does not exist";
    die();
   
}else{
    $receiver_info = $result->fetch_assoc();
}


//both user id's obtained here
$receiver_id = $receiver_info["id"];
$sender_id = $sender_info["id"];




//record message into the database 

$query = "INSERT INTO messages (receiver_id,sender_id,content,timestamp) VALUES (?,?,?,?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ssss",$receiver_id,$sender_id,$message_contents,$timestamp );
$stmt->execute();

//return to previous webpage via header
header("Location: ../messages.php"); // Redirect to the login page
exit();

?>