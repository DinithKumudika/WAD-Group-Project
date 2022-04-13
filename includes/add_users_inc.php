<?php
session_start();
include('../config/root.php');
include('../config/db.php');

//add user data to the database
if (isset($_POST['submit'])) {

     if(isset($_SESSION['admin'])){
          if ($_POST['user-cat'] == "Apllicant") {
               $first_name = $_POST['first_name'];
           
               $last_name = $_POST['last_name'];
           
               $email = $_POST['email'];
           
               $phone_no = $_POST['phone_no'];
           
               $username = $_POST['username'];
           
               $password = $_POST['password'];
           
               $sql = "INSERT INTO `applicant_reg`(`first_name`, `last_name`, `email`,  `phone_no`,`password`, `username`) VALUES ('$first_name','$last_name','$email','$phone_no','$username','$password');";
           
               $result = $conn->query($sql);
           
             }
             else if ($_POST['user-cat'] == "Employer") {
           
               $first_name = $_POST['first_name'];
           
               $last_name = $_POST['last_name'];
           
               $email = $_POST['email'];
           
               $phone_no = $_POST['phone_no'];
           
               $company = $_POST['company'];
           
               $username = $_POST['username'];
           
               $password = $_POST['password'];
           
               $sql = "INSERT INTO `emp_reg`(`first_name`, `last_name`, `email`,  `phone_no`, `company`, `password`, `username`) VALUES ('$first_name','$last_name','$email','$phone_no','$company','$username','$password');";
           
               $result = $conn->query($sql);
             }
           
             if ($result == TRUE) {
               echo '<script language="javascript">alert("New user added successfully.")</script>';
               echo "<script>window.location.href = ".ROOT."'views/view_users.php';</script>";
               exit();
             } 
             else {
           
               echo "Error:" . $sql . "<br>" . $conn->error;
             }
             $conn->close();
     }
     else{
          echo ("<script>alert('login as admin');
               window.location.href = ".ROOT."'views/login.php'
               </script>");
     }
}