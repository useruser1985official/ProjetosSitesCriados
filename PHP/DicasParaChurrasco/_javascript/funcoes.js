function churrasco() {
    var ad = eval(document.getElementById("adult").value.trim());
    var cr = eval(document.getElementById("crian").value.trim());
    
    if(isNaN(ad) || ad < 0) {
        ad = 0;
    }
    else if(ad > 100) {
        ad = 100;
    }
    
    if(isNaN(cr) || cr < 0) {
        cr = 0;
    }
    else if(cr > 100) {
        cr = 100;
    }

    var quant = ad + (cr / 3);

    var linguica = Math.round(150 * quant) / 1000;
    var frango = Math.round(50 * quant) / 1000;
    var outras = Math.round(400 * quant) / 1000;

    var total = (linguica + frango + outras);

    document.getElementById("teste").innerHTML = "Para o churrasco com " + ad + " adultos e " + cr + " crianças, precisamos de:<br/><br/>" + linguica.toFixed(3) + " Kg de linguiça.<br/>" + frango.toFixed(3) + " Kg de frango.<br/>" + outras.toFixed(3) + " Kg de outras carnes.<br/><br/>A quantidade total é de " + total.toFixed(3) + " Kg de carne.";
}

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