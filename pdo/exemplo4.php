<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "abc123");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE id = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback();

$conn->commit();

echo "DELETETADO COM SUCESSO!";


?>