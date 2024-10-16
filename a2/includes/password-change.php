<?php
session_start();
$newPassword = $_POST["newPassword"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];
$database = fopen("../database/users.csv","r+");
$counter = 0;
$data;
$location = 0;
$changePassword = false;
//only start script if the inputted the confirm password correctly
if($newPassword = $confirmPassword){
    //find where the old password is

while ($storeUser = fgetcsv($database)) {
    if(password_verify( $password ,$storeUser[1])) {
        //having found the user we want to change the password in that line 
        //and implode it so we can overwrite it later.
        $storeUser[1] =  password_hash($newPassword, PASSWORD_DEFAULT);;
        $data = implode(",",$storeUser);
        //we store 
        $location = $counter;
        $changePassword = true;
    }
   $counter++;
}

//if the password wasn't found show error
if(!$changePassword){
 echo 'the password is incorrect, please try again';
 exit();
}

//restart file so we can get to the line we want to change
fclose($database);
$database = fopen("../database/users.csv","r+");

//replace the old password name with the new one
for($i = 0 ; $i<$location; $i++){
    fgetcsv($database);
}

fwrite($database,$data);

fclose($database);

}else{
    echo 'Please re-enter your new password';
}

header('location:http://localhost/2170/a2/account_settings.php');
exit();

?>