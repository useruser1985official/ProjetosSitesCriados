<?php
    include_once "restricao.php";
    include "funcao/funcao-select.php";

    $id = isset($_REQUEST["id"]) ? (int)$_REQUEST["id"] : 0;

    $consulta = select("sites_relacionados", "*", "where id = '$id'", "order by nome asc");
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Editar Sites Relacionados</title>
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
            <h1>Editar Sites Relacionados</h1>
        
            <?php
                if($consulta == true) {
                    for($i = 0; $i < count($consulta); $i++) {
            ?>
            <form method="post" action="update/editar-sites-processo.php">
                <p><label for="nome">Nome do Site: </label></p>
                <p><input type="text" name="nome" id="inome" value="<?php echo $consulta[$i]["nome"] ?>"/></p>
                <p><label for="link">Link do Site: </label></p>
                <p><input type="text" name="link" id="ilink" value="<?php echo $consulta[$i]["link"] ?>"/></p>
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
