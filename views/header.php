<?php

  $login_display = '';
  $loginpage_link = '';
  $disabled = '';
  $logout = '';

  if(isset($_SESSION['username'])){
      $login_display = $_SESSION['username'];
      $disabled = 'disabled-link';
      $logout = '<input class="logout" type="submit" value="logout" name="logout">';
      if(isset($_POST['logout'])){
          session_destroy();
          header('Location:login.php');
      }
      
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
        <li><a href="./vacancy.php">Vacancies</a></li>
        <li><a href="./hire.php">Hire</a></li>
        <li><a href="./contact.php">Contact Us</a></li>
        <li><a href="#">Help</a></li>
        <button class="login-btn {$disabled}" id="login"><a href=<?=$loginpage_link?>><?=$login_display?></a></button>
        <form action="header.php" method="post">
          <?= $logout; ?>
        </form>
    </ul>
    <script src="../public/js/header.js"></script>
</nav>
