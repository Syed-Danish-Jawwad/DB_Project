<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["TID"]))
	{
		echo'
			<li class="li"><a href="teacher_home.php">School Information</a></li>
			
			


			<li class="li"><a href="view_teacher_student.php"target="_blank"> View Student</a></li>
			<li class="li"><a href="fee.html">Payments</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	}
	else{
		echo'
			<li class="li"><a href="teacher_home.php">Profile</a></li>
			<li class="li"><a href="handle_class.php"> Handled Class</a></li>
			<li class="li"><a href="add_stud.php"> Students</a></li>
			<li class="li"><a href="view_stud_teach.php" target="_blank"> View Student</a></li>

			<li class="li"><a href="tech_view_exam.php">View Exam</a></li>
			<li class="li"><a href="add_mark.php">Add Marks</a></li>
			<li class="li"><a href="view_mark.php">View Marks</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
	}


?>
	

</ul>

</div>