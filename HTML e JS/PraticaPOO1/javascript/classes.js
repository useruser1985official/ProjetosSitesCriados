class ContaBanco {
    constructor() {
        this._numConta = 0;
        this._tipo = "";
        this._dono = "";
        this._saldo = 0;
        this._status = false;

        this.saldo = 0;
        this.status = false;
        document.write("<p>Conta criada com Sucesso.</p>");
    }

    estadoAtual() {
        document.write("<hr/>");
        document.write(`Conta: ${this.numConta}<br/>`);
        document.write(`Tipo: ${this.tipo}<br/>`);
        document.write(`Dono: ${this.dono}<br/>`);
        document.write(`Saldo: ${this.saldo}<br/>`);
        document.write(`Status: ${this.status}<br/>`);
    }

    abrirConta(t) {
        this.tipo = t;
        this.status = true;

        if(t == "CC") {
            this.saldo = 50;
        }
        else if(t == "CP") {
            this.saldo = 150;
        }

        document.write("<p>Conta aberta com Sucesso!</p>");
    }

    fecharConta() {
        if(this.saldo > 0) {
            document.write("<p>A conta ainda tem dinheiro, não podemos fechá-la!</p>");
        }
        else if(this.saldo < 0) {
            document.write("<p>A conta está em débito, não podemos fechá-la!</p>");
        }
        else {
            this.status = false;
            document.write(`<p>A conta de ${this.dono} foi encerrada com sucesso!</p>`);
        }
    }

    depositar(v) {
        if(this.status) {
            this.saldo = this.saldo + v;
            document.write(`<p>Depósito de R\$${v} autorizado na conta de ${this.dono}.</p>`);
        }
        else {
            document.write("<p>Conta Fechada ou Inexistente!</p>");
        }
    }

    sacar(v) {
        if(this.status) {
            if(this.saldo >= v) {
                this.saldo = this.saldo - v;

                document.write(`<p>Sque de R\$${v} autorizado na conta de ${this.dono}.</p>`);
            }
            else {
                document.write("<p>Saldo insuficiente para saque!</p>");
            }
        }
        else {
            document.write("<p>Essa conta tá fechada ou não existe!</p>");
        }
    }

    pagarMensal() {
        let v = 0;
        
        if(this.tipo == "CC") {
            v = 12;
        }
        else if(this.tipo == "CP") {
            v = 20;
        }

        if(this.status) {
            this.saldo = this.saldo - v;
            document.write(`<p>Mensalidade de R\$${v} debitada da conta de ${this.dono}.</p>`);
        }
        else {
            document.write("<p>Problemas na conta, não podemos cobrar.</p>");
        }
    }

    get numConta() {
        return this._numConta;
    }

    set numConta(value) {
        this._numConta = value;
    }

    get tipo() {
        return this._tipo;
    }

    set tipo(value) {
        this._tipo = value;
    }

    get dono() {
        return this._dono;
    }

    set dono(value) {
        this._dono = value;
    }

    get saldo() {
        return this._saldo;
    }

    set saldo(value) {
        this._saldo = value;
    }

    get status() {
        return this._status;
    }

    set status(value) {
        this._status = value;
    }
};