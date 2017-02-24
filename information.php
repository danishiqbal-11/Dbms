<?php
$mysqli = new mysqli("localhost","root","","airline");

//sql to insert into table
function NewUser() {
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_true = $_POST["password_true"];
$mobile = $_POST['mobile'];
$query = "INSERT INTO users (Name,email,password,mobile) VALUES ('$user','$email','$password','$mobile')"; 
}
?>