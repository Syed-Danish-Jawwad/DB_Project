<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">School Information</a></li>
			<li class="li"><a href="add_class.php">Add Class</a></li>
			<li class="li"><a href="add_subjects.php"> Add Subjects</a></li>
			<li class="li"><a href="add_stud.php">Add Students</a></li>
			<li class="li"><a href="add_sub.php"> Add Subject For student</a></li>
			<li class="li"><a href="show_student.php">Generate challan</a></li>
			<li class="li"><a href="add_staff.php">Add Staff</a></li>
			<li class="li"><a href="view_staff.php">View Staff</a></li>
			<li class="li"><a href="set_exam.php">Set Exam</a></li>
			<li class="li"><a href="view_exam.php">View Exam</a></li>
			<li class="li"><a href="view_stud.php"> View Student</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		';
	
	
	}
	else if(isset($_SESSION["ID"]))
	{
		echo'
			<li class="li"><a href="s_home.php">Profile</a></li>
			<li class="li"><a href="add_class.php"> Class</a></li>
			<li class="li"><a href="add_sub_student.php">add Subject</a></li>
			<li class="li"><a href="show_challan.php">View Challan</a></li>
			<li class="li"><a href="view_attendance.php">View Attendance</a></li>
			<li class="li"><a href="show_student_subjects.php">View Subjects</a></li>
			<li class="li"><a href="view_exam_student.php">View Exam</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	}
	else{
		echo'
			<li class="li"><a href="teacher_home.php">Profile</a></li>
			<li class="li"><a href="handle_class.php"> Handled Class</a></li>
			<li class="li"><a href="view_teacher_student.php"target="_blank"> Attendance</a></li>
			<li class="li"><a href="tech_view_exam.php">View Exam</a></li>
			<li class="li"><a href="add_mark.php">Add Marks</a></li>
			<li class="li"><a href="view_mark.php">View Marks</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
	}


?>
	

</ul>

</div>