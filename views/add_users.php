
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Users</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/header.css">
  <link rel="stylesheet" href="../public/css/vacancy.css">
  <link rel="stylesheet" href="../public/css/footer.css">
  <link rel="stylesheet" href="../public/css/admin.css">
  <link rel="stylesheet" href="../public/css/admin_header.css">
</head>

<body>
  <?php
  include('header.php');
  ?>
  <?php
  include('admin_header.php');
  ?>

  <div style="margin-left:250px; margin-top:70px">

    <form action="../includes/add_users_inc.php" method="post">
      <select name="user-cat" id="" style="width: 20%;">
        <option value="Applicant">Applicant</option>
        <option value="Employer">Employer</option>
      </select>
      <br>
      <br>
      <label for="first_name">First name:</label>
      <br>
      <input type="text" id="first_name" name="first_name" class="text">
      <br>
      <br>
      <label for="last_name">Last name:</label>
      <br>
      <input type="text" id="last_name" name="last_name" class="text">
      <br>
      <br>
      <label for="email">Email:</label>
      <br>
      <input type="text" id="email" name="email" class="text">
      <br>
      <br>
      <label for="phone_no">Phone no:</label>
      <br>
      <input type="text" id="phone_no" name="phone_no" class="text">
      <br>
      <br>
      <label for="company">Company:</label>
      <br>
      <input type="text" id="company" name="company" class="text">
      <br>
      <br>
      <label for="username">Username:</label>
      <br>
      <input type="text" id="username" name="username" class="text">
      <br>
      <br>
      <label for="password">Password:</label>
      <br>
      <input type="text" id="password" name="password" class="text">
      <br>
      <input type="submit" value="submit" name="submit" class="submit-btn">
    </form>
  </div>
  <?php
  //include('footer.php');
  ?>
</body>

</html>