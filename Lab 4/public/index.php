<?php
include('../includes/header.php');

/*
    CSCI 2170: Introduction to Server-Side Scripting
    (Fall Semester 2024)
    Lab 4 (index.php)
*/


// Base URL for the SWAPI API
$api_url = "ENTER YOUR API URL HERE";

try {
    // Fetch the data from the SWAPI API


} catch (Exception $e) {
    echo "Error fetching data: " . $e->getMessage();
    $characters = [];
}
?>

<h1>Star Wars Characters</h1>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Height</th>
            <th>Mass</th>
            <th>Birth Year</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($characters)): ?>
            <?php
            // Loop through the $characters array and display the character data in the table.
            ?>
            <tr>
                <td><?= htmlspecialchars($character['name']) ?></td>
                <!-- Other fields go here -->
            </tr>
            <?php ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">No data available</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<a href="search.php" class="btn btn-primary">Search Characters</a>

<?php include('../includes/footer.php'); ?>