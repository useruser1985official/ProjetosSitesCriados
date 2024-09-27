<?php
    $para = "contato@teste.com";
    $assunto = "Contato pelo Site";

    $nome = $_REQUEST["nome"];
    $fone = $_REQUEST["tel"];
    $mail = $_REQUEST["mail"];
    $msg = $_REQUEST["msg"];

    $corpo = "<b>Mensagem de Contato</b><br/>";
    $corpo .= "<b>Nome:</b> $nome<br/>";
    $corpo .= "<b>Telefone:</b> $fone<br/>";
    $corpo .= "<b>E-Mail:</b> $mail<br/>";
    $corpo .= "<b>Mensagem:</b> $msg<br/>";

    $header = "From: $mail Reply-to: $mail";
    $header .= "Content-Type: text/html; charset = utf8";

    mail($para, $assunto, $corpo, $header);

    header("location: index.php?msg=enviado");