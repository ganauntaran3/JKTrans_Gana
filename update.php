<?php

include 'connection.php';
$id = $_POST['id'];
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franco = $_POST['franco'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$status = $_POST['status'];
  
$query = "UPDATE note SET sp='$sp', colli='$colli', berat='$berat', franco='$franco', confrankert='$confrankert', penerima='$penerima', status='$status' WHERE id='$id' ";
mysqli_query($connect, $query);

header("location:dashboard.php?pesan=update");
 
?>