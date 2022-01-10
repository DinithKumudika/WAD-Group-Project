<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../Public/css/signup.css">
    <title>Signup</title>
</head>
<body>
    <h1 class="heading">Join with us and shape your future</h1>
    <form action="../Modules/Registration.php" method="post">
        <div class="signup-container">
            <div class="signup-img">
                <img src="../Public/assets/images/signup.png" alt="signup">
            </div>
            <div class="form-container">
                <h1 class="login-text">SignUp</h1>
                <label for="f-name">First Name:</label>
                <input type="text" name="f-name" id="f-name" class="input-box">
                <label for="l-name">Lirst Name:</label>
                <input type="text" name="l-name" id="l-name" class="input-box">
                <label for="l-name">E-mail:</label>
                <input type="email" name="e-mail" id="e-mail" class="input-box">
                <div class="sub-container-1">
                    <label for="">Gender:</label>
                    <label for="gender[]">Male</label><input type="checkbox" name="gender[]" id="male" class="gender-chkbox">
                    <label for="gender[]">Female</label><input type="checkbox" name="gender[]" id="female" class="gender-chkbox">
                </div>
                <label for="phone">Phone no:</label>
                <input type="text" name="phone" id="phone" class="input-box">
                <label for="create-pwd">Password:</label>
                <input type="password" name="password" id="password" class="input-box">
                <input type="submit" value="Sign Up" class="login-btn" name="signup">
                <div class="sub-container-3">
                    <p>Already a member? <a href="login.php">Log In</a></p>
                </div>
            </div>
        </div>
    </form>
    <h2 class="warning">All fields are required!</h2>
    <script>
        
    </script>
</body>
</html>