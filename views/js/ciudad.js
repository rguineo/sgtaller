$("#formu-nueva-ciudad").submit(function (e) {
    e.preventDefault()

    var datos = new FormData($(this)[0])

    $.ajax({
        url: 'ajax/ajaxCiudad.php',
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
                    text: 'Ciudad ingresada con éxito'
                }).then((result) => {
                    if (result.value) {
                        window.location = "ciudad"
                    }
                })
            } 
        }
    })
})



$("body .table-dark").on("click", ".btnEditarCiudad", function(){
    var idCiudad = $(this).attr("idCiudad")
    var datos = new FormData()
    datos.append("id_ciudad", idCiudad)
    datos.append("tipoOperacion", "mostrarCiudad")

    $.ajax({
        url: 'ajax/ajaxCiudad.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta) {
            var valor = JSON.parse(respuesta)

            $('#formu-editar-ciudad input[name="idCiudad"]').val(valor.id_ciudad)
            $('#formu-editar-ciudad input[name="inputCiudad"]').val(valor.nombre_ciudad)
            $("#EinputPais option[value="+ valor.id_pais +"]").attr("selected",true);
            var id_pais = valor.id_pais

            $.ajax({
                url: 'ajax/ajaxZonas.php',
                data: {id_pais: id_pais},
                type: 'POST',
                success: function (data)
                {
                        $("#EinputRegion").html(data)
                        $("#EinputRegion option[value="+ valor.id_region +"]").attr("selected",true);
                }
            })            
        }
    })		
})


$("#formu-editar-ciudad").submit(function (e) {
    e.preventDefault()

    var datos = new FormData($(this)[0])

    $.ajax({
        url: 'ajax/ajaxCiudad.php',
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
                    text: 'Ciudad actualizada con éxito'
                }).then((result) => {
                    if (result.value) {
                        window.location = "ciudad"
                    }
                })
            } 
        }
    })
})