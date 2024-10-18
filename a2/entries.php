<?php 
include "includes/header.php";
?>

<div class=" container" style="background-color:#fff; border-style:solid; height: 800px;  ">

    <?php
    //display all the entries made by this user
    $entries = fopen("database/entries.csv","r");
    while ($journals = fgetcsv($entries)) {
        if($journals[0] == $_SESSION["username"]){
            echo $journals[3] . " TITLE: \"" . $journals[1] . "\"<br>";
            echo $journals[2];
            //the following echo essentially assigns in the HTML a value to each entry that can then 
            //be sent through a form. 
            echo '
            <form action="includes/journal_delete.php" method="post">
            <input type="checkbox" id="entry" name="entry" value="' . $journals[1] .'" required>
            <input type="submit" value="delete" name="submit" i="i-submit">
            </form>';  
            echo '
            <form action="edit_submission.php" method="post">
            <input type="checkbox" id="entry" name="entry" value="' . $journals[2] .'" required>
            <input type="submit" value="edit" name="submit" i="i-submit">
            </form>';  
        }
    }


    ?>

</div>
<?php 
include "includes/footer.php";
?>