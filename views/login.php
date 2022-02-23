<?php
session_start();
include('../db/db_connect.php');

$errors = [
    'username' => '',
    'password' => ''
];

$wrongCredentials = '';

if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['pwd']);

    if (empty($username) || empty($password)) {
        if (empty($username)) {
            $errors['username'] = "*username is required";
        }
        if (empty($password)) {
            $errors['password'] = "*password is required";
        }
    } else {
        $username = mysqli_real_escape_string($conn, $username);
        //protect database from harmful sql injections when inserting data to datbase
        $password = mysqli_real_escape_string($conn, $password);
        $query1 = "SELECT `applicant_ID`,`username`,`password` FROM applicant_reg WHERE `username`='{$username}' AND `password`='{$password}'";
        $query2 = "SELECT `username`,`password` FROM `admin` WHERE `username` = '{$username}' AND `password`='{$password}'";
        $query3 = "SELECT `emp_id`,`username`,`password` FROM emp_reg WHERE `username`='{$username}' AND `password`='{$password}'";
        $result1 = mysqli_query($conn, $query1);
        $result2 = mysqli_query($conn, $query2);
        $result3 = mysqli_query($conn, $query3);

        if ($result1 || $result2 || $result3) {
            if(mysqli_num_rows($result1)==1 && mysqli_num_rows($result3)==1){
                $user_details = mysqli_fetch_assoc($result1);
                $_SESSION['default_user'] = $user_details['username'];
                $_SESSION['user_id'] = $user_details['applicant_ID'];
                header('Location:home.php');

            }
            else if (mysqli_num_rows($result1)==1) {
                $user_details = mysqli_fetch_assoc($result1);
                $_SESSION['user_applicant'] = $user_details['username'];
                $_SESSION['user_id'] = $user_details['applicant_ID'];
                header('Location:home.php');
            }
             else if (mysqli_num_rows($result2)==1) {
                $user_details = mysqli_fetch_assoc($result2);
                $_SESSION['user_admin'] = $user_details['username'];
                header('Location:home.php');
            } else if(mysqli_num_rows($result3)==1) {
                $user_details = mysqli_fetch_assoc($result3);
                $_SESSION['user_emp'] = $user_details['username'];
                $_SESSION['user_id'] = $user_details['emp_id'];
                header('Location:home.php');
            }
        }
        else {
            $wrongCredentials = 'wrong username or password';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/css/login.css">
    <title>Login</title>
</head>

<body>
    <form action="./login.php" method="post">
        <div class="container">
            <h1 class="login-text">Login</h1>
            <div class="sub-container-1">
                <div class="icon-container">
                    <i class="fa-solid fa-user"></i>
                </div>
                <span class="input-field">
                    <input type="text" name="username" id="username" class="input-box" placeholder="Username">
                    <div class="red"><?= $errors['username']; ?></div>
                </span>
            </div>
            <div class="sub-container-1">
                <div class="icon-container">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <span class="input-field">
                    <input type="password" name="pwd" id="pwd" class="input-box" placeholder="Password">
                    <div class="red"><?= $errors['password']; ?></div>
                </span>
            </div>
            <div class="sub-container-2">
                <input type="checkbox" name="rememberChkBox" id="rememberChkBox" class="ch-1">
                <label for="remembeChkBox">Remember me</label>
                <input type="checkbox" name="show-pwd" id="show-pwd" class="ch-2">
                <label for="show-pwd">Show Password</label>
            </div>
            <input type="submit" value="Log In" class="login-btn" name="login">
            <div class="sub-container-3">
                <p>Not a member? <a href="signup.php">Sign Up</a></p>
            </div>
        </div>
    </form>
    <p class="wrong-cred"><?= $wrongCredentials ?></p>
    <script src="../public/js/login.js"></script>
</body>

</html>