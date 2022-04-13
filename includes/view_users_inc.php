<?php

include('../config/db.php');
$applicant_datas = array();
$employer_datas = array();
$query1 = "SELECT * FROM applicant_reg";
$query2 = "SELECT * FROM emp_reg";
$rows;
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);

while($row = mysqli_fetch_assoc($result1)){
     $applicant_datas[] = $row;
}

while($row = mysqli_fetch_assoc($result2)){
     $employer_datas[] = $row;
}