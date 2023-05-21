// Gerador de números da Timemania.

do {
    var num1 = Math.round(Math.random() * (80 - 1) + 1);
    var num2 = Math.round(Math.random() * (80 - 1) + 1);
    var num3 = Math.round(Math.random() * (80 - 1) + 1);
    var num4 = Math.round(Math.random() * (80 - 1) + 1);
    var num5 = Math.round(Math.random() * (80 - 1) + 1);
    var num6 = Math.round(Math.random() * (80 - 1) + 1);
    var num7 = Math.round(Math.random() * (80 - 1) + 1);
}
while(num1 == num2 || num1 == num3 || num1 == num4 || num1 == num5 || num1 == num6 || num1 == num7 ||
        num2 == num3 || num2 == num4 || num2 == num5 || num2 == num6 || num2 == num7 ||
        num3 == num4 || num3 == num5 || num3 == num6 || num3 == num7 ||
        num4 == num5  || num4 == num6 || num4 == num7 ||
        num5 == num6 || num5 == num7 ||
        num6 == num7);

// No caso, o 80 é o número máximo, e 1, a contagem do qual se inicia.

var timemania = [num1, num2, num3, num4, num5, num6, num7];

function ordenar(a, b) {
    return a - b;
}

timemania.sort(ordenar);

document.write("\n\t\t\t\t<br/>Números aleatórios da Timemania:<br/><br/>");

for(let t of timemania) {
    var sorteio = "\n\t\t\t\t\t<div class=\"timemania bolas\"><span class=\"num\">" + t + "</span></div>";
    document.write(sorteio);
}