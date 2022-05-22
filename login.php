<html>
<?php include('scripts/php/connection.php');?>
<head>
<?php include('components/scripts.php');?>
<style>

body{
background-image: url('images/md1.jpg');
	background-repeat:no-repeat;
	background-size:cover;
	background-color: gray;
}
img {
    float: left;
}
</style>
</head>


<body>

<?php include('components/nav.php');?>


<div class="container">

<style>
img {
    float: left;
}
</style>

<div class="container">

   <div class="row">
   
     <div class="col-md-5">
	 
	    <form style="padding:15px; background-color: lightblue;" class="form-horizontal">
  <fieldset>
    <legend>Login to Talent GradBook</legend>
	<p style="color:red;" id="message">Message</p>
	
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" id="email" placeholder="Email" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="password" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" id="password" placeholder="Password" type="password">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Send me an email every login
          </label>
        </div>
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button id="loginbut" type="button" class="btn btn-default" onclick="login()">Login</button>
        <button type="button" id="forgotpassword" class="btn btn-primary" data-toggle="modal" data-target="#modal">Forgot Password</button>
      </div>
    </div>
	
	<script src="scripts/js/login.js"></script>

  </fieldset>
</form>
  
	 </div>
   
   </div>

</div>


  </div>

  <div class="modal fade" id ="modalPopup" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="modal">
  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Password Recovery</h4>
      </div>
      <div class="modal-body">
        <input class="form-control" id="email" placeholder="Enter Email a Valid Email" type="text" oninput="tivk(this.value)">
		<script>
		
		function tivk(value)
		{
			console.log(value);
			var valid=validateEmail(value);
			if(value==""||valid==false)
			{
				document.getElementById('continue').className="btn btn-primary disabled";
				
			}
			else
			{
				document.getElementById('continue').className="btn btn-primary";
			}
			
			
		}
		
		function validateEmail(email)
		{

		var str=email;
		var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
			if (filter.test(str))
			{
				
				return true;
			}		
			else{
				return false;
			}

		}
		 
		function sendPassword(email)
		{
			
			
			
			
		}
		   
		   
		</script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="continue" class="btn btn-primary disabled">Continue</button>
      </div>
    </div>
  </div>

  
  </div>

  <div class="modal" id="modal2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Oops</h4>
      </div>
      <div class="modal-body">
        <p style="color:red">The account with this email address has already been created</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Ok, Got It</button>
        
      </div>
    </div>
  </div>
</div>



</body>



</html>