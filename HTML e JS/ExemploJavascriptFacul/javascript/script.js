var hora = 8;
var minutos = 20;
var totalEntrevistas = 0;
const SAIDA = 11;

var entrevistados = [
    "João Mariano",
    "Adélia de Souza",
    "Fábio Almeida",
    "Carla Silva",
    "Paulo Arruda",
    "Leonardo Rocha",
    "Tiago de Lima",
    "Patrícia de Lima",
    "Fernanda Brito",
    "Maria da Conceição"
];

entrevistados.sort();

for(let i = hora; i <= SAIDA; i++) {
    if(i == 12 || i == 13) {
        continue;
    }

    for(let j = 0; j < 60; j += minutos) {
        totalEntrevistas++;

        if(j == 0) {
            console.log(i + ":" + j + "0", ":", entrevistados[totalEntrevistas - 1]);
        }
        else {
            console.log(i + ":" + j, ":", entrevistados[totalEntrevistas - 1]);
        }
    }
}