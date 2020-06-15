<?php

$conn = new mysqli("localhost", "root", "abc123", "dbphp7");

if($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, desenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345tr";

$stmt->execute();

$login = "user02";
$pass = "1qvce";

$stmt->execute();

?>