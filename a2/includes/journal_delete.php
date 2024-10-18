<?php
    $entry = $_POST["entry"];
    $database = fopen("../database/entries.csv","r");
    $output =  fopen ("../database/temp.csv","w");


    //we just rewrite every entry on the second file as long as its not the one we want to delete
    while ($journalEntries= fgetcsv($database)) {
        if(!($journalEntries[1] == $entry) ) {
        fputcsv($output,$journalEntries); 
        }
    }
    unset($_POST["entry"]);
    fclose($database); fclose($output);
    unlink("../database/entries.csv");
    rename("../database/temp.csv", "../database/entries.csv");
    header('location:http://localhost/2170/a2/entries.php');
    exit();

?>