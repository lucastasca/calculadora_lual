<body bgcolor= "#000000" text= "gold" >
<?php
// Conectando ao banco de dados: 
include_once("conectar.php");
	echo "<table style='background-repeat:no-repeat'>";
	echo "<form method='POST' action='atualizardb.php'><button name='msg' value='truncate' type='submit'>clickar aqui somente para apagar todo o dia</button></form><br>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='id' value='id'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='valor' value='valor'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='lanche' value='lanche'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='suco' value='suco'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='batata' value='batata'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='acai' value='acai'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='sopa' value='sopa'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='prom' value='prom'>";
	echo "<a href='index.php'><button>voltar</button></a><br>";
		
	 $sql = "SELECT * FROM dia order by id desc";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
	$id = $registro['id'];
	$valor = $registro['valor'];
	$lanche = $registro['lanche'];
	$suco = $registro['suco'];
	$batata = $registro['batata'];
	$acai = $registro['acai'];
	$sopa = $registro['sopa'];
    $prom = $registro['prom'];
	echo "<form method='POST' action='atualizardb.php' name='atualizar$id'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='id' value='$id'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='valor' value='$valor'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='lanche' value='$lanche'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='suco' value='$suco'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='batata' value='$batata'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='acai' value='$acai'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='sopa' value='$sopa'>";
	echo "<input style='font-size:18px;width:75' type='textfield' name='prom' value='$prom'>";
	echo "<button name='msg' value='atualizar' type='submit'>atualizar</button>";
	echo "<button name='msg' value='deletar' type='submit'>deletar</button></form><br>";
	
 }
	echo "</table>";
 mysqli_close($strcon);
  ?>
  </body>