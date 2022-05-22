<html>


<?php include('scripts/php/connection.php');?>
<head>
<?php include('components/scripts.php');?>

</head>


<body>

<?php include('components/nav.php');?>


<div class="container">



<style>

body{
background-image: url('images/md1.jpg');
	background-repeat:no-repeat;
	background-size:cover;
	background-color: gray;
}

div#leftcol {
	float: left;
	width: 300px;
	margin-left: 5px;
}

div#maincol {
	float: left;
	width: 680px;
	margin-left: 15px;
	margin-right: 15px;
}

div#rightcol {
	width: 300px;
	float: right;
	margin-right: 5px;
	
div#footer {
	
	width: 95%;
	height: 10px;
     margin-left: 0px;
	clear: both;
	border: solid thin black;
	clear: both;
	border-bottom: none;
    border-radius: 10px 10px 0px 0px;
     padding: 15px;  
}
div#wrapper {
	margin-left: 0px;
	clear: both;
	border: bold;
	clear: both;
}	
img {
    float: left;
}
</style>

 <main role="main" class="container">
      
	  
<br>	 
<form style="background-color: lightblue;" action="contactUs.php" method="POST" enctype="multipart/form-data"class="form-horizontal">
<h1 align="center">Contact us</h1>



<fieldset>
<legend>Do you have a query? Fill in the form!</legend>
<div class="form-group">
      <label for="fName" class="col-lg-2 control-label">First Name:</label>
      <div class="col-lg-3">
        <input class="form-control" id="fName" placeholder="Firstname" type="text">
      </div>
    </div>
<div class="form-group">
      <label for="lName" class="col-lg-2 control-label">Last Name:</label>
      <div class="col-lg-3">
        <input class="form-control" id="lName" placeholder="Lastname" type="text">
      </div>
    </div>
<div class="form-group">
      <label for="email" class="col-lg-2 control-label">Email:</label>
      <div class="col-lg-3">
        <input class="form-control" id="email" placeholder="email" type="text">
      </div>
    </div>
<div class="form-group">
      <label for="contactNo" class="col-lg-2 control-label">Contact Number:</label>
      <div class="col-lg-3">
        <input class="form-control" id="contactNo" placeholder="ContactNumber" type="text">
      </div>
    </div>
<a align="center">How can we help you: </a>
<div class="form-group">
               <label for="textArea" class="col-lg-2 control-label">Description:</label>
               <div class="col-lg-6">
                <textarea class="form-control" rows="3" name="comments"></textarea>
               </div>
            </div>
    <p  align="center"><input type="submit" name="submit" value="Send e-mail"/><p />
</fieldset>
</form>
<?php

if (isset($__POST['submit'])) {
$fName = $POST['fName'];
$lName = $POST['lName'];
$email = $POST['email'];
$contactNo = $POST['contactNo'];
$comments = $POST['comments'];

$message = "First Name: " .$fName. "<br />" .
"Last Name: " .$lName. "<br />" .
"Email: " .$email. "<br />" .
"Contact Number: " .$contactNo. "<br />" .
"How can we help you: " .$comments. "<br />";

mail("jimmyolwethu7@gmail.com", "New enquiry", $message);

}
?>
</main>

<br>
<br>
<div style="text-display:bold; color: lightblue;" class="jumbotron p-2 p-md-5 text-white rounded bg-dark">
        <div class="col-md-20 px-0">
<a class="display-4 font-italic" id="contactUs" align="left" style="padding:50px" href="contactUs.php?rel=contactUs">Contact Us</a> 
<a class="display-4 font-italic" id="AboutUs" style="padding:50px" href="AboutUs.php?rel=AboutUs">About Us</a>
<a class="display-4 font-italic" id="TermsOfUse" style="padding:50px" href="TermsOfUse.php?rel=TermsOfUse">Terms of use</a>
</div>
</div>
<div  align="center" id="footer">
 
  &copy; <? echo date("y"); ?> All rights reserved. Olwethu Matiwane, Inc.</a>
 </div>

<!-- End Footer -->
</body>
</html>
