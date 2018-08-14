<?php

// Explicacao
// $conn = new PDO('mysql:host=localhost;dbname=database', 'usuario', 'senha');
 
$conn = new PDO('mysql:host=localhost;dbname=dbphp7', 'root', 'password');

$stmt = $conn -> prepare ("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario =:ID");

// FILE pdo2.php
// $stmt = $conn -> prepare ("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
// file pdo1.php
//$stmt = $conn -> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$login = "buda";
$password = "a1b2c3";
$idusuario = 2;

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);
$stmt -> bindParam(":ID", $idusuario);

$stmt->execute();

echo "Alteração efetuada!";

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