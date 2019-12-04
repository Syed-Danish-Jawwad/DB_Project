<?php
	include "database.php";
	session_start();
	$course_id=$_GET["id"];
	$student_id=$_SESSION["ID"];
	$s="INSERT INTO `student_course`(`student_id`, `course_id`) VALUES ('$student_id','$course_id')";
	if($db->query($s))
	{
		echo "<div class='success'>Insert Success..</div>";
	}
	else
	{
		echo "<div class='error'>Insert Failed..</div>";
	}
	echo "<script>window.open('add_sub_student.php?mes=Data Deleted..','_self');</script>";
?>