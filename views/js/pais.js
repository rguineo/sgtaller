$(document).ready(function(){

  $("#formu-pais").submit(function (e) {
    e.preventDefault()

    var datos = new FormData($(this)[0])

    $.ajax({
        url: 'ajax/ajaxPais.php',
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
                    text: 'Pais guardado con éxito'
                }).then((result) => {
                    if (result.value) {
                        window.location = "pais"
                    }
                })
            } else {
              swal({
                type: 'warning',
                title: 'Malas Noticias',
                text: 'Pais ya existe'
            }).then((result) => {
                if (result.value) {
                    window.location = "pais"
                }
            })            }
        }
    })
})


    $("body .table-dark").on("click", ".btnEliminarPais", function(){
        var id = $(this).attr("idPais")
        var datos = new FormData()
        datos.append("id", id)
        datos.append("tipoOperacion", "eliminarPais")
        console.log(id)

        swal({
          title: '¿Estás seguro de eliminar?',
          text: "Los cambios son irreversibles!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, Elimina!'
        }).then((result) => {
          if (result.value) {
              $.ajax({
                url: 'ajax/ajaxPais.php',
                type: 'POST',
                data: datos,
                processData: false,
                contentType: false,
                success: function(respuesta) {
                    var cadena = respuesta.substr(0,2)
                    if ( cadena == "ok") {
                        swal(
                          'Eliminado!',
                          'El Pais ha sido eliminado.',
                          'success'
                        ).then((result) => {
                          if (result.value) {
                            window.location = "pais"
                          }
                        })
                    }
                }

            })
          }
        })	
    })

    $("body .table-dark").on("click", ".btnEditarPais", function(){
        var idPais = $(this).attr("idPais")
        var datos = new FormData()
        datos.append("id_pais", idPais)
        datos.append("tipoOperacion", "editarPais")
    
        $.ajax({
            url: 'ajax/ajaxPais.php',
            type: 'POST',
            data: datos,
            processData: false,
            contentType: false,
            success: function(respuesta) {
                var valor = JSON.parse(respuesta) 
                $('#formu-editar-pais input[name="Epais"]').val(valor.nombre_pais)
                $('#formu-editar-pais input[name="idPais"]').val(valor.id_pais)
                
            }
        })
    })


    $("#formu-editar-pais").submit(function (e) {
        e.preventDefault()
    
        var datos = new FormData($(this)[0])
    
        $.ajax({
            url: 'ajax/ajaxPais.php',
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
                        text: 'Pais actualizado con éxito'
                    }).then((result) => {
                        if (result.value) {
                            window.location = "pais"
                        }
                    })
                } 
            }
        })
    })
})