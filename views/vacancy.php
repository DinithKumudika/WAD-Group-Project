<?php
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
          <tr>
               <td>Web Developer</td>
               <td>ABC Infotech Pvt Ltd</td>
               <td>Rs.150,000</td>
               <td><button>Apply</button></td>
          </tr>
          <tr>
               <td>Business Analyst</td>
               <td>XYZ Pvt Ltd</td>
               <td>Rs.125,000</td>
               <td><a href="apply.php"><button id="button">Apply</button></a></td>
          </tr>
     </table>
     <?php
     include('footer.php');
     ?>
     <script src="../public/js/vacancy.js"></script>
</body>

</html>