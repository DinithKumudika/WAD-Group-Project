<?php
session_start();
include('../db/db_connect.php');
$query = "SELECT * FROM vacancy";
$id = array();
$rows;
$result = mysqli_query($conn, $query);
//update data to the database
if (isset($_POST['update'])) {

     $job_title = $_POST['job_title'];

     $vacancy_id = $_POST['vacancy_id']; 
 
     $position = $_POST['position'];

     $company = $_POST['company'];

     $salary = $_POST['salary'];

     $category = $_POST['category'];

     $description = $_POST['description']; 

     $emp_id = $_POST['emp_id']; 

     $sql = "UPDATE `vacancy` SET `job_title`='$job_title',`position`='$position',`company`='$company',`salary`='$salary',`category`='$category',`description`='$description',`emp_id`='$emp_id'  WHERE `vacancy`.`vacancy_id`='$vacancy_id'"; 


     $result = $conn->query($sql); 


     if ($result == TRUE) {

         echo "Record updated successfully.";
         echo '<script language="javascript">';
         echo 'alert("Record updated successfully")';
         echo '</script>';
        

     }else{

         echo "Error:" . $sql . "<br>" . $conn->error;

     }

 } 
//get value from the database 
if (isset($_GET['vacancy_id'])) {

     $vacancy_id = $_GET['vacancy_id']; 
 
     $sql = " SELECT * FROM `vacancy` WHERE `vacancy_id`='$vacancy_id'";

    echo "vacancy id".$vacancy_id;
     $result = $conn->query($sql); 
 
     if ($result->num_rows > 0) {        
 
         while ($row = $result->fetch_assoc()) {
 
             $vacancy_id  = $row['vacancy_id'];
 
             $job_title = $row['job_title'];
 
             $position = $row['position'];
 
             $company  = $row['company'];
 
             $salary = $row['salary'];
 
             $category = $row['category'];
 
             $description = $row['description'];
 
             $emp_id = $row['emp_id'];
 
         } }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Vacancies</title>
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
    </Style>
<body>
     <?php
     include('header.php');
     ?>
         <?php
     include('Admin_header.php');
     ?>
     <div style="margin-left:250px; margin-top:50px;">

  <form action=""  method="post">

  <label for="vacancy_id"></label><br><br><br>
    <input type="hidden" id="vacancy_id" name="vacancy_id"  value="<?php echo $vacancy_id; ?>">

    <label for="job_title">job_title</label>
    <input type="text" id="job_title" name="job_title"  value="<?php echo $job_title; ?>">
   
    <label for="position">position</label>
    <input type="text" id="position" name="position"  value="<?php echo $position; ?>"
>

    <label for="company">company</label>
    <input type="text" id="company" name="company"  value="<?php echo $company; ?>"
>

    <label for="salary">salary</label>
    <input type="text" id="salary" name="salary" value="<?php echo $salary; ?>"
>

    <label for="category">category</label>
    <input type="text" id="category" name="category"  value="<?php echo $category; ?>"
>


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
    <?php echo $description; ?>
</textarea>
    

    <input type="submit" value="Update" name="update">
  </form>
</div>
     <?php
     //include('footer.php');
     ?>
     <script src="../public/js/vacancy.js"></script>
</body>
</html>