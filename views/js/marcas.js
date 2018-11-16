function cerrarModalMarca(){
	document.forms["formu-marca"].reset();

	$("#modal-nueva-marca").modal('hide');//ocultamos el modal
	$('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
	$('.modal-backdrop').remove();//eliminamos el backdrop del modal
}

$("#marca").on("change", function(){
    $("#modelo").prop("disabled", false);
    var id_marca=$("#marca").val();

    $.ajax({
        url: 'ajax/ajaxModelo.php',
        data: {id_marca: id_marca},
        type: 'POST',
        success: function (data)
        {
            $("#modelo").html(data);
        }
    })

})

$("#Emarca").on("change", function(){
    $("#Emodelo").prop("disabled", false);
    var id_marca=$("#Emarca").val();

    $.ajax({
        url: 'ajax/ajaxModelo.php',
        data: {id_marca: id_marca},
        type: 'POST',
        success: function (data)
        {
            $("#Emodelo").html(data);
        }
    })

})