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
					
				
						
				
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>ID</th>
							<th>NAME</th>
							<th>ADD</th>
						</tr>
						<?php
						
$s="select ID,NAME from course";
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
										<td> <a href='course_add.php?id={$r["ID"]}' class='btnr'> ADD</a> </td>)
										
											
									

       
										
											
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