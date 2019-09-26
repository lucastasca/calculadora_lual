<?php
include_once("conectar.php");
$msg = $_POST['msg'];
if ($msg == "truncate"){
	echo "<meta http-equiv='refresh' content='1;URL=atualizarsopas.php'>";
}
else{
	echo "<meta http-equiv='refresh' content='1;URL=analizarsopas.php'>";
}
switch($msg){
	case "atualizar":
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$estoque = $_POST['estoque'];
		$saida = $_POST['saida'];
		
		if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$sql = "UPDATE abril.sopas SET nome = '$nome', estoque = '$estoque', saida = '$saida' WHERE id = $id;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro atualizar");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	case "deletar":
	if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$id = $_POST['id'];
		$sql = "DELETE FROM sopas WHERE id = $id;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	
	default:
		exit("alguém tentou tapear o script, que tente em outro site!");
}
?>