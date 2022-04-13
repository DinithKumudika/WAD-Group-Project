<?php

// $errors = [
//   'empty' => '',
//   'email' => '',
//   'phone' => '',
//   'uid' => '',
//   'pwd' => '',
//   'email_taken' => '',
//   'uid_taken' => ''
// ];

// if(isset($_GET['error'])){
//   $error = $_GET['error'];
//   if($error === "empty"){
//     $errors['empty'] = 'all the fields are required';
//   }
//   else if($error === "email"){
//     $errors['email'] = 'invalid email';
//   }
//   else if($error === "phone"){
//     $errors['phone'] = 'invalid phone no';
//   }
//   else if($error === "uid"){
//     $errors['uid'] = 'username must include at least one uppercase letter, one lowercase letter, one digit and between 5-32 characters';
    
//   }
//   else if($error === "pwd"){
//     $errors['pwd'] = 'password must contain at least one uppercaseletter, one lowercase letter,one digit,one special character and between 8-32 characters';
//   }
//   else if($error === "emailexist"){
//     $errors['email_taken'] = 'this email is already taken';
//   }
//   else if($error === "uidexist"){
//     $errors['uid_taken'] = 'this username is already taken';
//   }
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up | Hireme</title>
  <link rel="stylesheet" href="../public/css/signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
  <div class="wrapper">
    <h1>Sign up</h1>
    <div class="signup-opt">
      <a href="regular_signup.php"><button class="signup-opt-btn" value="applicant">For Applicants</button></a>
      <a href="emp_signup.php"><button class="signup-opt-btn active" value="employer">For Employers</button></a>
    </div>
    <form action="../includes/applicant_signup_inc.php" method="post">
      <?php
        if(isset($_GET['fname'])){
          echo '<input type="text" placeholder="First name" class="form-input" name="f-name" id="f-name" value='.$_GET['fname'].'>';
        }
        else{
          echo '<input type="text" placeholder="First name" class="form-input" name="f-name" id="f-name">';
        }
      ?>
      <?php
        if(isset($_GET['lname'])){
          echo '<input type="text" placeholder="Last name" class="form-input" name="l-name" id="l-name" value='.$_GET['lname'].'>';
        }
        else{
          echo '<input type="text" placeholder="Last name" class="form-input" name="l-name" id="l-name">';
        }
      ?>
      <?php
        if(isset($_GET['email'])){
          echo '<input type="email" placeholder="E-mail" class="form-input" name="e-mail" id="e-mail" value='.$_GET['email'].'>';
        }
        else{
          echo '<input type="email" placeholder="E-mail" class="form-input" name="e-mail" id="e-mail">';
        }
      ?>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="email"){
            echo '<p style="color: red; font-size:15px">invalid email</p>';
          }
          if($_GET['error']=="emailexist"){
            echo '<p style="color: red; font-size:15px">this email is already taken</p>';
          }
        }
      ?>
      <!-- <p style="color: red; font-size:15px"><?php //$errors['email'] ?></p>
      <p style="color: red; font-size:15px"><?php //$errors['email_taken'] ?></p> -->
      <?php
        if(isset($_GET['phone'])){
          echo '<input type="text" placeholder="Phone no" class="form-input" name="phone" id="phone" value='.$_GET['phone'].'>';
        }
        else{
          echo '<input type="text" placeholder="Phone no" class="form-input" name="phone" id="phone">';
        }
      ?>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="phone"){
            echo '<p style="color: red; font-size:15px">invalid phone no</p>';
          }  
        }
      ?>
      <!-- <p style="color: red; font-size:15px"><?php //$errors['phone'] ?></p> -->
      <?php
        if(isset($_GET['uid'])){
          echo '<input type="text" placeholder="Username" class="form-input" name="username" id="username" value='.$_GET['uid'].'>';
        }
        else{
          echo '<input type="text" placeholder="Username" class="form-input" name="username" id="username">';
        }
      ?>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="uid"){
            echo '<p style="color: red; font-size:15px">username must include at least one uppercase letter, one lowercase letter, one digit and between 5-32 characters</p>';
          }
          if($_GET['error']=="uidexist"){
            echo '<p style="color: red; font-size:15px">this username is already taken</p>';
          }
        }
      ?>
      <input type="password" placeholder="Password" class="form-input" name="password" id="password">
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="pwd"){
            echo '<p style="color: red; font-size:15px">password must contain at least one uppercaseletter, one lowercase letter,one digit,one special character and between 8-32 characters</p>';
          }  
        }
      ?>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="empty"){
            echo '<p style="color: red; font-size:15px">all fields are required</p>';
          }  
        }
      ?>
    <input type="submit" value="Sign up" class="button" name="signup">
    </form> 
    <div class="not-member">
      Already a member? <a href="login.php">Log in</a>
    </div>
  </div>
</body>
</html>