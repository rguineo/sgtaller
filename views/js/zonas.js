
function CargarRegion(){
    $("#inputRegion").prop("disabled", false);
    var id_pais=$("#inputPais").val();

    $.ajax({
        url: 'ajax/ajaxZonas.php',
        data: {id_pais: id_pais},
        type: 'POST',
        success: function (data)
        {
            $("#inputRegion").html(data);
        }
    })
}

$("#inputRegion").on("change", function(){
    $("#inputCiudad").prop("disabled", false);
    var id_region=$("#inputRegion").val();

    $.ajax({
        url: 'ajax/ajaxZonas.php',
        data: {id_region: id_region},
        type: 'POST',
        success: function (data)
        {
            $("#inputCiudad").html(data);
        }
    })

})

$("#inputCiudad").on("change", function(){
    $("#inputComuna").prop("disabled", false);
    var id_ciudad=$("#inputCiudad").val();

    $.ajax({
        url: 'ajax/ajaxZonas.php',
        data: {id_ciudad: id_ciudad},
        type: 'POST',
        success: function (data)
        {
            $("#inputComuna").html(data);
        }
    })

})

// Cargar combobox de ciudaddes

function CargarRegionE(){
    $("#EinputRegion").prop("disabled", false);
    var id_pais = $("#EinputPais").val();

    $.ajax({
        url: 'ajax/ajaxZonas.php',
        data: {id_pais: id_pais},
        type: 'POST',
        success: function (data)
        {
            $("#EinputRegion").html(data)
        }
    })
}

function CargarCiudadE(){
    $("#EinputCiudad").prop("disabled", false);
    var id_region=$("#EinputRegion").val();

    $.ajax({
        url: 'ajax/ajaxZonas.php',
        data: {id_region: id_region},
        type: 'POST',
        success: function (data)
        {
            $("#EinputCiudad").html(data)

        }
    })
}

function CargarComunaE(){
    $("#EinputComuna").prop("disabled", false);
    var id_ciudad=$("#EinputCiudad").val();

    $.ajax({
        url: 'ajax/ajaxZonas.php',
        data: {id_ciudad: id_ciudad},
        type: 'POST',
        success: function (data)
        {
            $("#EinputComuna").html(data)
        }
    })
}