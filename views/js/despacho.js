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