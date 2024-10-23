<?php
include('../includes/header.php');

/*
    CSCI 2170: Introduction to Server-Side Scripting
    (Fall Semester 2024)
    Lab 4 (index.php)
*/

// Base URL for the SWAPI API
$api_url = "https://swapi.dev/api/";

try {
    // Fetch data from the SWAPI 
    $response = file_get_contents($api_url . "people");

    $characters = json_decode($response, true)['results'];

} catch (Exception $e) {

    echo "Error fetching data: " . $e->getMessage();
    $characters = [];
}
?>

<h1>Star Wars Characters</h1>

<!-- Display the data in a table -->
<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
        <th>Height</th>
        <th>Mass</th>
        <th>Birth Year</th>
    </tr>

    <!--write the for loop displaying characters here -->
    <?php if (!empty($characters)): ?>
        <?php foreach ($characters as $character): ?>
            <tr>
                <td><?= $character['name'] ?></td>
                <td><?= $character['height'] ?></td>
                <td><?= $character['mass'] ?></td>
                <td><?= $character['birth_year'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4" class="text-center">No data available</td>
        </tr>
    <?php endif; ?>

</table>

<a href="search.php" class="btn btn-primary">Search Characters</a>

<?php include('../includes/footer.php'); ?>