<?php
$sql = "SELECT * FROM mesa";
$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
while ($registro = mysqli_fetch_array($resultado))
{
	$estado = $registro['estado_mesa'];
	$mesa = $registro['numero_mesa'];  
	$$mesa = $estado > 0 ? "mesaocupada" : "mesa";
	 
}

echo "<form name='mesa' action='atualizarmesa.php' method='POST'>";
echo "<div class='mesa-container'>";
echo "<div><button class='button $mesa01' type='submit' name='mesa' value='mesa01'>01</button> </div> ";
echo "<div><button class='button $mesa02' type='submit' name='mesa' value='mesa02'>02</button> </div> ";
echo "<div><button class='button $mesa03' type='submit' name='mesa' value='mesa03'>03</button> </div> ";
echo "<div><button class='button $mesa04' type='submit' name='mesa' value='mesa04'>04</button> </div> ";
echo "<div></div>" ;
echo "<div><button class='button $mesa05' type='submit' name='mesa' value='mesa05'>05</button> </div> ";
echo "<div><button class='button $mesa06' type='submit' name='mesa' value='mesa06'>06</button> </div> ";
echo "<div><button class='button $mesa07' type='submit' name='mesa' value='mesa07'>07</button> </div> ";
echo "<div></div><div></div>" ;
echo "<div><button class='button $mesa09' type='submit' name='mesa' value='mesa09'>09</button> </div> ";
echo "<div><button class='button $mesa08' type='submit' name='mesa' value='mesa08'>08</button> </div> ";
echo "<div></div><div></div>" ;
echo "<div><button class='button $mesa10' type='submit' name='mesa' value='mesa10'>10</button> </div> ";
echo "<div></div><div  class='diveditar' ><a href='analizardb.php'> Editar </a></div>" ;
echo "<div></div>"  ;
echo "<div><button class='button $mesa11' type='submit' name='mesa' value='mesa11'>11</button> </div> ";
echo "<div><button class='button $mesa12' type='submit' name='mesa' value='mesa12'>12</button> </div> ";
echo "</div></form>" ;

?>
