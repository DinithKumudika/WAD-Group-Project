<?php
include('config/root.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>404</title>
     <link rel="stylesheet" href="public/css/404.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
     <div class="container">
          <div>
               <img src="public/assets/images/404.png" alt="404" class="404-img">
          </div>
          <div class="text">
               <h1>PAGE NOT FOUND</h1> 
          </div>
          <div>
               <a href="<?php ROOT ?>views/home.php"><button class="btn">HOME</button></a>
          </div>
     </div>
</body>

</html>