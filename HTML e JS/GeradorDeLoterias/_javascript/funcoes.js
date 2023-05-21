function valida() {
    var nome = document.getElementById("cNome").value.trim();
    var mail = document.getElementById("cMail").value.trim();
    var mens = document.getElementById("cMsg").value.trim();

    if(nome == "") {
        alert("Preencha o Campo \"Nome Completo\"!");
        document.getElementById("cNome").focus();
        return false;
    }
    else if(mail == "") {
        alert("Preencha o Campo \"E-mail\"!");
        document.getElementById("cMail").focus();
        return false;
    }
    else if(mens == "") {
        alert("Preencha a Área \"Sua Mensagem\"!");
        document.getElementById("cMsg").focus();
        return false;
    }
    
    return true;
}