<!DOCTYPE html>
    <?php include("header.php"); ?>
    <body>
        <form method="post" id="signo" action="show_zodiac_sign.php">
            <label for="idata">Data de Nascimento</label>
            <input type="date" name="datanasc" id="idatanasc" placeholder="Ex.: 21/05/1992" required/>
            <input type="submit" value="Descobrir"/>
        </form>
    </body>
</html>