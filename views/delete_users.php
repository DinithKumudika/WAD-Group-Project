<?php
session_start();
include('../db/db_connect.php');

//Delete employee users 
if (isset($_GET['emp_id'])) {

     $emp_id = $_GET['emp_id'];
 
     $sql="DELETE FROM `emp_reg` WHERE .`emp_id` = '$emp_id'";
    
     echo "".$sql;

      $result = $conn->query($sql);
 
      if ($result == TRUE) {

         echo ("<script LANGUAGE='JavaScript'>
         window.alert('Record deleted successfully');
         window.location.href='view_users.php';
         </script>");

     }else{
 
         echo "Error:" . $sql . "<br>" . $conn->error;
 
     }
 } 

 //Delete applicant users 
if (isset($_GET['applicant_id'])) {

    $applicant_id = $_GET['applicant_id'];

    // $sql = "DELETE FROM `users` WHERE `id`='$user_id'";

    $sql="DELETE FROM `applicant_reg` WHERE `applicant_ID` = '$applicant_id'";
   
    echo "".$sql;

     $result = $conn->query($sql);

     if ($result == TRUE) {


        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Record deleted successfully');
        window.location.href='view_users.php';
        </script>");

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }
}

?>
