var gasolina = parseFloat(prompt("Digite o preço da gasolina:").replace(",", "."));
var alcool = parseFloat(prompt("Digite o preço do álcool: ").replace(",", "."));

var resul = alcool / gasolina;

if(resul < 0.7) {
    alert("Abasteça com álcool!");
}
else {
    alert("Abasteça com gasolina!");
}