<?php
    session_start();
    $username = sanitize_input($_POST['username']);
    $password = sanitize_input($_POST['password']);
    $verifyPassword = sanitize_input($_POST['verify-password']);
    $fullname = sanitize_input($_POST['full-name']);
    $securityQuestion= sanitize_input($_POST['security-question']);
    $securityAnswer= sanitize_input($_POST['security-answer']);
    $users = fopen("../database/users.csv","r+");
    $alreadyRegistered = false;

    //check if this user has been registered before
    while ($usernames = fgetcsv($users)) {
        if($usernames[0] == $username){
            $alreadyRegistered = true;
        }
    }
    fclose($users);
    $users = fopen("../database/users.csv","a");
   
    if($alreadyRegistered == false){
        //check here if the password matches the verified password
        if($password == $verifyPassword){
            //hash the password
            $password =  password_hash($password, PASSWORD_DEFAULT);
            //now prepare the data for storage
            $data = "$username,$password,$fullname,$securityQuestion,$securityAnswer\n";

            fwrite($users, $data);
            fclose($users);
            echo"success";

        }else{
            echo "The inputted password's don't match, please register again";
        }
    }else{
        echo "Username already taken";
        
    }
        
    
    

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