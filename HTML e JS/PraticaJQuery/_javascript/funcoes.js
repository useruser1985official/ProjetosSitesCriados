$(function() {
    var ex = $(".ex1");

    $(".ev1").click(function() {
        $(this).css("background", "#666");
        ex.text("Você Clicou");
    });

    $(".ev2").dblclick(function() {
        $(this).css("background", "#666");
        ex.text("Você deu Dois Cliques");
    });

    $(".ev3").focusin(function() {
        $(this).css("background", "#666");
        ex.text("Você Focou no Elemento");
    }).focusout(function() {
        $(this).css("background", "#000");
        ex.text("Você Tirou o Foco do Elemento");
    });

    $(".ev4").hover(function() {
        $(this).css("background", "#666");
        ex.text("Você Passou o Mouse")
    });

    $(".ev5").mousedown(function() {
        $(this).css("background", "#666");
        ex.text("Você Apertou o Botão do Mouse");
    }).mouseup(function() {
        $(this).css("background", "#000");
        ex.text("Você Soltou o Botão do Mouse");
    });

    var a = 0;

    $(".ev6").mouseenter(function() {
        a += 1;
        $(this).css("background", "#666");
        ex.text("Entradas do Mouse: " + a);
    }).mouseout(function() {
        $(this).css("background", "#000");
        ex.text("Saída do Mouse");
    });

    var b = 0;

    $(".ev7").mouseover(function() {
        b += 1;
        $(this).css("background", "#666");
        ex.text("Entradas do Mouse: " + b);
    }).mouseleave(function() {
        $(this).css("background", "#000");
        ex.text("Saída do Mouse");
    });

    $(".ev8").mousemove(function(move) {
        var locx = move.pageX;
        var locy = move.pageY;

        ex.text("Movimento X: " + locx + " - Movimento Y: " + locy);
    });
});