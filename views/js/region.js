$(document).ready(function(){
    
    $("#pais").on("change", function(){
        $("#region").prop("disabled", false);
    }) 

    $("#formu-nueva-region").submit(function (e) {
        e.preventDefault()
    
        var datos = new FormData($(this)[0])
    
        $.ajax({
            url: 'ajax/ajaxRegion.php',
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
                        text: 'Región guardado con éxito'
                    }).then((result) => {
                        if (result.value) {
                            window.location = "region"
                        }
                    })
                } else {
                  swal({
                    type: 'warning',
                    title: 'Malas Noticias',
                    text: 'Región ya existe'
                }).then((result) => {
                    if (result.value) {
                        window.location = "region"
                    }
                })            }
            }
        })
    })

    $("body .table-dark").on("click", ".btnEditarRegion", function(){
        var idRegion = $(this).attr("idRegion")
        var datos = new FormData()
        datos.append("id_region", idRegion)
        datos.append("tipoOperacion", "editarRegion")
    
        $.ajax({
            url: 'ajax/ajaxRegion.php',
            type: 'POST',
            data: datos,
            processData: false,
            contentType: false,
            success: function(respuesta) {
                var valor = JSON.parse(respuesta) 
                $('#formu-editar-region input[name="region"]').val(valor.nombre_region)
                $("#EinputPais option[value="+ valor.id_pais +"]").attr("selected",true);

                $('#formu-editar-region input[name="idregion"]').val(valor.id_region)
                
            }
        })
    })

    $("#formu-editar-region").submit(function (e) {
        e.preventDefault()
    
        var datos = new FormData($(this)[0])
    
        $.ajax({
            url: 'ajax/ajaxRegion.php',
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
                        text: 'Region actualizada con éxito'
                    }).then((result) => {
                        if (result.value) {
                            window.location = "region"
                        }
                    })
                } 
            }
        })
    })



})