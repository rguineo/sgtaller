$(document).ready(function(){

    $("body .table-dark").on("click", ".btnEliminarEquipo", function(){
			console.log("Hola")
		var id = $(this).attr("id")
		var datos = new FormData()
		datos.append("id", id)
		datos.append("tipoOperacion", "eliminarEquipo")

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
				url: 'ajax/ajaxEquipo.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					var cadena = respuesta.substr(0,2)
					if ( cadena == "ok") {
						swal(
					      'Eliminado!',
					      'El Equipo ha sido eliminado.',
					      'success'
					    ).then((result) => {
						  if (result.value) {
						    window.location = "equipos"
						  }
						})
					}
				}

			})
		  }
		})	
	})


		$("#formu-nuevo-equipo").submit(function (e) {
			e.preventDefault()
	
			var datos = new FormData($(this)[0])
	
			$.ajax({
				url: 'ajax/ajaxEquipo.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					cadena = $.trim(respuesta)
					console.log(cadena)
					if (cadena == "ok") {
						swal({
							type: 'success',
							title: 'Excelente',
												text: 'Equipo guardado con éxito'
						}).then((result) => {
							if (result.value) {
								window.location = "equipos"
							}
						})
					}else if (cadena == "error"){
						swal({
							type: 'warning',
							title: 'Malas Noticias',
												text: 'El Equipo ya existe, Intente Nuevamente'
						}).then((result) => {
							if (result.value) {
								window.location = "equipos"
							}
						})					
					}
				}
			})
		})

		$("body .table-dark").on("click", ".btnEditarEquipo", function(){
			var idEquipo = $(this).attr("idEquipo")
			var datos = new FormData()
			datos.append("id_equipo", idEquipo)
			datos.append("tipoOperacion", "editarEquipo")
	
			$.ajax({
				url: 'ajax/ajaxEquipo.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					var valor = JSON.parse(respuesta) 
		
					$('#formu-editar-equipo input[name="EnSerie"]').val(valor.nSerie)
					$('#formu-editar-equipo input[name="EnombreEquipo"]').val(valor.nomEquipo)

						$('#Emarca option[value='+ valor.id_marca +']').attr("selected",true);

						var id_marca = valor.id_marca
	
						$.ajax({
								url: 'ajax/ajaxModelo.php',
								data: {id_marca: id_marca},
								type: 'POST',
								success: function (data)
								{
										$("#Emodelo").html(data)
										$("#Emodelo option[value="+ valor.id_marca +"]").attr("selected",true);
								}
						})

						$('#Eempresa option[value='+ valor.id_empresa +']').attr("selected",true);

				}
	
			})
	
		})



})