<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "abc123");

//$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, desenha) VALUES(:LOGIN, :PASSWORD)");

$stmt = $conn->prepare("UPDATE tb_usuario SET deslogin = :LOGIN, desenha = :PASSWORD WHERE id = :ID");


$login = "jao";
$password = "2020";
$id = 3;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Inserido OK!";


?>