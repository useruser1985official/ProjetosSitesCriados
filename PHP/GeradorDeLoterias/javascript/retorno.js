document.write("<p class=\"ger\"><input type=\"button\" onclick=\"novoGer()\" value=\"Gerar Novo Resultado!\"/></p>");

function novoGer() {
    novoSor = confirm("Tem Certeza que Deseja Gerar outro Resultado? Os Dados Atuais serão Perdidos!");
    if(novoSor === true) {
        location.reload();
    }
}