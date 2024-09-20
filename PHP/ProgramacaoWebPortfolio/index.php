<!DOCTYPE html>
    <?php include_once "layouts/header.php"; ?>
    <body>
        <div class="container mt-5">
            <h1>Descubra seu signo:</h1>
            <form method="post" id="signo" action="show_zodiac_sign.php">
                <hr/>
                <hr/>
                <div class="mb-3">
                    <label for="idata" class="form-label">Data de Nascimento</label>
                    <input type="date" name="datanasc" class="form-control" placeholder="Ex.: 21/05/1992" required/>
                    <input type="submit" class="btn btn-primary" value="Descobrir"/>
                </div>
            </form>
        </div>
    </body>
</html>