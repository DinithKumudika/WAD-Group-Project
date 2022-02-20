<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>facilities</title>
     <link rel="stylesheet" href="../public/css/facilities.css">
</head>

<body>
     <?php
     include '../views/header.php';
     ?>
     <div class="container">
          <h1>Facilities of Web Application</h1>
          <h2>Hiremelk is able to provide below facilities to it users and admins</h2>
          <ol type="1">
               <li>User signup with email verification</li>
               <li>User and admin login</li>
               <li>contact page for users to make inqueries, give feedback about application</li>
               <li>Adding job vacancies</li>
               <li>apply for selected job vacancies</li>
               <li>Adming dashboard for administrative taks</li>
               <ul type="disc">
                    <li>edit and delete users</li>
                    <li>Superadmin can delete other admins or update their login credentials</li>
                    <li>edit or delete job vacancies</li>
               </ul>
          </ol>
     </div>
     <?php
     include('./footer.php');
     ?>
</body>

</html>