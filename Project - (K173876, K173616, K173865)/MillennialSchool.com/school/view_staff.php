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
		<title>Millennail School | View Staff</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>
			<?php include"navbar.php";?><br>
				
				<div id="section">
					
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					
					<!-- <div class="content1">
					
						<h3 > View Staff Details</h3><br>
						<form id="frm" autocomplete="off">
							<input type="text" id="txt" class="input">
						</form>
						<br>
						<div id="box"></div>
						
					</div> -->

					<div class="tbox" >
					<h3 style="margin-top:30px;"> Staff Details</h3><br>
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
							<th>QUALIFICATION</th>
							<th>SALARY</th>
							<th>MAIL</th>
							<th>ADDRESS</th>
							<th>PHONE</th>
						</tr>
						<?php
							$s="select * from staff";
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
										<td>{$r["TID"]}</td>
										<td>{$r["TNAME"]}</td>
										<td>{$r["QUAL"]}</td>
										<td>{$r["SAL"]}</td>
										<td>{$r["MAIL"]}</td>
										<td>{$r["PADDR"]}</td>
										<td>{$r["PNO"]}</td>
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
			
<!-- 			<script>
				$(document).ready(function(){
					$("#txt").keyup(function(){
						var txt=$("#txt").val();
						if(txt!="")
						{
							$.post("search.php",{s:txt},function(data){
								$("#box").html(data);
							});
						}
						
					});
					
					
					
				});
			</script> -->
	</body>
</html>