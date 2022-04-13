<?php
session_start();

include('../config/root.php');
include('../config/db.php');

if(isset($_POST['submit'])){
     //check for a admin login
     if($_SESSION['admin'] == true){
          if($_SESSION['uid'] == "hiremelk"){
               $username = $_POST['username'];
               $password = $_POST['password'];

               //add data to the admin table
               $sql = "INSERT INTO `admin`(`username`, `password`, `role`) VALUES ('$username','$password','admin');";
     
               $result = $conn->query($sql);
     
               if ($result == TRUE) {
                    echo '<script>alert("New admin added successfully");</script>';
                    echo "<script>window.location.href =".ROOT."'views/view_admins.php';</script>";
                    exit();
               } 
               else {
     
                    echo "Error:" . $sql . "<br>" . $conn->error;
               }
               $conn->close();
          }
          else{
               echo ("<script>
                    alert('Log in as Superadmin to add admins');
                    window.location.href = ".ROOT."'views/login.php'
                    </script>");
          }
     }
}
