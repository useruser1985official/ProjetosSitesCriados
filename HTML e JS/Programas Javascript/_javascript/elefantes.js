var elefantes = 10;

for(i = 1; i <= elefantes; i++) {
    var msg = "";

    if(i == 1) {
        msg = i + " elefante incomoda muita gente!";
    }

    else if(i % 2 != 0) {
        msg = i + " elefantes incomodam muita gente!";
    }
    else {
        msg = i + " elefantes ";

        for(j = 0; j < i; j++) {
            msg += "incomodam ";
        }

        msg += "muito mais!";
    }

    alert(msg);
}