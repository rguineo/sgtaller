$(document).ready(function(){

    $("#formu-nuevo-ingresoTaller").submit(function (e) {
        e.preventDefault()
        var id_recepcion = $("#recepcion").attr("idRecepcion")

        var datos = new FormData($(this)[0])
        datos.append("idRecepcion", id_recepcion)

        $.ajax({
            url: 'ajax/ajaxTaller.php',
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
                        text: 'Orden de trabajo ingresada con éxito'
                    }).then((result) => {
                        if (result.value) {
                            window.location = "ingresoTaller"
                        }
                    })
                } else {
                    swal({
                        type: 'warning',
                        title: 'Malas Noticias',
                        text: 'El equipo debe ser despachado antes de ingresar nuevo OT'
                    }).then((result) => {
                        if (result.value) {
                            window.location = "despacho"
                        }
                    })

                }
            }
        })
    })

    $("#empresaTaller").on("change", function(){

        var id_empresa = $("#empresaTaller").val()
        
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
                $("#centroTaller").html(data);
            }
        })
    })

    $("#empresaTaller").on("change", function(){

        var id_empresa = $("#empresaTaller").val()
        
        var datos = new FormData
        datos.append("id", id_empresa)
        datos.append("tipoOperacion", "buscarEquipo")
     
        $.ajax({
            url: 'ajax/ajaxEquipo.php',
            data: datos,
            type: 'POST',
            processData: false,
			contentType: false,
            success: function (data)
            {
                $("#equipoTaller").html(data);
            }
        })
    })

    $("#equipoTaller").on("change", function(){

        var id_equipo = $("#equipoTaller").val()
        
        var datos = new FormData()
        datos.append("id", id_equipo)
        datos.append("tipoOperacion", "encontrarEquipo")
     
        $.ajax({
            url: 'ajax/ajaxEquipo.php',
            data: datos,
            type: 'POST',
            processData: false,
			contentType: false,
            success: function (data)
            {
                var valor = JSON.parse(data)                
                $('#formu-nuevo-ingresoTaller input[name="marca"]').val(valor.marca)
                $('#formu-nuevo-ingresoTaller input[name="modelo"]').val(valor.modelo)

            }
        })
    })

})