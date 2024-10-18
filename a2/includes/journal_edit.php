<?php
session_start();
    $newEntry = $_POST["newEntry"];
    $database = fopen("../database/entries.csv","r");
    $output =  fopen ("../database/temp.csv","w");


    //we copy to the second file every entry unless its the one we want to edit
    //which we just change the journal entry row before writing into file
    while ($journalEntries= fgetcsv($database)) {
        if(($journalEntries[2] == $_SESSION["oldEntry"]) ) {
             $journalEntries[2] = $newEntry;
             fputcsv($output,$journalEntries); 
        }else{
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