// Função que adiciona os números no visor quando pressionado os botões:

function calcNum(num) {
    if(typeof gVisor == "undefined") {
        document.getElementById("visor").value = "";
    }
    
    if(document.getElementById("visor").value.length < 10) {
    	document.getElementById("visor").value += num;
    }

    gVisor = 1;
}

// Função que limpa a calculadora:

function calcLimpar() {
    document.getElementById("visor").value = "0";
    delete gValor;
    delete gOper;
    delete gVisor;
}

// Função que executa as operações aritméticas da calculadora:

function calcOper(oper, valor1, valor2) {
    var valor;

    if(oper == "somar") {
        valor = parseFloat(valor1) + parseFloat(valor2);
    }
    else if(oper == "subtrair") {
        valor = parseFloat(valor1) - parseFloat(valor2);
    }
    else if(oper == "multiplicar") {
        valor = parseFloat(valor1) * parseFloat(valor2);
    }
    else if(oper == "dividir") {
        valor = parseFloat(valor1) / parseFloat(valor2);
    }
    
    // Outra condição:
    
    if(valor == "Infinity" || valor == "undefined" || valor > 9999999999 || valor < -9999999999 || isNaN(valor)) {
        valor = "0E";
    }

    return valor;
}

// Função do algoritmo da passagem de parâmetros:

function calcParse(oper) {
    var valor = document.getElementById("visor").value;
    delete gVisor;
    
    
    if(typeof gOper != "undefined" && oper == "resultado") {
        gValor = calcOper(gOper, gValor, valor);
        document.getElementById("visor").value = gValor;
        delete oper;
        delete gValor;
        return 0;
    }
    else if(typeof gValor != "undefined") {
        gValor = calcOper(gOper, gValor, valor);
        gOper = oper;
        document.getElementById("visor").value = gValor;
    }
    else {
        gValor = valor;
        gOper = oper;
    }
}