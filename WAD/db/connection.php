<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "";

  $conn = new mysqli($server,$username,$password,$database);

  if(!$conn){
      die(mysqli_connect_error());
  }
?>
