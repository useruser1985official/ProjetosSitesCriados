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
            <form method="get" action="testes.php">
                <p><input type="text" name="t" id="itxt" required/></p>
                <select name="tam" id="itam">
                    <option value="8pt" selected>8</option>
                    <option value="10pt">10</option>
                    <option value="12pt">12</option>
                    <option value="14pt">14</option>
                    <option value="16pt">16</option>
                    <option value="18pt">18</option>
                    <option value="20pt">20</option>
                    <option value="25pt">25</option>
                    <option value="30pt">30</option>
                    <option value="40pt">40</option>
                </select>
                <p><input type="color" name="cor" id="icor"/></p>
                <input type="submit" value="Gerar"/>
            </form>
        </div>
    </body>
</html>