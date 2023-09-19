function recalcular() {
    // Obtener los nuevos valores de los inputs
    var nuevoPorcentajeCarbohidratos = $("#inputPorcentajeCarbohidratos").val();
    var nuevoPorcentajeProteinas = $("#inputPorcentajeProteinas").val();
    var nuevoPorcentajeGrasa = $("#inputPorcentajeGrasa").val();
    var nuevoCaloriasCarbohidratos = $("#inputCaloriasCarbohidratos").val();
    var nuevoCaloriasProteinas = $("#inputCaloriasProteinas").val();
    var nuevoCaloriasGrasa = $("#inputCaloriasGrasa").val();
    var nuevoGramosCarbohidratos = $("#inputGramosCarbohidratos").val();
    var nuevoGramosProteinas = $("#inputGramosProteinas").val();
    var nuevoGramosGrasa = $("#inputGramosGrasa").val();
    var requerimiento = $("#requerimiento").val();

    // Realizar una solicitud AJAX para recalcular los valores
    $.ajax({
        type: "POST",
        url: "recalcular.php", // Nombre del archivo PHP que realizará los cálculos
        data: {
            porcentajeCarbohidratos: nuevoPorcentajeCarbohidratos,
            porcentajeProteinas: nuevoPorcentajeProteinas,
            porcentajeGrasa: nuevoPorcentajeGrasa,
            caloriasCarbohidratos: nuevoCaloriasCarbohidratos,
            caloriasProteinas: nuevoCaloriasProteinas,
            caloriasGrasa: nuevoCaloriasGrasa,
            gramosCarbohidratos: nuevoGramosCarbohidratos,
            gramosProteinas: nuevoGramosProteinas,
            gramosGrasa: nuevoGramosGrasa,
            requerimiento: requerimiento
        },
        success: function (response) {
            // Actualizar los valores en la página con la respuesta del servidor
            var data = JSON.parse(response);

            $("#inputPorcentajeCarbohidratos").val(data.porcentajeCarbohidratos);
            $("#inputPorcentajeProteinas").val(data.porcentajeProteinas);
            $("#inputPorcentajeGrasa").val(data.porcentajeGrasa);
            $("#totalPorcentaje").val(data.totalPorcentaje);
            $("#inputCaloriasCarbohidratos").val(data.caloriasCarbohidratos);
            $("#inputCaloriasProteinas").val(data.caloriasProteinas);
            $("#inputCaloriasGrasa").val(data.caloriasGrasa);
            $("#totalCalorias").val(data.totalCalorias);
            $("#inputGramosCarbohidratos").val(data.gramosCarbohidratos);
            $("#inputGramosProteinas").val(data.gramosProteinas);
            $("#inputGramosGrasa").val(data.gramosGrasa);
            $("#totalGramos").val(data.totalGramos);
        }
    });
}

function intercambios() {

    var almidones = $("#almidones").val();
    var frutas = $("#frutas").val();
    var verduras = $("#verduras").val();
    var lechedescremada = $("#lechedescremada").val();
    var lechesemidescremada = $("#lechesemidescremada").val();
    var lecheentera = $("#lecheentera").val();
    var carnesmuybajograsa = $("#carnesmuybajograsa").val();
    var carnesbajagrasa = $("#carnesbajagrasa").val();
    var carnesmoderadograsa = $("#carnesmoderadograsa").val();
    var carnesaltagrasa = $("#carnesaltagrasa").val();
    var grasa = $("#grasa").val();
    var azucar = $("#azucar").val();
    var frutossecos = $("#frutossecos").val();

    $("#inputenergiaalmidones").val(almidones*80);
    $("#inputchoalmidones").val(almidones*15);
    $("#inputproalmidones").val(almidones*3);
    $("#inputgrasaalmidones").val(almidones);
    $("#inputenergiafrutas").val(frutas*60);
    $("#inputchofrutas").val(frutas*15);
    $("#inputprofrutas").val(frutas*0);
    $("#inputgrasafrutas").val(frutas*0);
    $("#inputenergiaverduras").val(verduras*25);
    $("#inputchoverduras").val(verduras*5);
    $("#inputproverduras").val(verduras*2);
    $("#inputgrasaverduras").val(verduras*0);
    $("#inputenergialechedescremada").val(lechedescremada*90);
    $("#inputcholechedescremada").val(lechedescremada*12);
    $("#inputprolechedescremada").val(lechedescremada*8);
    $("#inputgrasalechedescremada").val(lechedescremada*3);
    $("#inputenergialechesemidescremada").val(lechesemidescremada*120);
    $("#inputcholechesemidescremada").val(lechesemidescremada*12);
    $("#inputprolechesemidescremada").val(lechesemidescremada*8);
    $("#inputgrasalechesemidescremada").val(lechesemidescremada*5);
    $("#inputenergialecheentera").val(lecheentera*150);
    $("#inputcholecheentera").val(lecheentera*12);
    $("#inputprolecheentera").val(lecheentera*8);
    $("#inputgrasalecheentera").val(lecheentera*8);
    $("#inputenergiacarnesmuybajograsa").val(carnesmuybajograsa*35);
    $("#inputchocarnesmuybajograsa").val(carnesmuybajograsa*0);
    $("#inputprocarnesmuybajograsa").val(carnesmuybajograsa*7);
    $("#inputgrasacarnesmuybajograsa").val(carnesmuybajograsa*1);
    $("#inputenergiacarnesbajagrasa").val(carnesbajagrasa*55);
    $("#inputchocarnesbajagrasa").val(carnesbajagrasa*0);
    $("#inputprocarnesbajagrasa").val(carnesbajagrasa*7);
    $("#inputgrasacarnesbajagrasa").val(carnesbajagrasa*3);
    $("#inputenergiacarnesmoderadograsa").val(carnesmoderadograsa*75);
    $("#inputchocarnesmoderadograsa").val(carnesmoderadograsa*0);
    $("#inputprocarnesmoderadograsa").val(carnesmoderadograsa*7);
    $("#inputgrasacarnesmoderadograsa").val(carnesmoderadograsa*5);
    $("#inputenergiacarnesaltagrasa").val(carnesaltagrasa*100);
    $("#inputchocarnesaltagrasa").val(carnesaltagrasa*0);
    $("#inputprocarnesaltagrasa").val(carnesaltagrasa*7);
    $("#inputgrasacarnesaltagrasa").val(carnesaltagrasa*8);
    $("#inputenergiagrasa").val(grasa*45);
    $("#inputchograsa").val(grasa*0);
    $("#inputprograsa").val(grasa*0);
    $("#inputgrasagrasa").val(grasa*5);
    $("#inputenergiaazucar").val(azucar*60);
    $("#inputchoazucar").val(azucar*15);
    $("#inputproazucar").val(azucar*0);
    $("#inputgrasaazucar").val(azucar*0);
    $("#inputenergiafrutossecos").val(frutossecos*70);
    $("#inputchofrutossecos").val(frutossecos*3);
    $("#inputprofrutossecos").val(frutossecos*3);
    $("#inputgrasafrutossecos").val(frutossecos*5);
    

}