class Pessoa {
    constructor(nome, telefone, cpf) {
        this.nome = nome;
        this.telefone = telefone;
        this.cpf = cpf;
    }

    mostrar() {
        alert("Nome: " + this.nome + "\nTelefone: " + this.telefone + "\nCPF: " + this.cpf);
    }
};

class Veiculo {
    static verifCombustivel() {
        alert("O combustível do veículo é " + Veiculo.combustivel + "!");
    }
};

Veiculo.combustivel = "gasolina";

class Media {
    constructor(n1, n2){
        this._nota1 = n1;
        this._nota2 = n2;

        this._med = (this._nota1 + this._nota2) / 2;
    }

    get med() {
        return this._med;
    }

    set med(value) {
        this._med = value;
    }
};

class Animal {
    vivo() {
        throw new Error("Implementação do método \"vivo\" requerida!");
    }
};

class Gato extends Animal {
    vivo() {
        alert("O gato está vivo!");
    }
};

class Eletrodomestico {
    constructor(marca, ligado) {
        this._marca = marca;
        this._ligado = ligado;
    }

    usando() {
        document.write("Estou utilizando o eletrodoméstico!");
    }

    get marca() {
        return this._marca;
    }

    set marca(value) {
        this._marca = value;
    }

    get ligado() {
        return this._ligado;
    }

    set ligado(value) {
        this._ligado = value;
    }
};

class Geladeira extends Eletrodomestico {
    constructor(marca, ligado) {
        super(marca, ligado);
    }

    usando() {
        super.usando();
        document.write(" E é uma geladeira!");
    }
};

class Comida {

};

Comida.prototype.sabor = "salgado";

Comida.prototype.verifSabor = function() {
    document.write("O sabor da comida é " + this.sabor + ".<br/>");
};