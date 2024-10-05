<?php
    include "funcao/funcao-select.php";
    
    $env = isset($_REQUEST["env"]) ? $_REQUEST["env"] : "";
    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : "";

    $consulta = select("portifolio", "*", "where id = '$id'", "order by titulo asc");
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Editar Portfólio</title>
	</head>

	<body>
		<?php include_once "topo.php"; ?>
        <nav>
        	<ul>
            	<li><a href="#"> Início </a></li>
                <li><a href="../" target="_blank">Ver o Site </a> </li>
                <li><a href="https://developers.facebook.com/tools/comments" target="_blank">Administrador de Comentários</a> </li>
                <li><a href="#" target="_blank">Google Analytic</a> </li>
                <li><a class="selecionado" href="#" target="_blank">Deslogar</a> </li>
            </ul>
        </nav>
       <section class="centro">
           
            <h1>Editar Portfólio</h1>
        
            <?php if($env == "sucess"): ?>
            <section class="info-sucesso">
                <h1>Dados Enviados com Sucesso!</h1>
            </section>
            <?php endif; ?>
            <?php if($env == "erro-extensao"): ?>
            <section class="info">
                <h1>Só Envie Imagens com Extensões jpg, jpeg, png ou gif!</h1>
            </section>
            <?php endif; ?>
            <?php if($env == "erro-tamanho"): ?>
            <section class="info">
                <h1>Só Envie Imagens com até 2 MB!</h1>
            </section>
            <?php endif; ?>
            <?php if($env == "erro-imagem"): ?>
            <section class="info">
                <h1>Não foi Possível Enviar o Arquivo!</h1>
            </section>
            <?php endif; ?>

            <?php
                if($consulta == true) {
                    for($i = 0; $i < count($consulta); $i++) {
            ?>
            <form method="post" action="update/editar-portifolio-processo.php" enctype="multipart/form-data">
                <p><label for="tit">Título: </label></p>
                <p><input type="text" name="tit" id="itit" value="<?php echo $consulta[$i]["titulo"] ?>"/></p>
                <p><label for="res">Resumo: </label></p>
                <p><textarea name="res" id="ires"><?php echo $consulta[$i]["resumo"] ?></textarea></p>
                <p><label for="cont">Conteúdo: </label></p>
                <p><textarea name="cont" id="icont"><?php echo $consulta[$i]["conteudo"] ?></textarea></p>
                <p><label for="data">Data: </label></p>
                <p><input type="datetime-local" name="data" id="idata" value="<?php echo $consulta[$i]["data"] ?>"/></p>
                <p><label for="img">Imagem: </label></p>
                <p><input type="file" name="img" id="iimg"/></p>
                <input type="hidden" name="id" id="iid" value="<?php echo $id ?>"/>
                <p><button type="submit">Inserir</button></p>
            </form>
            <?php
                    }
                }
                else {
                    echo "Nenhum Dado Encontrado!";
                }             
            ?>
       </section>
        <?php 
            include_once "lateral-direita.php";
            include_once "rodape.php";
        ?>
             
	</body>
	</html>
