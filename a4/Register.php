<?php
    // Index functionality
    include "includes/config.php";
    include "templates/header.php";

 ?>

<div class=" container" style="background-color:#fff; border-style:solid; height: 800px;  ">
    <div class="col-3 mt-2" style="background-color:#bab8b9; height:300px; width:380px; text-align:left">
    <h3>REGISTER</h3>
        <form action="includes/register_processing.php" method="post">
          <label for="i-keywords">Username</label>
          <input type="text" name="username" id="username" required style="margin-left:50px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
          <label for="i-keywords">Password</label>
          <input type="text" name="password" id="password" required style="margin-left:54px;px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
          <label for="i-keywords">Verify Password</label>
          <input type="text" name="verify-password" id="verify-password" required style="margin-left:12px;width:150px; borderstyle:solid; border-radius: 5px;"><br>

          <input type="submit" value="register" name="submit" i="i-submit">
          </form>
      </div>
  </div>

  
<?php
    include "templates/footer.php";
?>