<html>
<?php include('scripts/php/connection.php');?>
<head>
<?php include('components/scripts.php');?>
<style>
img {
    float: left;
}
</style>
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
<div id="wrapper">

  <div id="maincol">
  <div class="row">
  
 
  
  <div style="padding:30px">
  <p align="center" class="lead" style="padding:20px; text-display:bold; color: lightblue; font-size: 3em">Well done, You made it! </p>
  <p align="center" class="lead" style="padding:5px; color: lightblue; font-size: 2em">Now get hired! </p>
  <img class="content"src="images/graduates.jpg" height="300" width="1000%" class="img-rounded" style="width:100%;;margin-right:100px;" />
  </div>
  
  
 </div> 
</div>
  
 
  <div id="leftcol">  
    <div class="content">
	<br>
	<br>
	<br><form style="padding:15px; background-color: lightblue;">
      <h4 style="padding:5px; color: blue;" align="center">NOW CONNECT TO THE WORLD</h4>
	  
	  <p style="padding:5px; color: black;">Talent GradBook system is developed and designed for all the graduates to find employment. 
	  It will help them easily apply for vacancies and connect to the world. Employers have the opportunity 
	  to recruit fresh graduate by posting vacancies for free. </p><p style="padding:5px; color: black;">The graduates will get to explore inside the system.
		 This is to unite all graduates not only around South Africa but around the world.
	     Share your experience. It is that time where you get to
         connect with employers, mentors and top entrepreneurs. The time has arrive. enjoy!!!		 
	  </form>
    </div>
  </div>

</div>
</div>
<br>
<br>
<div style="text-display:bold; color: lightblue;" class="jumbotron p-2 p-md-5 text-white rounded bg-dark">
        <div class="col-md-20 px-0">
<a class="display-4 font-italic" id="contactUs" align="left" style="padding:60px" href="contactUs.php?rel=contactUs">Contact Us</a> 
<a class="display-4 font-italic" id="AboutUs" style="padding:60px" href="AboutUs.php?rel=AboutUs">About Us</a>
<a class="display-4 font-italic" id="TermsOfUse" style="padding:60px" href="TermsOfUse.php?rel=TermsOfUse">Terms of use</a>
</div>
</div>
<div  align="center" id="footer">
 
  &copy; <? echo date("y"); ?> All rights reserved. Olwethu Matiwane, Inc.</a>
 </div>

<!-- End Footer -->
</body>
</html>

