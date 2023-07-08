$(function() {
    var ex = $(".ex1");
    var ex2 = $(".ex2");
    var button = $(":input.ev1");

    button.click(function() {
        ex.fadeTo(3000, 0.6, function() {
            ex2.fadeTo("slow", 0.3);
        });
    });
});