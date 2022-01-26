<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Hire</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="../public/css/header.css">
     <link rel="stylesheet" href="../public/css/apply.css">
     <link rel="stylesheet" href="../public/css/footer.css">
</head>

<body>
     <?php
     include('header.php');
     ?>
     <div class="job-details">
          <h2>Web Developer</h2>
          <h3>We are looking for a skilled web developer who will be responsible for developing and/or designing websites for our company. You will be working alongside a team of other developers in creating, maintaining, and updating our websites.
In order for you to succeed in this role, you will need to be proficient in JavaScript, HTML, CSS, and have solid knowledge and experience in programming applications.</h3>

          <div class="btn-container">
               <button class="add-btn" id="button">
                    Apply
               </button>
          </div>
     </div>
     <div class="bg-modal">
               <div class="modal-contents">

                    <div class="close">+</div>
                    <img src="https://richardmiddleton.me/comic-100.png" alt="">

                    <form action="hire.php" method="POST">
                         <div class="model-sub-container">
                              <label for="job-title">Job Title:</label>
                              <input type="text" placeholder="Job Title" name="job-title">
                         </div>
                         <div class="model-sub-container">
                              <label for="position">Position:</label>
                              <input type="text" placeholder="Position" name="position">
                         </div>
                         <div class="model-sub-container">
                              <label for="salary">Company:</label>
                              <input type="text" placeholder="Company name" name="company">
                         </div>
                         <div class="model-sub-container">
                              <label for="salary">Salary:</label>
                              <input type="text" placeholder="Salary" name="salary">
                         </div>
                         <div class="model-sub-container">
                              <label for="salary">Category:</label>
                              <select name="categories" id="job-cat" name="categories">
                                   <option value="deafault" disabled='disabled' default>Choose job category..</option>
                                   <option value="cat-1">Administration,business and management</option>
                                   <option value="cat-2">Computing and IT</option>
                                   <option value="cat-3">Construction and building</option>
                                   <option value="cat-4">Education and training</option>
                                   <option value="cat-5">Engineering</option>
                                   <option value="cat-6">Financial</option>
                                   <option value="cat-7">Graphic Design</option>
                                   <option value="cat-8">Healthcare</option>
                                   <option value="cat-9">Hospitality and tourism</option>
                                   <option value="cat-10">Human Resources</option>
                                   <option value="cat-11">Law</option>
                                   <option value="cat-12">Manufacturing and production</option>
                                   <option value="cat-13">Retail and customer Services</option>
                                   <option value="cat-14">Printing,publishing and advertising</option>
                                   <option value="cat-15">Security,uniformed and protective services</option>
                                   <option value="cat-16">Sport and leisure</option>
                                   <option value="cat-17">Transport,distibution and logistics</option>
                              </select>
                         </div>
                         <div class="model-sub-container">
                              <label for="job-description">Description:</label>
                              <textarea name="job-description" cols="100" rows="10" placeholder="Job Description"></textarea>
                         </div>
                         <input type="submit" value="Post Vacancy" name="add-vacancy" class="btn">
                    </form>
               </div>
          </div>
     <?php
     include('footer.php');
     ?>
     <script src="../public/js/apply.js"></script>
</body>

</html>