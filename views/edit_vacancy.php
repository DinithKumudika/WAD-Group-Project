<?php
session_start();
include('../db/db_connect.php');
$query = "SELECT * FROM vacancy";
$id = array();
$rows;
$result = mysqli_query($conn, $query);
//update data to the database
if (isset($_POST['update'])) {

    $job_title = $_POST['job_title'];

    $vacancy_id = $_POST['vacancy_id'];

    $position = $_POST['position'];

    $company = $_POST['company'];

    $salary = $_POST['salary'];

    $category = $_POST['category'];

    $description = $_POST['description'];

    $emp_id = $_POST['emp_id'];

    $sql = "UPDATE `vacancy` SET `job_title`='$job_title',`position`='$position',`company`='$company',`salary`='$salary',`category`='$category',`description`='$description',`emp_id`='$emp_id'  WHERE `vacancy`.`vacancy_id`='$vacancy_id'";


    $result = $conn->query($sql);


    if ($result == TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Record updated successfully")';
        echo '</script>';
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
//get value from the database 
if (isset($_GET['vacancy_id'])) {

    $vacancy_id = $_GET['vacancy_id'];

    $sql = " SELECT * FROM `vacancy` WHERE `vacancy_id`='$vacancy_id'";

    echo "vacancy id" . $vacancy_id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $vacancy_id  = $row['vacancy_id'];

            $job_title = $row['job_title'];

            $position = $row['position'];

            $company  = $row['company'];

            $salary = $row['salary'];

            $category = $row['category'];

            $description = $row['description'];

            $emp_id = $row['emp_id'];
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
    <title>Edit Vacancies</title>
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
    <div style="margin-left:250px; margin-top:10px;">

        <form action="" method="post">

            <label for="vacancy_id"></label>
            <br>
            <input type="hidden" id="vacancy_id" class="text" name="vacancy_id" value="<?php echo $vacancy_id; ?>">
            <br>
            <br>
            <label for="job_title">Job Title:</label>
            <br>
            <br>
            <input type="text" id="job_title" class="text" name="job_title" value="<?php echo $job_title; ?>">
            <br>
            <br>
            <label for="position">Position:</label>
            <br>
            <br>
            <input type="text" id="position" class="text" name="position" value="<?php echo $position; ?>">
            <br>
            <br>
            <label for="company">Company:</label>
            <br>
            <br>
            <input type="text" id="company" class="text" name="company" value="<?php echo $company; ?>">
            <br>
            <br>
            <label for="salary">Salary:</label>
            <br>
            <br>
            <input type="text" id="salary" class="text" name="salary" value="<?php echo $salary; ?>">
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
            <label for="description">description</label>
            <br>
            <br>
            <textarea rows="15"><?php echo $description; ?></textarea>
            <input type="submit" value="Update" name="update" class="submit-btn">
        </form>
    </div>
    <?php
    //include('footer.php');
    ?>
    <script src="../public/js/vacancy.js"></script>
</body>

</html>