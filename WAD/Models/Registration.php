<?php
  if(isset($_POST['signup'])){
      $firstName = htmlspecialchars($_POST['f-name']);
      $lastName = htmlspecialchars($_POST['l-name']);
      $email = htmlspecialchars($_POST['e-mail']);
      $gender = htmlspecialchars($_POST['gender']);
      $phoneNo = htmlspecialchars($_POST['phone']);
      $password = htmlspecialchars($_POST['password']);

      if(empty($firstname) ||empty($firstname) || empty($firstname) || empty($firstname) || empty($firstname) || empty($firstname) || empty($firstname)){
          
      }
      else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          //echo "Email is not valid";
      }
  }
?>