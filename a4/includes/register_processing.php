<?php
    //bring the db connection
    include "config.php";



    session_start();
    $username = sanitize_input($_POST['username']);
    $password = sanitize_input($_POST['password']);
    $verifyPassword = sanitize_input($_POST['verify-password']);

    if ($password != $verifyPassword) {
        // User already exists
        echo "passwords dont match";
        die();
    }

    //check if this user has been registered before
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User already exists
        echo "Username is already taken. Please choose a different username.";
        die();
    }

    //proceed to insert into the database

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // prepare query for the users table
    $query = "INSERT INTO users (username, password ) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $hashedPassword);
    $stmt->execute();



    //return to previous webpage via header
    header("Location: ../login_page.php"); // Redirect to the login page
    exit();

    //source: Lab 2 solution
    // Function to sanitize input
    function sanitize_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>