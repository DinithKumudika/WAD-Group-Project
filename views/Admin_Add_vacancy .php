<?php
session_start();
include('../db/db_connect.php');
$query = "SELECT * FROM vacancy";
$id = array();
$rows;
$result = mysqli_query($conn, $query);
//update data to the database
if (isset($_POST['submit'])) {

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
 
       echo "New record created successfully.";
       echo '<script language="javascript">';
       echo 'alert("New record created successfully.")';
       echo '</script>';
 
     }else{
 
       echo "Error:". $sql . "<br>". $conn->error;
 
     } 
     $conn->close(); 

    

 } 



?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Add Vacancies</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/vacancy.css">
     <link rel="stylesheet" href="../public/css/footer.css">  
     <link rel="stylesheet" href="../public/css/Admin_css.css">
</head>
<style>

.sidenav {
  margin-top: 120px;
  margin-left:10px;
height: 400px;
width: 200px;
position: fixed;
z-index: 1;
top: 0;
left: 0;
background-color: #111;
overflow-x: hidden;
padding-top: 20px;
}

.sidenav a {
padding: 6px 6px 6px 32px;
text-decoration: none;
font-size: 25px;
color: #818181;
display: block;
}

.sidenav a:hover {
color: #f1f1f1;
}

.main {
margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
.sidenav {padding-top: 15px;}
.sidenav a {font-size: 18px;}
}
</style>

<body>
     <?php
     include('header.php');
     ?>
      <?php
     include('Admin_header.php');
     ?>
     
     <div style="margin-left:250px; margin-top:70px">

        <form action=""  method="post">

     <label for="job_title">job_title</label>
    <input type="text" id="job_title" name="job_title" ><br>
   
    <label for="position">position</label>
    <input type="text" id="position" name="position">

    <label for="company">company</label>
    <input type="text" id="company" name="company" >

    <label for="salary">salary</label>
    <input type="text" id="salary" name="salary" >
    
<label for="emp_id">emp_id</label>
    <input type="text" id="emp_id" name="emp_id" >
    
   
    <div class="sub-container">
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


    <label for="description">description</label><br>
   
    <textarea style="width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #dee4de;
    color:#233323" name="description" rows="10" >
   
</textarea>


    <input type="submit" value="submit" name="submit">
  </form>
</div>
     <?php
     //include('footer.php');
     ?>
     <script src="../public/js/vacancy.js"></script>
</body>
</html>