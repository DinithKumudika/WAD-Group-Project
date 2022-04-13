<?php
include('../db/db_connect.php');

$errors = [
  'fname' => '',
  'lname' => '',
  'email' => '',
  'phone' => '',
  'company' => '',
  'username' => '',
  'dup_username' => '',
  'password' => '',
];

if (isset($_POST['signup'])) {
  //signup data
  $firstName = mysqli_real_escape_string($conn, htmlspecialchars($_POST['f-name']));
  $lastName = mysqli_real_escape_string($conn, htmlspecialchars($_POST['l-name']));
  $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['e-mail']));
  $phoneNo = mysqli_real_escape_string($conn, htmlspecialchars($_POST['phone']));
  $company = mysqli_real_escape_string($conn, htmlspecialchars($_POST['company']));
  $username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
  $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));
  $fullName = $firstName . ' ' . $lastName;

  //checking for empty fields
  if (empty($firstname) || empty($lastName) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($gender) || empty($phoneNo) || empty($company) || empty($username) || empty($password)) {
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

    if (empty($company)) {
      $errors['comapny'] = "*Company name is required";
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
      //inserting data to db
      $query2 = "INSERT INTO emp_reg(`first_name`,`last_name`,`email`,`phone_no`,`company`,`username`,`password`)
                  VALUES
                  ('{$firstName}','{$lastName}','{$email}','{$phoneNo}','{$company}','{$username}','{$password}');
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
  <title>Sign up | Hireme</title>
  <link rel="stylesheet" href="../public/css/signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
  <div class="wrapper">
    <h1>Sign up</h1>
    <div class="signup-opt">
      <a href="regular_signup.php"><button class="signup-opt-btn active" value="applicant">For Applicants</button></a>
      <a href="emp_signup.php"><button class="signup-opt-btn" value="employer">For Employers</button></a>
    </div>
    <form action="../includes/login_inc.php" method="post">
      <input type="text" placeholder="First name" class="form-input" name="f-name" id="f-name">
      <input type="text" placeholder="Last name" class="form-input" name="l-name" id="l-name">
      <input type="email" placeholder="E-mail" class="form-input" name="e-mail" id="e-mail">
      <input type="tel" placeholder="Phone no" class="form-input" name="phone" id="phone">
      <input type="text" placeholder="Company" class="form-input" name="company" id="company">
      <input type="text" placeholder="Username" class="form-input" name="username" id="username">
      <input type="password" placeholder="Password" class="form-input" name="password" id="password">
      <p style="color: red;">All the fields are required!</p> 
      <input type="submit" value="Sign up" class="button" name="signup">
    </form>
    <div class="not-member">
      Already a member? <a href="login.php">Log in</a>
    </div>
  </div>
</body>
</html>