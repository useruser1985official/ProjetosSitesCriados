function validarEmail() {
    var email = document.getElementById("imail").value;
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(regex.test(email)) {
        alert("E-mail válido!");
    }
    else {
        alert("Por favor, insira um e-mail válido!\nEle deverá estar no formato \"usuario@servidor.com\".");

        return false;
    }
}