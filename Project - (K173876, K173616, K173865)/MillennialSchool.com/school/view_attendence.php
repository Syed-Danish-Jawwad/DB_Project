<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["ID"]))
	{
		
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Millennial School | Add Class</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
			<div id="section">
				<?php include"sidebar.php";?><br>
				<h3 class="text">Welcome <?php echo $_SESSION["NAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
				
				
				
				
				
				
						
				
					<table border="1px" >
						<tr>
							
							<th>DATE</th>
							<th>attended</th>
					
						</tr>
						<?php
						$student_id=$_SESSION['ID'];
$s="SELECT date,attended from attendence where student_id=$student_id";
							if(!$res=$db->query($s)){
								echo $db->error;
								
							}
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
								
									echo "
										<tr>
										
											<td>{$r["date"]}</td>
											<td>{$r["attended"]}</td>
											
											
										</tr>
										";
									
								}
								
							}
							
							
							
							
							

						?>
					
					</table>
					
					
					
					
					
				</div>
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>