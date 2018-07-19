var contador = 0;
const nombreMeses = ["GEN", "FEB", "MAR", "ABR", "MAY", "JUN",
    "JUL", "AGO", "SEP", "OCT", "NOV", "DIC"];



$(function () {

    //console.log(lista_eventos)
    mostrar(lista_eventos);

});



function mostrar(lista_eventos) {

    $.each(lista_eventos, function () {

        var lista = lista_eventos.length;
        var obj = lista_eventos;
        var a = [lista];
        var formatofecha = obj[contador].FECHA;
        var myDate = new Date(formatofecha);
        var output = myDate.getMonth();
        var formatoMes = nombreMeses[output];
        var formatoDia = myDate.getDate();


        for (var i = 0; i < a.length; i++) {
            crearObjeto();
        };

        function crearObjeto() {
            $(".contenido").append('<div class="cont_evento">\
                <div class="image_bann">\
                <img src="' + obj[contador].IMAGEN + '" alt="Alternate Text" />\
                </div >\
                <div class="info_bann">\
                    <div class="fecha_bann">\
                        <div>\
                            <div>\
                                <div class="fecha_mes">\
                                    '+ formatoMes + '\
                                </div>\
                                <div class="fecha_dia">\
                                   ' + formatoDia + '\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
                    <div class="texto_bann">\
                        <div class="titulo_bann">\
                            ' + obj[contador].NOMBRE + '\
                        </div>\
                        <div class="resumen_bann">\
                           ' + obj[contador].RESUMEN + '\
                        </div>\
                        <div class="loca_bann">\
                            ' + obj[contador].LOCALIZACION + '\
                        </div>\
                    </div>\
                </div>\
            </div >');

            contador++;
        }

    });

};