<?php

// Dependem um do outro:
// namespace/class/Cliente/Cadastro.php
// namespace/class/Cadastro.php
// namespace/index.php
// namespace/config.php
namespace Cliente;

class Cadastro extends \Cadastro {

	public function registrarVenda() {

		echo "Foi registrada uma venda para o cliente " . $this->getNome();

	}
}
?>
