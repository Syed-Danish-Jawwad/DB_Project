<?php

$servername="localhost";
$username="saad";
$password="Whoissaad123";
$dbname="new school database";


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
   
   
   
   
   $sql = "INSERT INTO `admin`(`name`,`dept_id`, `Password`, `address`, `email`) VALUES ('$name','$dept','$password','$address','$email')";
   
   
   if($con->query($sql)==TRUE){
	   
   echo 'success';}
   else{
   echo 'failure '.$con->error;}
   
   $con->close();
 
   
   
   

   
   ?>