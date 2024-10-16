<?php
session_start();
$newUsername = $_POST["newUsername"];
$currentUsername = $_SESSION["username"];
$database = fopen("../database/users.csv","r+");
$data;
$location = 0;


//find where the old user name is

while ($storeUser = fgetcsv($database)) {
    if($storeUser[0] == $currentUsername ) {
        //having found the user we want to change the username in that line 
        //and implode it so we can overwrite it later.
        $storeUser[0] = $newUsername;
        $data = implode(",",$storeUser);
        //we store 
        $location = $counter;
    }
   $counter++;
}

//restart file so we can get to the line we want to change
fclose($database);
$database = fopen("../database/users.csv","r+");

//replace the old user name with the new one
for($i = 0 ; $i<$location; $i++){
    fgetcsv($database);
}

fwrite($database,$data);



fclose($database);
//update session user
$_SESSION["username"] = $newUsername;
header('location:http://localhost/2170/a2/account_settings.php');
    exit();
?>