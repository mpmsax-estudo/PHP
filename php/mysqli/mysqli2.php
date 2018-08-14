<?php

$conn = new mysqli("localhost", "root", "password", "dbphp7");

if ($conn->connect_error) {
	echo "Error" . $conn -> connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($rows = $result->fetch_assoc()) {

	array_push($data, $rows);

}

// while ($rows = $result->fetch_array()) {
//		var_dump($rows);
// }

echo json_encode($data);

?>