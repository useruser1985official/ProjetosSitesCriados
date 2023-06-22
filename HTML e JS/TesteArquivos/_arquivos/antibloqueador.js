while(document.getElementById("anuncio") == undefined) {
    var acesso = confirm("Desative o bloqueador de anúncios para navegar no site!");
    if(acesso == true) {
        location.reload();
    }
    else {
        alert("Sinto muito, sem desativar o bloqueador não terá acesso ao site!");
        location.reload();
        history.go(-1);
    }
}