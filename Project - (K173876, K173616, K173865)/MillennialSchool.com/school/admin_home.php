<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Millennial School | Admin Home</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > School Information</h3><br>
					<p class="para">
						Welcome to Millennial School. We are devoted to excellence in teaching, learning, research and to developing leaders in many disciplines who make a differece globally.
					</p>
					<p class="para">
						It is a complete school management software designed to automate a school's diverse operations. 
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>