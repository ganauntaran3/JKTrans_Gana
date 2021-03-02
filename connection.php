<?php

$connect = mysqli_connect("localhost", "root", "", "jktrans");

if(!$connect){
    die('Connection failed');
}