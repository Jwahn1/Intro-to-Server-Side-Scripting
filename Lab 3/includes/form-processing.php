<?php
    /**
     * CSCI 2170: Intro to Server-Side Scripting (Fall 2024)
     * Lab 2 Solution
     * If you wish to use this solution as a starting point for Lab 3,
     * retain this comment block, and include a citation in readme.md saying
     * that you are using the solution.
     */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = sanitize_input($_POST['user-name']);
        $email = sanitize_input($_POST['user-email']);
        $message = sanitize_input($_POST['user-message']);
        $category = sanitize_input($_POST['product-category']);

        // Validate form input
        if (empty($name) || empty($email) || empty($message) || empty($category)) {
            echo "All fields are required.";
            exit;
        }

        // Additional email validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
            exit;
        }

        // Prepare data for CSV storage
        $data = "$name,$email,$message,$category\n";

        // Check if the file exists, if not, create it
        $file_path = "../files/data-file.csv";
        $file_exists = file_exists($file_path);

        // Open file in append mode
        $file = fopen($file_path, "a");

        // Write data to file
        fwrite($file, $data);
        fclose($file);

        // Confirmation message
        echo "Data submitted successfully:<br>";
        echo "Name: $name<br>Email: $email<br>Message: $message<br>Category: $category<br>";

        // Display previously submitted data
        if ($file_exists) {
            echo "<h3>Previous Submissions:</h3>";
            $submitted_data = file($file_path);
            foreach ($submitted_data as $entry) {
                list($name, $email, $message, $category) = explode(",", $entry);
                echo "Name: $name, Email: $email, Message: $message, Category: $category<br>";
            }
        }
    }

    // Function to sanitize input
    function sanitize_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>