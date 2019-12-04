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
		<title>Millennial School | View Student</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		<div id="section">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
		<div class="tbox" >
					<h3 style="margin-top:30px;"> Student Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>ID</th>
							<th>NAME</th>
							<th>MAIL</th>
							<th>ADDR</th>
							<th>PHO</th>
						</tr>
						<?php
							$s="select * from student";
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
										<td>{$r["ADDR"]}</td>
										<td>{$r["PHO"]}</td>
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