class Comida {

};

Comida.prototype.sabor = "salgado";

Comida.prototype.verifSabor = function() {
    document.write("O sabor da comida é " + this.sabor + ".<br/>");
};