<!doctype html>
<html>
<head>
<title>Calculadora</title><link rel='shortcut icon' href="imagens/ico.gif" />
<link rel="stylesheet" href="css/mesa.css">
</head>
<body bgcolor= "#000000" text= "gold" >

<td><center>

<?php
// Conectando ao banco de dados: 
include_once("conectar.php");
	$mesa01 = 'mesa01';
	$mesa02 = 'mesa02';
	$mesa03 = 'mesa03';
	$mesa04 = 'mesa04';
	$mesa05 = 'mesa05';
	$mesa06 = 'mesa06';
	$mesa07 = 'mesa07';
	$mesa08 = 'mesa08';
	$mesa09 = 'mesa09';
	$mesa10 = 'mesa10';
	$mesa11 = 'mesa11';
	$mesa12 = 'mesa12';

$sql = "SELECT mesanova FROM mesa";

 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados mesa01");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado)){
	$mesanova = $registro['mesanova'];
}	
$mesa01 = $mesa01 == $mesanova ? "mesaocupada" : "mesa";
$mesa02 = $mesa02 == $mesanova ? "mesaocupada" : "mesa";
$mesa03 = $mesa03 == $mesanova ? "mesaocupada" : "mesa";
$mesa04 = $mesa04 == $mesanova ? "mesaocupada" : "mesa";
$mesa05 = $mesa05 == $mesanova ? "mesaocupada" : "mesa";
$mesa06 = $mesa06 == $mesanova ? "mesaocupada" : "mesa";
$mesa07 = $mesa07 == $mesanova ? "mesaocupada" : "mesa";
$mesa08 = $mesa08 == $mesanova ? "mesaocupada" : "mesa";
$mesa09 = $mesa09 == $mesanova ? "mesaocupada" : "mesa";
$mesa10 = $mesa10 == $mesanova ? "mesaocupada" : "mesa";
$mesa11 = $mesa11 == $mesanova ? "mesaocupada" : "mesa";
$mesa12 = $mesa12 == $mesanova ? "mesaocupada" : "mesa";
$mesa0 = 'mesa';

echo "<form name='mesanova' action='atualizarmesa.php' target='pedido' method='POST'>";
echo "<div>";
echo "<table>";
echo "<tr>";
echo "<td>  <button class='button $mesa01' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa01' onclick=\"setTimeout('window.parent.location.reload();', 50);\">01</button>  </td>";
echo "<td>  <button class='button $mesa02' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa02' onclick=\"setTimeout('window.parent.location.reload();', 50);\">02</button> </td>";
echo "<td>  <button class='button $mesa03' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa03' onclick=\"setTimeout('window.parent.location.reload();', 50);\">03</button> </td>";
echo "<td>  <button class='button $mesa04' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa04' onclick=\"setTimeout('window.parent.location.reload();', 50);\">04</button>  </td>";
echo "</tr>";
echo "<tr>";
echo "<td>   </td>";
echo "<td>  <button class='button $mesa05' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa05' onclick=\"setTimeout('window.parent.location.reload();', 50);\">05</button> </td>";
echo "<td>  <button class='button $mesa06' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa06' onclick=\"setTimeout('window.parent.location.reload();', 50);\">06</button> </td>";
echo "<td>  <button class='button $mesa07' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa07' onclick=\"setTimeout('window.parent.location.reload();', 50);\">07</button> </td>";
echo "</tr>";
echo "<tr>";
echo "<td>   </td>";
echo "<td>   </td>";
echo "<td>  <button class='button $mesa09' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa09' onclick=\"setTimeout('window.parent.location.reload();', 50);\">09</button> </td>";
echo "<td>  <button class='button $mesa08' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa08' onclick=\"setTimeout('window.parent.location.reload();', 50);\">08</button> </td>";
echo "</tr>";
echo "<tr>";
echo "<td>   </td>";
echo "<td>   </td>";
echo "<td>  <button class='button $mesa10' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa10' onclick=\"setTimeout('window.parent.location.reload();', 50);\">10</button> </td>";
echo "<td>   </td>";
echo "</tr>";
echo "<tr>";
echo "<td>   </td>";
echo "<td>   </td>";
echo "<td>  <button class='button $mesa11' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa11' onclick=\"setTimeout('window.parent.location.reload();', 50);\">11</button> </td>";
echo "<td>  <button class='button $mesa12' style='font-size:12px;width:50px' type='submit' name='mesanova' value='mesa12' onclick=\"setTimeout('window.parent.location.reload();', 50);\">12</button> </td>";
echo "</tr>";
echo "</table></form></div>";


echo "<form name='trocarpedido' action='trocarpedido.php' target='pedido' method='POST'>";
echo "<button class='button orange' style='font-size:12px;width:50px' type='submit' name='trocarpedido' value='troca' onclick=\"setTimeout('window.parent.location.reload();', 50);\">Trocar</button>"


?>




</body>
<script src="js/calc.js"></script>
</html>
