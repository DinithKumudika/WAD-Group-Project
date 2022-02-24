<?php
include('../db/db_connect.php');

function ValidateUser($conn)
{
  if (isset($_GET['verification_code'])) {
    $verification_code = mysqli_real_escape_string($conn, $_GET['verification_code']);

    $query1 = "SELECT * FROM applicant_reg WHERE verification_code = '{$verification_code}'";
    $query2 = "SELECT * FROM emp_reg WHERE verification_code = '{$verification_code}'";
    $result1 = mysqli_query($conn, $query1);
    $result2 = mysqli_query($conn, $query2);

    if ($result1 && mysqli_num_rows($result1) == 1) {
      $updateQuery = "UPDATE applicant_reg
        SET is_active = 1, verification_code = NULL 
        WHERE verification_code = '{$verification_code}'";

        $result3 = mysqli_query($conn,$updateQuery);
      
        if ($result3 && mysqli_affected_rows($conn) == 1) {
          echo
          '<script type="text/javascript">
             alert("Email address being verified");   
          </script>';
          header('Location:login.php');
        } else {
          echo
          '<script type="text/javascript">
             alert("Email is not verified");
          </script>';
        }
    }
    else if($result2 && mysqli_num_rows($result2)==1){
      $updateQuery = "UPDATE emp_reg
        SET is_active = 1, verification_code = NULL 
        WHERE verification_code = '{$verification_code}'";

        $result3 = mysqli_query($conn,$updateQuery);
      
        if ($result3 && mysqli_affected_rows($conn) == 1) {
          echo
          '<script type="text/javascript">
             alert("Email address being verified");   
          </script>';
          header('Location:login.php');
        } else {
          echo
          '<script type="text/javascript">
             alert("Email is not verified");
          </script>';
        }
    }
  }
}

ValidateUser($conn);
