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
    document.addEventListener("DOMContentLoaded", function() {
        fetch('../files/timetable.json')
            .then(response => response.json())
            .then(data => {
                let tableBody = document.getElementById("course-table");
                data.forEach(course => {
                    let row = document.createElement("tr");

                    row.innerHTML = `
                        <td>${course.course_code}</td>
                        <td>${course.course_name}</td>
                        <td>${course.instructor}</td>
                        <td>${course.schedule}</td>
                        <td><button class="btn btn-primary">Add to Schedule</button></td>
                    `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error("Error loading data:", error));
    });
</script>


<?php
    include('../includes/footer.php');
?>