<?php
include("profile.php");
include("business.php");
include("conn.php");



if(isset($_POST['dateofinter'])&&isset($_POST['postID'])&isset($_POST['userID']))
{
	
	
	$dateinter=$_POST['dateofinter'];
	$postid=$_POST['postID'];
	$userid=$_POST['userID'];
	
	$query="update interview set dateofinterview='$dateinter' where post_ID='$postid' and user_ID='$userid'";
	$res=mysqli_query($con,$query);
	
	$query="select email from student_accounts where ID='$userid' limit 1";
	$res=mysqli_query($con,$query);
	
	if(mysqli_num_rows($res)>0)
	{
		while($row=mysqli_fetch_assoc($res))
		{
			
			mail($row['email'],"Interview for Post ".getPostTitle($postid)." ","You have an interview on '$dateinter' ");
			
		}
		
	}
		
	header("location:applications.php?applied=true");
	
}
if(isset($_SESSION['id'])&isset($_GET['post_ID'])&isset($_GET['user_ID'])&isset($_GET['application_ID']))
{
	$userID=$_GET['user_ID'];

	$query="select user_ID from interview where user_ID='$userID'";
	$res=mysqli_query($con,$query);

	$postid=$_GET['post_ID'];
	$appid=$_GET['application_ID'];
	
	if(mysqli_num_rows($res)>0)
	{



	}
	else
	{
		$dateinter=date("Y-m-d H:i:s");
		$dateinterstr=date('l jS \of F Y h:i:s A');
		$query="insert into interview(post_ID,user_ID,dateinter,dateinterstr)
		values('$postid','$userID','$dateinter','$dateinterstr')";

		//applications.php?dateinter=true
		$res=mysqli_query($con,$query);
		
		$query="update applications set status='Pending(Interview) where ID='$appid'";
	    $res=mysqli_query($con,$query);

	}
	
	header("location:applications.php?dateinter=true&post_ID='$postid'&user_ID='$userID'");
	
}

?>