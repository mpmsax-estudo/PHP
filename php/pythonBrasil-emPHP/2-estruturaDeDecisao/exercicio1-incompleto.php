<?php

// Fazer até o exercício 4.

//$n = round(readline("Digite o primeiro número: "), 2);

$texto = "ABCDEFGHIJKLMNOPQRSTUVXZabcdefghijklmnopqrstuvxz";
//$alfabeto = str_split($texto, 1);
//$numero = array(str_split($n, 1));
//$n = $_POST[$n];
function isnumeric($n) {
	//$n = round(readline("Digite o primeiro número: "), 2);
	if (is_numeric($n)){
		print("$n");
	return $n;
}else{
		exit;
}
}
isnumeric(r);
/*//echo $alfabeto;
//echo $numero;
//foreach ($numero as $digito) {
/*

if (is_numeric($n)){
	return $n1 = $n;
} else {
	return "Não é um número válido";
	exit;
	*/
//}
//}
//foreach ($texto as $letra) {
//	foreach ($numero as $digito) {
/*		if (ctype_alpha($digito)) {
			println("Não é um número válido");
			exit;
		} else {
			$n1 = $n;
		}
*/
//}
//}
/*
$n = round(readline("Digite o segundo número: "), 2);
/*
//foreach ($alfabeto as $letra) {
	foreach ($numero as $digito) {
		if ($digito == $letra) {
			println("Não é um número válido");
			exit;
		} else {
			$n2 = $n;
		}
}
//}

if ($n1 > $n2){
	print("O maior número é $n1.\n");
} elseif ($n1 < $n2){
	print("O maior número é $n2.\n");
} elseif ($n1 == $n2) {
	print("Os números são iguais.\n");
} else {
	println("Informação inválida.");
}
*/
?>