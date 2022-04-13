<?php

include('../config/db.php');

function applicantCount($conn){
     $count = '';
     $query = "SELECT `applicant_ID` from applicant_reg;";
     $result = mysqli_query($conn,$query);
     if($result){
          $count = mysqli_num_rows($result);
     }
     return $count;
}

function employerCount($conn){
     $count = '';
     $query = "SELECT `emp_id` from emp_reg;";
     $result = mysqli_query($conn,$query);
     if($result){
          $count = mysqli_num_rows($result);
     }
     return $count;
}

function vacancyCount($conn){
     $count = '';
     $query = "SELECT `vacancy_id` from vacancy;";
     $result = mysqli_query($conn,$query);
     if($result){
          $count = mysqli_num_rows($result);
     }
     return $count;
}

function applicationCount($conn){
     $count = '';
     $query = "SELECT `application_id` from applications;";
     $result = mysqli_query($conn,$query);
     if($result){
          $count = mysqli_num_rows($result);
     }
     return $count;
}

function getLastVacancy($conn){
     $query = "SELECT * FROM vacancy ORDER BY vacancy_id DESC LIMIT 1;";
     $result = mysqli_query($conn,$query);
     if($result){
          $row = mysqli_fetch_assoc($result);

     }
     return $row;
}

$applicant_count = applicantCount($conn);

$employer_count = employerCount($conn);

$vacancy_count = vacancyCount($conn);

$application_count = applicationCount($conn);

$latest_vacancy = getLastVacancy($conn);