$("#equipoDespacho").on("change", function(){

    var id_equipo=$("#equipoDespacho").val();

    var datos = new FormData()
    datos.append("id_equipo", id_equipo)
	datos.append("tipoOperacion", "buscarEmpEq")

    $.ajax({
        url: 'ajax/ajaxEquipo.php',
        data: datos,
        type: 'POST',
        processData: false,
        contentType: false,
        success: function (data)
        {
            var valor = JSON.parse(data)
            console.log(valor)
            $('#formu-nuevo-despacho input[name="empresaDespacho"]').val(valor.razon_social)
        }
    })
})

$("#formu-nuevo-despacho").submit(function (e) {
    e.preventDefault()

    var datos = new FormData($(this)[0])

    $.ajax({
        url: 'ajax/ajaxOrden.php',
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
                    text: 'Equipo despachado con éxito'
                }).then((result) => {
                    if (result.value) {
                        window.location = "despacho"
                    }
                })
            } 
        }
    })
})