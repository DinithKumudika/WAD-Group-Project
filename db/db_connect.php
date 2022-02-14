<?php

  $conn = mysqli_connect('localhost','root','','hireme_lk_db');

  if(!$conn){
      die('Connection Error,'.mysqli_connect_error());
  }
?>
