<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "abc123");

$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row) {
    
    foreach($row as $key => $value){
        echo "<strong>".$key.":</strong>".$value."<br/>";
    }
    echo "================================================<br/>";
}



?>