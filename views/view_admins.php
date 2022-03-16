<?php
session_start();
include('../db/db_connect.php');
$query = "SELECT * FROM `admin`";

$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Admins</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/vacancy.css">
     <link rel="stylesheet" href="../public/css/footer.css">
     <link rel="stylesheet" href="../public/css/admin.css">
     <link rel="stylesheet" href="../public/css/admin_header.css">
</head>

<body>
     <?php
     include('header.php');
     ?>

     <?php
     include('admin_header.php');
     ?>

     <div class="div-main">
          <table>
               <thead>
                    <tr>
                         <th>Username</th>
                         <th>Password</th>
                         <th>Action</th>
                    </tr>
               </thead>

               <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                         <td class="td-1">
                              <?= $row['username']; ?>
                         </td>
                         <td class="td-2">
                              <?= $row['password']; ?>
                         </td>
                         <td class="td-4">
                              <div class="btn-container">
                                   <button class="button button3">
                                        <a href="delete_admins.php?admin_id=<?php echo $row['admin_ID']; ?>" id="del-btn">Delete</a>
                                   </button>
                                   <button class="button button1" style="margin-left: 10px;">
                                        <a href="update_admins.php?admin_id=<?php echo $row['admin_ID']; ?>" id="upt-btn">Update</a>
                                   </button>
                              </div>
                         </td>
                    </tr>
               <?php } ?>
          </table>
     </div>
     <?php
     //include('footer.php');
     ?>
     <script src="../public/js/admin.js"></script>
</body>

</html>