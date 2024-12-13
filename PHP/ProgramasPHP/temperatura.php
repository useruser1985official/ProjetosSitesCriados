<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Testes PHP</title>
    </head>
    <body>

        <h1>Página Inicial</h1>

        <form method="get" action="" style="font-size: 16pt">
            <input type="number" name="temp" step="0.1" value="0"/>
            <select name="tipo">
                <optgroup label="Celsius para">
                    <option value="CF">°C para °F</option>
                    <option value="CK">°C para °K</option>
                </optgroup>
                <optgroup label="Fahrenheit para">
                    <option value="FC">°F para °C</option>
                    <option value="FK">°F para °K</option>
                </optgroup>
                <optgroup label="Kelvin para">
                    <option value="KC">°K para °C</option>
                    <option value="KF">°K para °F</option>
                </optgroup>
            </select>
            <input type="submit" value="Calcular Temperatura"/>
            <?php
                $temp = isset($_GET["temp"]) ? (float)$_GET["temp"] : "0";
                $tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : "CF";

                switch($tipo) {
                    case "CF":
                        $res = $temp * 9 / 5 + 32;
                        $t1 = "°C";
                        $t2 = "°F";
                        break;
                    case "CK":
                        $res = $temp + 273;
                        $t1 = "°C";
                        $t2 = "°K";
                        break;
                    case "FC":
                        $res = ($temp - 32) * 5 / 9;
                        $t1 = "°F";
                        $t2 = "°C";
                        break;
                    case "FK":
                        $res = ($temp - 32) * 5 / 9 + 273;
                        $t1 = "°F";
                        $t2 = "°K";
                        break;
                    case "KC":
                        $res = $temp - 273;
                        $t1 = "°K";
                        $t2 = "°C";
                        break;
                    case "KF":
                        $res = ($temp - 273) * 9 / 5 + 32;
                        $t1 = "°K";
                        $t2 = "°F";
                        break;
                    default:
                        $res = $temp * 9 / 5 + 32;
                        break;
                }
            ?>
            <br/>
            <input type="text" size="67" value="<?php printf('A temperatura de %.1f%s é de %.1f%s', $temp, $t1, $res, $t2)?>" readonly/>
        </form>
        
        <p><input type="button" onclick="javascript:history.go(-1)" value="Voltar à Página Anterior"/></p>
    </body>
</html>
