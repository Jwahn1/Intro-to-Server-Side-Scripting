
<?php 
include "includes/header.php";
?>

<div class=" container" style="background-color:#fff; border-style:solid; height: 800px;  ">
<?php
    if(array_key_exists("loggedin",$_SESSION)){
        echo '
        <div class="col-3 mt-2" style="background-color:#bab8b9; height:360px; width:580px; text-align:left">
            <h3>Make an edit to this entry</h3>
            <form action="includes/journal_edit.php" method="post">
                <label for="newEntry"style="margin-left:40px;">journal entry</label><br>
                <textarea id="newEntry" name="newEntry" rows="5" cols="50" style="margin-left:20px;"required>'. $_POST["entry"] .'</textarea><br>
                <br><input type="submit"style="margin-left:20px;" value="Submit Edit " name="submit" i="i-submit">
                </form>
        </div>';
        $_SESSION["oldEntry"] = $_POST["entry"];
    }

?>

</div>



<?php 
include "includes/footer.php";
?>

