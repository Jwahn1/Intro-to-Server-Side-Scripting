<?php include "includes/header.php"?>
    <p>To tell you I'm sorry (status 304), I'm already cached. The content, that
     you have, has not changed on the server. Hello from the server-side...</p>

    <aside>
    <form action="includes/form-processing.php" method="post">
        <label for="i-name">username</label>
        <input type="text" id="i-name" name="user-name" required><br><br>
        <label for="i-email">Email</label>
        <input type="text" id="i-email" name="user-email" required><br><br>
        <label for="i-product">product or service name</label>
        <input type="text" id="i-product" name="product-name" required><br><br>
        <label for="i-message">Message</label>
        <input type="text" id="i-message" name="user-message" required  ><br><br>
        <input type="submit" value="Submit">
    </form> 
    </aside>
    <?php include "includes/footer.php"?>