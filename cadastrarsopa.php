<meta http-equiv="refresh" content="0;URL=sopas.php">
<?php
include_once("conectar.php");

$item = $_POST['item'];

if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}
$sql = "UPDATE sopas SET estoque = estoque - 1 WHERE sopa = '$item'";
$sql2 = "UPDATE sopas SET saida = saida + 1 WHERE sopa = '$item'";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_query($strcon,$sql2) or die("Erro ao tentar cadastrar registro 2");
mysqli_close($strcon);
echo "Compra finalizada com sucesso!<br>";

?>