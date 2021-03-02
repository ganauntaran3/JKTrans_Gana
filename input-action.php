<?php 
include 'connection.php';

$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franco = $_POST['franco'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$status = $_POST['status'];

$query = "INSERT INTO note VALUES('', '$sp', '$colli', '$berat', '$franco', '$confrankert', '$penerima', '$status')";

mysqli_query($connect, $query) or die(mysqli_error($connect));
header("location:dashboard.php?pesan=input");

?>