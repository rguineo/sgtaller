$("#formu-nuevo-tecnico").submit(function (e) {
    e.preventDefault()

    var datos = new FormData($(this)[0])

    $.ajax({
        url: 'ajax/ajaxTecnico.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta) {
            var cadena = $.trim(respuesta)
            if (cadena == "ok") {
                swal({
                  type: 'success',
                  title: 'Excelente',
                  text: 'Tecnico creado con éxito'
                }).then((result) => {
                  if (result.value) {
                    window.location = "tecnico"
                  }
                })
            }
        }
    })
})

$("body .tabla-usuario").on("click", ".btnEditarTecnico", function(){
    var idTecnico = $(this).attr("idtecnico")
    var datos = new FormData()
    datos.append("id_tecnico", idTecnico)
    datos.append("tipoOperacion", "editarTecnico")

    $.ajax({
        url: 'ajax/ajaxTecnico.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta) {
            var valor = JSON.parse(respuesta) 

            $('#formu-editar-tecnico input[name="nombreTecnico"]').val(valor.nomTecnico)
            $('#formu-editar-tecnico input[name="correoTecnico"]').val(valor.email)
            $('#formu-editar-tecnico input[name="idTecnico"]').val(valor.id_tecnico)
        }
    })
})


$("#formu-editar-tecnico").submit(function (e) {
    e.preventDefault()

    var datos = new FormData($(this)[0])

    $.ajax({
        url: 'ajax/ajaxTecnico.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta) {
            var cadena = $.trim(respuesta)
            if (cadena == "ok") {
                swal({
                  type: 'success',
                  title: 'Excelente',
                  text: 'Tecnico actualizado con éxito'
                }).then((result) => {
                  if (result.value) {
                    window.location = "tecnico"
                  }
                })
            }
        }
    })
})

$("body .tabla-usuario").on("click", ".btnEliminarTecnico", function(){
    var idTecnico = $(this).attr("idTecnico")

    var datos = new FormData()
    datos.append("id_tecnico", idTecnico)
    datos.append("tipoOperacion", "eliminarTecnico")

    swal({
      title: '¿Estás seguro de eliminar?',
      text: "Los cambios no son reversibles!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, Elimina!'
    }).then(function() {

          $.ajax({
            url: 'ajax/ajaxTecnico.php',
            type: 'POST',
            data: datos,
            processData: false,
            contentType: false,
            success: function(respuesta) {
                var cadena = $.trim(respuesta)
                if ( cadena == "ok") {
                    swal({
                      title: 'Eliminado!',
                      text: 'Tecnico ha sido eliminado.',
                      icon: 'success'
                    }).then(function() {
                        window.location = "tecnico"
                    })
                }
            }

        })
    })	
})