<?php
session_start();
include('../db/db_connect.php');

//Delete employee users 
if ($_SESSION['user_admin'] == "hiremelk") {
     if (isset($_GET['admin_id'])) {

          $admin_id = $_GET['admin_id'];

          $sql1 = "SELECT `username`,`password` FROM `admin` WHERE `admin_ID`='{$admin_id}'";
          $result1 = $conn->query($sql1);
          $data = mysqli_fetch_assoc($result1);

          if (isset($_POST['submit'])) {
               $username = $_POST['username'];
               $password = $_POST['password'];
               $sql2 = "UPDATE TABLE `admin` SET `username` = '$username', `password` = '$password' WHERE .`admin_ID` = '$admin_id'";
               $result2 = $conn->query($sql2);

               if ($result2 == TRUE) {

                    echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Update successfull');
                    window.location.href='view_admins.php';
                    </script>");
               } else {

                    echo "Error:" . $sql2 . "<br>" . $conn->error;
               }
          }
     }
} else {
     echo ("<script>
         alert('Please log in as Superadmin');
         window.location.href='login.php';
     </script>");
}

?>

<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update admins</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/vacancy.css">
     <link rel="stylesheet" href="../public/css/footer.css">
     <link rel="stylesheet" href="../public/css/admin_header.css">
     <link rel="stylesheet" href="../public/css/admin.css">
</head>

<body>
     <?php
     include('header.php');
     ?>
     <?php
     include('admin_header.php');
     ?>

     <div style="margin-left:250px; margin-top:90px">

          <form action="" method="post">

               <label for="job_title">Username:</label>
               <br>
               <br>
               <input type="text" id="job_title" name="username" class="text" value="<?php echo $data['username']; ?>">
               <br>
               <br>
               <label for="position">Password:</label>
               <br>
               <br>
               <input type="text" id="position" name="password" class="text" value="<?php echo $data['password']; ?>">
               <br>
               <br>
               <input type="submit" value="submit" name="submit" class="submit-btn">
          </form>
     </div>
     <?php
     //include('footer.php');
     ?>
     <script src="../public/js/vacancy.js"></script>
</body>

</html>