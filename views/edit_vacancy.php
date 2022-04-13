<?php

include('../config/db.php');
//get values from the database 

if (isset($_GET['vacancy_id'])) {

    $vacancy_id = $_GET['vacancy_id'];

    $sql = " SELECT * FROM `vacancy` WHERE `vacancy_id`='$vacancy_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = mysqli_fetch_assoc($result);
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
    <div style="margin-left:250px; margin-top:90px;">

        <form action="../includes/edit_vacancy_inc.php" method="post">
            <label for="job_title">Job Title:</label>
            <br>
            <br>
            <input type="text" id="job_title" class="text" name="job_title" value="<?php echo $row['job_title']; ?>">
            <br>
            <br>
            <label for="position">Position:</label>
            <br>
            <br>
            <input type="text" id="position" class="text" name="position" value="<?php echo $row['position']; ?>">
            <br>
            <br>
            <label for="company">Company:</label>
            <br>
            <br>
            <input type="text" id="company" class="text" name="company" value="<?php echo $row['company']; ?>">
            <br>
            <br>
            <label for="salary">Salary:</label>
            <br>
            <br>
            <input type="text" id="salary" class="text" name="salary" value="<?php echo $row['salary']; ?>">
            <br>
            <br>
            <label for="category">Category:</label>
            <br>
            <br>
            <select name="category" id="job-cat">
                <option value= <?php $row['category'] ?> disabled='disabled' selected><?php echo $row['category']; ?></option>
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
            <textarea rows="15" name="description"><?php $row['description']; ?></textarea>
            <input type="submit" value="Update" name="update" class="submit-btn">
        </form>
    </div>
    <?php
    //include('footer.php');
    ?>
    <script src="../public/js/vacancy.js"></script>
</body>

</html>