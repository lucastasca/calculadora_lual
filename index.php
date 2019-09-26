<!doctype html>
<html>
<head>
<title>Calculadora</title>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/calc.css">
</head>
<body>

<?php session_start(); ?>
<?php
include_once("conectar.php");
 $totalsuco = '0';
 $totallanche = '0';
 $totalbatata = '0';
 $totalacai = '0';
 $totalsopa = '0';
 $totalprom ='0';
 $valor7 = '0';
 $valor6 = '0';
 $valor5 = '0';
 $valor4 = '0';
 $valor3 = '0';
 $valor2 = '0';
 $valor1 = '0';
 $total = '0';
 $dinheiro = '0';
 $debito = '0';
 $credito = '0';
 $fiado = '0';
 $_SESSION['preco'] = '0';


 $sql = "SELECT * FROM dia";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 while ($registro = mysqli_fetch_array($resultado))
 {
   
 	$pagamento = $registro['metodo'];
   switch ($pagamento) {
    case  "dinheiro":
    	$dinheiro += $registro['valor'];
    	break;
    case "debito":
        $debito += $registro['valor'];
        break;
    case "credito":
        $credito += $registro['valor'];
        break;
    case "fiado" :
    	$fiado += $registro['valor'];
        break;
}

    $valor = $registro['valor'];
    $total += $valor;
    $totaldia = $total;
	
	$lanche = $registro['lanche'];
	$totallanche += $lanche;
	$totaldialanche = $totallanche;	
	
	$suco = $registro['suco'];
	$totalsuco += $suco;
	$totaldiasuco = $totalsuco;	
	
	$batata = $registro['batata'];
	$totalbatata += $batata;
	$totaldiabatata = $totalbatata;
	
	$acai = $registro['acai'];
	$totalacai += $acai;
	$totaldiaacai = $totalacai;

	$sopa = $registro['sopa'];
	$totalsopa += $sopa;
	$totaldiasopa = $totalsopa;
	
	$prom = $registro['prom'];
	$totalprom += $prom;
	$totaldiaprom = $totalprom;
	
	$valor7 = $valor6;
	$valor6 = $valor5;
	$valor5 = $valor4;
	$valor4 = $valor3;
	$valor3 = $valor2;
	$valor2 = $valor1;
	$valor1 = $valor;	
 }
 ?>
<div class="container">	


<div class="botao"><?php include("botao.php") ?></div>


<div id='escolhamesa'display='none' class="escolhamesa"><?php include("mesa.php") ?> </div>


<div class="pedido" id="pedido"><?php include("pedido.php") ?></div>


<div class="pedido2"><?php include("pedido2.php") ?></div>


</div>

<div class='totais'><?php include("totais.php") ?></div>


    
</body>
<script src="js/calc.js"></script>
</html>
