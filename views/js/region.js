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
})