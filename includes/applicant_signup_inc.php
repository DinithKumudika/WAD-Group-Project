<?php

include('../config/root.php');
include('../config/db.php');

if (isset($_POST['signup'])) {
     $firstName = mysqli_real_escape_string($conn, htmlspecialchars($_POST['f-name']));
     $lastName = mysqli_real_escape_string($conn, htmlspecialchars($_POST['l-name']));
     $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['e-mail']));
     $phoneNo = mysqli_real_escape_string($conn, htmlspecialchars($_POST['phone']));
     $username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
     $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));

     include('../includes/errors_inc.php');

     if (emptyInputApplicantSignup($firstname, $lastname, $email, $phoneNo, $username, $password) === true) {
          header("Location: ".ROOT."views/regular_signup.php?error=empty&fname=" . $firstName . "&lname=" . $lastName . "&email=" . $email . "&phone=" . $phoneNo . "&uid=" . $username);
          exit();
     } 
     else {
          if (checkApplicantEmail($email) === false) {
               header("Location: ".ROOT."views/regular_signup.php?error=email&fname=" . $firstName . "&lname=" . $lastName . "&phone=" . $phoneNo . "&uid=" . $username);
               exit();
          } 
          else {
               if (checkApplicantTelno($phoneNo) === false) {
                    header("Location: ".ROOT."views/regular_signup.php?error=phone&fname=" . $firstName . "&lname=" . $lastName . "&email=" . $email . "&uid=" . $username);
                    exit();
               } 
               else {
                    if (checkApplicantUid($username) === false) {
                         header("Location: ".ROOT."views/regular_signup.php?error=uid&fname=" . $firstName . "&lname=" . $lastName . "&email=" . $email . "&phone=" . $phoneNo);
                         exit();
                    } 
                    else {
                         if (checkApplicantPwd($password) === false) {
                              header("Location: ".ROOT."views/regular_signup.php?error=pwd&fname=" . $firstName . "&lname=" . $lastName . "&email=" . $email . "&phone=" . $phoneNo . "&uid=" . $username);
                              exit();
                         } 
                         else {
                              if (applicantEmailExist($email) === true) {
                                   header("Location: ".ROOT."views/regular_signup.php?error=emailexist&fname=" . $firstName . "&lname=" . $lastName . "&email=" . $email . "&phone=" . $phoneNo . "&uid=" . $username);
                                   exit();
                              } 
                              else {
                                   if (applicantUidExist($username) === true) {
                                        header("Location: ".ROOT."views/regular_signup.php?error=uidexist&fname=" . $firstName . "&lname=" . $lastName . "&email=" . $email . "&phone=" . $phoneNo . "&uid=" . $username);
                                        exit();
                                   } 
                                   else {
                                        $query = "INSERT INTO applicant_reg(`first_name`,`last_name`,`email`,`phone_no`,`username`,`password`)
                                                  VALUES
                                                  ('$firstName','$lastName','$email','$phoneNo','$username','$password');";
                                        $result = mysqli_query($conn, $query2);
                                        header("Location: ".ROOT."views/login.php");
                                   }
                              }
                         }
                    }
               }
          }
     }
}
