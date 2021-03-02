<?php

include 'connection.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$login = mysqli_query($connect, $query);
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 session_start();
 $_SESSION['username'] = $username;
 $_SESSION['status'] = "login";
 header("location:dashboard.php");
}else{
 header("location:index.php"); 
}