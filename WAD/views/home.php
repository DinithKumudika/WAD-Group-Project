<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/header.css">
  <link rel="stylesheet" href="../public/css/home.css">
  <link rel="stylesheet" href="../public/css/footer.css">
</head>

<body>
  <?php
  include '../views/header.php';
  ?>

  <h1 class="heading" id=head>FIND WHAT YOU DESERVE</h1>
  <h2 class="sub-heading">Create an account </h2>

  <div class="container">
      <div class="container-1" id="con-1">
      <form action="../Modules/Auth.php" method="post">
        <h1 class="reg-title">Company Registration</h1>
        <p>Searching for best employes for your company? Register today to find best skills for you</P>
        <input type="button" class="btn" value="Register">
    </form>
  </div>

  <div>
    <form action="../Modules/Auth.php" method="post">
      <div class="container-2" id="con-2">
        <h1 class="reg-title">Candidate Registration</h1>
        <p>Looking for the job that suits you most? Register and start searching!</p>
        <input type="button" class="btn" value="Register">
      </div>
    </form>
  </div>
  </div>

  <?php
  include('./footer.php');
  ?>
  <script src="../public/js/header.js"></script>
</body>

</html>