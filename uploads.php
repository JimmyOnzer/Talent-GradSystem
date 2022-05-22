<?php

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
        <div class="col-md-6 px-0">

<?php
echo '<h6><style="font:bold;">Step 5 - Uploads</h6>';
if(isset($_POST['submit']))
{
	$filename=$_FILES['file']['tmp_name'];
	$filename2=$_FILES['file']['name'];
	
	$path='uploads'.DIRECTORY_SEPARATOR.$filename2;
	$success=move_uploaded_file($filename,$path);
	if($success)
	{
		echo "<p>The file " .$filename2. " is successfully uploaded!</p>";
		mail("jimmyolwethu7@gmail.com","New Document","A file is uploaded into the directory ".$path." with the following filename ".$filename2);
	
	}
	else
	{
		echo"<p>There is an error uploading to '$path'</p>";
	}
	
	
}


?>
<br><br>
<form action="uploads.php" method="post" enctype="multipart/form-data">
Select File: <input type="file" name="file"/>
<input type="submit" name="add" value="Upload file"/><p /><br />
<input type="submit" name="submit" value="submit"/>
</form>

<?php
if($_FILES['add']){
	$name = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'],$name);
	echo "Uploaded file '$name'<br/><img src='$name'/>";
}
?>


</main>
</body>
</html>