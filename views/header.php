<?php
  session_start();

  $login_display = '';
  $loginpage_link = '';
  $disabled = '';

  if(isset($_SESSION['username'])){
      $login_display = $_SESSION['username'];
      $disabled = 'disabled-link';
  }
  else{
      $login_display = 'Login';
      $loginpage_link = 'login.php';
  }
?>


<nav id="navbar">
    <span class="material-icons menu-btn icon" id="menu-ico">menu</span>
    <span class="material-icons close-btn icon" id="close-ico">close</span>
    <div class="logo-container"><img src="../public/assets/images/logo.png" alt="" class="logo"></div>
    <ul id="nav-list">
        <li><a href="./home.php">Home</a></li>
        <li><a href="#">Vacancies</a></li>
        <li><a href="#">Hire</a></li>
        <li><a href="./contact.php">Contact Us</a></li>
        <li><a href="#">Help</a></li>
        <button class="login-btn {$disabled}"><a href=<?=$loginpage_link?>><?=$login_display?></a></button>
    </ul>
    <script src="../public/js/header.js"></script>
</nav>
