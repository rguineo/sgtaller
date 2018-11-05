$(document).ready(function(){

    $("body .table-dark").on("click", ".btnStockPro", function(){
        var idProducto = $(this).attr("idProducto")
		var datos = new FormData()
		datos.append("id", idProducto)
		datos.append("tipoOperacion", "cargarProducto")

		$.ajax({
			url: 'ajax/ajaxStock.php',
			type: 'POST',   
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
                var valor = JSON.parse(respuesta)
                
                if (valor == false){
                    $.ajax({
                        url: 'ajax/ajaxProductos.php',
                        type: 'POST',
                        data: datos,
                        processData: false,
                        contentType: false,
                        success: function(respuesta) {
                            var valor = JSON.parse(respuesta)
                            $('#formu-stock input[name="idProd"]').val(valor.id)
                            $('#formu-stock input[name="producto"]').val(valor.nombre)
                            $('#formu-stock input[name="precio"]').val(valor.precio)
                            
                        }

                    })

                } else {			
                    $('#formu-stock input[name="idStock"]').val(valor.id)
                    $('#formu-stock input[name="producto"]').val(valor.nombre)
                    $('#formu-stock input[name="precio"]').val(valor.precio)
                    $('#formu-stock input[name="stock"]').val(valor.cantidad)
                    $('#formu-stock input[name="critico"]').val(valor.ncritico)
                    $('#formu-stock input[name="idProd"]').val(valor.id_producto)
                }
			}

		})

	})  

    $("#formu-stock").submit(function (e) {
        e.preventDefault()
                
        var datos = new FormData($(this)[0])
        datos.append("tipoOperacion", "actualizarStock")

		$.ajax({
			url: 'ajax/ajaxStock.php',
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
						text: 'Stock actualizado con exito'
					}).then((value) => {
						window.location = "productos"
					})
				} 

			}
		})
	})
	

	$("body .table-dark").on("click", ".btnEgreso", function(){
        var idStock = $(this).attr("idStock")
		var datos = new FormData()
		datos.append("id", idStock)
		datos.append("tipoOperacion", "cargarStock")

		$.ajax({
			url: 'ajax/ajaxStock.php',
			type: 'POST',   
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
                var valor = JSON.parse(respuesta)
                
                    $('#formu-stock-egreso input[name="idStock"]').val(valor.id)
                    $('#formu-stock-egreso input[name="producto"]').val(valor.nombre)
                    $('#formu-stock-egreso input[name="precio"]').val(valor.precio)
                    $('#formu-stock-egreso input[name="stock"]').val(valor.cantidad)
                    $('#formu-stock-egreso input[name="critico"]').val(valor.ncritico)
                    $('#formu-stock-egreso input[name="idProd"]').val(valor.id_producto)
                
			}

		})

	})  


	$("#formu-stock-egreso").submit(function (e) {
        e.preventDefault()
		
		var stk = $("#stockEgreso").val()
		var can = $("#cantidadEgreso").val()
		
		if (can > stk) {
			swal({				
				type: 'warning',
				title: 'Atencion',
				text: 'No puedes sacar mas de lo que hay registrado en stock'
			}).then((value) => {
				window.location = "stock"
			})

		} else {

			var datos = new FormData($(this)[0])
			datos.append("tipoOperacion", "egresoStock")

			$.ajax({
				url: 'ajax/ajaxStock.php',
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
							text: 'Stock actualizado con exito'
						}).then((value) => {
							window.location = "stock"
						})
					} 

				}
			})
		}
	})
})

function cerrarModal(){
	document.forms["formu-stock-egreso"].reset();

	$("#modal-egreso-stock").modal('hide');//ocultamos el modal
	$('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
	$('.modal-backdrop').remove();//eliminamos el backdrop del modal

}

function cerrarModalI(){
	document.forms["formu-stock"].reset();

	$("#modal-insertar-stock").modal('hide');//ocultamos el modal
	$('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
	$('.modal-backdrop').remove();//eliminamos el backdrop del modal
}