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
				<h3 class="text">Welcome <?php echo $_SESSION["NAME"]; ?></h3><br><hr><br>
				<div class="content1">
								
						<?php
	include"database.php";
	
	if(!isset($_SESSION["ID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}
	$id=$_SESSION["ID"];
	$sql="SELECT * FROM student_challan WHERE student_id=$id";
		$res=$db->query($sql);

		

						
							if($res->num_rows>0){
							
								$r=$res->fetch_assoc();
										
											
											echo 'ID '.$r["student_id"]."<br/>";
											echo 'Fees '.$r["Fees"]."<br/>";
											echo 'Due Date	: '.$r["Due_date"]."<br/>";
									
							}
						?>
				</div>
			</div>
	
				<?php include"footer.php";?>
	</body>
