
<?php
	include "view_teacher_student.php";
	

						$teacher_id=$_SESSION['TID'];
				
					$student_id=$_GET['id'];
$s="INSERT INTO `attendence`(`student_id`, `date`, `attended`, `count_attend`) VALUES ('$student_id',CURDATE(),'absent',0)";


							if(!$res=$db->query($s)){
								echo $db->error;
								
							}
							else{
							echo "<script>window.open('view_teacher_student.php?mes=marked..','_self');</script>";}
							
?>
