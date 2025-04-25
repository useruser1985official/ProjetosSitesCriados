function leia() {
    let pontos = document.getElementById("pontos");
    let mais = document.getElementById("mais");
    let btLeia = document.getElementById("btLeia");

    if(pontos.style.display == "none") {
        pontos.style.display = "inline";
        mais.style.display = "none";
        btLeia.value = "Leia Mais";
    }
    else {
        pontos.style.display = "none";
        mais.style.display = "inline";
        btLeia.value = "Leia Menos";
    }
}

function mostOculSenha() {
    let senha = document.getElementById("isenha");

    if(senha.type == "password") {
        senha.type = "text";
    }
    else {
        senha.type = "password";
    }
}

document.addEventListener("keydown", function(event) {
    let estado = event.getModifierState("CapsLock");
    let alertaCaps = document.getElementById("alerta");

    if(estado) {
        alertaCaps.style.display = "inline";
    }
    else {
        alertaCaps.style.display = "none";
    }
});