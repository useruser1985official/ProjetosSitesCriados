var linha = () => document.write("<hr/>");

var mens = () => document.write("Mensagem de Lambda!<br/>");
var soma = (n1, n2) => n1 + n2;

function operacoes(n1, n2) {
    if(n1 >= n2) {
        throw new Error("N1 deve ser menor que N2!");
    }

    document.write(`O número absoluto de ${n1} é ${Math.abs(n1)}.<br/>`);
    document.write(`A raiz quadrada de ${n1} é ${Math.sqrt(n1).toFixed(3)}.<br/>`);
    document.write(`A raiz cúbica de ${n1} é ${Math.cbrt(n1).toFixed(3)}.<br/>`);
    document.write(`O quadrado de ${n1} é ${Math.pow(n1, 2)}.<br/>`);
    document.write(`O cubo de ${n1} é ${Math.pow(n1, 3)}.<br/>`);
    document.write(`${n1} elevado à ${n2}: ${Math.pow(n1, n2)}.<br/>`);
    document.write(`Número aleatório entre ${n1} e ${n2}: ${Math.round(Math.random() * (n2 - n1) + n1)}.<br/>`);
}

function datas() {
    var semana = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
    var meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    var data = new Date();

    var dia = data.getDate();
    var mes = data.getMonth();
    var ano = data.getFullYear();

    var hora = data.getHours();
    var minu = data.getMinutes();
    var segu = data.getSeconds();

    var ds = data.getDay();

    document.write(`Hoje é dia ${dia} de ${meses[mes]} de ${ano}. ${semana[ds]}.<br/>`);
    document.write(`A hora atual é ${("00" + hora).slice(-2)}:${("00" + minu).slice(-2)}:${("00" + segu).slice(-2)}.<br/>`)
}

function divisao(n1, n2) {
    if(n2 == 0) {
        throw new Error("É impossível dividir por zero!");
    }

    return n1 / n2;
}