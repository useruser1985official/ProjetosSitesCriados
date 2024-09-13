<!DOCTYPE html>
    <?php
        $datanasc = isset($_POST["datanasc"]) ? htmlspecialchars(strip_tags($_POST["datanasc"])) : date("Y-m-d");
    ?>
    <?php include_once "header.php"; ?>
    <body>
    <?php
        $diaNasc = (int)date("d", strtotime($datanasc));
        $mesNasc = (int)date("m", strtotime($datanasc));

        $signos = simplexml_load_file("signos.xml");

        echo $diaNasc;
        echo "/";
        echo $mesNasc;
        echo "<br/>";

        foreach($signos->signo as $s) {
            echo "<br/>";

            $ini = explode("/", $s->dataInicio);
            $fim = explode("/", $s->dataFim);
            
            $diaIni = (int)$ini[0];
            $mesIni = (int)$ini[1];

            $diaFim = (int)$fim[0];
            $mesFim = (int)$fim[1];

            $signoUser = $s->signoNome;

            echo "$diaIni/$mesIni<br/>";
            echo "$diaFim/$mesFim<br/>";
            echo "$diaNasc/$mesNasc<br/>";

            echo "Seu signo é de $signoUser.<hr/>";
        }
    ?>
    </body>
    <?php echo "\n</html>" ?>