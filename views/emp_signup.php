<?php
  include('../db/db_connect.php');
  include('../models/verification.php');
 
  $errors = [
    'fname'=>'',
    'lname'=>'',
    'email'=>'',
    'phone'=>'',
    'company'=>'',
    'username'=>'',
    'dup_username'=>'',
    'password'=>'',
  ];

  $mail_notification = [
    'successfull'=>'',
    'failed'=>''
  ];

  if (isset($_POST['signup'])) {
    $firstName = mysqli_real_escape_string($conn,htmlspecialchars($_POST['f-name']));
    $lastName = mysqli_real_escape_string($conn,htmlspecialchars($_POST['l-name']));
    $email = mysqli_real_escape_string($conn,htmlspecialchars($_POST['e-mail']));
    $phoneNo = mysqli_real_escape_string($conn,htmlspecialchars($_POST['phone']));
    $company = mysqli_real_escape_string($conn,htmlspecialchars($_POST['company']));
    $username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));
    $fullName = $firstName . ' ' . $lastName;

    $query1 = "SELECT `username` FROM applicant_reg WHERE `username`='$username' LIMIT 1";
    $result1 = mysqli_query($conn,$query1);

    if($result1){
      $errors['dup_username'] = "This username is already taken";
    }

    if(empty($firstname)||empty($lastName)||!filter_var($email, FILTER_VALIDATE_EMAIL)||empty($gender)||empty($phoneNo)||empty($company)||empty($username)||empty($password)){
      if (empty($firstName)) {
        $errors['fname'] = "*First name is required";
      }
  
      if(empty($lastName)){
        $errors['lname'] = "*Last name is required";
      }
  
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "*Valid email is required";
      }
  
      if(empty($phoneNo)){
        $errors['phone'] = "*Phone number is required";
      }

      if(empty($company)){
        $errors['comapny'] = "*Company name is required";
      }

      if(empty($username)){
        $errors['username'] = "*Username is required";
      }
  
      if(empty($password)){
        $errors['password'] = "*Password is required";
      }
    }
    else{
        $verificationCode = sha1($email . time());
        $query2 = "INSERT INTO emp_reg(`first_name`,`last_name`,`email`,`phone_no`,`company`,`username`,`password`,`verification_code`,`is_active`)
                  VALUES
                  ('{$firstName}','{$lastName}','{$email}','{$phoneNo}','{$company}','{$username}','{$password}','{$verificationCode}','false');
                ";
        $result2 = mysqli_query($conn,$query2);
        if($result2){
          $verificationURL = 'http://localhost/WAD/models/verification.php?verification_code=' . $verificationCode;
  
            $to = $email;
            $sender = 'hiremelkofficial@gmail.com';
            $subject = 'Verify your account on hire me!';
            $body = '<h3>Dear ' . $fullName . ',</h3>
              <br>
              <p>Thank you for joining with us. Please click the below link to verify your email address to activate the account</p>
              <br>
              <p>'.$verificationURL.'</p>
              <p>Thank you,
              <br>
              HireMe.lk
              </p>
            ';
            $header = "From: {$sender}\r\n
                      Content-Type: text/html\r\n";
      
            $mail_sent = mail($to, $subject,$body, $header);
            if ($mail_sent) {
              $mail_notification['successfull'] = 'Email sent, check your emails';
              header('Location: login.php');
            } 
            else {
              $mail_notification['failed'] = 'Email cannot be sent';
            }
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/signup.css">
    <title>Signup</title>
</head>
<body>
    <form action="emp_signup.php" method="post">
        <div class="signup-container">
            <div class="signup-img">
                <img src="../public/assets/images/signup.png" alt="signup">
            </div>
            <div class="form-container">
                <h1 class="login-text">SignUp</h1>
                <label for="f-name">First Name:</label>
                <input type="text" name="f-name" id="f-name" class="input-box">
                <div class="red"><?=$errors['fname'];?></div>

                <label for="l-name">Last Name:</label>
                <input type="text" name="l-name" id="l-name" class="input-box">
                <div class="red"><?=$errors['lname'];?></div>

                <label for="l-name">E-mail:</label>
                <input type="email" name="e-mail" id="e-mail" class="input-box">
                <div class="red"><?=$errors['email'];?></div>

                <label for="phone">Phone no:</label>
                <input type="text" name="phone" id="phone" class="input-box">
                <div class="red"><?=$errors['phone'];?></div>

                <label for="phone">Company name:</label>
                <input type="text" name="company" id="company" class="input-box">
                <div class="red"><?=$errors['company'];?></div>

                <label for="phone">Username:</label>
                <input type="text" name="username" id="username" class="input-box">
                <div class="red"><?=$errors['username'];?></div>
                <div class="red"><?=$errors['dup_username'];?></div>

                <label for="create-pwd">Password:</label>
                <input type="password" name="password" id="password" class="input-box">
                <div class="red"><?=$errors['password'];?></div>

                <input type="submit" value="Sign Up" class="login-btn" name="signup">
                <div class="sub-container-3">
                    <p>Already a member? <a href="login.php">Log In</a></p>
                </div>
            </div>
        </div>
    </form>
    <div>
      <p class="email-green email-notify"><?=$mail_notification['successfull'];?></p>
      <p class="email-red email-notify"><?=$mail_notification['failed'];?></p>
    </div>
    <script>
        
    </script>
</body>
</html>