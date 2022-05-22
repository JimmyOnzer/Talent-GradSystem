<?php

include("profile.php");
include("business.php");
include("conn.php");


if(isset($_SESSION['id'])&
   isset($_GET['post_ID'])&
   isset($_GET['user_ID'])&
   isset($_GET['application_ID']))
{
	
	$postID=$_GET['post_ID'];
	$userID=$_GET['user_ID'];
	
	$dateinter=date("Y-m-d H:i:s");
	
	$bid=getBusinessID($postID);
	

	$query="select * from hired where post_ID='$postID' and user_ID='$userID'";
	$res=mysqli_query($con,$query);
	
	if(mysqli_num_rows($res)>0)
	{
		
	}
	else
	{
				$query="insert into hired(post_ID,user_ID,dateofhire,business_ID)
		values('$postID','$userID','$dateinter','$bid')";

		$res=mysqli_query($con,$query);

		
	}
	header("location:applications.php?applied=true");


}




?>