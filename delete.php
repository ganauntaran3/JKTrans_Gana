<?php

include 'connection.php';
$id = $_GET['id'];
$query = "DELETE FROM note WHERE id='$id'";
mysqli_query($connect, $query);
 
header("location:dashboard.php?pesan=hapus");
?>