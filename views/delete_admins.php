<?php
session_start();
include('../db/db_connect.php');

if ($_SESSION['user_admin'] == "hiremelk") {
    //Delete employee users 
    if (isset($_GET['admin_id'])) {

        $admin_id = $_GET['admin_id'];

        $sql = "DELETE FROM `admin` WHERE .`admin_ID` = '$admin_id'";

        echo "" . $sql;

        $result = $conn->query($sql);

        if ($result == TRUE) {

            echo ("<script LANGUAGE='JavaScript'>
        window.alert('Admin deleted successfully');
        window.location.href='view_admins.php';
        </script>");
        } else {

            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
} else {
    echo ("<script>
        alert('Please log in as Superadmin');
        window.location.href='login.php';
    </script>");
}
