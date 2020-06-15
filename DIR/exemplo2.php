<?php

$imagens = scandir("images");

$data = array();

foreach ($imagens as $img) {
    if (!in_array($img, array(".", ".."))) {

        $filename = "images" . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);

        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/exerciciosPHP/CONHECENDO_PHP/DIR".str_replace("\\", "/", $filename);

        array_push($data, $info);

    }
}

echo json_encode($data);

?>