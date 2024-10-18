<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" style="width :100%; height:100%;">
    <head style="height 20%;">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/boostrap-grid.css" rel="stylesheet">
        <title>myJournal</title>

        <?php //navigation bar?>
        <div class="row" style="  margin:auto; background-color:#2222">
            <div class="col-1" style="font-size:20px; "></div>
            <div class="col-1" style="font-size:20px; "></div>
            <div class="col-1 "style="font-size:20px; text-align: center;"> <a href="http://localhost/2170/a2/index.php">Home</a> </div>

            <div class="col-1"style="font-size:20px;text-align: center;"><a href="">Login</a></div>
            <?php
            if(array_key_exists("loggedin",$_SESSION)){
                $logout = ' <div class="col-2 "style="font-size:20px;text-align: center;"> <a href="http://localhost/2170/a2/add_entry.php">Create Entry</a> </div>
                <div class="col-1"style="font-size:20px;text-align: center;"><a href="http://localhost/2170/a2/account_settings.php">Preferences</a></div>
                <div class="col-1"style="font-size:20px;text-align: center;"><a href="http://localhost/2170/a2/entries.php">Entries</a></div>
                <div class="col-2"style="font-size:20px;text-align: center;"><a href="includes/logout.php">Logout (' . $_SESSION["username"] .')</a></div>';
                echo $logout;
            }
            ?>
            
        </div>
    </head>
    <body style="background-color:#2222; ; width:100%;">
        <main>

        
    
    

        
    
