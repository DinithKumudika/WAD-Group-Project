<?php
  $errors = [
    'fname'=>'',
    'lname'=>'',
    'email'=>'',
    'gender'=>'',
    'phone'=>'',
    'password'=>'',
  ];

  // include ('../db/connection.php');

  if (isset($_POST['signup'])) {
    $firstName = htmlspecialchars($_POST['f-name']);
    $lastName = htmlspecialchars($_POST['l-name']);
    $email = htmlspecialchars($_POST['e-mail']);
    $gender = htmlspecialchars($_POST['gender']);
    $phoneNo = htmlspecialchars($_POST['phone']);
    $password = htmlspecialchars($_POST['password']);
    $encrypted_password = sha1($password);
    $fullName = $firstName . ' ' . $lastName;

    $verificationCode = sha1($email . time());
    $verificationURL = 'http://localhost/WAD/models/verification.php?code=' . $verificationCode;

    $to = $email;
    $sender = 'hiremelkofficial@gmail.com';
    $subject = '<b>Verify your account on hire me!</b>';
    $body = '<h3>Dear ' . $fullName . ',</h3>
      <br>
      <p>Thank you for joining with us. Please click the below link to verify your email address to activate the account</p>
      <br>
      <p>' . $verificationURL . '</p>
      <p>Thank you,
      <br>
      HireMe.lk
      </p>
    ';
    $header = "From: {$sender}\r\n" .
              "Content-Type: text/html\r\n";

    $mail_sent = mail($to, $subject,$body, $header);
    if ($mail_sent==true) {

    } 
    else {
    }

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
?>