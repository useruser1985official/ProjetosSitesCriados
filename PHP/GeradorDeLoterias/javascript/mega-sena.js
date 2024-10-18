// Gerador de números da Mega-Sena.

do {
    var num1 = Math.round(Math.random() * (60 - 1) + 1);
    var num2 = Math.round(Math.random() * (60 - 1) + 1);
    var num3 = Math.round(Math.random() * (60 - 1) + 1);
    var num4 = Math.round(Math.random() * (60 - 1) + 1);
    var num5 = Math.round(Math.random() * (60 - 1) + 1);
    var num6 = Math.round(Math.random() * (60 - 1) + 1);
}
while(num1 == num2 || num1 == num3 || num1 == num4 || num1 == num5 || num1 == num6 ||
        num2 == num3 || num2 == num4 || num2 == num5 || num2 == num6 ||
        num3 == num4 || num3 == num5 || num3 == num6 ||
        num4 == num5 || num4 == num6 ||
        num5 == num6);

// No caso, o 60 é o número máximo, e 1, a contagem do qual se inicia!

var mega = [num1, num2, num3, num4, num5, num6];

function ordenar(a, b) {
    return a - b;
}

mega.sort(ordenar);

document.write("\n\t\t\t\t<br/>Números aleatórios da Mega-Sena:<br/><br/>");

for(let m of mega) {
    var sorteio = "\n\t\t\t\t\t<div class=\"mega bolas\"><span class=\"num\">" + m + "</span></div> ";
    document.write(sorteio);
}