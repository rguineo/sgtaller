
function CargarRegion($id){
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