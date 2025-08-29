function validar() {
    var nome = document.getElementById("cNome").value;
    var mail = document.getElementById("cMail").value;
    var mens = document.getElementById("cMsg").value;
    
    if(nome.trim() == "") {
        alert("Você deve preencher o campo \"Nome Completo\"!");
        document.getElementById("cNome").focus();
        return false;
    }
    else if(mail.trim() == "") {
        alert("Você deve preencher o campo \"E-mail\"!");
        document.getElementById("cMail").focus();
        return false;
    }
    else if(mens.trim() == "") {
        alert("Você deve preencher a área \"Sua Mensagem\"!");
        document.getElementById("cMsg").focus();
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