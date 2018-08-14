<?php

// Explicacao
// $conn = new PDO('mysql:host=localhost;dbname=database', 'usuario', 'senha');
 

$conn = new PDO('mysql:host=localhost;dbname=dbphp7', 'root', 'password');
/*
if ($conn -> connect_error) {
	echo "Error" . $conn -> connect_error;
}
*/

$stmt = $conn -> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

	foreach ($row as $key => $value) {
	
		echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
	
	}

	echo "############################################<br/>";
	
}

//var_dump($results);

/* $stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

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