<?php
    session_start();
    $title = $_POST["title"];
    $entry = $_POST["entry"];
    //in case the user uses line breaks in the entry body we remove them
    $entry = str_replace(array("\r", "\n"), '', $entry);
    $user = $_SESSION["username"];
    $date = date('Y-m-d');
    $entries = fopen("../database/entries.csv","a");

    $data = "$user,$title,\"$entry\",$date\n";
    fwrite($entries,$data);

    unset($_POST["entry"]);
    header('location:http://localhost/2170/a2/entries.php');
    exit();
    
    //source: Lab 2 solution
    // Function to sanitize input

?>