<?php
session_start();
include('../db/db_connect.php');
$fileErr = '';
$err = '';
$success = '';

$applicant_id = $_SESSION['user_id'];
$vacancy_id = $_GET['vacancy_id'];

if (isset($_GET['vacancy_id'])) {
     $query1 = "SELECT * FROM vacancy WHERE vacancy_id='{$vacancy_id}'";
     $result1 = mysqli_query($conn, $query1);
     $row = mysqli_fetch_assoc($result1);
}

if (isset($_POST['apply'])) {
     $full_name = $_POST['full-name'];
     $address_line1 = $_POST['address-1'];
     $address_line2 = $_POST['address-2'];
     $phone_no = $_POST['phone-no'];
     $NIC = $_POST['nic'];
     $district = $_POST['district'];
     $resume = $_FILES['cv'];

     //checking that uploaded file is pdf or not
     $filename = $_FILES['cv']['name'];
     $tempFile = $_FILES['cv']['tmp_name'];
     $fileErr = $_FILES['cv']['error'];
     $fileArr = explode('.', $filename);
     $fileExt = strtolower(end($fileArr));

     if (empty($full_name) || empty($address_line1) || empty($address_line2) || empty($phone_no) || empty($NIC) || empty($district) || empty($resume)) {
          $err = 'All the fields are required';
     } else {
          $address = $address_line1 . ',' . $address_line2;
          if ($fileErr === 0) {
               if ($fileExt === 'pdf') {
                    //renaming file with applicant_id and current time
                    $filenameNew = $_SESSION['user_id'] . "-" . uniqid('', true) . "." . $fileExt;
                    $fileDest = '../uploads/' . $filenameNew;
                    move_uploaded_file($tempFile, $fileDest);
                    $query2 = "INSERT INTO applications(applicant_ID,vacancy_id,full_name,`address`,phone_no,NIC,district,`resume`) VALUES";
                    $success = 'Application sent successfully!';
               } else {
                    $fileErr = "pdf files only";
               }
          } else {
               echo "error uploading file";
          }
     }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Hire</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/apply.css">
     <link rel="stylesheet" href="../public/css/footer.css">
</head>

<body>
     <?php
     include('header.php');
     ?>
     <div class="main-container">
          <div class="bg-modal">
               <div class="modal-contents">
                    <div class="model-sub-container">
                         <h1><?= $row['job_title']; ?></h1>
                         <h2>Position-:<?= $row['position']; ?></h2>
                         <h2>Company name-:<?= $row['company']; ?></h2>
                         <h2>Job category-:<?= $row['category']; ?></h2>
                         <h2>Salary-:<?= $row['salary']; ?></h2>
                         <div class="description">
                              <p><?= $row['description']; ?></p>
                         </div>
                    </div>
               </div>
          </div>
          <div class="container">
               <h1>Apply for profession</h1>
               <form action="" method="POST" enctype="multipart/form-data">
                    <div class="sub-container">
                         <div>
                              <label for="job-title">Full Name:</label>
                         </div>
                         <div>
                              <input type="text" placeholder="Full name" name="full-name">
                         </div>
                    </div>
                    <div class="sub-container">
                         <label for="position">Address:</label>
                         <div class="address">
                              <div>
                                   <input type="text" placeholder="Address line 1" name="position" class="address-1" name="address-1">
                              </div>
                              <div>
                                   <input type="text" placeholder="Address line 2" name="position" class="address-2" name="address-2">
                              </div>
                         </div>
                    </div>
                    <div class="sub-container">
                         <label for="salary">Phone no:</label>
                         <input type="text" placeholder="Phone no" name="phone-no">
                    </div>
                    <div class="sub-container">
                         <label for="nic">NIC:</label>
                         <input type="text" placeholder="NIC" name="nic">
                    </div>
                    <div class="sub-container">
                         <label for="district">District:</label>
                         <select name="districts" id="district" name="district">
                              <option value="" disabled='disabled' selected>choose you district</option>
                              <option value="Ampara">Ampara</option>
                              <option value="Anuradhapura">Anuradhapura</option>
                              <option value="Badulla">Badulla</option>
                              <option value="Batticaloa">Batticaloa</option>
                              <option value="Colombo">Colombo</option>
                              <option value="Financial">Financial</option>
                              <option value="Galle">Galle</option>
                              <option value="Gampaha">Gampaha</option>
                              <option value="Hambantota">Hambantota</option>
                              <option value="Jaffna">Jaffna</option>
                              <option value="Kalutara">Kalutara</option>
                              <option value="Kandy">Kandy</option>
                              <option value="Kegalle">Kegalle</option>
                              <option value="Kilinochchi">Kilinochchi</option>
                              <option value="Kurunegala">Kurunegala</option>
                              <option value="Mannar">Mannar</option>
                              <option value="Matale">Matale</option>
                              <option value="Matara">Matara</option>
                              <option value="Monaragala">Monaragala</option>
                              <option value="Mullaitivu">Mullaitivu</option>
                              <option value="Nuwara Eliya">Nuwara Eliya</option>
                              <option value="Polonnnaruwa">Polonnnaruwa</option>
                              <option value="Puttalam">Puttalam</option>
                              <option value="Ratnapura">Ratnapura</option>
                              <option value="Trincomalee">Trincomalee</option>
                              <option value="Vavuniya">Vavuniya</option>
                         </select>
                    </div>
                    <div class="sub-container" class="cv-upload">
                         <label for="cv">Upload Resume:</label>
                         <div>
                              <input type="file" name="cv" id="cv-upload">
                              <button id="cv-btn" type="button">Upload resume</button>
                              <span id="cv-text">No file chosen...</span>
                         </div>
                         <p class="err"><?= $fileErr; ?></p>
                    </div>
                    <p class="err"><?= $err; ?></p>
                    <input type="submit" value="Apply for job" name="apply" class="btn">
               </form>
          </div>
     </div>

     <script src="../public/js/apply.js"></script>
</body>

</html>