function clickMenu() {
    if(menu.style.display == "block") {
        menu.style.display = "none";
    }
    else {
        menu.style.display = "block";
    }
}

function mudouTam() {
    if(innerWidth >= 768) {
        menu.style.display = "block";
    }
    else {
        menu.style.display = "none";
    }
}

function calculo() {
    let qtd = parseInt(document.getElementById("iqtd").value);
    let tot = qtd * 1500;

    document.getElementById("itot").value = tot;
}