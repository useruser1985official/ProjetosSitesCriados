function validar() {
    var nome = document.getElementById("cNome").value.trim();
    var mail = document.getElementById("cMail").value.trim();
    var mens = document.getElementById("cMsg").value.trim();
    
    if(nome == "") {
        document.getElementById("cNome").focus();
        alert("Preencha o campo \"Nome Completo\"!");
        return false;
    }
    else if(mail == "") {
        document.getElementById("cMail").focus();
        alert("Preencha o campo \"E-mail\"!");
        return false;
    }
    else if(mens == "") {
        document.getElementById("cNome").focus();
        alert("Preencha a área \"Sua Mensagem\"!");
        return false;
    }
    
    return true;
}

function validaAdm() {
    if(document.getElementById("cLogin").value.trim() == "") {
        alert("Você deve preencher o campo \"Login\"!");
        document.getElementById("cLogin").focus();
        return false;
    }
    else if(document.getElementById("cSenha").value.trim() == "") {
        alert("Você deve preencher o campo \"Senha\"!");
        document.getElementById("cSenha").focus();
        return false;
    }
    
    return true;
}