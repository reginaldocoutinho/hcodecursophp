<?php

$imagens = scandir("imagens");

$dados = array();

foreach ($imagens as $img) {
    if(!in_array($img, array(".",".."))){//in_array procura dentro do array ai passa o registro que vai ser comparado e os valores na frente
        $filename = "imagens" . DIRECTORY_SEPARATOR . $img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/hcode/manipulando-arquivos/imagens/" . str_replace("\\", "/", $img);
        array_push($dados, $info);
    }
}

echo json_encode($dados, JSON_UNESCAPED_SLASHES);


?>