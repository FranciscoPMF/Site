<?php
$ut=$_POST["ut"];
$pa=$_POST["pa"];
if($ut == "esdmi" && $pa == "beja"){
	header("location:Index.php");
	setcookie("ut","$ut", time()+30);
}
else{
if($ut == "adm" && $pa == "admB"){
	header("location:adm.php");
	setcookie("ad","$ut", time()+60);
}
else
{
	header("location:../Sitephp/erro.php");
}
}
?>