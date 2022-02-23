<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>facilities</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/facilities.css">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/footer.css">
</head>

<body>
     <?php
     include '../views/header.php';
     ?>
     <div class="container">
          <div class="main-content">
               <h1>Facilities of Web Application</h1>
               <div>
               <i class="fa-solid fa-hand-point-down"></i>
               <h2>Hiremelk is able to provide below facilities to it users and admins</h2>
               </div>
               <ol type="1">
                    <li>User signup with email verification</li>
                    <li>User and admin login</li>
                    <li>Custome home page depending on the logged in user</li>
                    <li>contact page for users to make inqueries, give feedback about application</li>
                    <li>Adding job vacancies</li>
                    <li>apply for selected job vacancies</li>
                    <li>Admin dashboard for administrative taks</li>
                    <ul type="disc">
                         <li>edit and delete users</li>
                         <li>Superadmin can add, delete other admins or update their login credentials</li>
                         <li>edit or delete job vacancies</li>
                    </ul>
               </ol>
          </div>
          <div>
               <img src="../public/assets/images/fc.png" alt="fc">
          </div>
     </div>
     <?php
     include('./footer.php');
     ?>
</body>

</html>