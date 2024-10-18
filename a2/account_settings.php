<?php 
include "includes/header.php";
?>

<div class=" container" style="background-color:#fff; border-style:solid; height: 800px;  ">
<?php
    if(array_key_exists("loggedin",$_SESSION)){
        echo '
    <div class="col-3 mt-2" style="background-color:#bab8b9; height:160px; width:380px; text-align:left">
        <h3>Change Username</h3>
            <form action="includes/username_change.php" method="post">
            <p>current username is '. $_SESSION['username'] .'</p>
            <label for="i-keywords">New Username</label>
            <input type="text" name="newUsername" id="newUsername" required style="margin-left:45px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <input type="submit" value="submit" name="submit" i="i-submit">
            </form>
    </div>';
    echo '
    <div class="col-3 mt-2" style="background-color:#bab8b9; height:160px; width:380px; text-align:left">
        <h3>Change password</h3>
            <form action="includes/password_change.php" method="post">
            <label for="i-keywords">current password</label>
            <input type="text" name="password" id="password" required style="margin-left:32px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <label for="i-keywords">new password</label>
            <input type="text" name="newPassword" id="newPassword" required style="margin-left:54px;px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <label for="i-keywords">confirm password</label>
            <input type="text" name="confirmPassword" id="confirmPassword" required style="margin-left:30px;px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <input type="submit" value="submit" name="submit" i="i-submit">
            </form>
    </div>';
    }else{
        echo '<h1 style="text-align:center;"> please log in </h1>';
    }

?>
</div>
<?php 
include "includes/footer.php";
?>