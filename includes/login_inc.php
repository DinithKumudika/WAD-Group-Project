<?php
session_start();

include('../config/db.php');
include('../config/root.php');

if (isset($_POST['login'])) {
    $username = mysqli_escape_string($conn,htmlspecialchars($_POST['username'])) ;
    $password = mysqli_escape_string($conn,htmlspecialchars($_POST['pwd']));

    if(empty($username)||empty($password)){
        header("Location: ".ROOT."views/login.php?error=empty&uid=".$username);
        exit();
    }
    else{
        $query1 = "SELECT `username`,`password` FROM `applicant_reg` WHERE `username`='$username' AND `password`='$password';";
        $query2 = "SELECT `username`,`password` FROM `emp_reg` WHERE `username`='$username' AND `password`='$password';";
        $query3 = "SELECT `username`,`password` FROM `admin` WHERE `username`='$username' AND `password`='$password';";
        $result1 = mysqli_query($conn,$query1);
        $result2 = mysqli_query($conn,$query2);
        $result3 = mysqli_query($conn,$query3);

        $count1 = mysqli_num_rows($result1);
        $count2 = mysqli_num_rows($result2);
        $count3 = mysqli_num_rows($result3);


        if($result1||$result2||$result3){
            if($count1!=0 && $count2!=0){
                    $_SESSION['uid'] = $username;
                    $_SESSION['default'] = true;
                    header("Location: ".ROOT."views/home.php");
                    exit();
            }
            else if($count1!=0){
                    $_SESSION['uid'] = $username;
                    $_SESSION['applicant'] = true;
                    header("Location: ".ROOT."views/home.php");
                    exit();
            }
            else if($count2!=0){
                    $_SESSION['uid'] = $username;
                    $_SESSION['employer'] = true;
                    header("Location: ".ROOT."views/home.php");
                    exit();
            }
            else if($count3!=0){
                    $_SESSION['uid'] = $username;
                    $_SESSION['admin'] = true;
                    header("Location: ".ROOT."views/home.php");
                    exit();
            }
            else{
                header("Location: ".ROOT."views/login.php?error=invalid");
                exit();
            }
        } 

    }
}