
<div class="row">

	
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

  <div align="center"class="row">
  <div align="center"class="content">
  
      <?php include('components/registerpanel.php')?>;
    </div>
	<br><br>
</div>
</div>
</div>
<br>
<br>
<div style="text-display:bold; color: lightblue;" class="jumbotron p-2 p-md-5 text-white rounded bg-dark">
        <div class="col-md-20 px-0">
<a class="display-4 font-italic" id="contactUs" align="left" style="padding:80px" href="contactUs.php?rel=contactUs">Contact Us</a> 
<a class="display-4 font-italic" id="AboutUs" style="padding:100px" href="AboutUs.php?rel=AboutUs">About Us</a>
<a class="display-4 font-italic" id="TermsOfUse" style="padding:100px" href="TermsOfUse.php?rel=TermsOfUse">Terms of use</a>
</div>
</div>
<div  align="center" id="footer">
 
  &copy; <? echo date("y"); ?> All rights reserved. Olwethu Matiwane, Inc.</a>
 </div>

<!-- End Footer -->
</body>
</html>
<br>
<br>



