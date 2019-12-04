<?php
	$servername="localhost";
	$username="saad";
	$password="Whoissaad123";
	$dbname="school";


$conn =new mysqli($servername,$username,$password,$dbname);






$student_select="select ID,NAME,MAIL FROM student";

$result=$conn->query($student_select);

$index=1;



if($result->num_rows>0){
	while($rows=$result->fetch_assoc()){
		echo "id ".$row["ID"]." ".$row["NAME"]." ".$row["MAIL"]."<br/>";
}}
	else{
	echo "no students in school sadly";}
	
$conn->close();










	
?>
