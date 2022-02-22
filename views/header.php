<?php
  session_start();
  include('../db/db_connect.php');

  $login_display = '';
  $loginpage_link = '';
  $disabled = '';
  $logout = '';
  $admin = '';
  $emp = '';
  $applicant = '';
  //checking session variables to determine user

  if(isset($_SESSION['user_applicant']) || isset($_SESSION['user_admin']) || isset($_SESSION['user_emp'])){
    if($_SESSION['user_applicant']=="ucsc" || $_SESSION['user_emp']=="ucsc"){
      $emp = '<li><a href="./hire.php">Hire</a></li>';
      $login_display = $_SESSION['user_applicant'];
      $applicant = '<li><a href="./vacancy.php">Vacancies</a></li>';
    }
    else if(isset($_SESSION['user_applicant'])){
      $login_display = $_SESSION['user_applicant'];
      $applicant = '<li><a href="./vacancy.php">Vacancies</a></li>';

    }
    else if(isset($_SESSION['user_admin'])){
        $admin = '<li><a href="admin.php">Admin</a></li>';
        $login_display = $_SESSION['user_admin'];
    }
    else if(isset($_SESSION['user_emp'])){
      $login_display = $_SESSION['user_applicant'];
      $emp = '<li><a href="./hire.php">Hire</a></li>';
    }
    
    $disabled = 'disabled-link';
    $logout = '<input class="logout" type="submit" value="logout" name="logout">';
  }
  else{
    $login_display = 'Login';
    $loginpage_link = 'login.php';
  }

  if(isset($_POST['logout'])){
      session_destroy();
      header('Location:login.php');
  }
?>


<nav id="navbar">
    <span class="material-icons menu-btn icon" id="menu-ico">menu</span>
    <span class="material-icons close-btn icon" id="close-ico">close</span>
    <div class="logo-container"><img src="../public/assets/images/logo.png" alt="" class="logo"></div>
    <ul id="nav-list">
        <li><a href="./home.php">Home</a></li>
        <?=$applicant;?>
        <?=$emp;?>
        <?=$admin;?>
        <li><a href="./contact.php">Contact Us</a></li>
        <li><a href="./facilities.php">Facilities</a></li>
        <li><a href="#">Help</a></li>
        <button class="login-btn {$disabled}" id="login"><a href=<?=$loginpage_link?>><?=$login_display?></a></button>
        <form action="header.php" method="post">
          <?= $logout; ?>
        </form>
    </ul>
    <script src="../public/js/header.js"></script>
</nav>
