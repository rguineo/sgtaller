$(document).ready(function(){

	$("#formu-nuevo-centro").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxCentro.php',
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
                      text: 'Centro guardado con éxito'
					}).then((result) => {
					  if (result.value) {
					    window.location = "centros"
					  }
					})
				}else if (cadena == "error"){
					swal({
					  type: 'warning',
					  title: 'Malas Noticias',
                      text: 'Centro ya existe, Intente Nuevamente'
					}).then((result) => {
					  if (result.value) {
					    window.location = "centros"
					  }
					})					
				}
			}
		})
	})
	
	$("body .table-dark").on("click", ".btnEliminarCentro", function(){
		var id = $(this).attr("idCentro")
		var datos = new FormData()
		datos.append("id", id)
		datos.append("tipoOperacion", "eliminarCentro")
		console.log(id)
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
				url: 'ajax/ajaxCentro.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					var cadena = $.trim(respuesta)
					if ( cadena == "ok") {
						swal(
					      'Eliminado!',
					      'El Centro ha sido eliminado.',
					      'success'
					    ).then((result) => {
						  if (result.value) {
						    window.location = "centros"
						  }
						})
					}
				}

			})
		  }
		})	
	})

	$("body .table-dark").on("click", ".btnEditarCentro", function(){
		var idCentro = $(this).attr("idCentro")
		var datos = new FormData()
		datos.append("id_centro", idCentro)
		datos.append("tipoOperacion", "editarCentro")

		$.ajax({
			url: 'ajax/ajaxCentro.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
					
				$('#formu-editar-centro input[name="EnombreCentro"]').val(valor.nombre)
				$('#formu-editar-centro input[name="EdireccionCentro"]').val(valor.direccion)
				$('#formu-editar-centro input[name="EubicacionCentro"]').val(valor.url_ubicacion)
				$('#formu-editar-centro input[name="Econtacto"]').val(valor.contacto)
				$('#formu-editar-centro input[name="Etelefono"]').val(valor.telefono)				
			}

		})

	})

	$("#formu-editar-cliente").submit(function (e) {
		e.preventDefault()
	
		var datos = new FormData($(this)[0])
	
		$.ajax({
			url: 'ajax/ajaxCliente.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var cadena = respuesta.substr(0,2)
				console.log(cadena)
				if (cadena == "ok") {
					swal({
					  type: 'success',
					  title: 'Actualizado',
					  text: 'Cliente actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
						window.location = "cliente"
					  }
					})
				}
			}
	
		})
	})




})