
<form name="calculator" action="cadastrarpedido.php" id='calculator' method="POST">
    
<section class='botaocontainerpastel'>

<div class='titulopastel'>Pastel</div>


<div class='botao_calculadora'><button class="button lanche" name='item' value='Lanche Salgado' 
onmouseup="somapastel() ; preco(8) ; "
onmousedown="limpar()">
Pastel<br> Simples <br> R$ 8,00
</button></div>

<div class='botao_calculadora'><button class="button lanche" name='item' value='Lanche Salgado' 
onmouseup="somapastel() ; preco(8.5) ; "
onmousedown="limpar()">
Pastel<br> Simples <br> R$ 8,50
</button></div>

<div class='botao_calculadora'><button class="button lanche" name='item' value='Lanche Salgado'  
onmouseup="somapastel() ; preco(9) ; "
onmousedown="limpar()">
Peru<br>Portugues<br> R$ 9,00
</button></div>

<div class='botao_calculadora'><button class="button lanche" name='item' value='Lanche Salgado'
onmouseup="somapastel() ; preco(9.5) ; "
onmousedown="limpar()">
5 queijos <br> <br>R$ 9,50
</button></div>

<div class='botao_calculadora'><button class="button lanche" name='item' value='Lanche Salgado'
onmouseup="somapastel() ; preco(11) ; "
onmousedown="limpar()">
Camarão <br>Seca <br>R$11,00
</button></div>

<div class='botao_calculadora'><button class="button lanche" name='item' value='Adicional'
onmouseup="preco(0.5) ; "
onmousedown="limpar()">
Adicional <br> <br>R$ 0,50
</button></div>

<div class='botao_calculadora'><button class="button lanche" name='item' value='Adicional'
onmouseup="preco(1.5) ; "
onmousedown="limpar()">
Adicional <br> <br>R$ 1,50
</button></div>


<div class='botao_calculadora'><button class="button lanche" name='item' value='Lanche Doce'
onmouseup="somapastel() ; preco(5) ; "
onmousedown="limpar()">
Banana <br>Canela <br>R$ 5,00
</button></div>

<div class='botao_calculadora'><button class="button lanche" name='item' value='Lanche Doce'
onmouseup="somapastel() ; preco(6) ; "
onmousedown="limpar()">
DoceLeite<br>Romeu <br> R$ 6,00
</button></div>

<div class='botao_calculadora'><button class="button lanche" name='item' value='Chocolate'
onmouseup="somapastel() ; preco(7) ; "
onmousedown="limpar()">
Chocolate<br>  <br>R$ 7,00
</button></div>


<div class='botao_calculadora'><button class="button lanche" name='item' value='Lanche Nutella'
onmouseup="somapastel() ; preco(9) ; "
onmousedown="limpar()">
Nutella <br><br>R$ 9,00
</button></div>

<div class='botao_calculadora'><button class="button lanche" name='item' value='Gateau'
onmouseup="preco(10) ; "
onmousedown="somapastel(); limpar()">
Pastel <br>Gateau<br> R$10,00
</button></div>


<div class='botao_calculadora'><button class="button lanche" name='item' value='Costelinha BBQ'
onmouseup="somapastel(); preco(12) ; "
onmousedown="limpar()">
Costelinha <br>BBQ <br>R$ 12,00
</button></div>

<div class='botao_calculadora'><button class="button lanche" name='item' value='Adicional'
onmouseup="preco(2) ; "
onmousedown="limpar()">
Adicional <br> <br>R$ 2,00
</button></div>
</section>

<section class='botaocontainer'>
<div class='titulo'>Sucos</div>

<div class='botao_calculadora'><button class='button green' name='item' value='Suco Fruta'
onmouseup="somasuco() ; preco(5) ; "
onmousedown="limpar()">
Suco<br> Fruta <br> R$ 5,00
</button></div>

<div class='botao_calculadora'><button class='button green' name='item' value='Fruta Especial'
onmouseup="somasuco() ; preco(6) ; "
onmousedown="limpar()">
Fruta <br>Especial<br> R$ 6,00</button></div>

<div class='botao_calculadora'><button class='button green' name='item' value='Adicional'
onmouseup="preco(1.5) ; "
onmousedown="limpar()">
Mais Fruta<br>Com Leite<br> R$ 1,50</button></div>

<div class='botao_calculadora'><button class='button green' name='item' value='Suco Especial'
onmouseup="somasuco() ; preco(6.5) ; "
onmousedown="limpar()">
Suco <br> Especial <br>R$ 6,50</button></div>

<div class='botao_calculadora'><button class='button green' name='item' value='Suco Especial'
onmouseup="somasuco() ; preco(7) ; "
onmousedown="limpar()">
Suco <br> Especial <br>R$ 7,00</button></div>

<div class='botao_calculadora'><button class='button green' name='item' value='Todo Poderoso'
onmouseup="somasuco(); somaacai(2); preco(8.5) ; "
onmousedown="limpar()">
Todo <br> Poderoso<br> R$ 8,50</button></div>

</section>

<section class='botaocontainer'>
<div class='titulo'>Açaí</div>

<div class='botao_calculadora'><button class='button violet' name='item' value='Suco Acai'
onmouseup="somasuco(1); somaacai(1) ; preco(6) ; "
onmousedown="limpar()">
Suco<br> Acai <br> R$ 6,00 
</button></div>

<div class='botao_calculadora'><button class='button violet' name='item' value='Acai Puro'
onmouseup="somaacai(2) ; preco(8) ; "
onmousedown="limpar()">
Acai<br> Puro <br> R$ 8,00
</button></div>

<div class='botao_calculadora'><button class='button violet' name='item' value='Adicional'
onmouseup="preco(1) ; "
onmousedown="limpar()">
Adicional<br><br> R$ 1,00</button></div>

<div class='botao_calculadora'><button class='button violet' name='item' value='Adicional'
onmouseup="preco(2) ; "
onmousedown="limpar()">
Adicional<br><br> R$ 2,00</button></div>

<div class='botao_calculadora'><button class='button violet' name='item' value='Adicional'
onmouseup="preco(3) ; "
onmousedown="limpar()">
Nutella<br><br> R$ 3,00</button></div>

<div class='botao_calculadora'><button class='button violet' name='item' value='Adicional'
onmouseup="preco(4) ; "
onmousedown="limpar()">
Whey Protein<br>R$ 4,00</button></div>

</section>
<section class='botaocontainer'>
<div class='titulo'>Porções</div>

<div class='botao_calculadora'><button class='button orange' name='item' value='Fritas/Salada Prom'
onmouseup="somaprom(); preco(2) ; "
onmousedown="limpar()">
Fritas<br>Salada <br>R$ 2,00</button></div>

<div class='botao_calculadora'><button class='button orange' name='item' value='Fritas 200gr'
onmouseup="somabatata(200); preco(5) ; "
onmousedown="limpar()">
Fritas<br>200gr<br>R$ 5,00</button></div>

<div class='botao_calculadora'><button class='button orange' name='item' value='Fritas 500gr'
onmouseup="somabatata(500); preco(12) ; "
onmousedown="limpar()">
Fritas<br>500gr<br>R$ 12,00 </button></div>

<div class='botao_calculadora'><button class='button orange' name='item' value='Aneis de Cebola'
onmouseup="preco(13) ; "
onmousedown="limpar()">
Aneis<br>Cebola<br>R$ 13,00</button></div>

<div class='botao_calculadora'><button class='button orange' name='item' value='Espetinho Camarão'
onmouseup="preco(12) ; "
onmousedown="limpar()">
Espetinho<br>Camarão<br>R$ 12,00</button></div>

<div class='botao_calculadora'><button class='button olive' name='item' value=' Kit Sopa Congelada'
onmouseup="somasopa(10); preco(100) ; "
onmousedown="limpar()">
Kit Sopa<br>Congelada<br>R$ 100,00</button></div>


<div class='botao_calculadora'><button class='button orange' name='item' value='Gratinada Bacon'
onmouseup="somabatata(400); preco(25) ; "
onmousedown="limpar()">
Gratinada<br>Bacon<br>R$ 25,00</button></div>

<div class='botao_calculadora'><button class='button orange' name='item' value='Gratinada Simples'
onmouseup="somabatata(400); preco(26) ; "
onmousedown="limpar()">
Calabresa<br><br>R$ 26,00</button></div>

<div class='botao_calculadora'><button class='button orange' name='item' value='Gratinada Especial'
onmouseup="somabatata(400); preco(30) ; "
onmousedown="limpar()">
Seca<br>Blumenau<br>R$ 30,00</button></div>


<div class='botao_calculadora'><button class='button olive' name='item' value='Kit Sopa Congelada'
onmouseup="somasopa(5); preco(60) ; "
onmousedown="limpar()">
Kit Sopa<br>Congelada<br>R$ 60,00</button></div>

<div class='botao_calculadora'><button class='button olive' name='item' value='Sopa Congelada'
onmouseup="somasopa(1); preco(13.90) ; "
onmousedown="limpar()">
Sopa<br>Quente<br>R$ 13,90</button></div>

<div class='botao_calculadora'><button class='button olive' name='item' value='Sopa Delivery'
onmouseup="somasopa(1); "
onmousedown="limpar()">
Sopa<br>Delivery<br> . </button></div>

<div class='botao_calculadora'><button class='button orange' name='item' value='Gratinada Bacon'
onmouseup="somabatata(200); preco(14) ; "
onmousedown="limpar()">
Gratinada<br>Bacon<br>R$ 14,00</button></div>

<div class='botao_calculadora'><button class='button orange' name='item' value='Gratinada Simples'
onmouseup="somabatata(200); preco(15) ; "
onmousedown="limpar()">
Calabresa<br><br>R$ 15,00</button></div>

<div class='botao_calculadora'><button class='button orange' name='item' value='Gratinada Especial'
onmouseup="somabatata(200); preco(18) ; "
onmousedown="limpar()">
Seca<br>Blumenau<br>R$ 18,00</button></div>

<div class='botao_calculadora'><button class='button red' name='item' value='Docinho'
onmouseup="preco(3.00) ; "
onmousedown="limpar()">
Docinho<br><br>R$ 3,00</button></div>

<div class='botao_calculadora'><button class='button red' name='item' value='Trident'
onmouseup="preco(2.50) ; "
onmousedown="limpar()">
Trident<br>Halls<br>R$ 2,50</button></div>

<div class='botao_calculadora'><button class='button red' name='item' value='Caipirinha'
onmouseup="preco(12) ; "
onmousedown="limpar()">
Caipirinha<br><br>R$ 12,00</button></div>
</section>

<section class='botaocontainer'>
<div class='titulo'>Diversos</div>

<div class='botao_calculadora'><button class='button darkblue' name='item' value='Agua'
onmouseup="preco(3); "
onmousedown="limpar()">
Agua<br><br>R$ 3,00</button></div>

<div class='botao_calculadora'><button class='button darkblue' name='item' value='Nescau/Kapo'
onmouseup="preco(3) ; "
onmousedown="limpar()">
Nescau<br>Kapo<br>R$ 3,00	</button></div>

<div class='botao_calculadora'><button class='button darkblue' name='item' value='Café'
onmouseup="preco(3.5) ; "
onmousedown="limpar()">
Café<br><br> R$ 3,50</button></div>

<div class='botao_calculadora'><button class='button darkblue' name='item' value='Lata'
onmouseup="preco(4.5) ; "
onmousedown="limpar()">
Lata<br><br>R$ 4,50</button></div>

<div class='botao_calculadora'><button class='button darkblue' name='item' value='coca 600/Pureza'
onmouseup="preco(6.5) ; "
onmousedown="limpar()">
Pureza<br>Coca 600ml<br>R$ 6,50</div>
</button>

<div class='botao_calculadora'><button class='button darkblue' name='item' value='Long Neck'
onmouseup="preco(7) ; "
onmousedown="limpar()">
Cerveja <br>Long Neck<br> R$ 7,00</button></div>


<div class='botao_calculadora'><button class='button darkblue' name='item' value='Brownie'
onmouseup="preco(5) ; "
onmousedown="limpar()">
Brownie<br><br>R$ 5,00</button></div>

<div class='botao_calculadora'><button class='button darkblue' name='item' value='H20h'
onmouseup="preco(5) ; "
onmousedown="limpar()">
H20h<br><br>R$ 5,00</button></div>

<div class='botao_calculadora'><button class='button darkblue' name='item' value='Chopp'
onmouseup="preco(0) ; "
onmousedown="limpar()">
Chopp<br><br>R$ 0,00</button></div>

<div class='botao_calculadora'><button class='button darkblue' name='item' value='Pizza'
onmouseup="preco(9) ; "
onmousedown="limpar()">
Pizza<br><br>R$ 9,00</button></div>

<div class='botao_calculadora'><button class='button darkblue' name='item' value='Budweiser Coca 1.5l '
onmouseup="preco(10) ; "
onmousedown="limpar()">
Budweiser<br>Coca 1.5  L<br>R$ 10,00</button></div>


<div class='botao_calculadora'><button class='button darkblue' name='item' value='Original'
onmouseup="preco(10) ; "
onmousedown="limpar()">
Original<br>  <br>R$ 11,00</button></div>



</section>
<!-- campos para pegar os dados das funcoes dos botoes -->
<input type="hidden" name="ans"     value="0">
<input type="hidden" name="pas"     value="0">
<input type="hidden" name="suc"     value="0">
<input type="hidden" name="batata"  value="0">
<input type="hidden" name="acai"    value="0">
<input type="hidden" name="sopa"    value="0">
<input type="hidden" name="prom"    value="0">
</form>
