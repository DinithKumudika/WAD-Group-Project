<?php

include('../includes/view_users_inc.php');

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
          <h1 class="t-head">Registered Employees</h1>
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

               <?php foreach ($employer_datas as $data) { ?>
                    <tr>
                         <td class="td-1">
                              <?= $data['first_name']; ?>
                         </td>
                         <td class="td-1">
                              <?= $data['last_name']; ?>
                         </td>
                         <td class="td-2">
                              <?= $data['email']; ?>
                         </td>
                         <td class="td-3">
                              <?= $data['phone_no']; ?>
                         </td>
                         <td class="td-3">
                              <?= $data['company']; ?>
                         </td>
                         <td class="td-3">

                              <?= $data['username']; ?>
                         </td>
                         <td class="td-4">
                              <div class="btn-container">
                                   <button class="button button3">
                                        <a href="../includes/delete_users_inc.php?emp_id=<?php echo $data['emp_id']; ?>">Delete</a>
                                   </button>
                              </div>
                         </td>
                    </tr>
               <?php } ?>
          </table>

          <h1 class="t-head">Registered Applicants</h1>
          <table>
               <thead>
                    <tr>
                         <th>first Name</th>
                         <th>Last Name</th>
                         <th>Email</th>
                         <th>Phone Number</th>
                         <th>User name</th>
                         <th>Action</th>
                    </tr>
               </thead>

               <?php foreach ($applicant_datas as $data) { ?>
                    <tr>
                         <td class="td-1">
                              <?= $data['first_name']; ?>
                         </td>
                         <td class="td-1">
                              <?= $data['last_name']; ?>
                         </td>
                         <td class="td-2">
                              <?= $data['email']; ?>
                         </td>
                         <td class="td-3">
                              <?= $data['phone_no']; ?>
                         </td>
                         <td class="td-3">

                              <?= $data['username']; ?>
                         </td>
                         <td class="td-4">
                              <div class="btn-container">
                                   <button class="button button3">

                                        <a href="../includes/delete_users_inc.php?applicant_id=<?php echo $data['applicant_ID']; ?>">Delete</a>
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