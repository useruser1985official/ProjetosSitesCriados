<?php
    include "funcao/funcao-select.php";

    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : "";

    $consulta = select("empresa", "*", "where id = '$id'", "order by nome asc");
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Editar Empresa</title>
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
           
            <h1>Editar Empresa</h1>

            <?php
                if($consulta == true) {
                    for($i = 0; $i < count($consulta); $i++) {
            ?>
            <form method="post" action="update/editar-empresa-processo.php">
                <p><label for="nome">Nome: </label></p>
                <p><input type="text" name="nome" id="inome" value="<?php echo $consulta[$i]["nome"] ?>"/></p>
                <p><label for="logo">Logomarca: </label></p>
                <p><input type="text" name="logo" id="ilogo" value="<?php echo $consulta[$i]["logomarca"] ?>"/></p>
                <p><label for="fone">Telefone: </label></p>
                <p><input type="tel" name="fone" id="ifone" value="<?php echo $consulta[$i]["fone"] ?>"></p>
                <p><label for="mail">E-mail: </label></p>
                <p><input type="email" name="mail" id="imail" value="<?php echo $consulta[$i]["email"] ?>"></p>
                <p><label for="end">Endereço: </label></p>
                <p><input type="text" name="end" id="iend" value="<?php echo $consulta[$i]["endereco"] ?>"></p>
                <p><label for="cid">Cidade: </label></p>
                <p><input type="text" name="cid" id="icid" value="<?php echo $consulta[$i]["cidade"] ?>"></p>
                <p><label for="cep">CEP: </label></p>
                <p><input type="text" name="cep" id="icep" value=<?php echo $consulta[$i]["cep"] ?>></p>
                <p><label for="sob">Sobre: </label></p>
                <p><textarea name="sob" id="isob"><?php echo $consulta[$i]["sobre"] ?></textarea></p>
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
