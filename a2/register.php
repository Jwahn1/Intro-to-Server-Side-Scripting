<?php 
include "includes/header.php";
?>

<main>
<div class=" container" style="background-color:#fff; border-style:solid; height: 800px;  ">
    <div class="col-3 mt-2" style="background-color:#bab8b9; height:300px; width:380px; text-align:left">
    <h3>REGISTER</h3>
        <form action="includes/register-processing.php" method="post">
          <label for="i-keywords">Username</label>
          <input type="text" name="username" id="username" required style="margin-left:50px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
          <label for="i-keywords">Password</label>
          <input type="text" name="password" id="password" required style="margin-left:54px;px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
          <label for="i-keywords">Verify Password</label>
          <input type="text" name="verify-password" id="verify-password" required style="margin-left:12px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
          <label for="i-keywords">Full name</label>
          <input type="text" name="full-name" id="full-name" required style="margin-left:54px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
          <label for="i-keywords">Security Question</label>
          <input type="text" name="security-question" id="security-question" required style="width:150px; borderstyle:solid; border-radius: 5px;"><br>
          <label for="i-keywords">Security Answer</label>
          <input type="text" name="security-answer" id="security-answer" required style="margin-left:12px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
          <input type="submit" value="register" name="submit" i="i-submit">
          </form>
      </div>
  </div>
</main>

<?php 
include "includes/footer.php";
?>