<?php
//bring the db connection
include "config.php";
session_start();



$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $_SESSION["username"]);
$stmt->execute();
$result= $stmt->get_result();
$user_info = $result->fetch_assoc();
$user_id = $user_info["id"];


$query = "SELECT username,content,timestamp FROM users INNER JOIN

(SELECT sender_id,receiver_id,content,timestamp
FROM messages  JOIN users
ON messages.sender_id = users.id 
WHERE users.id = ?)  AS original_table

ON users.id = original_table.receiver_id
";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();


$messages = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}


echo json_encode($messages);


?>