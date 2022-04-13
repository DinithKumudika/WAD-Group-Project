<?php

include('../config/db.php');

$query = "SELECT * FROM vacancy";
$result = mysqli_query($conn, $query);
