// Determina aprovados para a segunda etapa

function primeiraEtapa(acertoProva, semCursado) {
    const NUM_QUESTOES = 20;
    const NOTA_MIN_APROV = 0.7;
    const QTD_SEMESTRES = 3;

    let nota = acertoProva / NUM_QUESTOES; // Calcula % nota

    console.log(nota);

    if((nota >= NOTA_MIN_APROV) && (semCursado >= QTD_SEMESTRES)) {
        return "Aprovado";
    }
    else {
        return "Reprovado";
    }
}

alert(primeiraEtapa(14, 2));