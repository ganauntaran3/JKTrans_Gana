<?php
include_once "connection.php";
$errorMsg = "";
      
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $email    = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
        
    $query= "INSERT INTO admin(email,username,password) 
                  VALUES('$email','$username','$password')";
          $result = mysqli_query($connect, $query);

      if ($result) {
          header("Location:index.php");
      }else{
          $errorMsg  = "You are not Registred..Please Try again";
      }
    