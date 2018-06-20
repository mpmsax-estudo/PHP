<?php
$nome =  "Marcos Paulo";

$sobrenome = "Moreno Machado";

// concatenar e deixar um espaço no meio
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

// sair/terminar o programa
exit;

echo $nome;

echo "<br/>";

unset($nome);

// Se a variavel existir printar na tela
if (isset($nome)) {

	echo $nome;

}

?>