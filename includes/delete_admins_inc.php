<?php
session_start();

include('../config/root.php');
include('../config/db.php');


if ($_SESSION['admin'] == true) {
    //Delete admin
    if($_SESSION['uid'] == "hiremelk"){
        if (isset($_GET['admin_id'])) {

            $admin_id = $_GET['admin_id'];
    
            $sql = "DELETE FROM `admin` WHERE `admin_ID` = '$admin_id'";
    
            $result = $conn->query($sql);
    
            if ($result == TRUE) {
    
                echo ("<script LANGUAGE='JavaScript'>
            window.alert('Admin deleted successfully');
            window.location.href=".ROOT."'views/view_admins.php';
            </script>");
            } 
            else {
    
                echo "Error:" . $sql . "<br>" . $conn->error;
            }
        }
    }
    else {
        echo ("<script>
            alert('Please log in as Superadmin');
            window.location.href=".ROOT."'views/login.php';
        </script>");
    }
} 

