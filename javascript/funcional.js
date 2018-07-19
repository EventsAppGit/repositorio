$(function () {

    navegacion();
});


function navegacion() {

    $("#home_butt").click(function () {
        $(".contenedor").css("display", "block");
        $(".dentro_evento").css("display", "none");
        $(".atras_principal").css("display", "none");
        
    });
    $("#find_butt").click(function () {

    });

    $(".cont_evento").click(function () {
        $(".contenedor").css("display", "none");
        $(".dentro_evento").css("display", "block");
        $(".atras_principal").css("display", "table-cell");

    });

    $("#atras_p").click(function () {
        $(".contenedor").css("display", "block");
        $(".dentro_evento").css("display", "none");
        $(".atras_principal").css("display", "none");
    });

};