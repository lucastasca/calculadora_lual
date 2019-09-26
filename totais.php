<br> <br> 1  -  R$ <?php echo number_format($valor1, 2, ',', '.') ; ?>
<br> <br> 2  -  R$ <?php echo number_format($valor2, 2, ',', '.') ; ?>
<br> <br> 3  -  R$ <?php echo number_format($valor3, 2, ',', '.') ; ?>
<br> <br> 4  -  R$ <?php echo number_format($valor4, 2, ',', '.') ; ?>
<br> <br> 5  -  R$ <?php echo number_format($valor5, 2, ',', '.') ; ?>
<br> <br> 6  -  R$ <?php echo number_format($valor6, 2, ',', '.') ; ?>
<br> <br> 7  -  R$ <?php echo number_format($valor7, 2, ',', '.') ; ?>
</form>


<br><br><br><br>
<form name="total">
<table border='1'><tr>
	<td>Total R$ <?php echo number_format($totaldia, 2, ',', '.') ?> </td>
	<td>Dinheiro R$ <?php echo number_format($dinheiro, 2, ',', '.') ?> </td>
	<td>Débito R$ <?php echo number_format($debito, 2, ',', '.') ?> </td>
	<td>Crédito R$ <?php echo number_format($credito, 2, ',', '.') ?> </td>
	<td>Fiado R$ <?php echo number_format($fiado, 2, ',', '.') ?> <br>  </td></tr> 
<tr colspan="3">Lanche 	<?php echo $totaldialanche ?><br></tr>
<tr colspan="3">Sucos 	<?php echo $totaldiasuco ?><br></tr>
<tr colspan="3">Batata	<?php echo ($totaldiabatata/1000) ?> Kg<br></tr>
<tr colspan="3">Acai	<?php echo $totaldiaacai ?><br></tr>
<tr colspan="3">Sopa	<?php echo $totaldiasopa ?><br></tr>
<tr colspan="3">Promoção <?php echo $totaldiaprom ?></tr>
</table> 
</form>