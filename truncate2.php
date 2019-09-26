<meta http-equiv="refresh" content="0;URL=index.php">
<?php
include_once("conectar.php");
 
$sql = "TRUNCATE separado";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Compra finalizada com sucesso!<br>";
?>