<?php
//bring the db connection
include "config.php";
session_start();

$data = json_decode(file_get_contents('php://input'), true);
$post_content = $data["post"];
$post_title = $data["title"];
$timestamp = date("Y-m-d H:i:s");

//poster id
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $_SESSION["username"]);
$stmt->execute();
$result= $stmt->get_result();
$sender_info = $result->fetch_assoc();
$sender_id = $sender_info["id"];

//then just insert into database
$query = "INSERT INTO posts (user_id,title,content,created_at) VALUES (?,?,?,?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ssss",$sender_id,$post_title,$post_content,$timestamp);
$stmt->execute();


echo "post submitted!";



?>