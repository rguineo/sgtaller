$(document).ready(function(){

    $("#empresaTerreno").on("change", function(){

        var id_empresa = $("#empresaTerreno").val()
        
        var datos = new FormData
        datos.append("id", id_empresa)
        datos.append("tipoOperacion", "buscarCentros")
     
        $.ajax({
            url: 'ajax/ajaxCentro.php',
            data: datos,
            type: 'POST',
            processData: false,
			contentType: false,
            success: function (data)
            {
                $("#centroTerreno").html(data);
            }
        })
    })

    $("#empresaTerreno").on("change", function(){

        var id_equipo = $("#empresaTerreno").val()
        
        var datos = new FormData
        datos.append("id", id_equipo)
        datos.append("tipoOperacion", "buscarEquipo")
     
        $.ajax({
            url: 'ajax/ajaxEquipo.php',
            data: datos,
            type: 'POST',
            processData: false,
			contentType: false,
            success: function (data)
            {
                $("#equipoTerreno").html(data);
            }
        })
    })

    $("#formu-nuevo-terreno").submit(function (e) {
        e.preventDefault()

        var datos = new FormData($(this)[0])

        $.ajax({
            url: 'ajax/ajaxTerreno.php',
            type: 'POST',
            data: datos,
            processData: false,
            contentType: false,
            success: function(respuesta) {
                cadena = $.trim(respuesta)

                if (cadena == "ok") {
                    swal({
                        type: 'success',
                        title: 'Excelente',
                        text: 'Actividad guardada con éxito'
                    }).then((result) => {
                        if (result.value) {
                            window.location = "terrenos"
                        }
                    })
                }
            }
        })
    })
})