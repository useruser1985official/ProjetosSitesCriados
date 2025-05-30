class AcoesVideo {
    play() {
        throw new Error("Implemente o método \"play\".");
    }

    pause() {
        throw new Error("Implemente o método \"pause\".");
    }

    like() {
        throw new Error("Implemente o método \"like\".");
    }
};

class Video extends AcoesVideo {
    constructor(titulo) {
        super();
        this._titulo = titulo;
        this._avaliacao = 1;
        this._views = 0;
        this._curtidas = 0;
        this._reproduzindo = false;
    }

    like() {
        this._curtidas++;
    }

    pause() {
        this._reproduzindo = false;
    }

    play() {
        this._reproduzindo = true;
    }

    toString() {
        return `Video:<br/>\nTitulo = ${this._titulo}<br/>\nAvaliacao = ${this._avaliacao}<br/>\nViews = ${this._views}<br/>\nCurtidas = ${this._curtidas}<br/>\nReproduzindo = ${this._reproduzindo}<br/>\n`;
    }

    get titulo() {
        return this._titulo;
    }

    set titulo(value) {
        this._titulo = value;
    }

    get avaliacao() {
        return this._avaliacao;
    }

    set avaliacao(value) {
        let media = (this._avaliacao + value) / this._views;
        this._avaliacao = media;
    }

    get views() {
        return this._views;
    }

    set views(value) {
        this._views = value;
    }

    get curtidas() {
        return this._curtidas;
    }

    set curtidas(value) {
        this._curtidas = value;
    }

    get reproduzindo() {
        return this._reproduzindo;
    }

    set reproduzindo(value) {
        this._reproduzindo = value;
    }
};

class Pessoa {
    constructor(nome, idade, sexo) {
        this._nome = nome;
        this._idade = idade;
        this._sexo = sexo;
        this._experiencia = 0;
    }

    toString() {
        return `Pessoa:<br/>\nNome = ${this._nome}<br/>\nIdade = ${this._idade}<br/>\nSexo = ${this._sexo}<br/>\nExperiencia = ${this._experiencia}`;
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
        this._sexo = value;
    }

    get experiencia() {
        return this._experiencia;
    }

    set experiencia(value) {
        this._experiencia = value;
    }
};

class Gafanhoto extends Pessoa {
    constructor(nome, idade, sexo, login) {
        super(nome, idade, sexo);
        this._login = login;
        this._totAssistido = 0;
    }

    assistirMaisUm() {
        this._totAssistido++;
    }

    toString() {
        return `Gafanhoto:<br/>\n${super.toString()}<br/>\nLogin = ${this._login}<br/>\nTotAssistido = ${this._totAssistido}<br/>\n`;
    }

    get login() {
        return this._login;
    }

    set login(value) {
        this._login = value;
    }

    get totAssistido() {
        return this._totAssistido;
    }

    set totAssistido(value) {
        this._totAssistido = value;
    }
};

class Visualizacao {
    constructor(espectador, filme) {
        this._espectador = espectador;
        this._filme = filme;
        this._filme.views = this._filme.views + 1;
        this._espectador.totAssistido = this._espectador.totAssistido + 1;
    }

    toString() {
        return `Visualizacao<br/>\nEspectador = ${this._espectador.toString()}<br/>\nFilme = ${this._filme.toString()}<br/><br/>\n`;
    }

    avaliar() {
        this._filme.avaliacao = 5;
    }

    avaliarNota(nota) {
        this._filme.avaliacao = nota;
    }

    avaliarPorc(porc) {
        let nova = 0;

        if(porc <= 20) {
            nova = 3;
        }
        else if(porc > 20 && porc <= 50) {
            nova = 5;
        }
        else if(porc > 50 && porc <= 90) {
            nova = 8;
        }
        else {
            nova = 10;
        }

        this._filme.avaliacao = nova;
    }

    get espectador() {
        return this._espectador;
    }

    set espectador(value) {
        this._espectador = value;
    }

    get filme() {
        return this._filme;
    }

    set filme(value) {
        this._filme = value;
    }
};