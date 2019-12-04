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
							
							<th>ID</th>
							<th>COURSE Name</th>
						
						</tr>
						<?php
						$student_id=$_SESSION['ID'];
$s="SELECT * FROM course WHERE id IN (select course_id from student_course where student_id=$student_id)";
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
										
											<td>{$r["id"]}</td>
											<td>{$r["name"]}</td>
											
											
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