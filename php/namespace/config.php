<?php

spl_autoload_register(function($nameClass) {
	$dirClass = "class";

	 $fileName = str_replace('\\', '/', __DIR__ . '/var/www/html/php/namespace/class/' . $nameSpace . '.php');
     if (file_exists($fileName)){
     require_once($fileName);
     echo "<b>A classe {$fileName} foi encontrada.</b>\n";
     }else {
     echo "<b>O arquivo {$fileName} não existe.</b>\n";
     }
// $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

//	if (file_exists($filename)) {
//		require_once($filename);
//	}
});

?>