
function CargarRegion($id){
    $("#inputRegion").prop("disabled", false);
    var id_pais=$("#inputPais").val();
    
    $.ajax({
        url: 'zonas.controller.php',
        data: {id_pais:id_pais},
        type: 'POST',
        success: function (data)
        {
            $("#cmb_region").html(data);
        }
    })


}
