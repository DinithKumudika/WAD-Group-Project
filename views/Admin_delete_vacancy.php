<?php
session_start();
include('../db/db_connect.php');
$query = "SELECT * FROM vacancy";
$id = array();
$rows;
$result = mysqli_query($conn, $query);
//Delete Vacancies 
if (isset($_GET['vacancy_id'])) {

     $vacancy_id = $_GET['vacancy_id'];
 
     // $sql = "DELETE FROM `users` WHERE `id`='$user_id'";
 
     $sql="DELETE FROM `vacancy` WHERE `vacancy`.`vacancy_id` = '$vacancy_id'";
      $result = $conn->query($sql);
 
      if ($result == TRUE) {
 
        
        
     //     echo '<script language="javascript">';
     //     echo 'alert("Record deleted successfully")';
     //     echo '</script>';

         echo ("<script LANGUAGE='JavaScript'>
         window.alert('Record deleted successfully');
         window.location.href='./Admin_view_vacancy.php';
         </script>");

     }else{
 
         echo "Error:" . $sql . "<br>" . $conn->error;
 
     }
     // header('Location:./Admin_view_vacancy.php');
     // exit();
 
 } 



?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Delete Vacancies</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/vacancy.css">
     <link rel="stylesheet" href="../public/css/footer.css">  
     <link rel="stylesheet" href="../public/css/Admin_css.css">
</head>
<body>
    
     <script src="../public/js/vacancy.js"></script>
</body>
</html>