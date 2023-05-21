function custoGas() {
    var precoGas = document.getElementById("cPreG").value;
    var totalGas = document.getElementById("cTotG").value;
    var litroGas = parseFloat(totalGas) / parseFloat(precoGas);
    document.getElementById("cLitG").value = litroGas.toFixed(3);
}
function custoAlc() {
    var precoAlc = document.getElementById("cPreA").value;
    var totalAlc = document.getElementById("cTotA").value;
    var litroAlc = parseFloat(totalAlc) / parseFloat(precoAlc);
    document.getElementById("cLitA").value = litroAlc.toFixed(3);
}
function custoDie() {
    var precoDie = document.getElementById("cPreD").value;
    var totalDie = document.getElementById("cTotD").value;
    var litroDie = parseFloat(totalDie) / parseFloat(precoDie);
    document.getElementById("cLitD").value = litroDie.toFixed(3);
}