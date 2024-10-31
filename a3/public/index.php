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
                <?php
                    try {
                    
                        $response = file_get_contents("http://localhost/2170/a3/files/timetable.json");

                        $timetable = json_decode($response, true);
                        


                    } catch (Exception $e) {

                        echo "Error fetching data: " . $e->getMessage();
                        $timetable = [];
                    }
                    ?>
                <?php foreach ($timetable as $class): ?>
                    <tr>
                        <td><?= $class['course_code'] ?></td>
                        <td><?= $class['course_name'] ?></td>
                        <td><?= $class['schedule'] ?></td>
                        <td><?= $class['instructor'] ?></td>
                        <td><button>Add to Schedule</button></td>
                    </tr><br>
                 <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>


<?php
    include('../includes/footer.php');
?>