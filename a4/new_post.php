<?php
// Index functionality
include "includes/config.php";
include "templates/header.php";
?>
<body>
    <div class="container mt-4 " style="background-color:#fff;height:100%; ">
        <div class="row" style="height:80%; background-color:#bab8b9; border-style:solid;">
            <div class="container" style="width:70%; background-color:#fff; border-style:solid;">
            <div class="col-3 mt-2" style="background-color:#bab8b9;  width:380px; text-align:left">
                <h3>New Post</h3>
                    <form  id="newPostForm" >
                    <label for="title">Post Title</label>
                    <input type="text" name="title" id="title" required style="margin-left:100px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
                    <label for="post">Post</label>
                    <textarea name="post" id="post" required style="margin-left:100px; width:200px;"></textarea><br>
                    <input type="submit" value="Make Post" name="submit" >
                    </form>
                </div>
                <h1>User Posts</h1>
                <div id="userPosts" class="container" style="width:70%; background-color:#fff; ">
                    
                    <!-- use javascript to append posts found in the database here -->
                </div>
          </div>
        </div>
    </div>
</body>

<script>
    function fetchUserPosts() {
    fetch('includes/fetch_user_posts.php')
        .then(response => response.json()) 
        .then(posts => {
            if (Array.isArray(posts)) {
              
                const postContainer = document.getElementById('userPosts');
            
                
               
                posts.forEach(post => {
                    const postElement = document.createElement('div');
                    postElement.style.borderStyle = 'solid';
                    postElement.style.padding = '3px ';
                    postElement.innerHTML = `
                        <p>${posts.post_id}</p>
                        <p>${posts.post_title}</p>
                        <p>Sent By: ${posts.post_content}</p>
                        <p>Sent On: ${posts.post_created_at}</p>
                       
                    `;
                   
                    messageContainer.appendChild(messageElement);
                });
            } 
            
        })
        .catch(error => {
            console.error("error",error);
        });
}




    async function sendDataToPHP(postContent,postTitle) {
        try {
            let response = await fetch("includes/new_post_processing.php", {
            method: "POST",
            headers: {
            "Content-Type": "application/json"
            },

        
            body: JSON.stringify({ post: postContent ,title: postTitle})
        });
            let result = await response.text();
            console.log(result);
        } catch (error) {
            console.error("Error:", error);
        }

    }


    //calls the function when the post is submitted    
    document.getElementById("newPostForm").addEventListener("submit", function (form_submission) {
        form_submission.preventDefault()
        const postContent = document.getElementById("post").value;
        const postTitle = document.getElementById("title").value;
        // Call the function to send data
        sendDataToPHP(postContent,postTitle);
    });
    
    fetchUserPosts();
</script>