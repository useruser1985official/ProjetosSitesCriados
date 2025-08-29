<?php
    session_start();
    
    if(isset($_SESSION["logado"])) {
        
    }
    else {
        header("location: admin.php?erro=restrito");
    }