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
					    window.location = "cliente"
					  }
					})
				}else if (respuesta == "error"){
					swal({
					  type: 'warning',
					  title: 'Malas Noticias',
                      text: 'Cliente ya existe, Intente Nuevamente'
					}).then((result) => {
					  if (result.value) {
					    window.location = "cliente"
					  }
					})					
				}
			}

		})
	})
	
	$("body .table-dark").on("click", ".btnEliminarCliente", function(){
		var id = $(this).attr("id")

		var datos = new FormData()
		datos.append("id", id)
		datos.append("tipoOperacion", "eliminarCliente")


		swal({
		  title: '¿Estás seguro de eliminar?',
		  text: "Los cambios son irreversibles!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Elimina!'
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
				url: 'ajax/ajaxCliente.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					var cadena = respuesta.substr(0,2)
					console.log(respuesta)
					console.log(cadena)
					if ( cadena == "ok") {
						swal(
					      'Eliminado!',
					      'El Cliente ha sido eliminado.',
					      'success'
					    ).then((result) => {
						  if (result.value) {
						    window.location = "cliente"
						  }
						})
					}
				}

			})
		  }
		})	
	})


})