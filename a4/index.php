    <?php
    // Index functionality
    include "includes/config.php";
    include "templates/header.php";

    ?>




<body>
    <div class="container mt-4 " style="background-color:#fff;height:100%; ">
        <div class="row" style="height:80%; background-color:#bab8b9; border-style:solid;">
            <div id="posts-feed" class="container" style="width:70%; background-color:#fff; border-style:solid;">
             
             </div>
        </div>
    </div>


    <script>
        async function fetchUserPosts(){
            try{

                const asyncReponse = await fetch("includes/fetch_posts.php");
                const data = await asyncReponse.json();

                const postFeed = document.getElementById("posts-feed");
                for (let i = 0; i < data.length ; i++){
                    const post = data[i];
                    const postElement = document.createElement('div');
                    postElement.innerHTML = `
                        <h3>${post.post_title}</h3>
                        <p>${post.post_content}</p>
                        <p>Posted on: ${post.post_created_at}</p>
                        <p>Posted by: ${post.users_username}</p>
                        <p> Upvoted by ${post.upvote_count}</p>
                    `;
                    postFeed.appendChild(postElement);
                }
            }catch (error) {
                console.error("error", error);
            }
        }
       
        window.onload = fetchUserPosts;
   </script>
</body>

