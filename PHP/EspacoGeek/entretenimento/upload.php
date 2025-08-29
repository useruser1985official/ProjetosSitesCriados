<?php
include_once "../funcoes/conexao.php";

$_UP["pasta"] = "../uploads/";
$_UP["tamanho"] = 1024 * 1024 * 2;
$_UP["extensoes"] = array("jpg", "jpeg", "png", "gif");
$_UP["renomeia"] = true;

$extensao = strtolower(end(explode(".", $_FILES["tImg"]["name"])));

if(array_search($extensao, $_UP["extensoes"] === false)) {
    header("location: inserir.php?env=erro-extensao");
    exit;
}
else if($_UP["tamanho"] < $_FILES["tImg"]["size"]) {
    header("location: inserir.php?env=erro-tamanho");
    exit;
}
else if($_UP["renomeia"] == true) {
    switch($_FILES["tImg"]["type"]) {
        case "image/gif":
            $tipo = ".gif";
            break;
        case "image/png":
            $tipo = ".png";
            break;
        case "image/jpeg":
            $tipo = ".jpeg";
            break;
    }
    $final = time() . $tipo;
}
else {
    $final = $_FILES["tImg"]["name"];
}

// Outra condição

if(move_uploaded_file($_FILES["tImg"]["tmp_name"], $_UP["pasta"].$final)) {
    $sql_env = "insert into imagens (id, nome) values (default, '$final')";
    $salvar = mysqli_query($conexao, $sql_env);
    
    header("location: inserir.php?env=suc-imagem"); 
}
else {
    header("location: inserir.php?env=erro-imagem");
    exit;
}