<?php

//// AULA 61


// Explicacao
// $conn = new PDO('mysql:host=localhost;dbname=database', 'usuario', 'senha');
 
	$conn = new PDO('mysql:host=localhost;dbname=dbphp7', 'root', 'password');

$conn->beginTransaction();

$stmt = $conn -> prepare ("DELETE FROM tb_usuarios WHERE idusuario = ?");
//JÁ MAIS EXCLUA OU ATUALIZE SEM A CLAUSULA WHERE

// FILE pdo2.php
// $stmt = $conn -> prepare ("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
// file pdo1.php
//$stmt = $conn -> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$idusuario = 12;

$stmt->execute(array($idusuario));

if(!isset($idusuario == null)) {
         throw new Exception("ID não existe"); 
    } else {
         print_r($idusuario);
     }
try {
	

//$stmt -> bindParam(":ID", $idusuario);


// Caso tivesse outro parametro a ser passado seria referente a próxima interrogação.

$conn->commit();
echo 'Deletado com sucesso!';
} catch (PDOException $e) {
	$e->getMessage();
	$conn->rollBack();	
}


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