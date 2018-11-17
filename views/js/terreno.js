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

        var id_empresa = $("#empresaTerreno").val()
        
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

    $("body .table-dark").on("click", ".btnEditarTerreno", function(){
        var idTerreno = $(this).attr("idTerreno")
        var datos = new FormData()
        datos.append("id_terreno", idTerreno)
        datos.append("tipoOperacion", "editarTerreno")

        $.ajax({
            url: 'ajax/ajaxTerreno.php',
            type: 'POST',
            data: datos,
            processData: false,
            contentType: false,
            success: function(respuesta) {
                var valor = JSON.parse(respuesta) 
               console.log(valor)
                $('#formu-editar-terreno input[name="EfechaTerreno"]').val(valor.fechaTerreno)
                $('#formu-editar-terreno input[name="Eresponsable"]').val(valor.responsable)
                $('#formu-editar-terreno textarea[name="Etrabajo"]').val(valor.trabajo)
                $('#formu-editar-terreno textarea[name="Erecomendaciones"]').val(valor.recomendaciones)
                $('#formu-editar-terreno textarea[name="Erepuestos"]').val(valor.repuestos)
                $('#formu-editar-terreno input[name="idTerreno"]').val(valor.id_terreno)

                $('#EempresaTerreno option[value='+ valor.id_empresa +']').attr("selected",true);

                    var id_empresa = valor.id_empresa
                    var datosCentro = new FormData
                    datosCentro.append("id", id_empresa)
                    datosCentro.append("tipoOperacion", "buscarCentros")
                    $.ajax({
                            url: 'ajax/ajaxCentro.php',
                            data: datosCentro,
                            type: 'POST',
                            processData: false,
                            contentType: false,
                            success: function (data)
                            {
                                    $("#EcentroTerreno").html(data)
                                    $('#EcentroTerreno option[value='+ valor.id_centro +']').attr("selected",true);
                            }
                    })

                    var id_empresa = valor.id_empresa
                    var datosEquipo = new FormData
                    datosEquipo.append("id", id_empresa)
                    datosEquipo.append("tipoOperacion", "buscarEquipo")

                    $.ajax({
                            url: 'ajax/ajaxEquipo.php',
                            data: datosEquipo,
                            type: 'POST',
                            processData: false,
                            contentType: false,
                            success: function (data)

                            {
                                console.log(data)
                                $("#EequipoTerreno").html(data)
                                $('#EequipoTerreno option[value='+ valor.id_equipo +']').attr("selected",true);
                            }
                    })

            }

        })

    })

    $("#formu-editar-terreno").submit(function (e) {
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
                        text: 'Actividad actualizada con éxito'
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