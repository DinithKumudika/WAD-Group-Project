<?php

$login_display = '';
$loginpage_link = '';
$disabled = '';
$logout = '';
$admin = '';
$hiring = '';
$vacancy = '';

//checking session variables to determine user
if(isset($_SESSION['default']) || isset($_SESSION['applicant']) || isset($_SESSION['employer']) ||isset($_SESSION['admin'])){
  if(isset($_SESSION['default'])){
    $hiring = '<li><a href="./hire.php">Hire</a></li>';
    $login_display = $_SESSION['uid'];
    $vacancy = '<li><a href="./vacancy.php">Vacancies</a></li>';
  }
  else if(isset($_SESSION['applicant'])){
    $login_display = $_SESSION['uid'];
    $vacancy = '<li><a href="./vacancy.php">Vacancies</a></li>';

  }
  else if(isset($_SESSION['admin'])){
      $admin = '<li><a href="admin_home.php">Admin</a></li>';
      $hiring = '<li><a href="./hire.php">Hire</a></li>';
      $login_display = $_SESSION['uid'];
      $vacancy = '<li><a href="./vacancy.php">Vacancies</a></li>';   
  }
  else if(isset($_SESSION['employer'])){
    $login_display = $_SESSION['uid'];
    $hiring = '<li><a href="./hire.php">Hire</a></li>';
  }
  
  $disabled = 'disabled-link';
  $logout = '<input class="logout" type="submit" value="logout" name="logout">';
}
else{
  $login_display = 'Login';
  $loginpage_link = 'login.php';
}


