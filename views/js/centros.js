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
				$("#EinputEmpresa option[value="+ valor.id_empresa +"]").attr("selected",true);
				$("#EinputPais option[value="+ valor.id_pais +"]").attr("selected",true);

				$("#EinputRegion").prop("disabled", false);

				var id_pais = valor.id_pais
	
				$.ajax({
						url: 'ajax/ajaxZonas.php',
						data: {id_pais: id_pais},
						type: 'POST',
						success: function (data)
						{
								$("#EinputRegion").html(data)
								$("#EinputRegion option[value="+ valor.id_region +"]").attr("selected",true);
						}
				})

				

				$("#EinputCiudad").prop("disabled", false);
				var id_region= valor.id_region;

				$.ajax({
						url: 'ajax/ajaxZonas.php',
						data: {id_region: id_region},
						type: 'POST',
						success: function (data)
						{
								$("#EinputCiudad").html(data)
								$("#EinputCiudad option[value="+ valor.id_ciudad +"]").attr("selected",true);
						}
				})		
				
				$("#EinputComuna").prop("disabled", false);
				var id_ciudad= valor.id_ciudad

				$.ajax({
						url: 'ajax/ajaxZonas.php',
						data: {id_ciudad: id_ciudad},
						type: 'POST',
						success: function (data)
						{
								$("#EinputComuna").html(data)
								$("#EinputComuna option[value="+ valor.id_comuna +"]").attr("selected",true);
						}
				})

				$('#formu-editar-centro input[name="Econtacto"]').val(valor.contacto)
				$('#formu-editar-centro input[name="Etelefono"]').val(valor.telefono)				
			}

		})

	})

	$("#formu-editar-centro").submit(function (e) {
		e.preventDefault()
	
		var datos = new FormData($(this)[0])
	
		$.ajax({
			url: 'ajax/ajaxCentro.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var cadena = $.trim(respuesta)
				if (cadena == "ok") {
					swal({
					  type: 'success',
					  title: 'Actualizado',
					  text: 'Centro actualizado con éxito'
					}).then((result) => {
					  if (result.value) {
						window.location = "centros"
					  }
					})
				}
			}
	
		})
	})

	$("#cerrar-centro").on('click', function(){

		$("#formu-nuevo-centro")[0].reset()
		$("#inputRegion").prop("disabled", true);
		$("#inputCiudad").prop("disabled", true);
		$("#inputComuna").prop("disabled", true);

	})

})