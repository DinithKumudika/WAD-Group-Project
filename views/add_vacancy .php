
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Add Vacancies</title>
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

     <div style="margin-left:250px; margin-top:90px">

          <form action="../includes/add_vacancy_inc.php" method="post">

               <label for="job_title">Job Title:</label>
               <br>
               <br>
               <input type="text" id="job_title" name="job_title" class="text">
               <br>
               <br>
               <label for="position">Position:</label>
               <br>
               <br>
               <input type="text" id="position" name="position" class="text">
               <br>
               <br>
               <label for="company">Company:</label>
               <br>
               <br>
               <input type="text" id="company" name="company" class="text">
               <br>
               <br>
               <label for="salary">Salary:</label>
               <br>
               <br>
               <input type="text" id="salary" name="salary" class="text">
               <br>
               <br>
               <label for="category">Category:</label>
               <br>
               <br>
               <select name="category" id="job-cat">
                    <option value="deafault" disabled='disabled' selected>Choose job category..</option>
                    <option value="Administration,business and management">Administration,business and management</option>
                    <option value="Computing and IT">Computing and IT</option>
                    <option value="Construction and building">Construction and building</option>
                    <option value="Education and training">Education and training</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Financial">Financial</option>
                    <option value="Graphic Design">Graphic Design</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Hospitality and tourism">Hospitality and tourism</option>
                    <option value="Human Resources">Human Resources</option>
                    <option value="Law">Law</option>
                    <option value="Manufacturing and production">Manufacturing and production</option>
                    <option value="Retail and customer Services">Retail and customer Services</option>
                    <option value="Printing,publishing and advertising">Printing,publishing and advertising</option>
                    <option value="Security,uniformed and protective services">Security,uniformed and protective services</option>
                    <option value="Sport and leisure">Sport and leisure</option>
                    <option value="Transport,distibution and logistics">Transport,distibution and logistics</option>
               </select>
               <br>
               <br>
               <label for="description">description</label><br>
               <br>
               <br>
               <textarea rows="15"></textarea>
               <input type="submit" value="submit" name="submit" class="submit-btn">
          </form>
     </div>
     <?php
     //include('footer.php');
     ?>
     <script src="../public/js/vacancy.js"></script>
</body>

</html>