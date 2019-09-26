<meta http-equiv="refresh" content="0.1;URL=truncate2.php">
<?php
include_once("conectar.php");
$valor = $_POST['valor'];
$metodo = $_POST['metodo'];
$lanche = $_POST['lanche'];
$suco = $_POST['suco'];
$prom = $_POST['prom'];
$batata = $_POST['batata'];
$acai = $_POST['acai'];
$sopa = $_POST['sopa'];
if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}
$sql = "INSERT INTO dia VALUES ";
$sql .= "(default, '$valor', '$metodo', '$lanche', '$suco', '$prom', '$batata', '$acai', '$sopa')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Compra finalizada com sucesso!<br>";

$sql = "TRUNCATE separado;";

?>