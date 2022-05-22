<?php
session_start();
if(isset($_SESSION['email'])==false)
{
	header('location:login.php');
}
include('scripts/php/connection.php');
function getDescription($ID)
{
	
	include('../../scripts/php/connection.php');
	$query="select description from profile where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['description'];
		
		
	}
	
	
		
	
}
function getFaceBook($ID)
{
	
	include('../../scripts/php/connection.php');
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
	
	include('../../scripts/php/connection.php');
	$query="select google from profile where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['google'];
		
		
	}
	
	
		
	
}
function getSkye($ID)
{
	
	include('../../scripts/php/connection.php');
	$query="select skye from profile where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['skye'];
		
		
	}
	
	
		
	
}

function getBrief_description($ID)
{
	
	include('../../scripts/php/connection.php');
	$query="select brief_description from profile where ID='$ID' limit 1";
	$res=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_assoc($res))
	{
		
		echo $row['brief_description'];
		
		
	}
	
	
		
	
}

?>



<?php 
$ID=$_SESSION['id'];
$query="select user_ID from hadfirsttime where user_ID='$ID'";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
	include('components/companyofferings/offerings.php');
}
else
{
	include('components/firsttime/f1.php');
	
}
?>