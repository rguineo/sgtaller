$(document).ready(function(){

    $("body .table-dark").on("click", ".btnEliminarPais", function(){
        var id = $(this).attr("id")
        var datos = new FormData()
        datos.append("id", id)
        datos.append("tipoOperacion", "eliminarPais")

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
})