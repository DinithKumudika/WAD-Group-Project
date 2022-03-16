<?php
include('../db/db_connect.php');
include('../models/verification.php');

$errors = [
  'fname' => '',
  'lname' => '',
  'email' => '',
  'phone' => '',
  'username' => '',
  'password' => '',
];

$mail_notification = [
  'successfull' => '',
  'failed' => ''
];

if (isset($_POST['signup'])) {
  $firstName = mysqli_real_escape_string($conn, htmlspecialchars($_POST['f-name']));
  $lastName = mysqli_real_escape_string($conn, htmlspecialchars($_POST['l-name']));
  $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['e-mail']));
  $phoneNo = mysqli_real_escape_string($conn, htmlspecialchars($_POST['phone']));
  $username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
  $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));
  $fullName = $firstName . ' ' . $lastName;

  if (empty($firstname) || empty($lastName) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($gender) || empty($phoneNo) || empty($username) || empty($password)) {
    if (empty($firstName)) {
      $errors['fname'] = "*First name is required";
    }

    if (empty($lastName)) {
      $errors['lname'] = "*Last name is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "*Valid email is required";
    }

    if (empty($phoneNo)) {
      $errors['phone'] = "*Phone number is required";
    }

    if (empty($username)) {
      $errors['username'] = "*Username is required";
    }

    if (empty($password)) {
      $errors['password'] = "*Password is required";
    }
  } else {
    //checking if the user already exists or not
    $query1 = "SELECT `username` FROM applicant_reg WHERE `username`='$username' LIMIT 1";
    $result1 = mysqli_query($conn, $query1);

    if (mysqli_num_rows($result1) == 1) {
      echo "<script>
      alert('Username is already taken');
      </script>";
    } else {
      $query2 = "INSERT INTO applicant_reg(`first_name`,`last_name`,`email`,`phone_no`,`username`,`password`)
                VALUES
                ('{$firstName}','{$lastName}','{$email}','{$phoneNo}','{$username}','{$password}');
              ";
      $result2 = mysqli_query($conn, $query2);
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
  <title>applicant signup</title>
</head>

<body>
  <div class="signup-opt">
    <a href="regular_signup.php"><button class="signup-opt-btn active" value="applicant">For Applicants</button></a>
    <a href="emp_signup.php"><button class="signup-opt-btn" value="employer">For Employers</button></a>
  </div>
  <form action="regular_signup.php" method="post">
    <div class="signup-container">
      <div class="signup-img">
        <img src="../public/assets/images/signup.png" alt="signup">
      </div>
      <div class="form-container">
        <h1 class="login-text">SignUp</h1>
        <label for="f-name">First Name:</label>
        <input type="text" name="f-name" id="f-name" class="input-box">
        <div class="red"><?= $errors['fname']; ?></div>

        <label for="l-name">Last Name:</label>
        <input type="text" name="l-name" id="l-name" class="input-box">
        <div class="red"><?= $errors['lname']; ?></div>

        <label for="l-name">E-mail:</label>
        <input type="email" name="e-mail" id="e-mail" class="input-box">
        <div class="red"><?= $errors['email']; ?></div>

        <label for="phone">Phone no:</label>
        <input type="text" name="phone" id="phone" class="input-box">
        <div class="red"><?= $errors['phone']; ?></div>

        <label for="phone">Username:</label>
        <input type="text" name="username" id="username" class="input-box">
        <div class="red"><?= $errors['username']; ?></div>

        <label for="create-pwd">Password:</label>
        <input type="password" name="password" id="password" class="input-box">
        <div class="red"><?= $errors['password']; ?></div>

        <input type="submit" value="Sign Up" class="login-btn" name="signup">
        <div class="sub-container-3">
          <p>Already a member? <a href="login.php">Log In</a></p>
        </div>
      </div>
    </div>
  </form>
  <div>
    <p class="email-green email-notify"><?= $mail_notification['successfull']; ?></p>
    <p class="email-red email-notify"><?= $mail_notification['failed']; ?></p>
  </div>
  <script>

  </script>
</body>

</html>