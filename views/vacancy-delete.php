<?php

include('../db/db_connect.php');
if(isset($_GET['deleteid'])){
     $id=$_GET['deleteid'];

     $sql="DELETE from vacancy where vacancy_id=$id";
     $result=mysqli_query($conn,$sql);
     if($result){
          header('Location:admin.php');
     }else{
          die('Connection Error,'.mysqli_connect_error());
     }

}


?>