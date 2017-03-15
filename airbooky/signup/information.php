<?php
session_start();
$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
	echo 'NOT CONNECETD';
}  
  else{
	  echo nl2br("Connected to Mysql\n");
  }
  if(!mysqli_select_db($con,'airline')){
	  echo 'data base not selected';
  }
  else{
	  echo nl2br("Database is Selected\n");
  }
$name = $_POST['user'];
$_SESSION["guest"]=$name;
$mail = $_POST['email'];
$password = $_POST['password'];
$password_true=$_POST['password_true'];

if($password==$password_true){
$sql = "INSERT INTO `users` (Name,Email,password) values ('$name','$mail','$password')"; 
if (!mysqli_query($con,$sql)){
	  echo 'not inserted' ;
	  header("refresh:0.001; url=http://localhost/airbook/home/register.html");
  } }
else {
	header("refresh:0.001; url=http://localhost/airbook/home/signin.html");
} 
?>