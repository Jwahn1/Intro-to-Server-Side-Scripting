
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
<form action="includes/signup-processing.php" method="POST">
    <label for="i-email">Email:</label>
    <input type="email" name="email" required>
    <label for="i-password">Password:</label>
    <input type="password" name="password" required>
    <button type="submit" id="i-submit" name="signup-submit">Submit</button>
</form>
</body>
</html>