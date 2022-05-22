<?php

//MVC 
$host="localhost";
$username="root";
$password="";
$database="students";

$con = mysqli_connect($host, $username, $password) or die("An error occured while connecting to the database!");
mysqli_select_db($con,$database) or die("Access Denied");// Connection Granted to database





?>