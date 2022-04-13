<?php
session_start();
include('../config/root.php');
include('../config/db.php');

//update data to the database
if (isset($_POST['submit'])) {

     if (isset($_SESSION['admin'])) {

          $job_title = $_POST['job_title'];

          $position = $_POST['position'];

          $company = $_POST['company'];

          $salary = $_POST['salary'];

          $category = $_POST['category'];

          $description = $_POST['description'];

          $emp_id = $_POST['emp_id'];

          //  $sql = "UPDATE `vacancy` SET `job_title`='$job_title',`position`='$position',`company`='$company',`salary`='$salary',`category`='$category',`description`='$description',`emp_id`='$emp_id'  WHERE `vacancy`.`vacancy_id`='$vacancy_id'"; 


          $sql = "INSERT INTO `vacancy`(`vacancy_id`,`job_title`, `position`, `company`, `salary`, `category`, `description`,`emp_id`) VALUES (NULL,'$job_title','$position','$company','$salary','$category','$description','$emp_id');";


          // $sql="INSERT INTO `vacancy` (`vacancy_id`, `job_title`, `position`, `company`, `salary`, `category`, `description`, `emp_id`) VALUES (NULL, 'lacoa;skncolsc', 'asaesdcasefed', 'Seffgfesdcaseg', 'aegsedfsfseg', 'aegdszdgrehrhaeer', 'asegasdgasdgasdvasegasdgawrgasdbsdrbadrb', '2');";

          $result = $conn->query($sql);

          if ($result == TRUE) {

               echo '<script language="javascript">alert("New record created successfully.")</script>';
               echo "<script>window.location.href = ".ROOT."'views/view_vacancy.php';</script>";
               exit();
          } else {

               echo "Error:" . $sql . "<br>" . $conn->error;
          }
          $conn->close();
     }
     else{
          echo ("<script>alert('login as admin');
               window.location.href = ".ROOT."'views/login.php';
               </script>");
     }
}
