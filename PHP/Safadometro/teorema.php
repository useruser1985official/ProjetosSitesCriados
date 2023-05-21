<?php
function somatorio($n) {
    $s = 0;

    for($c = 1; $c <= $n; $c++) {
        $s += $c;
    }

    return $s;
}

function wesleySafadao($d, $m, $a) {
    $safado = somatorio($m) + ($a / 100) * (50 - $d);
    $anjo = 100 - $safado;

    echo "$anjo% ANJO, mas aquele $safado% é VAGABUNDO!";
}

$dia = (int)strip_tags(filter_input(INPUT_GET, "dia")) ?? 1;
$mes = (int)strip_tags(filter_input(INPUT_GET, "mes")) ?? 1;
$ano = (int)strip_tags(filter_input(INPUT_GET, "ano")) ?? 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Teorema Safadão</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Teorema Wesley Safadão</a></h1>
            </header>
            <section id="conteudo">
                <?php
                    wesleySafadao($dia, $mes, $ano);
                ?>
            </section>
            <section id="foto">
                <img src="_imagens/wesley-safadao.png" alt="Wesley Safadão"/>
            </section>
            <footer id="rodape">
                <p><a href="https://www.youtube.com/watch?v=2u8gK6ZM3bQ" target="_blank">&copy; Curso Em Vídeo (2015)</a></p>
            </footer>
        </div>
    </body>
</html>
