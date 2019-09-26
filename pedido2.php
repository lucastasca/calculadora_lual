<?php

	echo "Individual";
	$total = '0';
	$totalsuco = '0';
	$totallanche = '0';
	$totalbatata = '0';
	$totalacai = '0';
	$totalprom ='0';
	$topo = '0';
	

	$sql = "SELECT sum(valor), sum(lanche), sum(suco), sum(batata), sum(acai), sum(prom) FROM separado";
    $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
    $registro = mysqli_fetch_array($resultado);
    
   	$total          = $registro['sum(valor)'];
   	$total = ($total == NULL) ? '0.00' : $total;    
	$totallanche    = $registro['sum(lanche)'];
	$totalsuco      = $registro['sum(suco)'];
	$totalbatata    = $registro['sum(batata)'];
	$totalacai      = $registro['sum(acai)'];
	$totalprom      = $registro['sum(prom)'];



	echo "<table>";
	echo "R$ $total";
	echo "<form method='POST' action='atualizarpedido2.php' ><button name='msg' value='truncate' type='submit'>xx</button></form><br>";
	
	 $sql = "SELECT * FROM separado";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 while ($registro = mysqli_fetch_array($resultado)){
		
	$id = $registro['id'];
	$valor = $registro['valor'];
	$item = $registro['descricao'];
	$lanche = $registro['lanche'];
	$suco = $registro['suco'];
	$batata = $registro['batata'];
	$acai = $registro['acai'];
    $prom = $registro['prom'];
	

	echo "<form method='POST'  action='atualizarpedido2.php' name='atualizar$id'>";
	echo "<input type='hidden' name='id' value='$id'>";
	echo "<tr><td>$id</td><td> $valor </td><td> $item </td><td> ";
	echo "<input type='hidden' name='valor' value='$valor'>";
	echo "<input type='hidden' name='item' value='$item'>";
	echo "<button name='msg' value='X' type='submit' >x</button></form><br>";
	
 }
 
	echo "<form name='enviar'  method='POST' action='cadastrar2.php'>";
	echo "<input name='valor' value='$total' type='hidden'>";
	echo "<input name='lanche' value='$totallanche' type='hidden'>";
	echo "<input name='suco' value='$totalsuco' type='hidden'>";
	echo "<input name='prom' value='$totalprom' type='hidden'>";
	echo "<input name='batata' value='$totalbatata' type='hidden'>";
	echo "<input name='acai' value='$totalacai' type='hidden'>";
	
	
	echo "</tr><button name='metodo' value='dinheiro' type='submit'> Dinheiro</button>";

	echo "</tr><button name='metodo' value='debito' type='submit'> Débito</button>";

	echo "</tr><button name='metodo' value='credito' type='submit'> Crédito</button>";

	echo "</tr><button name='metodo' value='fiado' type='submit'> Fiado</button>";	


	echo "<br> ID &nbsp; &nbsp;  Valor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Item <br>";

	echo "</table></form><br><br>";

  ?>