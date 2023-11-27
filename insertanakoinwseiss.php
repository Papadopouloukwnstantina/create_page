<?php
	if (($_POST['onoma']!='') && ($_POST['anakoinwsh']!=''))
	{
	include('connection.php');
	$onoma = mysqli_real_escape_string($conn, $_POST['onoma']);
	$anakoinwsh = mysqli_real_escape_string($conn, $_POST['anakoinwsh']);
	
			
			mysqli_set_charset($conn,"utf8");
			$sql="INSERT INTO anakoinwseis (nameteacher, anakoinwsh) VALUES  ('$onoma', '$anakoinwsh')";
			
			if(mysqli_query($conn, $sql))
			{
				echo "Records inserted successfully.";
			} else
			{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
			}
			mysqli_close($conn);
		}else
		echo "lathos";
?>
