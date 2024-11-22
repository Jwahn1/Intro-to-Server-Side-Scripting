/*
 * CSCI 2170: Intro to Server-Side Scripting (Fall 2024)
 *
 * Starting code for Lab 5
 */
document.addEventListener("DOMContentLoaded", function () {
   

    document.getElementById("registration-form").addEventListener("submit", function (event) {
        let isValid = true;

        // First Name and Last Name validation
        const firstName = document.getElementById("fn-input").value;
        const lastName = document.getElementById("ln-input").value;
        const nameRegex = /[^A-z]/i;

        if (nameRegex.test(firstName)) {
            alert("First Name must contain only letters and cannot be empty.");
            isValid = false;
        }
        if (nameRegex.test(lastName)) {
            alert("Last Name must contain only letters and cannot be empty.");
            isValid = false;
        }

        // Email validation
        const email = document.getElementById("email-input").value;
        const emailVerify = document.getElementById("email-verify").value;
        const emailRegex = /[A-Za-z]+@[A-Za-z]+\.[A-Za-z]{2}/i;

        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            isValid = false;
        }
        if (email !== emailVerify) {
            alert("Emails dont match");
            isValid = false;
        }

        // Phone Number validation
        const phone = document.getElementById("phone-input").value;
        const phoneRegex = /\+[0-9]{10}/i;

        if (!phoneRegex.test(phone)) {
            alert("Phone number must be exactly 10 digits and start with a +.");
            isValid = false;
        }

        // Password validation
        const password = document.getElementById("password-input").value;
        const passwordVerify = document.getElementById("password-verify").value;
        const passwordRegex = /(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@$%])[A-Za-z\d!@$%]{8,}/i;

        if (!passwordRegex.test(password)) {
            alert(
                "Password must be at least 8 characters long, contain at least one letter, one number, and one special character."
            );
            isValid = false;
        }
        if (password !== passwordVerify) {
            alert("Passwords do not match.");
            isValid = false;
        }

        // prevent form submission
        if (!isValid) {
            event.preventDefault();
        }
    });
});