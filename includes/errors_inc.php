<?php

//error handling

//empty inputs in login
function emptyInputLogin($username,$password){
     if(empty($username)||empty($password)){
          $isempty = true;   
     }
     else{
          $isempty = false;
     }
     return $isempty;
}

function emptyInputApplicantSignup($firstname,$lastname,$email,$phone,$username,$password){
     if(empty($firstname)||empty($lastname)||empty($email)||empty($phone)||empty($username)||empty($password)){
          $isempty = true;   
     }
     else{
          $isempty = false;
     }
     return $isempty;
}

function emptyInputEmployerSignup($firstname,$lastname,$email,$phone,$company,$username,$password){
     if(empty($firstname)||empty($lastname)||empty($email)||empty($phone)||empty($company)||empty($username)||empty($password)){
          $isempty = true;   
     }
     else{
          $isempty = false;
     }
     return $isempty;
}

//checking does user exist in the system
function checkUser($username,$password){
     $user = array(
          'is_valid'=> '',
          'type' =>''
     );

                 
}

// function emptyInputSignup($fname,$lname){
//      if(empty($username)||empty($password)){
//           $isempty = true;   
//      }
//      else{
//           $isempty = false;
//      }
//      return $isempty;
// }

//check for valid emails
function checkApplicantEmail($email){
     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $isValid = false;
     }
     else{
          $isValid = true;
     }
     return $isValid;
}

function checkEmployerEmail($email){
     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
         $isValid = false;
     }
     else{
          $isValid = true;
     }
     return $isValid;
}

//check for valid username

function checkApplicantUid($username){
     //username must include at least one uppercase letter, one lowercase letter, one digit and between 5-32 characters 
     $regExp ="/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]){5,32}$/";
     if(!preg_match($regExp,$username)){
          $isValid = false;
     }
     else{
          $isValid = true;
     }
     return $isValid;
}

function checkEmployerUid($username){
     $regExp ="/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]){5,32}$/";
     if(!preg_match($regExp,$username)){
          $isValid = false;
     }
     else{
          $isValid = true;
     }
     return $isValid;
}

//check for valid password

function checkApplicantPwd($password){
     //password must contain at least one uppercaseletter, one lowercase letter,one digit,one special character and between 8-32 characters 
     $regExp ="/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=.\-_*])([a-zA-Z0-9@#$%^&+=*.\-_]){8,32}$/";
     if(!preg_match($regExp,$password)){
          $isValid = false;
     }
     else{
          $isValid = true;
     }
     return $isValid;
}

function checkEmployerPwd($password){
     $regExp ="/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=.\-_*])([a-zA-Z0-9@#$%^&+=*.\-_]){8,32}$/";
     if(!preg_match($regExp,$password)){
          $isValid = false;
     }
     else{
          $isValid = true;
     }
     return $isValid;
}

//check for valid telephone number

function checkApplicantTelno($phone){
     $length = strlen($phone);
     if(!is_numeric($phone) && $length!=10){
          $isValid = false;
     }
     else{
          $isValid = true;
     }
     return $isValid;
}

function checkEmployerTelno($phone){
     $length = strlen($phone);
     if($length!==10 && !is_numeric($phone)){
          $isValid = false;
     }
     else{
          $isValid = true;
     }
     return $isValid;
}

//checking for email is already in the db before sign up

function applicantEmailExist($email){
     include("../config/db.php");
     $query = "SELECT `email` FROM `applicant_reg` WHERE `email`='$email';";
     $result = mysqli_query($conn,$query);
     if($result){
          if(mysqli_num_rows($result)!==0){
               $isExist = true;
          }
          else{
               $isExist = false;
          }
     } 
     return $isExist;
}

function employerEmailExist($email){
     include("../config/db.php");
     $query = "SELECT `email` FROM `emp_reg` WHERE `email`='$email';";
     $result = mysqli_query($conn,$query);
     if($result){
          if(mysqli_num_rows($result)!==0){
               $isExist = true;
          }
          else{
               $isExist = false;
          }
     }
     return $isExist;
}

//checking for username is already in the db before sign up

function applicantUidExist($username){
     include("../config/db.php");
     $query = "SELECT `username` FROM `applicant_reg` WHERE `username`=$username";
     $result = mysqli_query($conn,$query);
     if($result){
          if(mysqli_num_rows($result)!==0){
               $isExist = true;
          }
          else{
               $isExist = false;
          }
     }
     return $isExist;
}

function employerUidExist($username){
     include("../config/db.php");
     $query = "SELECT `username` FROM `emp_reg` WHERE `username`=$username";
     $result = mysqli_query($conn,$query);
     if($result){
          if(mysqli_num_rows($result)!==0){
               $isExist = true;
          }
          else{
               $isExist = false;
          }
     }
     return $isExist;
}

