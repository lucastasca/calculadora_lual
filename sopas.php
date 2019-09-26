<!doctype html>
<html>
<head>
	<!-- <meta http-equiv='refresh' content='1;URL=index.php'> -->
<title>Calculadora</title><link rel='shortcut icon' href="imagens/ico.gif" />
<link rel="stylesheet" href="css/calc.css">
</head>
<body>
<a href='index.php'><button class="button violet" type="button">
Voltar</button></a>
<a href='analizarsopas.php'><button class="button violet" type="button">
Editar</button></a><br>
<table border="1">
<tr><td colspan="2">
<form name="sopa" action="cadastrarsopa.php" method="POST">
<center><font face="verdana">Sopas</font></center>

<?php
include_once("conectar.php");
$sql = "SELECT * FROM sopas";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 while ($registro = mysqli_fetch_array($resultado))
 {
	$id = $registro['id'];
	$sopa = $registro['sopa'];
	$estoque = $registro['estoque'];
	$saida = $registro['saida'];
	$nome = $registro['nome'];
	echo "<tr><td> $estoque</td>";
	echo "<td><button class='button cadet' name='item' value='$sopa' ><font size='3'> $nome </font></button></td></tr>";

//	echo "<input style='font-size:18px;width:75' type='textfield' name='id' value='$id'>";
//	echo "<input style='font-size:18px;width:75' type='textfield' name='sopa' value='$sopa'>";

//	echo "<input style='font-size:18px;width:75' type='textfield' name='saida' value='$saida'> <br>";
	
 }
?>
</table>

</form>

</body>

<script src="js/calc.js"></script>
</html>
