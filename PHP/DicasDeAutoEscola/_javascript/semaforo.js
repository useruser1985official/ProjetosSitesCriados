$(document).ready(function() {
   $("#semaforo div:eq(0)")
        .addClass("acender")
        .show();
    
    setInterval(sinal, 3000);
    
    function sinal() {
        if($(".acender").next().length) {
            $(".acender")
                .fadeOut()
                .removeClass("acender")
                .next()
                .fadeIn()
                .addClass("acender");
        }
        else {
            $(".acender")
                .fadeOut()
                .removeClass("acender");
            $("#semaforo div:eq(0)")
                .fadeIn()
                .addClass("acender"); 
        }
    }
});