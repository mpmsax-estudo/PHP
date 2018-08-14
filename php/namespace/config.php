<?php

// Dependem um do outro:
// namespace/class/Cliente/Cadastro.php
// namespace/class/Cadastro.php
// namespace/index.php
// namespace/config.php
spl_autoload_register(function($nameClass) {

	//VerResultado
	//var_dump($nameClass);
	 $dirClass = "class";

	 //$fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
     $fileName = str_replace('\\', '/', $dirClass . DIRECTORY_SEPARATOR . $nameClass . '.php');
     if (file_exists($fileName)){
     require_once($fileName);
     echo "<b>A classe {$fileName} foi encontrada.</b>\n";
     }else {
     echo "<b>O arquivo {$fileName} não existe.</b>\n";
     }
});

?>