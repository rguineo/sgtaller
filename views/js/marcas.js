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


$("#formu-nueva-marca").submit(function (e) {
    e.preventDefault()

    var datos = new FormData($(this)[0])

    $.ajax({
        url: 'ajax/ajaxMarca.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta) {
            if (respuesta == "ok") {
                swal({
                  type: 'success',
                  title: 'Excelente',
                  text: 'Marca guardada con éxito'
                }).then((result) => {
                  if (result.value) {
                    window.location = "marca"
                  }
                })
            }else if (respuesta == "error"){
                swal({
                  type: 'warning',
                  title: 'Malas Noticias',
                  text: 'Marca ya existe, Intente Nuevamente'
                }).then((result) => {
                  if (result.value) {
                    window.location = "marca"
                  }
                })					
            }
        }

    })
})