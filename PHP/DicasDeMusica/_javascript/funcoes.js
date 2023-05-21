function validaForm() {
    var nome = document.getElementById("cNome").value.trim();
    var mail = document.getElementById("cMail").value.trim();
    var mens = document.getElementById("cMsg").value.trim();
    
    if(nome == "") {
        alert("Você deve preencher o campo \"Nome Completo\"!");
        document.getElementById("cNome").focus();
        return false;
    }
    else if(mail == "") {
        alert("Você deve preencher o campo \"E-mail\"!");
        document.getElementById("cMail").focus();
        return false;
    }
    else if(mens == "") {
        alert("Você deve preencher a área \"Sua Mensagem\"!");
        document.getElementById("cMsg").focus();
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