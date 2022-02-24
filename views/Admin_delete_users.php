<?php
session_start();
include('../db/db_connect.php');
$query = "SELECT * FROM emp_reg";
$id = array();
$rows;
$result = mysqli_query($conn, $query);

//Delete Vacancies 
if (isset($_GET['emp_id'])) {
    echo "hi";

     $emp_id = $_GET['emp_id'];
 
     // $sql = "DELETE FROM `users` WHERE `id`='$user_id'";
 
     $sql="DELETE FROM `emp_reg` WHERE `emp_reg`.`emp_id` = '$emp_id'";
    
     echo "".$sql;

      $result = $conn->query($sql);
 
      if ($result == TRUE) {
 
        
        
     //     echo '<script language="javascript">';
     //     echo 'alert("Record deleted successfully")';
     //     echo '</script>';

         echo ("<script LANGUAGE='JavaScript'>
         window.alert('Record deleted successfully');
         window.location.href='./Admin_view_Users.php';
         </script>");

     }else{
 
         echo "Error:" . $sql . "<br>" . $conn->error;
 
     }
     // header('Location:./Admin_view_vacancy.php');
     // exit();
 
 } 



?>
