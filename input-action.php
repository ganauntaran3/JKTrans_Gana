<?php 
include 'connection.php';
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franco = $_POST['franco'];
$corfrankert = $_POST['corfrankert'];
$penerima = $_POST['penerima'];
$status = $_POST['status'];

$query = "INSERT INTO user VALUES('', '$sp', '$colli', '$berat', '$franco', '$corfrankert', '$penerima', '$status')";

mysqli_query($connect, $query);
header("location:index.php?pesan=input");
?>