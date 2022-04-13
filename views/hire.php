<?php
include('../db/db_connect.php');

$error = '';

if (isset($_POST['add-vacancy'])) {
     $job_title = mysqli_escape_string($conn, htmlspecialchars($_POST['job-title']));
     $company_name = mysqli_escape_string($conn, htmlspecialchars($_POST['company']));
     $job_position = mysqli_escape_string($conn, htmlspecialchars($_POST['position']));
     $salary = mysqli_escape_string($conn, htmlspecialchars($_POST['salary']));
     $job_category = mysqli_escape_string($conn, htmlspecialchars($_POST['category']));
     $job_description = mysqli_escape_string($conn, htmlspecialchars($_POST['job-description']));
     if (empty($job_title) || empty($company_name) || empty($job_position) || empty($salary) || empty($job_category) || empty($job_description)) {
          $error = "All fields are required";
     } else {
          $query = "INSERT INTO vacancy(`job_title`,`position`,`company`,`salary`,`category`,`description`) 
          VALUES ('{$job_title}','{$job_position}','{$company_name}','{$salary}','{$job_category}','{$job_description}');";
          $result = mysqli_query($conn, $query);
          if ($result) {
               header('Location:hire.php');
          }
     }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Hire</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/hire.css">
</head>

<body>
     <?php
     include('header.php');
     ?>
     <form action="hire.php" method="POST">
          <div class="container">
               <div class="sub-container">
                    <div class="wrapper">
                         <h2>Post your job vacancy</h2>
                         <input type="text" class="field" placeholder="Job title" name="job-title">
                         <input type="text" class="field" placeholder="position" name="position">
                         <input type="text" class="field" placeholder="Company" name="company">
                         <input type="text" class="field" placeholder="Salary" name="salary">
                         <select name="category" id="job-cat" class="field">
                              <option value="deafault" disabled='disabled' selected>Choose job category..</option>
                              <option value="Administration,business and management">Administration,business and management</option>
                              <option value="Computing and IT">Computing and IT</option>
                              <option value="Construction and building">Construction and building</option>
                              <option value="Education and training">Education and training</option>
                              <option value="Engineering">Engineering</option>
                              <option value="Financial">Financial</option>
                              <option value="Graphic Design">Graphic Design</option>
                              <option value="Healthcare">Healthcare</option>
                              <option value="Hospitality and tourism">Hospitality and tourism</option>
                              <option value="Human Resources">Human Resources</option>
                              <option value="Law">Law</option>
                              <option value="Manufacturing and production">Manufacturing and production</option>
                              <option value="Retail and customer Services">Retail and customer Services</option>
                              <option value="Printing,publishing and advertising">Printing,publishing and advertising</option>
                              <option value="Security,uniformed and protective services">Security,uniformed and protective services</option>
                              <option value="Sport and leisure">Sport and leisure</option>
                              <option value="Transport,distibution and logistics">Transport,distibution and logistics</option>
                         </select>
                         <textarea placeholder="Job description" class="field" name="job-description"></textarea>
                         <p style="color: red; text-align:center"><?php echo $error ?></p>
                         <input type="submit" class="btn" value="Post vacancy" name="add-vacancy"></input>
                    </div>
               </div>
          </div>
     </form>
</body>

</html>