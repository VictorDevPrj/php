<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "abc123");


$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE id = :ID");

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "DELETETADO COM SUCESSO!";


?>