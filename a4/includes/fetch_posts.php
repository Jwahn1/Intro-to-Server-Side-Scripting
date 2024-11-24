<?php

include "config.php"; 

header("Content-Type: application/json");

$query = "SELECT * FROM posts ORDER BY created_at DESC"; 
$result = $conn->query($query);

$posts = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}

echo json_encode($posts);
?>