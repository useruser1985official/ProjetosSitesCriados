function validaForm() {
    var nome = document.getElementById("cNome").value.trim();
    var mail = document.getElementById("cMail").value.trim();
    var mens = document.getElementById("cMsg").value.trim();
    
    if(nome == "") {
        document.getElementById("cNome").focus();
        alert("Você Deve Preencher o Campo \"Nome Completo\"!");
        return false;
    }
    else if(mail == "") {
        document.getElementById("cMail").focus();
        alert("Você Deve Preencher o Campo \"E-mail\"!");
        return false;
    }
    else if(mens == "") {
        document.getElementById("cMsg").focus();
        alert("Você Deve Preencher a Área \"Sua Mensagem\"!");
        return false;
    }
    
    return true;
}

function validaAdm() {
    var login = document.getElementById("cLogin").value.trim();
    var senha = document.getElementById("cSenha").value.trim();
    
    if(login == "") {
        alert("Você deve preencher o campo \"Login\"!");
        document.getElementById("cLogin").focus();
        return false;
    }
    else if(senha == "") {
        alert("Você deve preencher o campo \"Senha\"!");
        document.getElementById("cSenha").focus();
        return false;
    }
    
    return true;
}