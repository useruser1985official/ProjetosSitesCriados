<?php
    include_once "dados.php";

    $conn = getConnection();

    $sql = "insert into produto (descricao, qtd, valor) values (:desc, :qtd, :val)";

    $descricao = "Farinha de Rosca";
    $qtd = 5;
    $valor = 7.99;

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(":desc", $descricao);
    $stmt->bindValue(":qtd", $qtd);
    $stmt->bindValue(":val", $valor);

    if($stmt->execute()) {
        echo "Salvo com Sucesso!";
    }
    else {
        echo "Erro ao Salvar!";
    }