<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Millennial School | Add Subject For Students</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
				<?php include"navbar.php";?><br>
							
			<div id="section">
					<?php include"sidebar.php";?><br><br><br>
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					<div class="content1">
					
						<h3 > Add Details</h3><br>
						<?php
							if(isset($_POST["submit"]))
							{
								$student_id=$_POST['student_id'];
								$course_id=$_POST['subject_id'];
								$sq="INSERT INTO `student_course`(`student_id`, `course_id`) VALUES ('$student_id','$course_id')";
								if($db->query($sq))
								{
									echo "<div class='success'>Insert Success..</div>";
								}
								else
								{
									echo "<div class='error'>Insert Failed..</div>";
								}
							}
						?>
						
						<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
						   <label>Subject id</label><br>
						   <input type="id" name="subject_id" required class="input">
						   <label>Student id</label><br/>
						     <input type="id" name="student_id" required class="input">
						   <button type="submit" class="btn" name="submit">Add Subject for student</button>
						</form>
				
				
					</div>
				
				
				<div class="tbox" >
					<h3 style="margin-top:30px;"> Subject Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>ID</th>
							<th>Subject Name</th>
						</tr>
						<?php
							$s="select * from course";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
										<td>{$r["id"]}</td>
										<td>{$r["name"]}</td>
										</tr>
									
									";
									
								}
								
							}
							else
							{
								echo "No Record Found";
							}
						?>
						
					</table>
				</div>
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>