$(function() {
    $("#imagem1").height(300);
    $("#imagem2").width(200);

    $("#form1").on("input", function() {
        var img1 = $("#num1").val();
        var img2 = $("#num2").val();

        $("#imagem1").height(img1);
        $("#imagem2").width(img2);
    });

    $("#resetar").on("click", function() {
        $("#imagem1").height(300);
        $("#imagem2").width(200);
        $("#num1").val(300);
        $("#num2").val(200);
    });
});