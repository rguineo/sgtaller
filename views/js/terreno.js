$(document).ready(function(){

    $("#empresaTerreno").on("change", function(){
        var id_empresa = $("#empresaTerreno").val()
        console.log(id_empresa)
        var datos = new FormData($(this)[0])

        datos.append("id", id_empresa)
        datos.append("tipoOperacion", "buscarCentros")

        $.ajax({
            url: 'ajax/ajaxCentro.php',
            data: datos,
            type: 'POST',
            success: function (data)
            {
                $("#centroTerreno").html(data);
            }
        })
    })
})
