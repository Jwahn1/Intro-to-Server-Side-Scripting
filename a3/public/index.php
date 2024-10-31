<?php
/*
    CSCI 2170: Introduction to Server-Side Scripting
    (Fall Semester 2024)
    Assignment 3 (index.php)
*/

    include('../includes/header.php');
?>

<main class="container">
    <h1 class="mb-4">Available Courses</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="bg-light">
                <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Instructor</th>
                    <th>Schedule</th>
                    <th>Add to Schedule</th>
                </tr>
            </thead>
            <tbody id="course-table">
                <!-- Data to be dynamically populated here using Fetch -->
            </tbody>
        </table>
    </div>
</main>

<script>
    // Fetch JSON data and display in the table

</script>


<?php
    include('../includes/footer.php');
?>