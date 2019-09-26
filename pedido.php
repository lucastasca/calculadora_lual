<?php

	$pedido = isset($_SESSION['mesa']) ? $_SESSION['mesa'] : 'mesa01';
	$_SESSION['mesa'] = $pedido;
	$nome_mesa = ucfirst($pedido);
	echo "$nome_mesa";
	$total = '0';
	$totalsuco = '0';
	$totallanche = '0';
	$totalbatata = '0';
	$totalacai = '0';
	$totalsopa = '0';
	$totalprom ='0';
	$topo = '0';
	
	
	$sql = "SELECT sum(valor), sum(lanche), sum(suco), sum(batata), sum(acai), sum(sopa), sum(prom) FROM $pedido";
    $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
    $registro = mysqli_fetch_array($resultado);
    
   	$total          = $registro['sum(valor)'];
   	$total = ($total == NULL) ? '0.00' : $total;    
	$totallanche    = $registro['sum(lanche)'];
	$totalsuco      = $registro['sum(suco)'];
	$totalbatata    = $registro['sum(batata)'];
	$totalsopa      = $registro['sum(sopa)'];
	$totalacai      = $registro['sum(acai)'];
	$totalprom      = $registro['sum(prom)'];
	 
   	 
	echo " R$ $total ";
	echo "<form method='POST' action='atualizarpedido.php' ><button name='msg' value='truncate' type='submit'>Limpar</button></form>";
	
	echo "<form name='enviar'  method='POST' action='cadastrar.php'>";
	echo "<button name='metodo' 	value='dinheiro' 		type='submit'> Dinheiro		</button>";
	echo "<button name='metodo' 	value='debito' 			type='submit'> Débito		</button>";
	echo "<button name='metodo' 	value='credito' 		type='submit'> Crédito		</button>";
	echo "<button name='metodo' 	value='fiado' 			type='submit'> Fiado		</button><br>";	
	echo "<input name='valor' 		value='$total' 			type='hidden'>";
	echo "<input name='lanche'		value='$totallanche' 	type='hidden'>";
	echo "<input name='suco' 		value='$totalsuco' 		type='hidden'>";
	echo "<input name='prom' 		value='$totalprom' 		type='hidden'>";
	echo "<input name='batata' 		value='$totalbatata' 	type='hidden'>";
	echo "<input name='acai' 		value='$totalacai'		type='hidden'>";
	echo "<input name='sopa' 		value='$totalsopa' 		type='hidden'>";
	echo "</form>";
	
	echo "<section class='topo_pedido'><div class='cel_id'>ID</div><div class='cel_valor'>Valor</div><div class='cel_item'>Item</div><div class='cel_espaco'></div>";
	echo "</section>";
	
	$sql = "SELECT * FROM $pedido";
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
   	
	echo "<form type='hidden' method='POST' action='atualizarpedido.php' name='atualizar$id'>";
	echo "<section class='topo_pedido'><div class='cel_id'>$id</div><div class='cel_valor'>$valor</div><div class='cel_item'>$item</div>";
	
	echo "<input type='hidden' name='id' value='$id'>";
	echo "<input type='hidden' name='valor' value='$valor'>";
	echo "<input type='hidden' name='item' value='$item'>";
	echo "<button class='botao_pedido' name='msg' value='dividir' type='submit' > >> </button> ";
	echo "<button class='botao_pedido' name='msg' value='X' type='submit' >xx</button></form><br>";
	echo "</section>";
	
 }
 	
	
	

  ?>
  <script src="js/calc.js"></script>