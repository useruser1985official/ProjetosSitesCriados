// Gerador de números da Quina.

do {
    var num1 = Math.round(Math.random() * (80 - 1) + 1);
    var num2 = Math.round(Math.random() * (80 - 1) + 1);
    var num3 = Math.round(Math.random() * (80 - 1) + 1);
    var num4 = Math.round(Math.random() * (80 - 1) + 1);
    var num5 = Math.round(Math.random() * (80 - 1) + 1);
}
while(num1 == num2 || num1 == num3 || num1 == num4 || num1 == num5 ||
        num2 == num3 || num2 == num4 || num2 == num5 ||
        num3 == num4 || num3 == num5 ||
        num4 == num5);

// No caso, o 80 é o número máximo, e 1, a contagem do qual se inicia.

var quina = [num1, num2, num3, num4, num5];

function ordenar(a, b) {
    return a - b;
}

quina.sort(ordenar);

document.write("\n\t\t\t\t<br/>Números aleatórios da Quina:<br/><br/>");

for(let q of quina) {
    var sorteio = "\n\t\t\t\t\t<div class=\"quina bolas\"><span class=\"num\">" + q + "</span></div>";
    document.write(sorteio);
}