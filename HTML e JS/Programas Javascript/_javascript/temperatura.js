function temperatura() {
    var temp = parseFloat(document.getElementById("cTemp").value);
    var tipo = document.getElementById("cTipo").value;
    
    switch(tipo) {
        case "CF":
            var res = temp * 9 / 5 + 32;
            break;
        case "CK":
            var res = temp + 273;
            break;
        case "FC":
            var res = (temp - 32) * 5 / 9;
            break;
        case "FK":
            var res = (temp - 32) * 5 / 9 + 273;
            break;
        case "KC":
            var res = temp - 273;
            break;
        case "KF":
            var res = (temp - 273) * 9 / 5 + 32;
            break;
    }
    document.getElementById("cRes").value = res.toFixed(1);
}