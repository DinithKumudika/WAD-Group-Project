<?php
  session_start();
  include('../includes/set_user_inc.php');
  include('../includes/logout_inc.php')
?>


<nav id="navbar">
    <span class="material-icons menu-btn icon" id="menu-ico">menu</span>
    <span class="material-icons close-btn icon" id="close-ico">close</span>
    <div class="logo-container"><img src="../public/assets/images/logo.png" alt="" class="logo"></div>
    <ul id="nav-list">
        <li><a href="./home.php">Home</a></li>
        <?=$vacancy;?>
        <?=$hiring;?>
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
