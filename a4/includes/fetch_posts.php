<?php

include "config.php"; 

header("Content-Type: application/json");

//we should fetch all posts joined with the users table and match the ids 
//so we can then post it on the feed with their name. 
//then do the same with joining the  table with the upvotes table and get the 
//users who have upvoted it
$query = "

SELECT 	OriginalTable.post_selfID,
		OriginalTable.post_title,
        OriginalTable.post_content,
        OriginalTable.post_created_at,
        OriginalTable.users_user_id,
        OriginalTable.users_username,
        COUNT(upvotes.post_id) AS upvote_count

 FROM 
	 (SELECT	posts.id AS post_selfID,
				posts.title AS post_title,
                posts.content AS post_content ,
				posts.created_at AS post_created_at,
                users.id AS users_user_id, 
                users.username AS users_username  
		FROM  posts LEFT JOIN users 
        ON posts.user_id = users.id) AS OriginalTable

LEFT JOIN upvotes
ON OriginalTable.post_selfID = upvotes.post_id 
 
 GROUP BY 
    OriginalTable.post_selfID, 
    OriginalTable.post_title, 
    OriginalTable.post_content, 
    OriginalTable.post_created_at, 
    OriginalTable.users_user_id, 
    OriginalTable.users_username

ORDER BY 
    OriginalTable.post_created_at DESC;
"; 
$result = $conn->query($query);

$posts = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}

echo json_encode($posts);
?>