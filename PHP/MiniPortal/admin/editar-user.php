<?php
    include "funcao/funcao-select.php";

    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : "";

    $consulta = select("user", "*", "where id = '$id'", "order by login asc");
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Editar Usuário</title>
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
           
            <h1>Editar Usuário</h1>

            <?php 
                if($consulta == true) {
                    for($i = 0; $i < count($consulta); $i++) {
            ?>
            <form method="post" action="update/editar-user-processo.php">
                <p><label for="nome">Nome: </label></p>
                <p><input type="text" name="nome" id="inome" value="<?php echo $consulta[$i]["login"] ?>"/></p>
                <p><label for="senha">Senha: </label></p>
                <p><input type="password" name="senha" id="isenha"/></p>
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
