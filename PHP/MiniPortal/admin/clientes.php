<?php 
    include "funcao/funcao-select.php";

    $consulta = select("clientes", "*", NULL, "order by nome asc");
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Clientes</title>
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
            <h1>Clientes</h1>
        
            <div class="tabela">
                <div class="linha">
                    <div class="coluna">Nº</div>
                    <div class="coluna">Nome</div>
                    <div class="coluna">URL</div>
                    <div class="coluna">Imagem</div>
                    <div class="coluna">Editar/Excluir</div>
                </div>
                <?php 
                    if($consulta == true) {
                        for($i = 0; $i < count($consulta); $i++) {
                ?>
                <div class="linha">
                    <div class="coluna"><?php echo $i + 1 ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["nome"] ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["url"] ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["imagem"] ?></div>
                    <div class="coluna">
                        <a href="editar-clientes.php?id=<?php echo $consulta[$i]['id'] ?>">Editar</a>
                        -
                        <a href="excluir-clientes.php?id=<?php echo $consulta[$i]['id'] ?>">Excluir</a>
                    </div>
                </div>
                <?php 
                        }
                    }
                    else {
                        echo "Nenhum Dado Encontrado!";
                    }
                ?>
            </div>
       </section>
        <?php 
            include_once "lateral-direita.php";
            include_once "rodape.php";
        ?>
             
	</body>
	</html>
