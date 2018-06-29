<?php

#aptitude remove php7.0-mysql;
#aptitude install php7.0-mysqli;
#reboot;

$conn = new mysqli("localhost", "root", "password", "challenge");

if ($conn->connect_error) {
	
	echo "Erro: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO incidente (id,atendente,cliente,descricao,status,creation_time) \
		    	VALUES (?,?,?,?,?,?)");

$stmt->bind_param("iiissd",$atendente,$cliente,$descricao,$hojePresente);

$atendente = "4";
$cliente = "2";
$descricao = "erro no recebimento de e-mail";
$hojePresente = "2018-06-19 01:12:48";

$stmt->execute();
?>