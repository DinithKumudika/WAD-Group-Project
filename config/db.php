<?php
  
  $db = array(
    'hostname'=> 'localhost',
    'username'=>'root',
    'password'=>'',
    'database'=>'hireme_lk_db'
  );


  $conn = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
  
  if(!$conn){
      die('Connection Error,'.mysqli_connect_error());
  }
?>
