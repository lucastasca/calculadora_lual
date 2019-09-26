<meta http-equiv="refresh" content="0;URL=index.php">
<?php
include_once("conectar.php");
$sql = "SELECT * FROM mesa";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado)){
	$pedido = $registro['mesa'];
}
$sql = "TRUNCATE $pedido ";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Compra finalizada com sucesso!<br>";
?>