<?php
//bring the db connection
include "config.php";
session_start();

$data =json_decode(file_get_contents('php://input'), true); ;
$post_id = $data["id"];

$query = "DELETE FROM posts
         WHERE id = ?;";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $post_id);
$stmt->execute();

echo "post deleted!";
?>