<?php
session_start();
include('../db/db_connect.php');
$query = "SELECT * FROM vacancy";
$id = array();
$rows;
$result = mysqli_query($conn, $query);
//update data to the database
if (isset($_POST['submit'])) {

     $first_name = $_POST['first_name'];

   
 
     $last_name = $_POST['last_name'];

     $email = $_POST['email'];

     $phone_no = $_POST['phone_no'];

     $company = $_POST['company'];

     $username = $_POST['username']; 
     $password = $_POST['password'];
    

   
   $sql = "INSERT INTO `emp_reg`(`emp_id`,`first_name`, `last_name`, `email`,  `phone_no`, `company`, `password`, `username`) VALUES (NULL,'$first_name','$last_name','$email','$phone_no','$company','$username','$password');";
//    INSERT INTO `emp_reg` (`emp_id`, `first_name`, `last_name`, `email`, `phone_no`, `company`, `username`, `password`, `verification_code`, `is_active`) VALUES (NULL, 'xfhxfbxf', 'xfjftgnjfgj', 'dhsdfvnnhxfj', '', 'zsffhfdvncttm', 'dfhdfcvfnxcjn', 'xcfnxcv cfg', 'xcnxcfgvnxxcgn', '');
   
echo "".$sql;
//     $sql="INSERT INTO `emp_reg` (`emp_id`, `first_name`, `last_name`, `email`, `phone_no`, `company`, `username`, `password`, `verification_code`, `is_active`) VALUES (NULL, 'xfhfvn', 'cvnxfgn', 'xcnxdfcvnxfgx', '0711641888', 'dfhdxf', 'xfbzfb', 'zxfnxfn', 'ncnxfn ', '1'); ";
   
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
     <title>Add Users</title>
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

     <label for="first_name">first_name</label>
    <input type="text" id="first_name" name="first_name" ><br>
   
    <label for="last_name">last_name</label>
    <input type="text" id="last_name" name="last_name">

    <label for="email">email</label>
    <input type="text" id="email" name="email" >

    <label for="phone_no">phone_no</label>
    <input type="text" id="phone_no" name="phone_no" >
    
<label for="company">company</label>
    <input type="text" id="company" name="company" >

        
<label for="username">username</label>
    <input type="text" id="username" name="username" >
    

    <label for="password">password</label>
    <input type="text" id="password" name="password" >

    <input type="submit" value="submit" name="submit">
  </form>
</div>
     <?php
     //include('footer.php');
     ?>
     <script src="../public/js/vacancy.js"></script>
</body>
</html>