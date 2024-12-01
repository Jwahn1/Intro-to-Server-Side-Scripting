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


//query retrieves the info of who sent the message, message content and timestamp only by joining the users and message tables first to get the sender_id, then rejoins this table
//with the users table again but to obtain the name of the sender, then removes all unimportant information.
$query = "SELECT users.username as sender_name,original_table.content as message_content,original_table.timestamp as message_timestamp
FROM users
INNER JOIN 

(SELECT sender_id,content,timestamp,username 
FROM messages INNER JOIN users
ON messages.receiver_id = users.id 
WHERE users.id = ?) AS original_table 

ON original_table.sender_id = users.id;
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