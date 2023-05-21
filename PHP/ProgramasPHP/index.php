<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Testes PHP</title>
    </head>
    <body>

        <h1>Página Inicial</h1>

        <menu>
            <li><a href="temperatura.php">Calculadora de Temperatura</a></li>
            <li><a href="dia-e-noite.php">Dia e Noite</a></li>
        </menu>
        
        <?php
            $matrPhp = array(array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9),
                             array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19),
                             array(20, 21, 22, 23, 24, 25, 26, 27, 28, 29),
                             array(30, 31, 32, 33, 34, 35, 36, 37, 38, 39),
                             array(40, 41, 42, 43, 44, 45, 46, 47, 48, 49));

            for($l = 0; $l < 5; $l++) {
                for($c = 0; $c < 10; $c++) {
                    if($c < 10 - 1) {
                        echo $matrPhp[$l][$c] . " ";
                    }
                    else {
                        echo $matrPhp[$l][$c] . "<br/>";
                    }
                }
            }
            
            echo "<br/>";
            
           
        ?>

    </body>
</html>
