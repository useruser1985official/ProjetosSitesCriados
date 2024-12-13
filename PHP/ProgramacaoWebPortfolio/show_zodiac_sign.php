<!DOCTYPE html>
    <?php
        $dataNasc = isset($_POST["datanasc"]) ? new Datetime(htmlspecialchars(strip_tags($_POST["datanasc"]))) : null;
    ?>
    <?php include_once "layouts/header.php"; ?>
    <body>
        <div class="container mt-5 visualizacao">
            <?php
                $signos = simplexml_load_file("signos.xml");

                if($dataNasc !== null) {
                    foreach($signos->signo as $s) {
                        $dataIni = DateTime::createFromFormat("d/m", (string)$s->dataInicio);
                        $dataFim = DateTime::createFromFormat("d/m", (string)$s->dataFim);

                        $dataIni->setDate($dataNasc->format("Y"), $dataIni->format("m"), $dataIni->format("d"));
                        $dataFim->setDate($dataNasc->format("Y"), $dataFim->format("m"), $dataFim->format("d"));

                        if($dataIni > $dataFim) {
                            $dataFim->modify("+1 year");

                            if($dataNasc < $dataIni && $dataNasc > $dataFim) {
                                continue;
                            }
                        }

                        if($dataNasc >= $dataIni && $dataNasc <= $dataFim) {
                            echo "<h1>{$s->signoNome}</h1>";
                            echo "<p>{$s->descricao}</p>";
                            break;
                        }
                    }
                }
                else {
                    echo "<p>Não foi possível determinar seu signo! Verifique a data informada!</p>";
                }
            ?>
        </div>
    </body>
    <?php echo "\n</html>" ?>