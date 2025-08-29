function validar() {
    if(document.getElementById("inome").value.trim() == "") {
        alert("Preencha o Campo \"Nome Completo\"!");
        document.getElementById("inome").focus();
        return false;
    }
    else if(document.getElementById("imail").value.trim() == "") {
        alert("Preencha o Campo \"E-mail\"!");
        document.getElementById("imail").focus();
        return false;
    }
    else if(document.getElementById("imsg").value.trim() == "") {
        alert("Preencha a Área \"Sua Mensagem\"!");
        document.getElementById("imsg").focus();
        return false;
    }
    
    return true;
}

function validaAdm() {
    if(document.getElementById("ilogin").value.trim() == "") {
        alert("Você deve preencher o campo \"Login\"!");
        document.getElementById("cLogin").focus();
        return false;
    }
    else if(document.getElementById("isenha").value.trim() == "") {
        alert("Você deve preencher o campo \"Senha\"!");
        document.getElementById("cSenha").focus();
        return false;
    }
    
    return true;
}