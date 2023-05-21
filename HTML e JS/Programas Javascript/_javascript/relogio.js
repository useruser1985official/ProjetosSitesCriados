onload = () => setInterval(horaAtual, 1);

function horaAtual() {
	var data = new Date();

	var dia = data.getDate();
	var mes = data.getMonth();
	var ano = data.getFullYear();

	var hora = data.getHours();
	var minu = data.getMinutes();
	var segu = data.getSeconds();

	var ds = data.getDay();

	var meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
	var semana = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];

	var saida = semana[ds] + ", " + dia + " de " + meses[mes] + " de " + ano + ".";
	saida += "<br/>" + ("00" + hora).slice(-2) + ":" + ("00" + minu).slice(-2) + ":" + ("00" + segu).slice(-2);

	document.getElementById("data").innerHTML = saida;
}