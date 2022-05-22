<!DOCTYPE html>

<html lang="en">
<head>

   <?php include('components/account/functions.php');?>
   <?php include('components/account/scripts.php') ?>
  
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
  </head>

  <body class="bg-light">


    <?php include('components/account/navbar.php');?>
	
	
   <?php include('components/account/subnavbar.php');?>
	
	
    <main role="main" class="container">
	
	
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-lightgreen rounded box-shadow">	
<?php
    $firstname = $_POST['firstname'];                 
	$lastname = $_POST['lastname'];
	$title = $_POST['title'];
 	
?>	
<div id="content">
	 <form action="" method="get">
	 <fieldset style="color:green;">
	 
	<?php echo "Congratulations " .$firstname." ".$lastname.", you have succesfully apply for the position ".$title."." ?>
    <br><br>
<?php include'random.php'; ?>
     </fieldset>
     </form>
	<br>
	<a href="InsideIndex.php?applied=true">Back to vacancies</a>
</body>
</html>




