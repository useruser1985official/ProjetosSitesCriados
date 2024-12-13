<?php
    include_once "dados.php";
    
    $login = $_POST["tLogin"];
    $senha = $_POST["tSenha"];
    
    // Logar:
    
    $sql_pass = "select * from admin where login = '$login' and senha = '$senha'";
    $entrar = mysqli_query($conexao, $sql_pass);
    $row = mysqli_fetch_assoc($entrar);
    $total = mysqli_num_rows($entrar);
  
    if($total > 0) {
		session_start();
		$_SESSION["logado"] = true;
		header("location: consultas.php");
	}
	else {
		$_SESSION["logado"] = false;
		header("location: admin.php?erro=senha");
	}
    
    
    // Inserir:
    
    /*

    $sql_pass = "insert into admin values (default, '$login', '$senha')";
    $salvar = mysqli_query($conexao, $sql_pass);
    $linhas = mysqli_affected_rows($conexao);

    */