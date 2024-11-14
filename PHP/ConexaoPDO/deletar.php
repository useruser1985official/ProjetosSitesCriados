<?php
    include_once "dados.php";

    $conn = getConnection();

    $sql = "delete from produto where id = :id";

    $id = 1;

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(":id", $id);

    if($stmt->execute()) {
        echo "Deletado com Sucesso!";
    }
    else {
        echo "Erro ao Excluir!";
    }