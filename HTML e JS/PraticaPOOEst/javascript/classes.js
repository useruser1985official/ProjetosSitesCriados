class Ventilador {
    static ligar(vel) {
        Ventilador.ligado = true;

        if(vel < 1) {
            vel = 1;
        }
        else if(vel > 3) {
            vel = 3;
        }

        Ventilador.velocidade = vel;

        document.write(`O ventilador está ligado, na velocidade de ${Ventilador.velocidade}.<br/>`)
    }

    static desligar() {
        Ventilador.velocidade = 0;
        Ventilador.ligado = false;

        document.write("O ventilador está desligado!<br/>");
    }
};

Ventilador.ligado = false;
Ventilador.velocidade = 0;