<?php
  include('../includes/inc_admin_home.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/header.css">
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
     <div class="container">
          <h2>Welcome Back Admin!</h2>
          <div class="s-container">
               <div class="card c-orange">
                    <h3>Total Jobseekers</h3>
                    <p><?php echo $applicant_count; ?></p>
               </div>

               <div class="card c-green">
                    <h3>Total Employers</h3>
                    <p><?php echo $employer_count; ?></p>
               </div>

               <div class="card c-blue">
                    <h3>Total Vacancies</h3>
                    <p><?php echo $vacancy_count; ?></p>
               </div>

               <div class="card c-red">
                    <h3>Total Aplications</h3>
                    <p><?php echo $application_count; ?></p>
               </div>
          </div>
          <div class="s-container" style="flex-direction: column;">
               <h3>Latest Job Vacancy</h3>
               <div class="line"></div>
               <div>
                    <table>
                         <tr>
                              <th>Title</th>
                              <th>Position</th>
                              <th>Company</th>
                              <th>Salary</th>
                              <th>Category</th>
                         </tr>
                         <tr>
                              <td><?php echo $latest_vacancy['job_title']; ?></td>
                              <td><?php echo $latest_vacancy['position']; ?></td>
                              <td><?php echo $latest_vacancy['company']; ?></td>
                              <td><?php echo $latest_vacancy['salary']; ?></td>
                              <td><?php echo $latest_vacancy['category']; ?></td>
                              <td>
                                   <form action="" method="POST">
                                        <input type="button" value="View" name="view-btn" class="view-btn">
                                   </form>
                              </td>
                         </tr>
                    </table>
               </div>
          </div>
     </div>
</body>

</html>