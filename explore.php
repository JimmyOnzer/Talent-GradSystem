<?php
session_start();
if(isset($_SESSION['email'])==false)
{
	header('location:login.php');
}
include('scripts/php/connection.php');


?>
<?php
include("profile.php");
?>

<?php 
$ID=$_SESSION['id'];
$query="select user_ID from hadfirsttime where user_ID='$ID'";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0)
{
	include('components/explore/explore.php');
}
else
{
	include('components/firsttime/f1.php');
	
}
?>