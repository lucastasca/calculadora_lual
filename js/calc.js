function preco(a) {
	document.calculator.ans.value+='+a' ;
	document.calculator.ans.value=eval(document.calculator.ans.value)
}

function somapastel() {
	document.calculator.pas.value+='+1' ;
	document.calculator.pas.value=eval(document.calculator.pas.value);
}

function somasopa(a) {
	document.calculator.sopa.value+='+a' ;
	document.calculator.sopa.value=eval(document.calculator.sopa.value)
}
 
function somasuco() {
	document.calculator.suc.value+='+1' ; 
	document.calculator.suc.value=eval(document.calculator.suc.value)
}
function somaprom() {
	document.calculator.prom.value+='+1' ;
	document.calculator.prom.value=eval(document.calculator.prom.value)
}

function somabatata(a) {
	document.calculator.batata.value+='+a' ;
	document.calculator.batata.value=eval(document.calculator.batata.value)
}

function somaacai(a) {
	document.calculator.acai.value+='+a' ;
	document.calculator.acai.value=eval(document.calculator.acai.value)
}

function limpar() {
	document.calculator.ans.value='0' ;
	document.calculator.pas.value='0';
	document.calculator.suc.value='0';
	document.calculator.batata.value='0';
	document.calculator.acai.value='0';
	document.calculator.prom.value='0';
}
