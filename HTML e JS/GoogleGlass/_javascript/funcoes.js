function mudaFoto(foto) {
    document.getElementById("icone").src = foto;
}

function calcTotal() {
    let qtd = parseInt(document.getElementById("cQtd").value);
    let tot = qtd * 1500;

    document.getElementById("cTot").value = tot.toFixed(2);
}