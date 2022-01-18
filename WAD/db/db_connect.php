<?php
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "hire_me";

  $conn = mysqli_connect($host,$dbName,$dbPassword,$dbName);

  if(!$conn){
      die('Connection Error,'.mysqli_connect_error());
  }
?>
