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
            //prepare input for the csv file 
            $line = [$_POST['user-name'],$_POST['user-email'],$_POST['product-name'],$_POST['user-message']];
            
            //check if the email is valid
            if (!filter_var($_POST["user-email"], FILTER_VALIDATE_EMAIL)){
                echo"this email isnt valid";
            }
    

            //make csv here
            $dataBase = fopen("../files/output.csv","a");
            fputcsv($dataBase, $line);
            fclose($dataBase);

            $dataBase=  fopen("../files/output.csv","r");
            //print csv values here
            echo "you're form was submitted succsefully <br>" ;
           
            while (($clientInfo = fgetcsv($dataBase,0,",")) !== FALSE)
            {
                echo 'Name : ' . $clientInfo[0] . "," . " Email: " . $clientInfo[1] . "," . " Message : " .$clientInfo[3];
                echo "<br>";
            }

           
            
            fclose($dataBase);
            

        }else{
            echo "<p>Oops, the form wasn't submitted right<p>";

        }
       
 
    ?>
</body>
</html>