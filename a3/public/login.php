<?php
/*
    CSCI 2170: Introduction to Server-Side Scripting
    (Fall Semester 2024)
    Assignment 3 (login.php)
*/
    
    include('../includes/header.php');

// Check if user is already logged in


?>

<h2 class="text-center">Login</h2>
<div class="row justify-content-center mt-4">
    <div class="col-md-4">
        <form action="../includes/login.php"  method="POST" >
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <?php if (isset($error)): ?>
                <p class="text-danger"><?php echo $error; ?></p>
            <?php endif; ?>
            <button type="submit" class="btn btn-warning text-black">Login</button>
        </form>
    </div>
</div>

<?php
    include('../includes/footer.php');
?>