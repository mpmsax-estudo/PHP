<?php

$nome = "Marcos Paulo";

function teste() {

	global $nome;
	echo $nome;

}

function teste2() {

// rodar com ou sem comentário
	$nome =  "Paulo";
	echo $nome . " agora no teste2";

}

teste();

echo "<br/>";

teste2();

?>