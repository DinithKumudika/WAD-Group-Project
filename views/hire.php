<?php
include('../db/db_connect.php');

$error ='';

if(isset($_POST['add-vacancy'])){
     $job_title = mysqli_escape_string($conn,htmlspecialchars($_POST['job-title']));
     $company_name = mysqli_escape_string($conn,htmlspecialchars($_POST['company']));
     $job_position = mysqli_escape_string($conn,htmlspecialchars($_POST['position']));
     $salary = mysqli_escape_string($conn,htmlspecialchars($_POST['salary']));
     $job_category = mysqli_escape_string($conn,htmlspecialchars($_POST['category']));
     $job_description = mysqli_escape_string($conn,htmlspecialchars($_POST['job-description']));
     if(empty($job_title)||empty($company_name)||empty($job_position)||empty($salary)||empty($job_category)||empty($job_description)){
          echo '<script>alert("All fields are required!");</script>';
     }
     else{
          $query ="INSERT INTO vacancy(`job_title`,`position`,`company`,`salary`,`category`,`description`) 
          VALUES ('{$job_title}','{$job_position}','{$company_name}','{$salary}','{$job_category}','{$job_description}');";
          $result= mysqli_query($conn,$query);
          if($result){
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
     <link rel="stylesheet" href="../public/css/footer.css">
</head>

<body>
     <?php
     include('header.php');
     ?>

     <div class="btn-container">
          <button class="add-btn" id="button">
          <i class="fa-solid fa-plus"></i>
               Add Vacancy
          </button>
     </div>
     <div class="bg-modal">
	<div class="modal-contents">

		<div class="close">+</div>
		<img src="https://richardmiddleton.me/comic-100.png" alt="">

		<form action="hire.php" method="POST">
               <div class="model-sub-container">
                    <label for="job-title">Job Title:</label>
                    <input type="text" placeholder="Job Title" name="job-title">
               </div>
               <div class="model-sub-container">
                    <label for="position">Position:</label>
                    <input type="text" placeholder="Position" name="position">
               </div>
               <div class="model-sub-container">
                    <label for="salary">Company:</label>
                    <input type="text" placeholder="Company name" name="company">
               </div>
			<div class="model-sub-container">
                    <label for="salary">Salary:</label>
                    <input type="text" placeholder="Salary" name="salary">
               </div>
               <div class="model-sub-container">
                    <label for="category">Category:</label>
                    <select name="category" id="job-cat">
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
               </div>
               <div class="model-sub-container">
                    <label for="job-description">Description:</label>
                    <textarea name="job-description" cols="100" rows="10" placeholder="Job Description"></textarea>
               </div>
			<input type="submit" value="Post Vacancy" name="add-vacancy" class="btn">
		</form>

	</div>
</div>
     <?php
     include('footer.php');
     ?>
<script src="../public/js/hire.js"></script>
</body>
</html>