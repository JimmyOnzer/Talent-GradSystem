<?php
session_start();
include("conn.php");

if(isset($_GET['ID'])&isset($_SESSION['email']))
{
	
	$ID=$_GET['ID'];
	$email=$_SESSION['email'];
	

	$w="select ID from applications where post_ID='$ID' and applicant='$email' and approved='0' limit 1";
	$rw=mysqli_query($con,$w);
	
	//if the 
	if(mysqli_num_rows($rw)>0)
	{
		
		$query="delete from applications where post_ID='$ID' and applicant='$email'";
		$res=mysqli_query($con,$query);
		
	}

	
}
header("location:InsideIndex.php?applied=true");


?>