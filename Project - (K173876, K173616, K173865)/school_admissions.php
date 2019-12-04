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
   
   
   $vkey = md5(time())
   
   $sql = "INSERT INTO `student`(  `NAME`, `FNAME`, `DOB`, `MAIL`, `ADDR`,`password`) VALUES ('$name','$father','$d_o_b','$email','$address','$password')";
   
   if($insert)
   {
      $to = $e;
      $subject = "Email Verification";
      $message = "<a href='http://localhost/Project/verify.php?vkey=$vkey'>Register Account</a>";
      $headers = "From: millennialschool@yahoo.com \r\n";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\t\n";

      mail($to,$submit,$message,$headers);
      $headers('location:verify.php');
   }

   if($con->query($sql)==TRUE){
	   
   echo 'success';}
   else{
   echo 'failure '.$con->error;}
   
   $con->close();
 
   
   
   

   
   ?>

   