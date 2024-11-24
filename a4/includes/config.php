<?php
   
    // Database configuration
    $servername = "localhost";
    $username = "root"; // Replace with your database username
    $password = "Taquitotaquito1";     // Replace with your database password
    $dbname = "dalhousie_forum"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
?>