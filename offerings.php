<html lang="en">
<head>

   
   <?php include('components/account/scripts.php') ?>
   
  </head>

  <body class="bg-light">


    <?php include('components/account/navbar.php');?>
	
	
   <?php include('components/account/subnavbar.php');?>
	
	
    <main role="main" class="container">
	
 <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
			  <?php
	  
	    if(isset($_SESSION['id']))
		{
			
			$q="select * from business where user_ID='$ID' limit 1";
			$res=mysqli_query($con,$q);
			
			if(mysqli_num_rows($res)>0)
			{
				
				while($row=mysqli_fetch_assoc($res))
				{
									echo
				'<h1 class="display-4 font-italic" id="businesslabel">'.$row['businessname'].'</h1>
					  <p class="lead my-3" id="businessdesclabel">'.$row['businessdesc'].'</p>';
					
				}
				
			}
			else
			{
				
				echo
				'<h1 class="display-4 font-italic" id="businesslabel">Business Name</h1>
					  <p class="lead my-3" id="businessdesclabel">Business Description</p>';
				
				
			}
			
			
		}
	    
	  
	  
	  ?>

          
        </div>
      </div>
	  

      <?php 
	  
	  include('components/companyofferings/posts.php');
	  
	  ?>
	  
	  
	  <?php
	  
	    if(isset($_SESSION['id']))
		{
			
			$q="select * from business where user_ID='$ID' limit 1";
			$res=mysqli_query($con,$q);
			
			if(mysqli_num_rows($res)>0)
			{
				
				
			}
			else
			{
				
				echo
				"<script>
					  
					  
						 $(document).ready(function(){
							 
							$('#modal1').modal();
							
						});
						 
					  
				</script>";
				
				
			}
			
			
		}
	    
	  
	  
	  ?>

	  
	  <!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  
	  
	  
        <h5 class="modal-title" id="exampleModalLabel">Create a Business Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		
		
      </div>
      <div class="modal-body">
        <input class="form-control" id="businessname" placeholder="Business Name" type="text" >
		<br>
		<input class="form-control" id="businessdesc" placeholder="Business Description" type="text" >
		<br>
		<select class="form-control" id="country">
		    <option class="dropdown-item">South Africa</option>
			<option class="dropdown-item">United States</option>
		</select>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="newPost.php">Continue</a>
		<script>
		
		    function createbusiness()
			{
				var x = document.getElementById("country").selectedIndex;
				var businessname=document.getElementById('businessname').value;
				var businessdesc=document.getElementById('businessdesc').value;
				var country=document.getElementById("country").options[x].text;
				
				var formData=new FormData();
				formData.append("businessname", businessname); 
				formData.append("businessdesc", businessdesc); 
				formData.append("country", country); 
				
							var file ="components/companyofferings/createbusiness.php";
			
				var xhttp = new XMLHttpRequest()
				xhttp.onreadystatechange=function() {
				  if (this.readyState == 4 && this.status == 200) {

				       console.log(xhttp.responseText);
					   document.getElementById('businesslabel').innerText=businessname;
					   document.getElementById('businessdesclabel').innerText=businessdesc;
				       $('#modal1').modal('hide');
					   
						  

				  }

				};
				
				xhttp.open("POST", file, true);
	            xhttp.send(formData);
	
				
				
			}
		
		</script>
		
      </div>
    </div>
  </div>
</div>
	    


      
   </main>

   
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Offcanvas%20template%20for%20Bootstrap_files/jquery-3.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="Offcanvas%20template%20for%20Bootstrap_files/popper.js"></script>
    <script src="Offcanvas%20template%20for%20Bootstrap_files/bootstrap.js"></script>
    <script src="Offcanvas%20template%20for%20Bootstrap_files/holder.js"></script>
    <script src="Offcanvas%20template%20for%20Bootstrap_files/offcanvas.js"></script>







