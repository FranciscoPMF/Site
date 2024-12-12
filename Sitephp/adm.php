<?php
	if(!isset($_COOKIE["ad"]))
		{
		header("location:erro.php");
		}
		include("header.php");
?>
<html>
	Ola bem vindo Adm, gostaria de ver o Index ou sair? <br>
	
		<a href = "Index.php"> Index </a> <br>
		<a href = "Password.php"> Passwords </a> <br>
		<a href = "entrada.html" > Sair </a> <br>
		
</html>
