<?php
include "connection.php";


	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	
	$sql = "select * from admin where username = '".$username."'";
	$rs = mysqli_query($connect,$sql);
	$numRows = mysqli_num_rows($rs);
	
	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		if(password_verify($password,$row['password'])){
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["status"] = "login";
			header('Location: dashboard.php');
		}
		else{
			echo "Wrong Password";
		}
	}
	else{
		echo "No User found";
	}
?>