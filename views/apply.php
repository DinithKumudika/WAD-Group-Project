<?php
session_start();
include('../config/db.php');

$empty_input = "";
$upload_err = "";
$invalid_file = "";
$success_msg = "";

if(isset($_SESSION['applicant'])){
     if (isset($_GET['vacancy_id'])) {
          $vacancy_id = $_GET['vacancy_id'];
          $query = "SELECT * FROM `vacancy` WHERE vacancy_id='$vacancy_id'";
          $result = mysqli_query($conn, $query);
          $row = mysqli_fetch_assoc($result);
     }
}

if(isset($_GET['error'])){
     $error = $_GET['error'];
     if($error === "empty"){
          $empty_input = "All fields are required";
     }
     else if($error === "upload"){
          $upload_err = "Problem with uploading the file";
     }
     else if($error === "file_format"){
          $invalid_file = "Uploaded file is not a pdf";
     }
     else if($error === "none"){
          echo "<script>alert('Success!');</script>";
          echo "window.location.href = ".ROOT."'views/vacancy.php'";
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
               <form action="../includes/apply_inc.php?vacancy_id=<?php echo $vacancy_id ?>" enctype="multipart/form-data" method="POST">
                    <div class="sub-container">
                         <div>
                              <label for="job-title">Full Name:</label>
                         </div>
                         <div>
                         <?php
                              if(isset($_GET['name'])){
                                   echo '<input type="text" placeholder="Full name" name="full-name" value = '.$_GET['name'].'>';
                              }
                              else {
                                   echo '<input type="text" placeholder="Full name" name="full-name">';
                              }
                         ?>     
                         </div>
                    </div>
                    <div class="sub-container">
                         <label for="position">Address:</label>
                         <div class="address">
                              <div>
                                   <?php
                                        if(isset($_GET['address-1'])){
                                             echo '<input type="text" placeholder="Address line 1" class="address-1" name="address-1" value='.$_GET['address-1'].'>';
                                        }
                                        else{
                                             echo '<input type="text" placeholder="Address line 1" class="address-1" name="address-1">';
                                        }
                                   ?>
                              </div>
                              <div>
                                   <?php
                                        if(isset($_GET['address-2'])){
                                             echo '<input type="text" placeholder="Address line 2" class="address-2" name="address-2" value='.$_GET['address-2'].'>';
                                        }
                                        else{
                                             echo '<input type="text" placeholder="Address line 2" class="address-2" name="address-2">';
                                        }
                                   ?>
                                   
                              </div>
                         </div>
                    </div>
                    <div class="sub-container">
                         <label for="salary">Phone no:</label>
                         <?php
                              if(isset($_GET['phone'])){
                                   echo '<input type="text" placeholder="Phone no" name="phone-no" value='.$_GET['phone'].'>';
                              }
                              else{
                                   echo '<input type="text" placeholder="Phone no" name="phone-no">';
                              }
                         ?>
                    </div>
                    <div class="sub-container">
                         <label for="nic">NIC:</label>
                         <?php
                              if(isset($_GET['nic'])){
                                   echo '<input type="text" placeholder="NIC" name="nic" value='.$_GET['nic'].'>';
                              }
                              else{
                                   echo '<input type="text" placeholder="NIC" name="nic">';
                              }
                         ?>
                    </div>
                    <div class="sub-container">
                         <label for="district">District:</label>
                         <select id="district" name="district">
                              <?php
                                   if(isset($_GET['dist'])){
                                        echo '<option value='.$_GET['dist'].' disabled="disabled" selected>'.$_GET['dist'].'</option>';
                                   }
                                   else{
                                        echo '<option value="" disabled="disabled" selected>choose you district</option>';
                                   }
                              ?>
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
                         <p class="err"><?= $invalid_file; ?></p>
                    </div>
                    <p class="err"><?= $empty_input; ?></p>
                    <input type="submit" value="Apply for job" name="apply" class="btn">
               </form>
          </div>
     </div>

     <script src="../public/js/apply.js"></script>
</body>

</html>