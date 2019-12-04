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
		<title>Millennial School | Add Class</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
			<div id="section">
				<?php include"sidebar.php";?><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
				
				
				<form action="generate_challan.php" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
						   
						   <label>Student id</label><br/>
						     <input type="id" name="student_id" required class="input">
						 
						   
						   	<br><label>Due Date</label><br/>
						     <input type="date" name="due_date" required class="input">
						   <button type="submit" class="btn" name="submit">Send Challan</button>
						   
						</form>
				
				
				
				
						
				
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
						
						</tr>
						<?php
						
$s="select ID,NAME,MAIL from student";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["ID"]}</td>
											<td>{$r["NAME"]}</td>
											<td>{$r["MAIL"]}</td>
											
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