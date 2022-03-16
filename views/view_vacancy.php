<?php
session_start();
include('../db/db_connect.php');
$query = "SELECT * FROM vacancy";
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
     
     <title>Vacancies</title>
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
     


     <div class="div-main">

     <table>
          <thead>
               <tr>
                     <th>job Title</th>
                    <th>Position</th>
                    <th>Company</th>
                    <th>salary</th>
                    <th>category</th>
                    <th>Action</th>
               </tr>
          </thead>

          <?php while ($row = mysqli_fetch_array($result)) { ?>
               <tr>
                     <td class="td-1">
                         <?= $row['job_title']; ?>
                    </td>
                    <td class="td-1">
                         <?= $row['position']; ?>
                    </td>
                    <td class="td-2">
                         <?= $row['company']; ?>
                    </td>
                    <td class="td-3">
                         <?= $row['salary']; ?>
                    </td>
                    <td class="td-3">
                         <?= $row['category']; ?>
                    <td class="td-4">
                         <div class="btn-container">
                              <button class="button button1">
                              <!--  -->
                                  <a href="edit_vacancy.php?vacancy_id=<?php echo $row['vacancy_id']; ?>">Update</a>
                              </button>
                              <button class="button button3">
                                  
                                  <a href="delete_vacancy.php?vacancy_id=<?php echo $row['vacancy_id']; ?>">Delete</a>
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
     <script src="../public/js/vacancy.js"></script>
</body>
</html>