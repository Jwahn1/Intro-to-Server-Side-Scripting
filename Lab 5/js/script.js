/*
 * CSCI 2170: Intro to Server-Side Scripting (Fall 2024)
 *
 * Starting code for Lab 5
 */
document.addEventListener("DOMContentLoaded", function () {
   

    document.getElementById("registration-form").addEventListener("submit", function (event) {
        let formIsCorrect = true;

        
        const firstName = document.getElementById("fn-input").value;
        const lastName = document.getElementById("ln-input").value;
        const nameRegex = /[^A-z]/i;
        
        const email = document.getElementById("email-input").value;
        const emailVerify = document.getElementById("email-verify").value;
        const emailRegex = /[A-Za-z]+@[A-Za-z]+\.[A-Za-z]{2}/i;

        const phone = document.getElementById("phone-input").value;
        const phoneRegex = /\+[0-9]{10}/i;

        const password = document.getElementById("password-input").value;
        const passwordVerify = document.getElementById("password-verify").value;
        const passwordRegex = /(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@$%])[A-Za-z\d!@$%]{8,}/i;

        // First Name and Last Name validation
        if (nameRegex.test(firstName)) {
            alert("First Name must contain only letters and cannot be empty.");
            formIsCorrect = false;
        }
        if (nameRegex.test(lastName)) {
            alert("Last Name must contain only letters and cannot be empty.");
            formIsCorrect = false;
        }

        // Email validation

        if (!emailRegex.test(email)) {
            alert("The email is not valid");
            formIsCorrect = false;
        }
        if (email !== emailVerify) {
            alert("Emails dont match");
            formIsCorrect = false;
        }

        // Phone Number validation

        if (!phoneRegex.test(phone)) {
            alert("Phone number must be exactly 10 digits and start with a +.");
            formIsCorrect = false;
        }

        // Password validation

        if (!passwordRegex.test(password)) {
            alert(
                "Password must have atleast 1 letter, 1 number and a special character while being atleast 8 characters long"
            );
            formIsCorrect = false;
        }
        if (password !== passwordVerify) {
            alert("Passwords do not match.");
            formIsCorrect = false;
        }

        // prevent form submission
        if (!formIsCorrect) {
            event.preventDefault();
        }
    });
});