<?php

include "includes/header.php";
?>

  <div class=" container" style="background-color:#fff; border-style:solid; height: 800px;  ">
  <?php
    //will only display if the loggedin flag hasn't been set
    if(!array_key_exists("loggedin",$_SESSION)){
      echo '
    <div class="col-3 mt-2" style="background-color:#bab8b9; height:160px; width:380px; text-align:left">
      <h3>LOGIN</h3>
          <form action="includes/login.php" method="post">
            <label for="i-keywords">Username</label>
            <input type="text" name="username" id="username" required style="margin-left:50px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <label for="i-keywords">Password</label>
            <input type="text" name="password" id="password" required style="margin-left:54px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <input type="submit" value="login" name="submit" i="i-submit">
            </form>
          <a href="http://localhost/2170/a2/password_problems.php">Forgot your password?</a>
          <a href="http://localhost/2170/a2/register.php">register?</a>
    </div>';
    }
  ?>
    
  </div>
<?php 
include "includes/footer.php";
?>