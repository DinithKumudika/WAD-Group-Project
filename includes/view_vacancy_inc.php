<?php

include('../config/db.php');
$query = "SELECT * FROM vacancy";
$datas = array();
$rows;
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
     $datas[] = $row;
}