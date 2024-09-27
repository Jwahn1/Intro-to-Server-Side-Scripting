<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/boostrap-grid.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>
<body>

<div class="container mt-4 mb-4 " style="background-color:#fff; height:900px;">
    <?php include 'includes/header.php';?>
    <div class="row" style="height:75%; background-color:#bab8b9; border-style:solid;">
        <div class="container" style="width:70%; background-color:#fff; border-style:solid;">
            <div class="row" style="height 100%;">
            <?php include 'files/citation.txt' ?>
            </div>
        </div>
    </div>
</div>

    
</body>
<div class="container" >
    <?php include 'includes/footer.php';?>
</div>
</html>