<?php 
    include_once "dados.php";

    $conn = getConnection();

    $sql = "insert into produto (descricao, qtd, valor) values ('Sal', 10, 2.50)";

    if($conn->exec($sql)) {
        echo "Salvo com Sucesso!";
    }
    else {
        echo "Erro ao Salvar!";
    }