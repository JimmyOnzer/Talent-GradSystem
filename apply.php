<?php
session_start();
include("conn.php");
include('applicationSuccess.php');

if(isset($_GET['ID'])&isset($_SESSION['email']))
{
	
	$ID=$_GET['ID'];
	$email=$_SESSION['email'];
	
	$query="select * from applications where post_ID='$ID' and applicant='$email' limit 1";
	
	$res=mysqli_query($con,$query);
	
	if(mysqli_num_rows($res)>0)
	{
				
		
		$query="update applications set date_applicant='$date',date_str='$datestr' where post_ID='$ID' and applicant='$email'";
		$res=mysqli_query($con,$query);
		
	}
	else
	{
		
		$query="insert into applications(applicant,post_ID,date_applicant,date_str,status)
		values('$email','$ID','$date','$datestr','Pending')";
		$res=mysqli_query($con,$query);
		
	}
	
	
	
}


?>