$(document).ready(function(){
    // Guardar Producto
	$("#formu-nuevo-producto").submit(function (e) {
        e.preventDefault()
        
		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxProductos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta){
				var cadena = $.trim(respuesta)

				if (cadena == "ok") {
					swal({				
						type: 'success',
						title: 'Excelente',
						text: 'Producto creado con exito'
					}).then((value) => {
						window.location = "productos"
					})
				} else if (cadena == "error"){
                    swal({
                        type: 'warning',
                        title: 'Malas Noticias',
                        text: 'El Producto ya existe. Intente Nuevamente'
					}).then(function() {
                        window.location = "productos"
					})                   
                }

			}
		})
    })
   
     // Editar Certificacion
	$("body .table-dark").on("click", ".btnEditarPro", function(){
		var idProducto = $(this).attr("idProducto")
		var datos = new FormData()
		datos.append("id", idProducto)
		datos.append("tipoOperacion", "editarProducto")

		$.ajax({
			url: 'ajax/ajaxProductos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
			
				$('#formu-editar-producto input[name="id"]').val(valor.id)
				$('#formu-editar-producto input[name="nombre"]').val(valor.nombre)
				$('#formu-editar-producto textarea[name="detalle"]').val(valor.detalle)
				$("#Eunidad option[value="+ valor.umedida +"]").attr("selected",true);
				$('#formu-editar-producto input[name="precio"]').val(valor.precio)
				$('#formu-editar-producto input[name="barcode"]').val(valor.barcode)

			}

		})

	})  
	
	$("#formu-editar-producto").submit(function (e) {
        e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxProductos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta){
				var cadena = $.trim(respuesta)

				if (cadena == "ok") {
					swal({				
						type: 'success',
						title: 'Excelente',
						text: 'Producto actualizado con exito'
					}).then((value) => {
						window.location = "productos"
					})
				} 
			}
		})
	})
	
	$("body .table-dark").on("click", ".btnEliminarProd", function(){
		var id = $(this).attr("idProducto")

		var datos = new FormData()
		datos.append("id", id)
		datos.append("tipoOperacion", "eliminarProducto")

		swal({
		  title: '¿Estás seguro de eliminar?',
		  text: "Los cambios no son reversibles!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Elimina!'
		}).then(function() {

		  	$.ajax({
				url: 'ajax/ajaxProductos.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					var cadena = $.trim(respuesta)
					if ( cadena == "ok") {
						swal({
					      title: 'Eliminado!',
					      text: 'Su Producto ha sido eliminado.',
					      type: 'success'
					    }).then(function() {
						    window.location = "productos"
						})
					}
				}

			})
		})	
	})


})