function validar() {
    var nome = document.getElementById("cNome").value.trim();
    var mail = document.getElementById("cMail").value.trim();
    var idade = document.getElementById("cIdade").value.trim();
    var mens = document.getElementById("cMsg").value.trim();
    
    var anos = Number(idade);
    
    if(nome == "") {
        document.getElementById("cNome").focus();
        alert("Você deve preencher o campo \"Nome Completo\"!");
        return false;
    }
    else if(mail == "") {
        document.getElementById("cMail").focus();
        alert("Você deve preencher o campo \"E-mail\"!");
        return false;
    }
    else if(idade == "") {
        document.getElementById("cIdade").focus();
        alert("Preencha o Campo \"Sua Idade\"!");
        return false;
    }  
    else if(anos < 18 || anos > 90) {
        document.getElementById("cIdad").focus();
        alert("A Idade Deverá Estar entre 18 e 90 Anos!");
        return false;
    }
    else if(mens == "") {
        document.getElementById("cMsg").focus();
        alert("Você deve preencher o campo \"Sua Mensagem\"!");
        return false;
    }
    
    return true;
}

function validaAdm() {
    var login = document.getElementById("cLogin").value.trim();
    var senha = document.getElementById("cSenha").value.trim();
    
    if(login == "") {
        document.getElementById("cLogin").focus();
        alert("Você deve preencher o campo \"Login\"!");
        return false;
    }
    else if(senha == "") {
        document.getElementById("cSenha").focus();
        alert("Você deve preencher o campo \"Senha\"!");
        return false;
    }
    
    return true;
}