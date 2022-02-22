<?php
session_start();
include('../db/db_connect.php');
$query = "SELECT * FROM vacancy";
$i = 0;
$rows;
$result = mysqli_query($conn, $query);

if (isset($_POST['user_admin'])) {
     $_SESSION['vacancy-id'] = $id;
}

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

          <?php while($row = mysqli_fetch_array($result)) { ?>
               <form action="vacancy.php" method="post">
                    <?php $id = $row['vacancy_id'] ?>
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
                           <button class="delete" ><a href="vacancy-delete.php?deleteid=<?= $row['vacancy_id']; ?>" class="line1">Delete</a></button>
                         </td>
                         <td class="td-5">
                         <button class="edit" ><a href="vacancy-edit.php?updateid=<?= $row['vacancy_id']; ?>" class="line2">Edit</a></button>
                         </td>
                    </tr>
               </form>
          <?php } ?>
     </table>
     <?php
     include('footer.php');
     ?>
     <script src="../public/js/vacancy.js"></script>
</body>

</html>