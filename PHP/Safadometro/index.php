<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Teorema Safadão</title>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Teorema Wesley Safadão</a></h1>
            </header>
            <section id="conteudo">
                <form method="get" action="teorema.php">
                    <p><b>Dia: </b><input type="number" name="dia" min="1" max="31" value="1" required/></p>
                    <p><b>Mês: </b><input type="number" name="mes" min="1" max="12" value="1" required/></p>
                    <p><b>Ano: </b><input type="number" name="ano" min="0" max="99" value="0" required/></p>
                    <p><input type="submit" value="Calcular Safadeza" class="botao"/></p>
                </form>
            </section>
            <section id="foto">
                <img src="imagens/wesley-safadao.png" alt="Wesley Safadão"/>
            </section>
            <footer id="rodape">
                <p><a href="https://www.youtube.com/watch?v=2u8gK6ZM3bQ" target="_blank">&copy; Curso Em Vídeo (2015)</a></p>
            </footer>
        </div>
    </body>
</html>
