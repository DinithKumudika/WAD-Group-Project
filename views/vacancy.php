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
</head>

<body>
     <?php
     include('header.php');
     ?>
     <table>
          <thead>
               <tr>
                    <th>Position</th>
                    <th>Company</th>
                    <th>salary</th>
               </tr>
          </thead>

          <?php while ($row = mysqli_fetch_array($result)) { ?>
               <tr>
                    <td class="td-1">
                         <?= $row['position']; ?>
                    </td>
                    <td class="td-2">
                         <?= $row['company']; ?>
                    </td>
                    <td class="td-3">
                         <?= $row['salary']; ?>
                    </td>
                    <td class="td-4">
                         <div class="btn-container">
                              <button class="add-btn more-info">
                                   More info
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
                         <form action="" method="POST">
                              <input type="submit" value="Apply for job" name="apply" class="btn">
                         </form>
                    </div>
               </div>
          <?php } ?>
     </table>
     <?php
     //include('footer.php');
     ?>
     <script src="../public/js/vacancy.js"></script>
</body>
</html>