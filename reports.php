<html>

<body>
<main role="main" class="container">
	
 
	  	 <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">System users</h6>
<?php
	
include('./scripts/php/connection.php');
  echo '<select>
				   <option>Qualification</option>
				   <option>Bachelor of Education</option>
				   <option>B Tech</option>
				   <option>Law</option>
				   <option>Diploma in IT</option>
				   <option>Drama</option>
				   <option>Diploma in Marketing</option>
				   <option>Diploma in Public Relation</option>
				   <option>Diploma in Accounting</option>
				   <option>B Com</option>
				   <option>Diploma in HR</option>
				   <option>Diploma in Maritime</option>
				   <option>Diploma in Supply Chain management</option>
				   <option>Diploma in Eletrical engeneering</option></select> <select><option>Gender</option>
				   <option>Male</option>
				   <option>Female</option>
				   </select>';
	
		    if(isset($_SESSION['id']))
			{
				$ID=$_SESSION['id'];
				$sql="select * from student_accounts limit 10";
                $res=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($res)>0)
	{
		   echo'<table class="table table-striped table-hover">';
			  echo'<thead>';
				echo'<tr>
				  <th class="lead">Graduate Name</th>
				  <th class="lead">Qualification</th>
				  <th class="lead">Gender</th>
				</tr>
			  </thead>';
		while($row=mysqli_fetch_assoc($res))
		{

			  echo'<tbody>
				<tr>
				<td><img src="data:image;base64,'.$row['profile_pic'].'" width=50 height="50" class="img-circle" style="padding:10px" /> '.$row['firstname'].' '.$row['lastname'].'</td>
				  <td>'.$row['qualification'].'</td>
				  <td>'.$row['gender'].'</td>
				</tr>';
				

			
		}
					  echo'</tbody>
			</table>';
		
	}
	
	
}






?>
	
</main>
</body>
</html>	