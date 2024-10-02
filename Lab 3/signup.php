
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
<form action="includes/signup-processing.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Passowrd:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit" id="i-submit" name="message-submit">Submit</button>
</form>
</body>
</html>