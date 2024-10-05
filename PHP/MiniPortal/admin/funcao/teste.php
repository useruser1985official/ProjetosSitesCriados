<?php
    include "funcao-select.php";

    $consulta = select("sites_relacionados", "*", "where id < 10", "order by id asc", "limit 3");

    if($consulta == true) {
        for($i = 0; $i < count($consulta); $i++) {
            echo $consulta[$i]["id"] . "<br/>";
            echo $consulta[$i]["nome"] . "<br/>";
            echo $consulta[$i]["link"] . "<br/><hr/>";
        }
    }
    else {
        echo "Nenhum Resultado na Consulta!";
    }