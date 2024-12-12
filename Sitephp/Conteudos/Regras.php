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
     	 Regras
	</title>
   </head>
<Body>
	<hr color=White size=5>
<img src="../Imagens/lifepoints.PNG" align="right" border="1" width="300" height="300">

<BODY background = "../Imagens/arena.jpg">

<a href = "Conteudos.php"> Conteudos </a>

    <big><big> <b>Objetivo: </b> No jogo Yu-Gi-Oh o objetivo tanto seu quanto do oponente é reduzir os pontos de vida
do oponente de 4000 para 0

 <Font face = "Times New Roman">

<h2> Tipos de Cartas: </h2>

</Font>
<big>
<a name = "Regras">
<pre>
<b> Monstros: </b> Usados para atacar e defender.

<b><u>Monstros Normais</u>:</b> Sem habilidades especiais.
<b><u> Monstros de Efeito</u>:</b> Possuem habilidades especiais.
<b><u> Monstros de Fusão</u>:</b>, Sincro, Xyz, Link: Exigem condições específicas para invocação.
<b><u> Magias</u>:</b> Ativam efeitos que ajudam o jogador.

Ex: Magias Normais, Contínuas, de <a href ="#Campo">campo </a>, etc.
Armadilhas: Ativadas durante o turno do oponente para interromper jogadas.
</pre>

</big>

<Font face = "Times New Roman">

<h2> Estrutura do Campo: </h2>

</Font>

<big>
<pre>
<b><u>Zona de Monstros (5 espaços)</b>:</u> Para colocar monstros.
<b><u>Zona de Magias/Armadilhas (5 espaços)</b>:</u> Para cartas de Magia e Armadilha.
<b><u>Deck Principal (40-60 cartas)</b>:</u> Onde ficam as cartas principais.
<b><u>Deck Extra</b>:</u> Para Monstros de Fusão, Sincro, Xyz e Link.
<b><u>Zona de campo<a name = "Campo"> </a> </b>:</u> Para cartas de Magia de Campo.

Para mais informações 
<a href = https://img.yugioh-card.com/ygo_cms/ygo/all/uploads/Rulebook_v9_pt.pdf> Página Wiki das Regras </a>
</pre>
</big></big>
</Body>
</html>