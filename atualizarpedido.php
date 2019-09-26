<html><body background-color='black'>
<script>
        window.location.href = "index.php";
    </script>
<?php session_start(); ?>
<?php
include_once("conectar.php");
$msg = $_POST['msg'];

	$pedido = $_SESSION['mesa'];
	
	echo "<h1>$pedido</h1>";

switch($msg){
	case "atualizar":
		$id = $_POST['id'];
		$valor = $_POST['valor'];
		$lanche = $_POST['lanche'];
		
		if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$sql = "UPDATE $pedido SET valor = '$valor', lanche = '$lanche' WHERE id = $id;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	case "X":
	if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$id = $_POST['id'];
		$sql = "DELETE FROM $pedido WHERE id = $id;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
case "dividir":
	if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$id = $_POST['id'];
		
		$sql = "INSERT INTO separado (valor, descricao, lanche, suco, prom, batata, acai, sopa) SELECT valor, descricao, lanche, suco, prom, batata, acai, sopa FROM  $pedido where id = $id";

		$sql2 = "DELETE FROM $pedido WHERE id = $id;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_query($strcon,$sql2) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	case "truncate":
	if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$sql = "TRUNCATE $pedido;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");

		$sql = "UPDATE mesa SET estado_mesa = 0 WHERE numero_mesa = '$pedido' ;";
		mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");

		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	default:
		exit("alguém tentou tapear o script, que tente em outro site!");
}
?>
</body></html>