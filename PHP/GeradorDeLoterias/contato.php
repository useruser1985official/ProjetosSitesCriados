<?php 
    $env = isset($_GET["env"]) ? trim(htmlspecialchars(strip_tags($_GET["env"]), ENT_QUOTES)) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Gerador de Loterias</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Gerador de Loterias</a></h1>
                <img src="imagens/gastao.png" id="gastao" alt="Gastão"/>
            </header>
            
            <h2>Contato</h2>

            <div id="mens">
                <?php if($env == "sucess"): ?>
                <h3 id="inf">ÊXITO! Mensagem Enviada com Sucesso!</h3>
                <?php elseif($env == "error"): ?>
                <h3 id="err">ERRO! Falha no Envio! Tente Novamente!</h3>
                <?php endif; ?>
            </div>
            
            <form method="post" action="conclusao.php">
                <fieldset id="contato">
                    <legend>Insira seus Dados no Formulário</legend>
                    <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="35" maxlength="120" placeholder="Coloque seu Nome Aqui" required autofocus/></p>
                    <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="35" maxlength="70" placeholder="Coloque um E-mail Válido" required/></p>
                    <fieldset id="sexo">
                        <legend>Sexo</legend>
                        <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label>
                        <br/>
                        <input type="radio" name="tSex" id="cFem" value="F"/><label for="cFem">Feminino</label>
                        <br/>
                        <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
                    </fieldset>
                    <p>
                        <label for="cMot">Motivo do Contato:</label>
                        <select name="tMot" id="cMot">
                            <option>Algo não Está Funcionando</option>
                            <option>Dúvidas Sobre o Site</option>
                            <option>Download de Gerador Desktop</option>
                            <option selected>Outro Motivo</option>
                        </select>
                    </p>
                    <fieldset id="jogos">
                        <legend>Jogos que Você Joga</legend>
                            <input type="checkbox" name="tJog[]" id="cMeg" value="Mega-Sena"/><label for="cMeg">Mega-Sena</label>
                            <input type="checkbox" name="tJog[]" id="cQui" value="Quina"/><label for="cQui">Quina</label>
                            <input type="checkbox" name="tJog[]" id="cDup" value="Dupla-Sena"/><label for="cDup">Dupla-Sena</label>
                            <br/>
                            <input type="checkbox" name="tJog[]" id="cLof" value="Lotofácil"/><label for="cLof">Lotofácil</label>
                            <input type="checkbox" name="tJog[]" id="cLot" value="Lotomania"/><label for="cLot">Lotomania</label>
                            <input type="checkbox" name="tJog[]" id="cTim" value="Timemania"/><label for="cTim">Timemania</label>
                        
                    </fieldset>
                    <p><label for="cMsg">Sua Mensagem:</label></p>
                    <p><textarea name="tMsg" id="cMsg" cols="45" rows="7" maxlength="1000" placeholder="Escreva sua Mensagem Aqui" required></textarea></p>
                    <p>
                        <span>
                            <input type="submit" value="Enviar" onclick="valida()"/>
                            <input type="reset" value="Limpar"/>
                        </span>
                    </p>
                </fieldset>
            </form>
            
            <footer id="rodape">
                <p><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>