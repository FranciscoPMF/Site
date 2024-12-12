<?php
if(!isset($_COOKIE["ut"]))
		{
		header("location:../erro.php");
		}
include("../header.php");
?>
<html>
    <head>
	<title>
     	 Conteudos
	</title>
   </head>
<Body>
	<hr color=oil size=5>
	<img src="../Imagens/Seto.jpg" align="right" border="0" width="700" height="700">


<a href = "Regras.php"> Regras do Jogo </a>
	
	<a href= "Historia.php">  <pre> História </pre> </a>
	
	<a href= "../Conteudos/Baralho.php"> Baralho </a> <br>

	<a href= "../Conteudos/Estrategia.php"> Estrategia </a> <br>

	<a href= "../Conteudos/Vidios Explicativos.php"> Vidios Explicativos </a> <br>
	
	<a href= "../Index.php"> Index </a>
	
</Body>
</html>