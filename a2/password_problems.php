<?php
include "includes/header.php";
?>
<div class=" container" style="background-color:#fff; border-style:solid; height: 800px;  ">
<?php
    //will only display if the user hasnt inputted their name yet for reset
    if(!array_key_exists("userFound",$_SESSION)){
      echo '
    <div class="col-3 mt-2" style="background-color:#bab8b9; height:160px; width:380px; text-align:left">
      <h3>Password Reset</h3>
          <form action="includes/user_lookup.php" method="post">
            <label for="i-keywords">Username</label>
            <input type="text" name="username" id="username" required style="margin-left:50px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <input type="submit" value="submit" name="submit" i="i-submit">
            </form>
    </div>';
    }elseif(!array_key_exists("securityPassed",$_SESSION)){
      echo '
    <div class="col-3 mt-2" style="background-color:#bab8b9; height:160px; width:380px; text-align:left">
      <h3>Password Reset</h3>
          <form action="includes/security_question.php" method="post">
            <p>'. $_SESSION['question'] .'</p>
            <label for="i-keywords">Your Answer:</label>
            <input type="text" name="answer" id="answer" required style="margin-left:50px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <input type="submit" value="submit" name="submit" i="i-submit">
            </form>
    </div>';
    }elseif(array_key_exists("securityPassed",$_SESSION)){
      echo '    <div class="col-3 mt-2" style="background-color:#bab8b9; height:160px; width:380px; text-align:left">
        <h3>Change password</h3>
            <form action="includes/password_reset.php" method="post">
            <label for="i-keywords">new password</label>
            <input type="text" name="newPassword" id="newPassword" required style="margin-left:54px;px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <label for="i-keywords">confirm password</label>
            <input type="text" name="confirmPassword" id="confirmPassword" required style="margin-left:30px;px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <input type="submit" value="submit" name="submit" i="i-submit">
            </form>
    </div>';
    }
  ?>
</div>

<?php 
include "includes/footer.php";
?>