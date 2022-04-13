<?php
session_start();
include('../config/root.php');
include('../config/db.php');

$fileErr = '';
$err = '';
$success = '';

$vacancy_id = $_GET['vacancy_id'];

if (isset($_SESSION['applicant'])) {
     $username = $_SESSION['uid'];
     $query = "SELECT `applicant_ID` FROM `applicant_reg` WHERE `username` = '$username'";
     $result = mysqli_query($conn, $query);
     if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $id = $row['applicant_ID'];
     }
}

if (isset($_POST['apply'])) {
     if (isset($_SESSION['applicant'])) {
          $full_name = $_POST['full-name'];
          $address_line1 = $_POST['address-1'];
          $address_line2 = $_POST['address-2'];
          $phone_no = $_POST['phone-no'];
          $NIC = $_POST['nic'];
          $district = $_POST['district'];
          $resume = $_FILES['cv'];

          if (empty($full_name) || empty($address_line1) || empty($address_line2) || empty($phone_no) || empty($NIC) || empty($district) || empty($resume)) {
               header("Location: ".ROOT."views/apply.php?vacancy_id=".$vacancy_id."&error=empty&name=".$full_name."&address-1=".$address_line1."&address-2".$address_line2."&phone=".$phone_no."&nic=".$NIC."&dist=".$district);
               exit();
          } 
          else {
               $address = $address_line1 . ',' . $address_line2;
               //checking that uploaded file is pdf or not
               $filename = $_FILES['cv']['name'];
               $fileArr = explode('.', $filename); 
               $fileExt = strtolower(end($fileArr));
               if ($_FILES['cv']['error'] != 0) {
                    header("Location: ".ROOT."views/ apply.php?vacancy_id=".$vacancy_id."&error=upload");
                    exit();  
               }
               else {
                    if ($fileExt !== 'pdf') {
                         header("Location: ".ROOT."views/apply.php?vacancy_id=".$vacancy_id."&error=file_format");
                         exit();
                          
                    } 
                    else {
                         //renaming file with applicant_id and current timestamp
                         $filenameNew = "user-".$id . "vacancy-" . $vacancy_id.uniqid('', true) . "." . $fileExt;
                         $fileDest = $_SERVER['DOCUMENT_ROOT'].'/hireme/uploads/'. $filenameNew;

                         $query2 = "INSERT INTO applications(applicant_ID,vacancy_id,full_name,`address`,phone_no,NIC,district,`resume`) VALUES
                                    ('$id','$vacancy_id','$full_name','$address','$phone_no','$NIC','$district','$fileDest');";
                         
                         $result2 = mysqli_query($conn,$query2);

                         if($result2){
                              if(mysqli_affected_rows($conn)>0){
                                   move_uploaded_file($_FILES['cv']['tmp_name'], $fileDest);
                                   header("Location: ".ROOT."views/apply.php?vacancy_id=".$vacancy_id."&error=none");
                                   exit();
                              }
                         } 
                    }
               }
          }
     }
}
