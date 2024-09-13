<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>Complemento em PHP</title>
    </head>
    <body>
        <div class="terminal">
            <?php
                function operacoes($n1, $n2) {
                    if($n1 >= $n2) {
                        throw new Exception("N1 deve ser menor que N2");
                    }
                    
                    echo "O número absoluto de $n1 é " . abs($n1) . ".<br/>";
                    echo "A raiz quadrada de $n1 é " . sqrt($n1) . ".<br/>";
                    echo "A raiz cúbica de $n1 é " . pow($n1, 1 / 3)  . ".<br/>";
                    echo "O quadrado de $n1 é " . pow($n1, 2) . ".<br/>";
                    echo "O cubo de $n1 é " . pow($n1, 3) . ".<br/>";
                    echo "$n1<sup><small>$n2</small></sup>: " . pow($n1, $n2) . ".<br/>";
                    echo "Número aleatório entre $n1 e $n2: " . rand($n1, $n2) . ".<br/>";
                }

                function datas() {
                    $dia = date("d");
                    $mes = (int)date("m") - 1;
                    $ano = date("Y");

                    $hora = date("H:i:s");
                    
                    $ds = (int)date("w");

                    $semana = array("Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado");
                    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

                    echo "Hoje é dia $dia de {$meses[$mes]} de $ano. {$semana[$ds]}.<br/>";
                    echo "A hora atual é $hora.<br/>";
                }

                function divisao($n1, $n2) {
                    if($n2 == 0) {
                        throw new DivisionByZeroError("É impossível dividir por zero");
                    }

                    return $n1 / $n2;
                }

                $linha = function(){echo "<hr/>";};

                $mens = function(){echo "Mensagem de Lambda!<br/>";};
                $soma = function($n1, $n2){return $n1 + $n2;};

                try {
                    operacoes(5, 10);
                }
                catch(Exception $ex) {
                    echo "{$ex->getMessage()}<br/>";
                }

                $linha();

                datas();

                $linha();

                try {
                    echo divisao(50, 2) . "<br/>";
                }
                catch(DivisionByZeroError $ex) {
                    echo "{$ex->getMessage()}<br/>";
                }
                finally {
                    echo "Final do bloco!<br/>"; 
                }

                $linha();

                $mens();

                echo $soma(10, 5) . "<br/>";

                $linha();

                $num = 50;
                $pont = &$num;

                $pont = 100;

                echo "Conteúdo de num $num.<br/>";
                echo "Conteúdo de pont $pont.<br/>";
            ?>
        </div>
    </body>
</html>