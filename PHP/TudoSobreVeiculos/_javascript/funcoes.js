function validar() {
    var nome = document.getElementById("cNome").value.trim();
    var mail = document.getElementById("cMail").value.trim();
    var idad = document.getElementById("cIdad").value.trim();
    var mens = document.getElementById("cMsg").value.trim();
    
    var anos = Number(idad);
       
    if(nome == "") {
        document.getElementById("cNome").focus();
        alert("Preencha o Campo \"Nome Completo\"!");
        return false;
    }
    else if(mail == "") {
        document.getElementById("cMail").focus();
        alert("Preencha o Campo \"E-mail\"!");
        return false;
    }
    else if(idad == "") {
        document.getElementById("cIdad").focus();
        alert("Preencha o Campo \"Idade\"!");
        return false;
    }
    else if(anos < 18 || anos > 110) {
        document.getElementById("cIdad").focus();
        alert("A Idade deve Estar entre 18 e 110 Anos!");
        return false;
    }
    else if(mens == "") {
        document.getElementById("cMsg").focus();
        alert("Preencha a Área \"Sua Mensagem\"!");
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