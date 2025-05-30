class Pessoa {
    constructor(nome, idade, sexo) {
        this._nome = nome;
        this._idade = idade;
        this._sexo = sexo;
    }

    fazerAniver() {
        this._idade++;
    }

    get nome() {
        return this._nome;
    }

    set nome(value) {
        this._nome = value;
    }

    get idade() {
        return this._idade;
    }

    set idade(value) {
        this._idade = value;
    }

    get sexo() {
        return this._sexo;
    }

    set sexo(value) {
        this._idade = value;
    }
};

class Publicacao {
    detalhes() {
        throw new Error("Implemente o método \"detalhes\".");
    }

    abrir() {
        throw new Error("Implemente o método \"abrir\".");
    }

    fechar() {
        throw new Error("Implemente o método \"fechar\".");
    }

    folhear(p) {
        throw new Error("Implemente o método \"folhear\".");
    }

    avancarPag() {
        throw new Error("Implemente o método \"avancarPag\".");
    }

    voltarPag() {
        throw new Error("Implemente o método \"voltarPag\".");
    }
};

class Livro extends Publicacao {
    constructor(titulo, autor, totPaginas, leitor) {
        super();
        this._titulo = titulo;
        this._autor = autor;
        this._totPaginas = totPaginas;
        this._leitor = leitor;
        this._pagAtual = 0;
        this._aberto = false;
    }

    detalhes() {
        document.write(`Livro ${this._titulo} escrito por ${this._autor}.<br/>`);

        if(this._aberto == true) {
            document.write("O livro está aberto!<br/>");
            document.write(`Páginas: ${this._totPaginas}, página atual ${this._pagAtual}.<br/>`);
            document.write(`Sendo lido por ${this._leitor.nome}.<br/>`);
            document.write(`De idade de ${this._leitor.idade} anos.<br/>`);
            document.write(`E de sexo ${this._leitor.sexo}.<br/>`);
        }
        else {
            document.write("O livro está fechado no momento!<br/>");
        }
    }

    abrir() {
        this._aberto = true;
    }

    fechar() {
        this._aberto = false;
    }

    folhear(p) {
        if(this.aberto == true) {
            if(p > this._totPaginas) {
                this.pagAtual = this.totPaginas;
            }
            else if(p < 0) {
                this.pagAtual = 0;
            }
            else {
                this._pagAtual = p;
            }
        }
    }

    avancarPag() {
        if(this.aberto == true) {
            if(this.pagAtual < this.totPaginas) {
                this.pagAtual = this.pagAtual + 1;
            }
        }
    }

    voltarPag() {
        if(this.aberto == true) {
            if(this.pagAtual > 0) {
                this.pagAtual = this.pagAtual - 1;
            }
        }
    }

    get titulo() {
        return this._titulo;
    }

    set titulo(value) {
        this._titulo = value;
    }

    get autor() {
        return this._autor;
    }

    set autor(value) {
        this._autor = value;
    }

    get totPaginas() {
        return this._totPaginas;
    }

    set totPaginas(value) {
        this._totPaginas = value;
    }

    get pagAtual() {
        return this._pagAtual;
    }

    set pagAtual(value) {
        this._pagAtual = value;
    }

    get aberto() {
        return this._aberto;
    }

    set aberto(value) {
        this._aberto = value;
    }

    get leitor() {
        return this._leitor;
    }

    set leitor(value) {
        this._leitor = value;
    }
};