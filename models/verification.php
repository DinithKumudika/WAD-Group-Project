<?php
  include './db/db_connect.php';
  if(isset($_GET['verification_code'])){
    $verification_code = mysqli_real_escape_string($conn,$_GET['verification_code']);
  }
?>