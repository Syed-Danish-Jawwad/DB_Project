<?php

$servername="localhost";
$username="root";
$password="";
$dbname="school";


$con=new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
   die("connection failed :".$con->connect_error);}
   
     $name= $_POST['name'];
   $father= $_POST['father_name'];
   $address= $_POST['address'];
   $d_o_b=$_POST['birth_date'];
   $dept=$_POST['depart'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   
   
   
   
   $sql = "INSERT INTO `student`(`name`, `dept_id`, `email`,`Password`,`Father name`,`date_of_birth`,`address`) VALUES ('$name','$dept','$email','$password','$father','$d_o_b','$address')";
   
   
   if($con->query($sql)==TRUE){
	   
   echo 'success';}
   else{
   echo 'failure '.$con->error;}
   
   $con->close();
 
   
   
   

   
   ?>