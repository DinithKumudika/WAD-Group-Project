<?php

include('../config/db.php');
$datas = array();
$query = "SELECT * FROM `admin`";

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
     $datas[] = $row;
}