$("#formu-nuevo-usrCliente").submit(function (e) {
    e.preventDefault()

    var datos = new FormData($(this)[0])

    $.ajax({
        url: 'ajax/ajaxUsrCliente.php',
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
                  text: 'Usuario Cliente creado con éxito'
                }).then((result) => {
                  if (result.value) {
                    window.location = "usrCliente"
                  }
                })
            }
        }

    })
})

$("body .table-dark").on("click", ".btnEliminarUsr", function(){
    var idUsuario = $(this).attr("idUsr")
    var datos = new FormData()
    datos.append("id_usrCliente", idUsuario)
    datos.append("tipoOperacion", "eliminarUsr")

    swal({
      title: '¿Estás seguro de eliminar?',
      text: "Los cambios no son reversibles!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, Elimina!'
    }).then((result) => {
      if (result.value) {
          $.ajax({
            url: 'ajax/ajaxUsrCliente.php',
            type: 'POST',
            data: datos,
            processData: false,
            contentType: false,
            success: function(respuesta) {
                var cadena = $.trim(respuesta)
                if ( cadena == "ok") {
                    swal(
                      'Eliminado!',
                      'El Cliente ha sido eliminado.',
                      'success'
                    ).then((result) => {
                      if (result.value) {
                        window.location = "usrCliente"
                      }
                    })
                }
            }

        })
      }
    })	
})



$("body .table-dark").on("click", ".btnEditarUsr", function(){
    var idUsuario = $(this).attr("idUsuario")
    var datos = new FormData()
    datos.append("id_usrCliente", idUsuario)
    datos.append("tipoOperacion", "editarUsrCliente")

    $.ajax({
        url: 'ajax/ajaxUsrCliente.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta) {
            var valor = JSON.parse(respuesta) 
            
            $('#formu-editar-usrCliente input[name="idUsrCliente"]').val(valor.id_usrCliente)
            $('#formu-editar-usrCliente input[name="usrCliente"]').val(valor.usrCliente)
            $('#formu-editar-usrCliente input[name="passUsrCliente"]').val(valor.pasCliente)    
            $('#formu-editar-usrCliente input[name="nomUsrCliente"]').val(valor.nomCliente)
            $('#formu-editar-usrCliente input[name="apeUsrCliente"]').val(valor.apeCliente)
            $("#EempresaUsrCliente option[value="+ valor.id_empresa +"]").attr("selected",true);

        }
    })
})

$("#formu-editar-usrCliente").submit(function (e) {
    e.preventDefault()

    var datos = new FormData($(this)[0])

    $.ajax({
        url: 'ajax/ajaxUsrCliente.php',
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
                  text: 'Usuario Cliente actualizado con éxito'
                }).then((result) => {
                  if (result.value) {
                    window.location = "usrCliente"
                  }
                })
            }
        }

    })
})

function encender(id_usr){
    var datos = new FormData()
    datos.append("id_usrCliente", id_usr)
    datos.append("tipoOperacion", "encenderUsr")
    $.ajax({
        url: 'ajax/ajaxUsrCliente.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta) 
        {
            window.location = "usrCliente"
        }
    })
}

function apagar(id_usr){
    var datos = new FormData()
    datos.append("id_usrCliente", id_usr)
    datos.append("tipoOperacion", "apagarUsr")
    $.ajax({
        url: 'ajax/ajaxUsrCliente.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta) 
        {
            window.location = "usrCliente"
        }
    })
}