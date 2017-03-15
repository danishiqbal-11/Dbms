<?php
include("C:/wamp64/www/airbooky/home/header.php");
include("C:/wamp64/www/airbooky/home/contentheader.php");
include("C:/wamp64/www/airbooky/home/logo.php");
include("C:/wamp64/www/airbooky/home/contentfooter1.php");
?>
<style type="text/css">
 #Sign-In{
 margin-bottom:150px;
 margin-right:150px;
 margin-left:450px;
 border:3px solid #a1a1a1;
 padding:9px 35px;
 background:rgb(200, 150, 150);
 width:400px;
 border-radius:20px;
 box-shadow: 7px 7px 6px; } 
 #button
{ border-radius:10px;
 width:100px; height:40px;
 background:rgb(45,255,10);
 font-weight:bold;
 font-size:20px }
 </style>
<div class="container">
<div class="navigation">
<div id="Sign-In">
<fieldset style="width:50%">
<legend>LOG-IN HERE</legend>
<form method="POST" action="http://localhost/airbook/home/signin.php"> 
Email: <br><input type="text" name="user" size="40" required="required"><br> 
password: <br><input type="password" name="pass" size="40" required="required"><br><br> 
<input id="button" type="submit" name="submit" value="Log-In"> 
<br><pre>

<a href="http://localhost/airbooky/signup/register.php">Not registered! Register Here</a></pre>
</form> 
</fieldset> </div>
</div>
<br/><br/>
</div>