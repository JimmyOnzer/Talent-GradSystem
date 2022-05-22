<?php 

function paginate($query,$current,$set,$baseurl,$tag)
{
	
	include("conn.php");
	
	if(strpos($baseurl,"?")>-1)
	{
		$baseurl=$baseurl."&";
	}
	else{
		$baseurl=$baseurl."?";
	}
	
	$res=mysqli_query($con,$query);
	$num=mysqli_num_rows($res);
	
	$icount=1;

	if($num>$set)
	{
			$counter=$num;
			$nj=0;

			if($num>0)
			{
				echo'<nav aria-label="Page navigation example">';
				echo'<ul class="pagination">';





			}


			if($current>0)
			{
				$back=$current-($set);

					echo'<li class="page-item"><a class="page-link" href="'.$baseurl.$tag.'='.$back.'">Previous</a></li>';


			}


			while($counter>0)
			{

				if($nj==0)
				{
					$start=$nj;
					$nj+=($set-1);
					$end=$nj;

					$class="page-item";
					if($start==$current)
					{
						$class="page-item active";
					}
					echo'<li class="'.$class.'"><a class="page-link" href="'.$baseurl.$tag.'='.$start.'&end='.$end.'">'.$icount.'</a></li>';


				}
				else
				{
					$nj+=1;
					$start=$nj;
					$nj+=($set-1);
					$end=$nj;	

					$class="page-item";
					if($start==$current)
					{
						$class="page-item active";
					}
					echo'<li class="'.$class.'"><a class="page-link" href="'.$baseurl.$tag.'='.$start.'&end='.$end.'">'.$icount.'</a></li>';


				}
				$counter -= $set;//minus ten
				$icount+=1;

			}

			if(($current+10)<($num-1))
			{
				$next=$current+($set);
				echo'<li class="page-item"><a class="page-link" href="'.$baseurl.$tag.'='.$next.'">Next</a></li>';

			}

			if($num>0)
			{
						echo'</ul>';
				echo'</nav>';

			}
		
	}
	
	
	
	
}


?>