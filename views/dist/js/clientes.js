$(document).ready(function(){

	$("#formu-nuevo-cliente").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxCliente.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				if (respuesta == "ok") {
					swal({
					  type: 'success',
					  title: 'Excelente',
                      text: 'Cliente guardado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "nuevoCliente"
					  }
					})
				}else if (respuesta == "error"){
					swal({
					  type: 'warning',
					  title: 'Malas Noticias',
                      text: 'Cliente ya existe'
					}).then((result) => {
					  if (result.value) {
					    window.location = "nuevoCliente"
					  }
					})					
				}
			}

		})
    })
})