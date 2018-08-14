<?php

$conn = new mysqli("localhost", "root", "password", "dbphp7");

if ($conn->connect_error) {
	echo "Error" . $conn -> connect_error;
}

// Explicacao
// $pdo = new PDO('mysql:host=localhost;dbname=database', 'usuario', 'senha');
 
 /*
$pdo = new PDO('mysql:host=localhost;dbname=dbphp7', 'root', 'password');
 
if ($pdo -> connect_error) {
	echo "Error" . $pdo -> connect_error;
}
*/

$stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

//$stmt->bind_param("ss", "user", "senha");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123456";

$stmt->execute();

$login = "root";
$pass = "a1b2c3";

$stmt->execute();

?>