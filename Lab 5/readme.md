# CSCI 2170: Intro to Server-Side Scripting

**_Lab 5 - Regular Expressions and Form Validation_**

## Student Information

- **Name**: [Javier Wahn]
- **Student ID**: [B009345618]
- **Date Created**: [11/22/2024]

## Overview

Describe your regex validation and experience here - in about 250 words, i.e., how does it work? How do the TAs/markers test your application?
The way regex works is through creating a set of parameters that a string must satisfy, for example the regex for "[0-9]" would return true if the given string contains any number from 0 to 9 i.e "username3" contains a number and so satisfies the parameters outlined in the previous regex. 

To test my application of regex for registration validation we can break it down to a few scenarios:

1. type into the form inputs that  satisfy the requirements as outlined in the lab instructions
2. type into the form inputs tghat that fail to meet the requirements as outlines
3. to check in the server side, repeat step 1 and 2 by changing the variable values in the code manually to the desired outcome to see if my code can catch wether the input can be caught even if the user bypasses the client side regex checks.
## Advantages of Using Regex for Validation

Write a short paragraph explaining why regex is effective for form validation.
The effectiviness of reges is due to how many parameters can be added and validated trough a simple regex string where as if we wanted to check say:
    At least 8 characters long.
    Includes at least one letter.
    Includes at least one number.
    Includes at least one special character (e.g., !, @, $, %).
we would need to do first check the length of the string, then check every single character of the string to check if atleast one is a letter of the alphabet uppercase or lowercase,
repeat that again to check for every number between 0 and 9 and then again with the special characters we allow. In short its a very long and irritating process where as with regex its compressed down to 1 expression that php can just compare to : "/(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@$%])[A-Za-z\d!@$%]{8,}/i"

## Citations

1.https://www.w3schools.com/php/php_regex.asp

