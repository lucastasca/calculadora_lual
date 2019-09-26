<html><body background-color='black'>
<script>
       window.location.href = "index.php";
    </script>
<?php session_start(); ?>
<?php
include_once("conectar.php");

	$pedido = $_SESSION['mesa'];

	
	$preco = $_SESSION['preco'];
	
$sql = "SELECT * FROM $pedido";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado)){
	$id = $registro['id'];
}

$valor = $_POST['ans'];
$item = $_POST['item'];
$lanche = $_POST['pas'];
$suco = $_POST['suc'];
$prom = $_POST['prom'];
$batata = $_POST['batata'];
$acai = $_POST['acai'];
$sopa = $_POST['sopa'];
if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}
switch($item){
	case "Adicional":
		$sql = "UPDATE $pedido SET valor = valor + '$valor', descricao = CONCAT(descricao, '+') WHERE id = $id;";
		mysqli_query($strcon,$sql) or die("Erro ao tentar atualizar registro");
	
		mysqli_close($strcon);
		
		echo "Atualização finalizada com sucesso!<br>";
break;
	default:
		$sql = "INSERT INTO $pedido VALUES ";
		$sql .= "(default, '$item', '$valor', '$lanche', '$suco', '$prom', '$batata', '$acai', '$sopa')"; 
		mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");

		$sql = "UPDATE mesa SET estado_mesa = 1 WHERE numero_mesa = '$pedido' ;";
		mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
		
		mysqli_close($strcon);
		
		echo "Compra finalizada com sucesso!<br>";
		exit("alguém tentou tapear o script, que tente em outro site!");
}

?> </body></html>