<?php
require_once "conexao.php";
require_once "antiinjection.php";

$user = isset($_POST["user"]) ? antiInjection($_POST["user"]) : "";
$senha = isset($_POST["senha"]) ? antiInjection($_POST["senha"]) : "";

header("Content-Type: application/json");

if($user != "" && $senha != "") {
    $senha = sha1($senha);
    
    $sql = "select * from usuario where user = '$user' and senha = '$senha'";

    $result = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nome = $row["nome"];

        echo json_encode(array("status" => "sucesso", "nome" => $nome));
    }
    else {
        echo json_encode(array("status" => "erro", "mensagem" => "Usuário e/ou Senha Incorretos!"));
    }

    mysqli_close($conexao);
}
else {
    echo json_encode(array("status" => "erro", "mensagem" => "Nenhum Dado Inserido!"));
}