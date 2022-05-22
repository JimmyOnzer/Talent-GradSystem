<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<form action="interview.php" method="post" onSubmit="setinterviewdate(event)">
	
	<div class="container">
	  <br/>
				<?php
		$post_ID="";
		$user_ID="";
		if(isset($_GET['post_ID']))
		{
			$post_ID=$_GET['post_ID'];
		}
		if(isset($_GET['user_ID']))
		{
			$user_ID=$_GET['user_ID'];
		}
		?>
		<p>Post ID</p>
		<?php echo "<input type='text' name='postID' value=".$post_ID." width='270' readonly/><br>";?> 

		<p>User ID</p>
		<?php echo "<input type='text' name='userID' value=".$user_ID." width='270' readonly/><br><br>";?> 
	  <input type="datetime-local" name="dateofinter"  width="270" /><br><br>
		
		<button class="btn btn-default">Submit</button>
	
	</div>
	
	<script>
	
		$(document).ready(function () {
				$('#datepicker').datepicker({
				  uiLibrary: 'bootstrap'
				});
			});
	
		function setinterviewdate(event)
		{
			
			if(document.getElementById('datepicker').value=="")
			{
			   event.preventDefault();
				alert("Please enter valid date for interview");
			   
			}
			
			
			
			
			
			
		}
		
	
	</script>
	
	
</form>