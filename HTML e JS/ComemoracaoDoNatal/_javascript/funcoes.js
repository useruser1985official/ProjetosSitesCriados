function natalEAnoNovo() {
    let atual = new Date();

    let dia = atual.getDate();
    let mes = atual.getMonth() + 1;
    let ano = atual.getFullYear();

    let falta;
    let mensagem;

    if(mes == 10) {
        falta = 25 - dia + 30 + 31;

        mensagem = "Faltam " + falta + " dias para o Natal e " + (falta + 7) + " dias para o ano de " + (ano + 1) + "!";
    }
    else if(mes == 11) {
        falta = 25 - dia + 30;

        mensagem = "Faltam " + falta + " dias para o Natal e " + (falta + 7) + " dias para o ano de " + (ano + 1) + "!";
    }
    else if(dia < 24 && mes == 12) {
        falta = 25 - dia;

        mensagem = "Faltam " + falta + " dias para o Natal e " + (falta + 7) + " dias para o ano de " + (ano + 1) + "!";
    }
    else if(dia == 24 && mes == 12) {
        mensagem = "Amanhã é Natal! Preparem os presentes e a ceia!";
    }
    else if(dia == 25 && mes == 12) {
        mensagem = "Feliz Natal para você!";
    }
    else if((dia > 25 && dia < 31) && mes == 12) {
        falta = 31 + 1 - dia;

        mensagem = "Faltam " + falta + " dias para o ano de " + (ano + 1) + "!";
    }
    else if(dia == 31 && mes == 12) {
        mensagem = "Hoje é o último dia de " + ano + ", amanhã será Ano Novo, " + (ano + 1) + "!";
    }
    else if(dia < 6 && mes == 1) {
        mensagem = "Feliz Ano Novo de " + ano + " para você!";
    }
    else if(dia == 6 && mes == 1) {
        mensagem = "Feliz Dia de Reis para você! Hoje se encerram as festas natalinas!";
    }
    else if((dia > 6 && mes == 1) || mes == 2 || mes == 3) {
        mensagem = "As festas natalinas já passaram!";
    }
    else {
        mensagem = "Ainda não estamos na época de Natal!";
    }
    
    document.write("<span><h2>" + mensagem + "</h2></span>");
}

function valida() {
    let nome = document.getElementById("cNome").value.trim();
    let mail = document.getElementById("cMail").value.trim();
    let mens = document.getElementById("cMsg").value.trim();
    
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