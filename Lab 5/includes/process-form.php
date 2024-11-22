<?php

/*
    Sanitize all inputs to prevent XSS attacks by using htmlspecialchars() or filter_var() where appropriate.
    Why this matters: Server-side validation ensures the security and integrity of data sent to the backend.
*/

$firstName = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$emailVerify = filter_input(INPUT_POST, 'email-verify', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$passwordVerify = filter_input(INPUT_POST, 'password-verify', FILTER_SANITIZE_STRING);
$dateOfBirth = filter_input(INPUT_POST, 'date-of-birth', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);


$pattern = "/[^A-z]/i";
//Ensure the input contains only alphabetical characters (letters) and is not empty.
if((preg_match($pattern,$firstName)) ){
    echo "names must only alphabetical characters (letters) and be not empty";
}
if((preg_match($pattern,$lastName)) ){
    echo "names must only alphabetical characters (letters) and be not empty";
}
//Validate that the email contains a valid structure (e.g., username, "@" symbol, domain, and extension like ".com" or ending with subdomains like "cs.dal.ca").
$pattern = "/[A-Za-z]+@[A-Za-z]+\.[A-Za-z]{2}/i";
if(!(preg_match($pattern,$email)) ){
    echo "email must be formated correctly";
}
//Verify that both email fields that are sent match.
if($email != $emailVerify){
    "emails do not match";
}

//Check that the phone number is exactly 10 digits, contains only numbers, it should have the country code with a + to begin.
$pattern = "/\+[0-9]{10}/i";
if(!(preg_match($pattern,$phone))){
    echo "phone number must be formated correctly";
}

/*
    At least 8 characters long.
    Includes at least one letter.
    Includes at least one number.
    Includes at least one special character (e.g., !, @, $, %).
*/

//look ahead for atleast one of each of the specified conditions and then check if its of atleast length 8
//note for reiew ?= indicates to look ahead into the string, and .* before the condition means that any character can be before the one we're looking for
$pattern = "/(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@$%])[A-Za-z\d!@$%]{8,}/i";
if(!(preg_match($pattern,subject: $password))){
    echo "password must be formated properly";
}

if($password != $passwordVerify){
    echo "the passwords dont match";
}



?>