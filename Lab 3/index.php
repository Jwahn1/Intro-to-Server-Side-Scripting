<?php
    /**
     * CSCI 2170: Intro to Server-Side Scripting (Fall 2024)
     * Lab 2 Solution
     * If you wish to use this solution as a starting point for Lab 3,
     * retain this comment block, and include a citation in readme.md saying
     * that you are using the solution.
     */
?>
<?php include './includes/header.php'; ?>

<main>
    <p>This is a form for inquiring about products in Tantallon</p>

    <aside>
        <form action="includes/form-processing.php" method="POST">
            <label for="i-name">Name:</label>
            <input type="text" id="i-name" name="user-name" required><br>

            <label for="i-email">Email:</label>
            <input type="email" id="i-email" name="user-email" required><br>

            <label for="i-message">Message:</label>
            <textarea id="i-message" name="user-message" required></textarea><br>

            <label for="i-category">Product Category:</label>
            <input type="text" id="i-category" name="product-category" required><br>

            <button type="submit" id="i-submit" name="message-submit">Submit</button>
        </form>
    </aside>

    <?php 
    //displays if a user has logged on before coming to index 
        if(!isset($_COOKIE["email"])){
            echo "Welcome, " . $_COOKIE['user'];
        }else{
            echo "<br>
            <a href='http://localhost/2170/Lab%203/login.php'>Log in </a>
            <br>
            <a href='http://localhost/2170/Lab%203/signup.php'>Sign up</a>
            ";
        }
    ?>
</main>

<?php include './includes/footer.php'; ?>