<?php

$errors = array(
  'empty_input'=>'',
  'invalid_user'=>''
);

if(isset($_GET['error'])){
  $error = $_GET['error'];
  if($error=="empty"){
    $errors['empty_input'] = "All the fields are required";
  }
  if($error=="invalid"){
    $errors['invalid_user'] = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in | Hireme</title>
  <link rel="stylesheet" href="../public/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
  <div class="wrapper">
    <h1>Log in</h1>
    <form action="../includes/login_inc.php" method="post">
      <?php
      if(isset($_GET['uid'])){
        echo '<input type="text" placeholder="Enter username" class="form-input" name="username" id="username" value='.$_GET['uid'].'>';
      }
      else{
        echo '<input type="text" placeholder="Enter username" class="form-input" name="username" id="username">';
      }
      ?>
      <input type="password" placeholder="Password" class="form-input" name="pwd" id="pwd">
      <p style="color: red;"><?php echo $errors['empty_input'] ?></p>
      <p style="color: red;"><?php echo $errors['invalid_user'] ?></p>
      <div class="chk">
            <input type="checkbox" name="show-pwd" id="show-pwd">
            <label for="show-pwd">show password</label>
      </div>
      <input type="submit" value="Log in" class="button" name="login">
    </form>
    <div class="not-member">
      Not a member? <a href="regular_signup.php">Register Now</a>
    </div>
  </div>
  <script src="../public/js/login.js"></script>
</body>
</html>