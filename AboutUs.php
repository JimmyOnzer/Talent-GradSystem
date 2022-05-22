<html>


<?php include('scripts/php/connection.php');?>
<head>
<?php include('components/scripts.php');?>

</head>


<body>

<?php include('components/nav.php');?>


	
    <main role="main" class="container">
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

<form style="background-color: lightblue;">
<h1 align="center">About us</h1>
<div class="maincol">
<h1>Talent GradBook Summary</h1>
<p>Founded in 2018, Talent GradBook is the new online e-Recruitment Service Provider created for graduates and employers.
We have access to global knowledge and resources of an e-Recruitment multinational
We would like to help and work with graduates who are strugging to find employment.</p>
<h4>A brief history</h4>
<h6>Values</h6>
<p>We promise to deliver our service with pride, honesty, integrity and passion. It's what will make us professionals in this industry. 
The success of this system is on the large number of graduates/employers using the system.
We have the experience, the expertise and the enthusiasm to help corporate find the right employees; recruitment agents find the 
right candidate and job seekers find the right job.</p>

 

<a align="right">Contact us</a>
<p>Tel: 031 378 2889</p>

<h6>Our Vision</h6>
<p>Provide an easy, innovative, superior and world-class online e-Recruitment service. Partner with leading technology vendors to 
ensure our online environment and infrastructure remains cutting-edge. Make it possible for corporates to find the right employee 
fit for their business. Make recruitment agents find the best possible candidate for the job anywhere, anytime. Make it faster, 
simpler and safer for job seekers to find their ideal job and further their career.</p>
</div>
</main>
</form>
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
