<?php
     include('../config/db.php');
     include('../config/root.php');


     $error='';
     $mail_status = '';
     $to = "hiremelkofficial@gmail.com";
     
     if (isset($_POST['sendmessage'])) {
          $fullName = htmlspecialchars($_POST['full-name']);
          $email = htmlspecialchars($_POST['email']);
          $mailubject = htmlspecialchars($_POST['subject']);
          $message = htmlspecialchars($_POST['message']);

          if (empty($fullName) || empty($email) || empty($subject) || empty($message)) {
               $error = "*all fields are required";
          }
          else{
               $from = $email;
               $body = "<b>From:</b>{$fullName}<br>
                    <b>Subject:</b>{$subject}<br>
                    <b>Message:</b><br>
                    {$message}";
                    
               $header = "From: {$from}\r\n" .
                         "Content-Type: text/html\r\n";
               $sendMail = mail($to,$subject,$body,$header);
               if($sendMail){
                    $mail_status = '<p class="green">message sent</p>';
               }
               else{
                    $mail_status = '<p class="red">cannot send message</p>';
               }
          }
     }