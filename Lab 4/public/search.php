<?php
include('../includes/header.php');
/*
    CSCI 2170: Introduction to Server-Side Scripting
    (Fall Semester 2024)
    Lab 4 (search.php)
*/

// Handle the search query


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
        <?php if (!empty($characters)): ?>
            <?php
            // Loop through the $characters array and display the character data in the table.
            ?>
            <tr>
                <td><?= htmlspecialchars($character['name']) ?></td>
                <!-- Display other fields here -->
            </tr>
            <?php ?>
        <?php elseif ($search_query): ?>
            <tr>
                <td colspan="4" class="text-center">No characters found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<a href="index.php" class="btn btn-secondary">Back to All Characters</a>

<?php include('../includes/footer.php'); ?>