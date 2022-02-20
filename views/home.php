<?php
  session_start();

  $reg_section = '<div class="container">
    <div class="container-1" id="con-1">
      <form action="../Modules/Auth.php" method="post">
        <h1 class="reg-title">Company Registration</h1>
        <p>Searching for best employes for your company? <br> Register today to find best skills for you</P>
        <a href="./emp_signup.php"><input type="button" class="btn" value="Register"></a>
      </form>
    </div>
    <div>
      <form action="../Modules/Auth.php" method="post">
        <div class="container-2" id="con-2">
          <h1 class="reg-title">Candidate Registration</h1>
          <p>Looking for the job that suits you most? <br> Register and start searching!</p>
          <a href="./regular_signup.php"><input type="button" class="btn" value="Register"></a>
        </div>
      </form>
    </div>
  </div>';

  $reg_now = 
  '<a href="#registration">
  <div>
    <h2 class="reg-now">Register Now</h2>
    <span class="material-icons down-arrow">
      keyboard_double_arrow_down
    </span>
  </div>
</a>';

  if(isset($_SESSION['user_applicant']) || isset($_SESSION['user_admin']) || isset($_SESSION['user_emp'])){
    $reg_section="";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/header.css">
  <link rel="stylesheet" href="../public/css/home.css">
  <link rel="stylesheet" href="../public/css/footer.css">
</head>

<body>
  <?php
  include '../views/header.php';
  ?>
  <div class="bg-container">
    <h1 class="heading" id=head>One Step To Your Future Starts Here</h1>
    <?=$reg_now;?>
    <!--<i class="fa-solid fa-angles-down"></i>-->
  </div>
  
  <?=$reg_section;?>

  <div class="container-3">
    <div>
      <div>
        <h1>How Hire Me can help You?</h1>
        <h2>Job Search</h2>
      </div>
      <br>
      <div>
        <form action="" method="post">
          <input type="text" name="search" id="search">
          <button type="submit" name="search-btn" id="search-btn" class="search-btn">
            search
          </button>
        </form>
      </div>
    </div>
    <div>
      <p><i class="fa-solid fa-briefcase"></i>Find jobs easily with your preferences</p>
      <p><i class="fa-solid fa-users"></i>Find best recruits for your organization</p>
      <p><i class="fa-solid fa-gears"></i>24x7 technical support</p>
    </div>
  </div>

  <?php
  include('./footer.php');
  ?>
</body>

</html>