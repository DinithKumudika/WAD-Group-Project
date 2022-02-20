<?php
     include('../db/db_connect.php');
     if(isset($_POST['apply'])){
          $full_name = $_POST['full-name'];
          $address_line1 = $_POST['address-1'];
          $address_line2 = $_POST['address-2'];
          $phone_no = $_POST['phone-no'];
          $NIC = $_POST['nic'];
          $district = $_POST['district'];
          $resume = $_FILES['cv'];
     }
     echo $_SESSION['vacancy-id'];
     if(isset($_SESSION['vacancy_id'])){
          $query = "SELECT * FROM `vacancy` WHERE vacancy_id='{$_SESSION['vacancy_id']}'";
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
     <div class="job-details">
          <h2>Web Developer</h2>
          <h3>We are looking for a skilled web developer who will be responsible for developing and/or designing websites for our company. You will be working alongside a team of other developers in creating, maintaining, and updating our websites.
               In order for you to succeed in this role, you will need to be proficient in JavaScript, HTML, CSS, and have solid knowledge and experience in programming applications.</h3>

          <div class="btn-container">
               <button class="add-btn" id="button">
                    Apply
               </button>
          </div>
     </div>
     <div class="bg-modal">
          <div class="modal-contents">
               <div class="close">+</div>
               <form action="" method="POST">
                    <div class="model-sub-container">
                         <label for="job-title">Full Name:</label>
                         <input type="text" placeholder="Full name" name="full-name">
                         <p class="err">*this field is required</p>
                    </div>
                    <div class="model-sub-container">
                         <label for="position">Address:</label>
                         <div class="address">
                              <div>
                                   <input type="text" placeholder="Address line 1" name="position" class="address-1" name="address-1">
                              </div>
                              <div>
                                   <input type="text" placeholder="Address line 2" name="position" class="address-2" name="address-2">
                              </div>
                         </div>
                         <p class="err">*this field is required</p>
                    </div>
                    <div class="model-sub-container">
                         <label for="salary">Phone no:</label>
                         <input type="text" placeholder="Phone no" name="phone-no">
                         <p class="err">*this field is required</p>
                    </div>
                    <div class="model-sub-container">
                         <label for="nic">NIC:</label>
                         <input type="text" placeholder="NIC" name="nic">
                         <p class="err">*this field is required</p>
                    </div>
                    <div class="model-sub-container">
                         <label for="district">District:</label>
                         <select name="districts" id="district" name="district">
                              <option value="deafault" disabled='disabled' selected>choose you district</option>
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
                         <p class="err">*this field is required</p>
                    </div>
                    <div class="model-sub-container" class="cv-upload">
                         <label for="cv">Upload Resume:</label>
                         <div>
                              <input type="file" name="cv" id="cv-upload">
                              <button id="cv-btn" type="button">Upload resume</button>
                              <span id="cv-text">No file chosen...</span>
                         </div>
                         <p class="err">*this field is required</p>
                    </div>
                    <input type="submit" value="Apply for job" name="apply" class="btn">
               </form>
          </div>
     </div>
     <?php
     include('footer.php');
     ?>
     <script src="../public/js/apply.js"></script>
</body>

</html>