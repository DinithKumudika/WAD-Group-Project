<?php
session_start();

include('../config/root.php');
include('../config/db.php');

$admin_id = $_GET['admin_id'];

if (isset($_POST['submit'])) {
     if ($_SESSION['admin'] == true) {
          if ($_SESSION['uid'] == "hiremelk") {
               $username = $_POST['username'];
               $password = $_POST['password'];
               $sql2 = "UPDATE `admin` SET `username` = '$username', `password` = '$password' WHERE  `admin_ID` = {$admin_id};";
               $result2 = $conn->query($sql2);

               if ($result2 == TRUE) {

                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Update successfull');
                    window.location.href=".ROOT."'views/view_admins.php';
                    </script>");
               } else {

                    echo "Error:" . $sql2 . "<br>" . $conn->error;
               }
          } else {
               echo ("<script>
               alert('Please log in as Superadmin');
               window.location.href=".ROOT."'views/login.php';
               </script>");
          }
     }
}
