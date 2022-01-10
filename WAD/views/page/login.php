<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../Public/css/login.css">
    <title>Login</title>
</head>
<body>
    <form action="../Modules/Auth.php" method="post">
        <div class="container">
            <h1 class="login-text">Login</h1>
            <div class="sub-container-1">
                <div class="icon-container">
                    <i class="fa-solid fa-user"></i>
                </div>
                <input type="text" name="username" id="username" class="input-box" placeholder="Username">
            </div>
            <div class="sub-container-1">
                <div class="icon-container">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <input type="password" name="pwd" id="pwd" class="input-box" placeholder="Password">
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
    <script src="../Public/js//login.js"></script>
</body>
</html>