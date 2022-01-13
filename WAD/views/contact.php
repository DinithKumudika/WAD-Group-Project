<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contact</title>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/contact.css">
     <link rel="stylesheet" href="../public/css/footer.css">
</head>

<body>
     <?php include('./header.php'); ?>
     <div class="title-container">
     <h2 class="title">Get in touch with us</h2>
     </div>
     <form action="" method="post">
          <div>

               <label for="first-name">Full Name</label>
               <br>
               <input type="text" name="firstname" class="input-box name">

          </div>
          <div>
               <label for="email">E-mail</label>
               <br>
               <input type="email" name="email" id="email" class="input-box">
          </div>
          <div>
               <label for="subject">Subject</label>
               <br>
               <input type="text" name="subject" id="" class="input-box">
          </div>
          <div>
               <label for="message">Message</label>
               <br>
               <textarea name="message" id="" cols="50" rows="10" class="message"></textarea>
          </div>
          <div>
               <input type="submit" value="send" name="sendmessage" class="btn">
               <input type="reset" value="reset" name="reset" class="btn">
          </div>
     </form>
     <?php include('./footer.php'); ?>
     <script src="../public/js/header.js"></script>
</body>

</html>