<?php

// Explicacao
// $conn = new PDO('mysql:host=localhost;dbname=database', 'usuario', 'senha');
 
$conn = new PDO('sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0', 'root', 'password');

$conn->beginTransaction();

//$stmt = $conn -> prepare ("DELETE FROM tb_usuarios WHERE idusuario = ?");
//JÁ MAIS EXCLUA OU ATUALIZE SEM A CLAUSULA WHERE

// FILE pdo2.php
// $stmt = $conn -> prepare ("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
// file pdo1.php
//$stmt = $conn -> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$idusuario = 2;

//$stmt -> bindParam(":ID", $idusuario);

$stmt->execute(array($idusuario));


//Faz parte do exercicio //$conn->rollback();
$conn->commit();

echo "Confirmar execucao";
/*
file pdo
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

	foreach ($row as $key => $value) {
	
		echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
	
	}

	echo "############################################<br/>";

}

//var_dump($results);

$stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

//$stmt->bind_param("ss", "user", "senha");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123456";

$stmt->execute();

$login = "root";
$pass = "a1b2c3";

$stmt->execute();
*/
?>