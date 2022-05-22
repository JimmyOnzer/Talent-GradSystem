<?php
include("conn.php");
session_start();
if(isset($_SESSION['email'])==false)
{
	header('location:login.php');
}

?>
<html lang="en">
<head>

   
   <?php include('components/account/scripts.php') ?>
   
  </head>

  <body class="bg-light">


    <?php include('components/account/navbar.php');?>
	
	
   	
   <?php include('components/account/subnavbar.php');?>
	
	
    <main role="main" class="container">
	
 <div class="jumbotron p-3 p-md-5 text-blue rounded bg-lightblue">
        <div class="col-md-12 px-0">
	  <h3 style="text-align: center;">The list of vacancies available</h3>
	  
<?php
$host="localhost";
$username="root";
$password="";
$database="students";
			
			

include("conn.php");
include("paginate.php");
			
$query="SELECT ID, title, description, requirements, qualification , location, link, datetime FROM posts where ID not in (select post_ID from applications)";
			

if(isset($_GET['startg']))
{
	$result = mysqli_query($con,$query." limit ".$_GET['startg'].",10"); 
}
else
{
	$result = mysqli_query($con,$query." limit 10"); 
}
			



if(mysqli_num_rows($result)>0)
{
	echo '<table border=8>'; 
echo'<th>ID</th><th>Title</th><th>Description</th><th>Requirements</th><th>Qualification </th><th>Location</th><th>Link</th><th>Date and time</th><th>Action</th>';
	
	while($data = mysqli_fetch_assoc($result))
	{
			// While loop that will print all the data requested to the table
			echo'<tr>'; // printing data
			echo '<td>'.$data['ID'].'</td><td>'.$data['title'].'</td><td>'.$data['description'].'</td><td>'.$data['requirements'].'</td><td>'.$data['qualification'].'</td><td>'.$data['location'].'</td><td>'.$data['link'].'</td><td>'.$data['datetime'].'<td><a href="apply.php?ID='.$data['ID'].'">Apply</a>';
			echo'</tr>'; 
		
		
	}
	
	echo '</table>';
	
}
	
			
if(isset($_GET['startg']))
{
	paginate($query,(int)$_GET['startg'],10,"InsideIndex.php","startg");
}
else
{
	paginate($query,0,10,"InsideIndex.php","startg");
}



$query="SELECT posts.ID,applications.ID as aID, title, description, requirements, qualification , location, link, datetime,status FROM posts,applications where posts.ID in (select post_ID from applications) and approved='0' and posts.ID=applications.post_ID";

if(isset($_GET['startc']))
{
	$result = mysqli_query($con, $query." limit ".$_GET['startc'].",10"); 
}
else{
	$result = mysqli_query($con, $query." limit 10"); 
}

		


if(mysqli_num_rows($result)>0)
{
	echo "<br>";
	echo "<p>Pending Applications</p>";
echo "<br>";
	echo mysqli_num_rows($result)." applications";
	
	echo '<table border=8>'; 
echo'<th>ID</th><th>Title</th><th>Description</th><th>Requirements</th><th>Qualification </th><th>Location</th><th>Link</th><th>Date and time</th><th>Action</th><th>Status</th>';
	
	while($data = mysqli_fetch_assoc($result))
	{
			// While loop that will print all the data requested to the table
			echo'<tr>'; // printing data
			echo '<td>'.$data['aID'].'</td><td>'.$data['title'].'</td><td>'.$data['description'].'</td><td>'.$data['requirements'].'</td><td>'.$data['qualification'].'</td><td>'.$data['location'].'</td><td>'.$data['link'].'</td><td>'.$data['datetime'].'<td><a href="withdraw.php?ID='.$data['ID'].'">Withdraw</a><td>'.$data['status'].'</td>';
			echo'</tr>'; 
		
		
		
	}
	
	echo '</table>';
	
}			
			
	

			
if(isset($_GET['startc']))
{
	paginate($query,(int)$_GET['startc'],10,"InsideIndex.php","startc");
}
else
{
	paginate($query,0,10,"InsideIndex.php","startc");
}

			
			
/// get data from form
if(isset($_GET["id"])&isset($_GET["title"])&isset($_GET['description'])&isset($_GET['requirements'])&isset($_GET['qualification'])&isset($_GET['location'])&isset($_GET['link'])&isset($_GET['datetime']))
{
	 $id = $_GET['id'];
	$title = $_GET['title'];
	$description = $_GET['description'];
	$requirements = $_GET['requirements'];
	$qualification  = $_GET['qualification'];
	$location = $_GET['location'];
	$link = $_GET['link'];
	$datetime= $_GET['datetime'];
	
}
	

?>

</main>				
</body>
</html>