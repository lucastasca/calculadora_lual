<meta http-equiv='refresh' content='0.1;URL=index.php'>
<?php
include_once("conectar.php");
$msg = $_POST['msg'];


switch($msg){
	case "atualizar":
		$id = $_POST['id'];
		$valor = $_POST['valor'];
		$lanche = $_POST['lanche'];
		
		if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$sql = "UPDATE separado SET valor = '$valor', lanche = '$lanche' WHERE id = $id;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	case "X":
	if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$id = $_POST['id'];
		$sql = "DELETE FROM separado WHERE id = $id;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
case "dividir":
	if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$id = $_POST['id'];
		
		$sql = "INSERT INTO separado (valor, descricao, lanche, suco, prom, batata, acai, sopa) SELECT valor, descricao, lanche, suco, prom, batata, acai, sopa FROM  separado where id = $id";

		$sql2 = "DELETE FROM separado WHERE id = $id;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_query($strcon,$sql2) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	case "truncate":
	if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$sql = "TRUNCATE separado;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	default:
		exit("alguém tentou tapear o script, que tente em outro site!");
}
?>