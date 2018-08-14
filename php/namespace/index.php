<?php

// Dependem um do outro:
// namespace/class/Cliente/Cadastro.php
// namespace/class/Cadastro.php
// namespace/index.php
// namespace/config.php
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

echo $cad;
$cad->registrarVenda();
?>