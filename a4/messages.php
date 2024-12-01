<?php
// Index functionality
include "includes/config.php";
include "templates/header.php";
?>

<body>
    <div class="container mt-4 " style="background-color:#fff;height:100%; ">
        <div class="row" style="height:80%; background-color:#bab8b9; border-style:solid;">
            <div class="container" style="width:70%; background-color:#fff; border-style:solid;">
                            
                <div class=" container" style="background-color:#fff; border-style:solid; height: 800px;  ">
                    <div class="col-3 mt-2" style="background-color:#bab8b9; height:300px; width:380px; text-align:left">
                    <h3>MESSAGES</h3>
                        <form action="includes/register_processing.php" method="post">
                        <label for="user-target">User to message</label>
                        <input type="text" name="user-target" id="user-target" required style="margin-left:50px;width:150px; borderstyle:solid; border-radius: 5px;"><br>
                        <label for="message">message</label>
                        <textarea name="message" id="message" required style="margin-left:100px; width:200px;"></textarea><br>
                        <input type="submit" value="register" name="submit" i="i-submit">
                        </form>
                    </div>
                </div>

          </div>
        </div>
    </div>
</body>