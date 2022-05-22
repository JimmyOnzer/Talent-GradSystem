<?php
session_start();
if(isset($_SESSION['email'])==false)
{
	header('location:login.php');
}
include('scripts/php/connection.php');
function getDescription($ID)
{
	
	include('scripts/php/connection.php');
	$query="select description from profile where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['description'];
		
		
	}
	
	
		
	
}

function getFaceBook($ID)
{
	
	include('scripts/php/connection.php');
	$query="select facebook from profile where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['facebook'];
		
		
	}
	
	
		
	
}
function getTwitter($ID)
{
	
	include('../../scripts/php/connection.php');
	$query="select twitter from profile where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['twitter'];
		
		
	}
	
	
		
	
}
function getGoogle($ID)
{
	
	include('scripts/php/connection.php');
	$query="select google from profile where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['google'];
		
		
	}
	
	
		
	
}
function getSkye($ID)
{
	
	include('scripts/php/connection.php');
	$query="select skye from profile where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['skye'];
		
		
	}
	
	
		
	
}

function getBrief_description($ID)
{
	
	include('scripts/php/connection.php');
	$query="select brief_description from profile where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['brief_description'];
		
		
	}
	
	
		
	
}

function getFirstname($ID)
{
	
	include('scripts/php/connection.php');
	$query="select firstname from student_accounts where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['firstname'];
		
		
	}
	
	
		
	
}
function getLastname($ID)
{
	
	include('scripts/php/connection.php');
	$query="select lastname from student_accounts where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['lastname'];
		
		
	}
	
	
		
	
}
function getProfileImage($ID)
{
	
	include('scripts/php/connection.php');
	$query="select profile_pic from student_accounts where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['profile_pic'];
		
		
	}
	
	
		
	
}
function getQualificationi($ID)
{
	
	include('scripts/php/connection.php');
	$query="select qualification from student_accounts where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		return $row['qualification'];
		
		
	}
	
	
		
	
}




?>


<?php 
$ID=$_SESSION['id'];
$query="select user_ID from hadfirsttime where user_ID='$ID'";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
	include('components/blogs/blogs.php');
}
else
{
	include('components/firsttime/f1.php');
	
}
?>
