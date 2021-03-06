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
					var cadena = $.trim(respuesta)
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

	$("body .table-dark").on("click", ".btnEditarCliente", function(){
		var idCliente = $(this).attr("idCliente")
		var datos = new FormData()
		datos.append("id_empresa", idCliente)
		datos.append("tipoOperacion", "editarCliente")

		$.ajax({
			url: 'ajax/ajaxCliente.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)

				$('#formu-editar-cliente input[name="ErutCliente"]').val(valor.rut)
				$('#formu-editar-cliente input[name="ErazonCliente"]').val(valor.razon_social)
				$('#formu-editar-cliente input[name="EdireccionCliente"]').val(valor.direccion)
				$('#formu-editar-cliente input[name="EgiroCliente"]').val(valor.giro)
				$('#formu-editar-cliente input[name="Econtacto"]').val(valor.contacto)
				$('#formu-editar-cliente input[name="Etelefono"]').val(valor.nfono)
				$('#formu-editar-cliente input[name="EidCliente"]').val(valor.id_empresa)

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


				
			}

		})

	})



	$("#cerrar-cliente").on('click', function(){

		$("#formu-nuevo-cliente")[0].reset()
		$("#inputRegion").prop("disabled", true);
		$("#inputCiudad").prop("disabled", true);
		$("#inputComuna").prop("disabled", true);

	})

	$("#cerrar-Ecliente").on('click', function(){

		$("#formu-editar-cliente")[0].reset()
		$("#EinputRegion").prop("disabled", true);
		$("#EinputCiudad").prop("disabled", true);
		$("#EinputComuna").prop("disabled", true);

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
				var cadena = $.trim(respuesta)
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