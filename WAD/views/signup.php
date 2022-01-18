<?php
 
  $errors = [
    'fname'=>'',
    'lname'=>'',
    'email'=>'',
    'gender'=>'',
    'phone'=>'',
    'password'=>'',
  ];

  $mail_notification = [
    'successfull'=>'',
    'failed'=>''
  ];

  include './db/db_connect.php';

  if (isset($_POST['signup'])) {
    $firstName = mysqli_real_escape_string($conn,htmlspecialchars($_POST['f-name']));
    $lastName = mysqli_real_escape_string($conn,htmlspecialchars($_POST['l-name']));
    $email = mysqli_real_escape_string($conn,htmlspecialchars($_POST['e-mail'])) ;
    $gender = mysqli_real_escape_string($conn,htmlspecialchars($_POST['gender']));
    $phoneNo = mysqli_real_escape_string($conn,htmlspecialchars($_POST['phone']));
    $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));
    $encrypted_password = sha1($password);
    $fullName = $firstName . ' ' . $lastName;

    if(empty($firstname)||empty($lastName)||!filter_var($email, FILTER_VALIDATE_EMAIL)||empty($gender)||empty($phoneNo)||empty($password)){
      if (empty($firstname)) {
        $errors['fname'] = "First name is required";
      }
  
      if(empty($lastName)){
        $errors['lname'] = "Last name is required";
      }
  
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Valid email is required";
      }
  
      if(empty($gender)){
        $errors['gender'] = "Gender is requierd";
      }
  
      if(empty($phoneNo)){
        $errors['phone'] = "Phone number is required";
      }
  
      if(empty($password)){
        $errors['password'] = "Password is required";
      }
    }
    else{
      $verificationCode = sha1($email . time());
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
      $header = "From: {$sender}\r\n" .
                "Content-Type: text/html\r\n";

      $mail_sent = mail($to, $subject,$body, $header);
      if ($mail_sent) {
        $mail_notification['successfull'] = 'Email sent, check your emails';
      } 
      else {
        $mail_notification['failure'] = 'Email cannot be sent';
      }
    }
    if(!array_filter($errors)){
      header('Location: login.php');
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
    <h1 class="heading">Join with us and shape your future</h1>
    <form action="./signup.php" method="post">
        <div class="signup-container">
            <div class="signup-img">
                <img src="../public/assets/images/signup.png" alt="signup">
            </div>
            <div class="form-container">
                <h1 class="login-text">SignUp</h1>
                <label for="f-name">First Name:</label>
                <input type="text" name="f-name" id="f-name" class="input-box">
                <div class="red"><?php echo "*".$errors['fname'];?></div>

                <label for="l-name">Last Name:</label>
                <input type="text" name="l-name" id="l-name" class="input-box">
                <div class="red"><?php echo "*".$errors['lname'];?></div>

                <label for="l-name">E-mail:</label>
                <input type="email" name="e-mail" id="e-mail" class="input-box">
                <div class="red"><?php echo "*".$errors['email'];?></div>

                <div class="sub-container-1">
                    <label for="">Gender:</label>
                    <label for="gender">Male</label><input type="radio" name="gender" id="male" class="gender-radio" value="M">
                    <label for="gender">Female</label><input type="radio" name="gender" id="female" class="gender-radio" value="F">
                </div>
                <div class="red"><?php echo "*".$errors['gender'];?></div>

                <label for="phone">Phone no:</label>
                <input type="text" name="phone" id="phone" class="input-box">
                <div class="red"><?php echo "*".$errors['phone'];?></div>

                <label for="create-pwd">Password:</label>
                <input type="password" name="password" id="password" class="input-box">
                <div class="red"><?php echo "*".+$errors['password'];?></div>

                <input type="submit" value="Sign Up" class="login-btn" name="signup">
                <div class="sub-container-3">
                    <p>Already a member? <a href="login.php">Log In</a></p>
                </div>
            </div>
        </div>
    </form>
    <script>
        
    </script>
</body>
</html>