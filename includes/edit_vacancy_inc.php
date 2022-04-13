<?php

include('../config/root.php');
include('../config/db.php');

//update data to the database

if (isset($_POST['update'])) {

    $job_title = $_POST['job_title'];

    $position = $_POST['position'];

    $company = $_POST['company'];

    $salary = $_POST['salary'];

    $category = $_POST['category'];

    $description = $_POST['description'];

    $sql = "UPDATE `vacancy` SET 
             `job_title`='$job_title',
             `position`='$position',
             `company`='$company',
             `salary`='$salary',
             `category`='$category',
             `description`='$description' 
             WHERE `vacancy_id`='$vacancy_id';";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo '<script language="javascript">alert("Record updated successfully!")</script>';
        echo ("<script>
               window.location.href=".ROOT."'views/view_vacancy.php';
               </script>");
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
