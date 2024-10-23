<?php
include('../includes/header.php');
/*
    CSCI 2170: Introduction to Server-Side Scripting
    (Fall Semester 2024)
    Lab 4 (search.php)
*/

// Handle the search query

$characters;

if(array_key_exists("query",$_GET)){
    $api_url = "https://swapi.dev/api/people/?search=" . $_GET["query"];
    $response = file_get_contents($api_url);

    $characters = json_decode($response, true)['results'];

}


?>

<h1>Search Star Wars Characters</h1>

<form method="GET" action="search.php" class="mb-4">
    <div class="input-group">
        <input type="text" name="query" class="form-control" placeholder="Enter character name" required>
        <button class="btn btn-primary" type="submit">Search</button>
    </div>
</form>

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

<a href="index.php" class="btn btn-secondary">Back to All Characters</a>

<?php include('../includes/footer.php'); ?>