<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if((array_key_exists("user-name",$_POST)) && 
        (array_key_exists("user-email",$_POST)) && 
        (array_key_exists("product-name",$_POST)) && 
        (array_key_exists("user-message",$_POST))){
            $name = $_POST["user-name"];
            $email = $_POST["user-email"];  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo"this email isnt valid";
            }
            $productOrService = $_POST["product-name"];
            $message = $_POST["user-message"];
            //make csv here
            $dataBase = fopen("../files/output.csv","w+");
            fwrite($dataBase,$name );
            fwrite($dataBase,",");
            fwrite($dataBase,$email );
            fwrite($dataBase,",");
            fwrite($dataBase,$productOrService );
            fwrite($dataBase,",");
            fwrite($dataBase,$message );

        }else{
            echo "<p>Oops, the form wasn't submitted right<p>";

        }

        while (($data= fgetcsv($dataBase)) !== FALSE) {
            echo $data[0];
            echo $data[1];
            echo $data[2];
            echo $data[3];
        }
        
 
    ?>
</body>
</html>