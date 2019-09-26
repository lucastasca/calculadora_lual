<html><body>
<script>
        window.location.href = "index.php";
    </script>

<?php session_start(); ?>
<?php

$pedido = $_SESSION['mesa'];
	
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
$sql .= "(default, '$valor', '$metodo', '$lanche', '$suco', '$prom', '$batata', '$acai', '$sopa');";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");

$sql = "UPDATE mesa SET estado_mesa = 0 WHERE numero_mesa = '$pedido' ;";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");

$sql = "TRUNCATE $pedido ;";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");

mysqli_close($strcon);

?>

</body></html>