<?php



function getBusinessName($postID)
{
	
	include('scripts/php/connection.php');
	$query="select businessname from business where ID in (select business_ID from posts where ID='$postID') limit 1";
	$res=mysqli_query($con,$query);
	

	if(mysqli_num_rows($res)>0)
	{
			while($row=mysqli_fetch_assoc($res))
			{

				echo $row['businessname'];

			}
		
	}
	
	
		
	
}
function getBusinessID($postID)
{
	
	include('scripts/php/connection.php');
	$query="select ID from business where ID in (select business_ID from posts where ID='$postID') limit 1";
	$res=mysqli_query($con,$query);
	

	if(mysqli_num_rows($res)>0)
	{
			while($row=mysqli_fetch_assoc($res))
			{

				return $row['ID'];

			}
		
	}
	
	
		
	
}

function getBusinessIDU($userID)
{
	
	include('scripts/php/connection.php');
	$query="select ID from business where user_ID in (select ID from students_accounts where ID='$userID') limit 1";
	$res=mysqli_query($con,$query);
	

	if(mysqli_num_rows($res)>0)
	{
			while($row=mysqli_fetch_assoc($res))
			{

				return $row['ID'];

			}
		
	}
	
	
		
	
}



function getPostTitle($postID)
{
	
	include('scripts/php/connection.php');
	$query="select title from posts where ID='$postID' limit 1";
	$res=mysqli_query($con,$query);
	

	if(mysqli_num_rows($res)>0)
	{
			while($row=mysqli_fetch_assoc($res))
			{

				echo $row['title'];

			}

	}
	
	
		
	
}



?>