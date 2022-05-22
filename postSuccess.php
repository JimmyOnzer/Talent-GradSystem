<?php

session_start();
if(isset($_SESSION['email'])==false)
{
	header('location:login.php');
}

?>
<html lang="en">
<head>

   

	
    <main role="main" class="container">
	
 <div class="jumbotron p-3 p-md-5 text-blue rounded bg-lightblue">
        <div class="col-md-12 px-0">POST REPORT</h6>
		
	
<?php
    $firstname = $_POST['firstname'];                 
	$lastname = $_POST['lastname'];
	$title = "IT Internship";
	$description = "We are looking for IT Graduates to join our company. 
	Start your career in development. We develop web application and android 
	application using different languages.";
 	$requirements = "Requirements: IT Diploma/Degree Languages: PHP, C#, C++, JAVA or Python. Drivers license.";
?>	

<br>
<p align="center">MESSAGE</p>


     <div id="content">
	 <form action="" method="get">
	 <fieldset style="color:green;">
	 
	<?php echo "Congratulations " .$firstname." ".$lastname.", you have succesfully posted ".$title." vacancy."; ?>
    <br><br>
	<?php echo "See the information you provided below."; ?>
	<br><br>
	<?php echo "Title: ".$title;?>
	<br><br>
	<?php echo "Description: ".$description;?>
	<br><br>
	<?php echo "Requirements: ".$requirements;?>
	<br><br>
<?php include'random.php'; ?>
     </fieldset>
     </form>
	 <a align="center" href="InsideIndex.php"><b>Back to Home page</b></a><br />
</body>
</html>
<!-- End Footer -->
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Offcanvas%20template%20for%20Bootstrap_files/jquery-3.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="Offcanvas%20template%20for%20Bootstrap_files/popper.js"></script>
    <script src="Offcanvas%20template%20for%20Bootstrap_files/bootstrap.js"></script>
    <script src="Offcanvas%20template%20for%20Bootstrap_files/holder.js"></script>
    <script src="Offcanvas%20template%20for%20Bootstrap_files/offcanvas.js"></script>
