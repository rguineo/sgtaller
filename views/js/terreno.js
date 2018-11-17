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
})