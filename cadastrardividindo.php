<meta http-equiv="refresh" content="0.1;URL=pedidoespecial.php">
<?php session_start(); ?>
<?php
include_once("conectar.php");

$pedido = $_SESSION['mesa'];

	 $sql = "SELECT * FROM $pedido";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado)){
		
	$id = $registro['id'];
	$valor = $registro['valor'];
	$item = $registro['descricao'];
	
if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}
$sql = "INSERT INTO pedidodividindo VALUES (default, '$item', '$valor')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
}
mysqli_close($strcon);
?>