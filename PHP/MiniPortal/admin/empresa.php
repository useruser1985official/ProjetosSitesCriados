<?php 
    include "funcao/funcao-select.php";

    $consulta = select("empresa", "*", NULL, "order by nome asc");
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Empresa</title>
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
            <h1>Empresa</h1>
        
            <div class="tabela">
                <div class="linha">
                    <div class="coluna">Nº</div>
                    <div class="coluna">Logomarca</div>
                    <div class="coluna">Telefone</div>
                    <div class="coluna">E-mail</div>
                    <div class="coluna">Endereço</div>
                    <div class="coluna">Cidade</div>
                    <div class="coluna">CEP</div>
                    <div class="coluna">Sobre</div>
                    <div class="coluna">Editar/Excluir</div>
                </div>
                <?php 
                    if($consulta == true) {
                        for($i = 0; $i < count($consulta); $i++) {
                ?>
                <div class="linha">
                    <div class="coluna"><?php echo $i + 1 ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["nome"] ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["logomarca"] ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["fone"] ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["email"] ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["endereco"] ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["cidade"] ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["cep"] ?></div>
                    <div class="coluna"><?php echo $consulta[$i]["sobre"] ?></div>
                    <div class="coluna">
                        <a href="editar-empresa.php?id=<?php echo $consulta[$i]['id'] ?>">Editar</a>
                        -
                        <a href="excluir-empresa.php?id=<?php echo $consulta[$i]['id'] ?>">Excluir</a>
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