<?php
  session_start();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/boostrap-grid.css" rel="stylesheet">
    <title>Index</title>
  </head>
  <div class="row" style="height:50px; background-color:#78777b">
    
    <div class="col-3" style="font-size:20px;">
      <a href="index.php" ">DALHOUSIE FORUMS</a>
    </div>
    <div class="col-5" ></div>
    
    <?php
    //we should add an if statement that checks if the user is logged and in and then display the rest of the nav
    ?>
    <?php if (isset($_SESSION['loggedin'])): ?>

      <div class="col-1" style="font-size:20px;">
        <a href="messages.php" ">Messages</a>
      </div>
      
      <div class="col-1" style="font-size:20px;">
        <a href="new_post.php" ">New Posts</a>
      </div>

      <div class="col-1" style="font-size:20px;">
        <a href="includes/logout.php" ">Logoff</a>
      </div>

    <?php else: ?>
      <div class="col-1" style="font-size:20px;">
        <a href="login_page.php" ">Login</a>
      </div>
        
      <div class="col-1" style="font-size:20px;">
        <a href="register.php" ">Register</a>
      </div>

    <?php endif; ?>
    <!doctype html>
    

   </div>
 