document.write("\n\t\t\t\t<p class=\"ger\"><input type=\"button\" onclick=\"novoGer()\" value=\"Gerar Novo Resultado!\"/></p>");

function novoGer() {
    var tags = document.getElementsByTagName("h2");
	var jogo = tags[0].innerHTML;
    var novoSor = confirm("Tem certeza que deseja gerar outro resultado da " + jogo + "? O atual será perdido!");
    
    if(novoSor) {
        location.reload();
    }
}