<?php
include_once("conectar.php");
$msg = $_POST['msg'];
if ($msg == "truncate"){
	echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
}
else{
	echo "<meta http-equiv='refresh' content='1;URL=analizardb.php'>";
}
switch($msg){
	case "atualizar":
		$id = $_POST['id'];
		$valor = $_POST['valor'];
		$lanche = $_POST['lanche'];
		$suco = $_POST['suco'];
		$prom = $_POST['prom'];
		$batata = $_POST['batata'];
		$acai = $_POST['acai'];
		$sopa = $_POST['sopa'];
		if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$sql = "UPDATE dia SET valor = '$valor', lanche = '$lanche', suco = '$suco', batata = '$batata', acai = '$acai', sopa = '$sopa', prom = $prom WHERE id = $id;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	case "deletar":
	if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$id = $_POST['id'];
		$sql = "DELETE FROM dia WHERE id = $id;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	case "truncate":
	if (!$strcon) {
		die('Não foi possível conectar ao Banco de Dados');
}
		$sql = "TRUNCATE dia;"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
		mysqli_close($strcon);
		echo "Atualização finalizada com sucesso!<br>";
break;
	default:
		exit("alguém tentou tapear o script, que tente em outro site!");
}
?>