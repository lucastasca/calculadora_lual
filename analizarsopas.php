<link rel="stylesheet" href="css/calc.css">
<body>
<?php
// Conectando ao banco de dados: 
include_once("conectar.php");
	echo "<table style='background-repeat:no-repeat'>";
	// echo "<form method='POST' action='atualizarsopas.php'><button name='msg' value='truncate' type='submit'>clickar aqui somente para apagar todo o dia</button></form><br>";
	echo "<input style='font-size:18px;width:35' type='textfield' name='id' value='id'>";
	echo "<input style='font-size:18px;width:180' type='textfield' name='sopa' value='sopa'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='estoque' value='estoque'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='saida' value='saida'>";
	echo "<a href='sopas.php'><button>voltar</button></a><br>";
		
	 $sql = "SELECT * FROM sopas";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
	$id = $registro['id'];
	$nome = $registro['nome'];
	$estoque = $registro['estoque'];
	$saida = $registro['saida'];
	
	echo "<form method='POST' action='atualizarsopas.php' name='atualizar$id'>";
	echo "<input style='font-size:18px;width:35' type='textfield' name='id' value='$id'>";
	echo "<input style='font-size:18px;width:180' type='textfield' name='nome' value='$nome'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='estoque' value='$estoque'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='saida' value='$saida'>";
	echo "<button name='msg' value='atualizar' type='submit'>atualizar</button>";
	echo "<button name='msg' value='deletar' type='submit'>deletar</button></form><br>";
	
 }
	echo "</table>";
 mysqli_close($strcon);
  ?>
  </body>