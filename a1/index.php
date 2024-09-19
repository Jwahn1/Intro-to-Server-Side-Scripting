<!doctype html>
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
    <div class="container mt-4 " style="background-color:#fff; height:900px;">
      <?php include 'includes/header.php'; ?>
       <div class="row" style="height:80%; background-color:#bab8b9; border-style:solid;">
          <div class="container" style="width:70%; background-color:#fff; border-style:solid;">
          <p>inner white text paragraph</p>
              <div class="row" style="height:150px;  border-style:none;">
                <div class="col-8" style="background-color:#fff; border-style:none;overflow-wrap: break-word; ">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 </p>                                  
                  
                  <a href="info.php">more info here!</a>
                </div>
                
                <div class="col-3" style="background-color:#bab8b9;">
                <form action="" get="get">
                    <label for="i-keywords">User Login</label>
                    <input type="text" name="username" id="username" required style="width:150px; borderstyle:solid; border-radius: 5px;">
                    <input type="text" name="password" id="password" required style="width:150px; borderstyle:solid; border-radius: 5px;">
                    <input type="submit" value="login" name="submit" i="i-submit">
                  </form>
                </div>
              
            <div class="row mt-3">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
              </p>
            </div>
            <div class="row ml-4" style="background-color:#000202; width:90%;">
               <h4 style="color :#fff">
                  File read task 1 (give appropriate heading)
               </h4>
            </div>
            <div class="row">
              <div class="col-6 ml-4 mt-2" style="overflow-wrap: break-word; border-style:none;background-color:#c7dbf7"> 
                <h5>The text from the File read task 1 on
                Brightspace must be displayed here.</h5>
              </div>
              <div class="col-5 ml-2 mt-2" style="overflow-wrap: break-word; border-style:none;background-color:#c7dbf7"> 
                <p>img here</p>
              </div>
            </div>
            <div class="row ml-4 mt-4" style="background-color:#000202; width:90%;">
               <h4 style="color :#fff">
                  File read task 2 (give appropriate heading)
               </h4>
            </div>
            <div class="row">
              <div class="col-6 ml-4 mt-2" style="overflow-wrap: break-word; border-style:none;background-color:#c7dbf7"> 
                <h5>The text from the File read task 2 on
                Brightspace must be displayed here.</h5>
              </div>
              <div class="col-5 ml-2 mt-2" style="overflow-wrap: break-word; border-style:none;background-color:#c7dbf7"> 
                <p>img here</p>
              </div>
            </div>
          </div>
       </div>
    </div>
  </body>
  <?php include 'includes/footer.php'; ?>
</html>
