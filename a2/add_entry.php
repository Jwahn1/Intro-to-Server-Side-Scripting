<?php 
include "includes/header.php";
?>

<div class=" container" style="background-color:#fff; border-style:solid; height: 800px;  ">
<?php
if(array_key_exists("loggedin",$_SESSION)){
    echo '
    <div class="col-3 mt-2" style="background-color:#bab8b9; height:360px; width:580px; text-align:left">
        <h3>Make a journal entry</h3>
        <form action="includes/journal_add.php" method="post">
            <label for="title" style="margin-left:40px;">title</label><br>
            <input type="text" name="title" id="title" required style="margin-left:20px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
            <label for="entry"style="margin-left:40px;">journal entry</label><br>
            <textarea id="entry" name="entry" rows="5" cols="50" style="margin-left:20px;"required></textarea><br>
            <br><input type="submit"style="margin-left:20px;" value="Submit Entry " name="submit" i="i-submit">
            </form>
     </div>';
}
?>
</div>



<?php 
include "includes/footer.php";
?>