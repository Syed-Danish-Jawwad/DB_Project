<?php
	$db=new mysqli("localhost","root","","school");
	if(!$db)
	{
		echo "failed";
	}
	
	$student_id=$_POST['student_id'];
	$due_date=$_POST['due_date'];
	
	
	
	$sq=" SELECT COUNT(student_id) as x from student_course k where k.student_id='$student_id'";
	
	
					
				$res=$db->query($sq);
				
									

       
									
							
							$r=$res->fetch_assoc();
								
									
									//echo 
									
										
										
									
									
									
							
	
	
	$total_amount=$r["x"]*5000;
	//echo $total_amount;
	
	
	$sql="INSERT INTO `student_challan`(`student_id`, `Fees`, `Due_date`) VALUES ('$student_id','$total_amount','$due_date')";
	
	if($db->query($sql)){
	echo "success";
	
		
	
	}
	else 
	{
		$sql="UPDATE `student_challan` SET `Fees`='$total_amount',`Due_date`='$due_date' WHERE student_id='$student_id'";
		if($db->query($sql)){
		echo "updated";}
		else{
		echo	$db->error;}




} 
	
	
	
?>