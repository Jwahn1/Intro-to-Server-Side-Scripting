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
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <title>Index</title>
  </head>
  <div class="row" style="height:50px; background-color:#78777b">
    
    <div class="col-3" style="font-size:20px;">
       <h2>DALHOUSIE FORUMS</h2>
    </div>
    
    <div class="col-5" ></div>
    <div class="col-2 " style="font-size:20px;">
      <a href="index.php" >Return to main page</a>
   </div>
    <?php
    //we should add an if statement that checks if the user is logged and in and then display the rest of the nav
    ?>
    <?php if (isset($_SESSION['loggedin'])): ?>

      <div class="col-1 mt-1" style="font-size:20px;">
          <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            User Menu
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="messages.php">messages</a></li>
            <li><a class="dropdown-item" href="new_post.php">create new posts</a></li>
            <li><a class="dropdown-item" href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
        
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
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
   
 