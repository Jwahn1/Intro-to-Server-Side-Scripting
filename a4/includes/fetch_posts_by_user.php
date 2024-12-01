<?php
//bring the db connection
include "config.php";
session_start();
//sender id
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $_SESSION["username"]);
$stmt->execute();
$result= $stmt->get_result();
$sender_info = $result->fetch_assoc();
$sender_id = $sender_info["id"];

//obtain all posts made by user
$query = "
SELECT	posts.id AS post_selfID,
        posts.title AS post_title,
        posts.content AS post_content ,
        posts.created_at AS post_created_at
               
FROM  posts LEFT JOIN users 
ON posts.user_id = users.id 
WHERE posts.user_id = ?";



$stmt = $conn->prepare($query);
$stmt->bind_param("i", $sender_id);
$stmt->execute();
$result= $stmt->get_result();

$posts = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}

echo json_encode($posts);