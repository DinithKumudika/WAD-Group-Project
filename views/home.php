<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/header.css">
  <link rel="stylesheet" href="../public/css/home.css">
  <link rel="stylesheet" href="../public/css/footer.css">
</head>

<body>
  <?php
  include '../views/header.php';
  ?>
  <div class="bg-container">
    <h1 class="heading" id=head>One Step To Your Future Starts Here</h1>
    <a href="#registration">
      <div>
        <h2 class="reg-now">Register Now</h2>
          <span class="material-icons down-arrow">
            keyboard_double_arrow_down
          </span>
      </div>
    </a>
    <!--<i class="fa-solid fa-angles-down"></i>-->
  </div>
  <div class="container" name="#registration">
      <div class="container-1" id="con-1">
        <form action="../Modules/Auth.php" method="post">
          <h1 class="reg-title">Company Registration</h1>
          <p>Searching for best employes for your company? <br> Register today to find best skills for you</P>
          <input type="button" class="btn" value="Register">
        </form>
      </div>
      <div>
        <form action="../Modules/Auth.php" method="post">
          <div class="container-2" id="con-2">
            <h1 class="reg-title">Candidate Registration</h1>
            <p>Looking for the job that suits you most? <br> Register and start searching!</p>
            <input type="button" class="btn" value="Register">
          </div>
        </form>
      </div>
  </div>

  <div class="container-3">
    <h1>How CareerBuilder can help You</h1>
    <div></div>
  </div>

  <?php
  include('./footer.php');
  ?>
</body>

</html>