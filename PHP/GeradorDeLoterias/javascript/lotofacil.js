// Gerador de números da Lotofácil.

do {
    var num1 = Math.round(Math.random() * (25 - 1) + 1);
    var num2 = Math.round(Math.random() * (25 - 1) + 1);
    var num3 = Math.round(Math.random() * (25 - 1) + 1);
    var num4 = Math.round(Math.random() * (25 - 1) + 1);
    var num5 = Math.round(Math.random() * (25 - 1) + 1);
    var num6 = Math.round(Math.random() * (25 - 1) + 1);
    var num7 = Math.round(Math.random() * (25 - 1) + 1);
    var num8 = Math.round(Math.random() * (25 - 1) + 1);
    var num9 = Math.round(Math.random() * (25 - 1) + 1);
    var num10 = Math.round(Math.random() * (25 - 1) + 1);
    var num11 = Math.round(Math.random() * (25 - 1) + 1);
    var num12 = Math.round(Math.random() * (25 - 1) + 1);
    var num13 = Math.round(Math.random() * (25 - 1) + 1);
    var num14 = Math.round(Math.random() * (25 - 1) + 1);
    var num15 = Math.round(Math.random() * (25 - 1) + 1);
}
while(num1 == num2 || num1 == num3 || num1 == num4 || num1 == num5 || num1 == num6 || num1 == num7 || num1 == num8 || num1 == num9 || num1 == num10 || num1 == num11 || num1 == num12 || num1 == num13 || num1 == num14 || num1 == num15 ||
        num2 == num3 || num2 == num4 || num2 == num5 || num2 == num6 || num2 == num7 || num2 == num8 || num2 == num9 || num2 == num10 || num2 == num11 || num2 == num12 || num2 == num13 || num2 == num14 || num2 == num15 ||
        num3 == num4 || num3 == num5 || num3 == num6 || num3 == num7 || num3 == num8 || num3 == num9 || num3 == num10 || num3 == num11 || num3 == num12 || num3 == num13 || num3 == num14 || num3 == num15 ||
        num4 == num5 || num4 == num6 || num4 == num7 || num4 == num8 || num4 == num9 || num4 == num10 || num4 == num11 || num4 == num12 || num4 == num13 || num4 == num14 || num4 == num15 ||
        num5 == num6 || num5 == num7 || num5 == num8 || num5 == num9 || num5 == num10 || num5 == num11 || num5 == num12 || num5 == num13 || num5 == num14 || num5 == num15 ||
        num6 == num7 || num6 == num8 || num6 == num9 || num6 == num10 || num6 == num11 || num6 == num12 || num6 == num13 || num6 == num14 || num6 == num15 ||
        num7 == num8 || num7 == num9 || num7 == num10 || num7 == num11 || num7 == num12 || num7 == num13 || num7 == num14 || num7 == num15 ||
        num8 == num9 || num8 == num10 || num8 == num11 || num8 == num12 || num8 == num13 || num8 == num14 || num8 == num15 ||
        num9 == num10 || num9 == num11 || num9 == num12 || num9 == num13 || num9 == num14 || num9 == num15 ||
        num10 == num11 || num10 == num12 || num10 == num13 || num10 == num14 || num10 == num15 ||
        num11 == num12 || num11 == num13 || num11 == num14 || num11 == num15 ||
        num12 == num13 || num12 == num14 || num12 == num15 ||
        num13 == num14 || num13 == num15 ||
        num14 == num15);

// No caso, o 25 é o número máximo, e 1, a contagem do qual se inicia.

var lotofacil = [num1, num2, num3, num4, num5, num6, num7, num8, num9, num10, num11, num12, num13, num14, num15];

function ordenar(a, b) {
    return a - b;
}

lotofacil.sort(ordenar);

document.write("\n\t\t\t\t<br/>Números aleatórios da Lotofácil:<br/><br/>");

for(let l of lotofacil) {
    var sorteio = "\n\t\t\t\t\t<div class=\"lotofacil bolas\"><span class=\"num\">" + l + "</span></div> ";
    document.write(sorteio);
}