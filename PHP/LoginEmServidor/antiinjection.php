<?php
function antiInjection($dados) {
    $dados = htmlspecialchars($dados, ENT_QUOTES);
    $dados = strip_tags($dados);
    $dados = trim($dados);

    return $dados;
}