<?php
session_start();
include('../db/db_connect.php');
$query = "SELECT * FROM emp_reg";
$id = array();
$rows;
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <title>Users</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/Admin_header.css">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/vacancy.css">
     <link rel="stylesheet" href="../public/css/footer.css">  
     <link rel="stylesheet" href="../public/css/Admin_css.css">
     <link rel="stylesheet" href="../public/css/Admin_header.css">
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
     


     <div class="div-main">

     <table>
          <thead>
               <tr>
                     <th>first Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Company</th>
                    <th>User name</th>
                    
                    <th>Action</th>
               </tr>
          </thead>

          <?php while ($row = mysqli_fetch_array($result)) { ?>
               <tr>
                     <td class="td-1">
                         <?= $row['first_name']; ?>
                    </td>
                    <td class="td-1">
                         <?= $row['last_name']; ?>
                    </td>
                    <td class="td-2">
                         <?= $row['email']; ?>
                    </td>
                    <td class="td-3">
                         <?= $row['phone_no']; ?>
                    </td>
                    <td class="td-3">
                         <?= $row['company']; ?>
                    </td> <td class="td-3">

                         <?= $row['username']; ?>
                    </td>
                    <td class="td-4">
                         <div class="btn-container">
                              <!-- <button class="button button1"> -->
                              <!--  -->
                                  <!-- <a href="./Admin_edit_vacancy.php?vacancy_id=<?php echo $row['emp_id ']; ?>">Update</a> -->
                              <!-- </button> -->
                              <button class="button button3">
                         
                                  <a href="./Admin_delete_users.php?emp_id=<?php echo $row['emp_id']; ?>">Delete</a>
                              </button>
                              
                         </div>
                    </td>
               </tr>
               <div class="bg-modal">
                    <div class="modal-contents">
                         <div class="model-sub-container">
                              <h1><?= $row['job_title']; ?></h1>
                              <h2>Position-:<?= $row['position']; ?></h2>
                              <h2>Company name-:<?= $row['company']; ?></h2>
                              <h2>Job category-:<?=$row['category'];?></h2>
                              <h2>Salary-:<?=$row['salary'];?></h2>
                              <div class="description">
                                   <p><?=$row['description'];?></p>
                              </div>
                         </div>
                         <div class="close">+</div>
                         <button>
                              <a href="./apply.php?user_id='.<?=$row['vacancy_id']?>.'">Apply</a>
                         </button>
                    </div>
               </div>
          <?php } ?>
     </table>
     </div>
     <?php
     //include('footer.php');
     ?>
     <script src="../public/js/vacancy.js"></script>
</body>
</html>