<div id="guest">
<?php
session_start();
$_SESSION["guest"]='';
if($_SESSION["guest"]!=''){
echo $_SESSION["guest"];}
else{
	echo "HI GUEST!";
}
?>
</div>