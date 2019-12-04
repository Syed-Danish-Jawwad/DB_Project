<?php
	include"database.php";
	session_start();
	
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
				<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
				
				
				
			
				
				
						
				
					<table border="1px" >
						<tr>
							
							<th>ID</th>
							<th>Name</th>
						   <th>mail</th>
						</tr>
						<?php
						$teacher_id=$_SESSION['TID'];
$s="SELECT * FROM student WHERE ID IN (select student_id from student_course where course_id=(
SELECT course_id FROM teacher_course WHERE tid=$teacher_id))
";
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
										
											<td>{$r["ID"]}</td>
											<td>{$r["NAME"]}</td>
											<td>{$r["MAIL"]}</td>
											<td><a href='attended.php?id={$r["ID"]}' class='btnr'>Present</a></td>
											<td><a href='absent.php?id={$r["ID"]}' class='btnr'>Absent</a></td>
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