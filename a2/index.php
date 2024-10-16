<?php

include "includes/header.php";
?>

  <div class=" container" style="background-color:#fff; border-style:solid; height: 800px;  ">
  <?php
    //will only display if the loggedin flag hasn't been set
    if($_SESSION["loggedin"] !== "true"){
      echo '
    <div class="col-3 mt-2" style="background-color:#bab8b9; height:160px; width:380px; text-align:left">
      <h3>LOGIN</h3>
          <form action="includes/login.php" method="post">
            <label for="i-keywords">Username</label>
            <input type="text" name="username" id="username" required style="margin-left:50px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <label for="i-keywords">Password</label>
            <input type="text" name="password" id="password" required style="margin-left:54px;px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <input type="submit" value="login" name="submit" i="i-submit">
            </form>
    </div>';
    }
  ?>
    
  </div>
<?php 
include "includes/footer.php";
?>