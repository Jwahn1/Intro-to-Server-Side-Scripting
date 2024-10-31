<?php
/*
    CSCI 2170: Introduction to Server-Side Scripting
    (Fall Semester 2024)
    Assignment 3 (dashboard.php)
*/

    include('../includes/header.php');
  
    if (!isset($_SESSION['user_id'])) {
        // Redirect to login page if user is not logged in
    }
?>

<h2 class="text-center text-danger">My Schedule</h2>

<div id="schedule"></div>

<script>
    // Fetch user schedule asynchronously

</script>

<?php
    include('../includes/footer.php');
?>