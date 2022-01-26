<?php
include('../db/db_connect.php');

function ValidateUser($conn)
{
  if (isset($_GET['verification_code'])) {
    $verification_code = mysqli_real_escape_string($conn, $_GET['verification_code']);

    $query = "SELECT * FROM users_jobseekers WHERE verification_code = '{$verification_code}'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
      $query2 = "UPDATE users_jobseekers 
        SET is_active = 'true', verification_code = NULL 
        WHERE verification_code = '{$verification_code}'";
      $result2 = mysqli_query($conn, $query2);
      if($result2){
        if (mysqli_affected_rows($conn) == 1) {
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
}

ValidateUser($conn);
