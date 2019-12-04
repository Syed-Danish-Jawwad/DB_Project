<?php
	include "database.php";
	session_start();
	$id1=$_GET["id"];
	$s="delete from course where ID=$id1";
	$db->query($s);
	echo "<script>window.open('add_subjects.php?mes=Data Deleted..','_self');</script>";
?>