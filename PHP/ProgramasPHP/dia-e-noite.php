<?php
    $periodo = date("H");
    
    if($periodo >= 6 && $periodo < 18) {
        $bg = "dia";
    }
    else {
        $bg = "noite";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Teste de BG</title>
        <style>
            @font-face {
                font-family: "LCD";
                src: url("fontes/LCDN.ttf");
            }
            body {
                background: url("imagens/<?php echo $bg?>.jpg") center top fixed no-repeat;
                color: white;
                text-align: center;
                overflow: hidden;
            }
            div#interface {
                background-color: rgba(0,0,128,0.3);
                min-height: 650px;
                padding: 10px;
            }
            table {
                font-family: "LCD";
                border: 1px solid black;
                background-color: rgba(0,0,128,0.5);
                border-spacing: 15px;
                font-size: 75pt;
                margin: auto;
                color: yellowgreen;
                text-shadow: 0px 0px 5px yellow;
            }
            table td {
                background-color: rgba(0,0,0,0.9);
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div id="interface">
            <h1>Horários e Datas</h1>
            <table>
                <tr>
                    <td><?php echo date("d/m/Y")?></td>
                </tr>
                <tr>
                    <td><?php echo date("H:i.s")?></td>
                </tr>
            </table>
                <p><input type="button" onclick="javascript:history.go(-1)" value="Voltar à Página Anterior"/></p>
        </div>
    </body>
</html>