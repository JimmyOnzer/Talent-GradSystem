<?php
include("profile.php");

include("conn.php");


if(isset($_POST['blogtext'])&isset($_SESSION['id']))
{
	
	$userID=$_SESSION['id'];
	$blogtext=$_POST['blogtext'];
	$collegeid=getCollegeID($userID);
	$date=date("Y-m-d G.i:s", time());
	$dateblog=date("l jS \of F Y h:i:s A");
		
	$query="insert into blogs(user_ID,college_ID,blog,dateblog,dateb)
	values('$userID','$collegeid','$blogtext','$dateblog','$date')";
	
	$res=mysqli_query($con,$query);
	
	
	
	
	
	
}
else
{
	
}
header("location:explore.php");



?>