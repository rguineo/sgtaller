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


})