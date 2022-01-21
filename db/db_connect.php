<?php

  $conn = mysqli_connect('localhost','root','','hire_me');

  if(!$conn){
      die('Connection Error,'.mysqli_connect_error());
  }
?>
