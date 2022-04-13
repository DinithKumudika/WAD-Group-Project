<?php
     include('../includes/contact_inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contact</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
     <div class="container">
          <form action="../includes/contact_inc.php" method="post">
               <div>
                    <label for="full-name">Full Name</label>
                    <br>
                    <input type="text" name="full-name" class="input-box name">
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
               <p style="color: red;"><?php echo $error;?></p>
               <div>
                    <input type="submit" value="Send Message" name="sendmessage" class="btn">
               </div>

               <div><?php echo $mail_status; ?></div>

          </form>
          <div class="contact-container">
               <div class="contact-media">
                    <div><i class="fa-brands fa-facebook"></i><p>Facebook</p></div>
                    <div><i class="fa-brands fa-twitter"></i><p>Twitter</p></div>
                    <div><i class="fa-brands fa-linkedin"></i><p>Linked In</p></div>
                    <div><i class="fa-brands fa-whatsapp-square"></i><p>Whatsapp</p></div>
                    <div><i class="fa-solid fa-phone"></i><p>+94 71 222 3456</p></div>
               </div>
          </div>
     </div>
     <script src="../public/js/header.js"></script>
</body>

</html>