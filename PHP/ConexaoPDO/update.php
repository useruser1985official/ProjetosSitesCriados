<?php
    include_once "dados.php";

    $conn = getConnection();

    $sql = "update produto set descricao = :desc, qtd = :qtd, valor = :val where id = :id";

    $descricao = "Farinha de Trigo";
    $qtd = 10;
    $valor = 10.80;
    $id = 2;

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(":desc", $descricao);
    $stmt->bindValue(":qtd", $qtd);
    $stmt->bindValue(":val", $valor);
    $stmt->bindValue(":id", $id);

    if($stmt->execute()) {
        echo "Atualizado com Sucesso!";
    }
    else {
        echo "Erro ao Atualizar!";
    }