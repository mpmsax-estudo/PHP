<?php

// Fazer até o exercício 4.

$n1 = round(readline("Digite a 1ª nota: "), 2);
print("número aceito $n1\n");

$n2 = round(readline("Digite a 2ª nota: "), 2);
print("número aceito $n2\n");

$n3 = round(readline("Digite a 3ª nota: "), 2);
print("número aceito $n3\n");

$n4 = round(readline("Digite a 4ª nota: "), 2);
print("número aceito $n4\n");
//$n1 = round($n1, 2);

if ($n1 >= 0.00 and $n1 <= 10.00 and $n2 >= 0.00 and $n2 <= 10.00 and $n3 >= 0.00 and $n3 <= 10.00 and $n4 >= 0.00 and $n4 <= 10.00){

	$media = round((($n1 + $n2 + $n3 + $n4) / 4),2);

	print("A média é $media\n");

} else {
	print("Um ou mais números são inválidos. \nDeve-se inserir um número de 0 a 10, inteiro ou decimal\n");
}

?>