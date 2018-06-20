<?php

$nome = $_GET["usuario"];

$numero = (int)$_GET["numero"];

var_dump($nome);
var_dump($numero);

// $_SERVER pega informações do ambiente
$ip = $_SERVER["REMOTE_ADDR"];
$info = $_SERVER["SCRIPT_NAME"];

echo $ip;
echo $info;

?>