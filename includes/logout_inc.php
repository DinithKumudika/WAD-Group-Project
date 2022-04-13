<?php

include('../config/root.php');

if(isset($_POST['logout'])){
     session_unset();
     session_destroy();
     header('Location: '. ROOT .'views/login.php');
 }
 