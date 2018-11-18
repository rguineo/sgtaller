$(document).ready(function(){

	$("body .table-dark").on("click", ".btnEditarOrden", function(){
		var idOrden = $(this).attr("idOrden")
		var datos = new FormData()
		datos.append("id_orden", idOrden)
		datos.append("tipoOperacion", "editarOrden")
        console.log("id orden: "+idOrden)
		$.ajax({
			url: 'ajax/ajaxOrden.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				$('#formu-editar-orden input[name="folio"]').val(valor.folio)
                $('#formu-editar-orden input[name="fechaOrden"]').val(valor.fecha_orden)
				$('#formu-editar-orden input[name="empresa"]').val(valor.razon_social)
				$('#formu-editar-orden input[name="centro"]').val(valor.centro)
                $('#formu-editar-orden input[name="serie"]').val(valor.nSerie)
				$('#formu-editar-orden input[name="equipo"]').val(valor.nomEquipo)


                var id_tecnico = valor.id_tecnico
                console.log("id tec: "+id_tecnico)

                var tecnicos = new FormData()
                tecnicos.append("tipoOperacion", "todosTecnicos")
                $.ajax({
                    url: 'ajax/ajaxTecnico.php',
                    type: 'POST',
                    data: tecnicos,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        console.log(data)
                        $("#tecnico").html(data)
                        $("#tecnico option[value="+ valor.id_tecnico +"]").attr("selected",true);
                    }
                })
            }
        })
    })
})


function cerrarModalOrden(){
	document.forms["formu-editar-orden"].reset();

	$("#modal-editar-orden").modal('hide');//ocultamos el modal
	$('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
	$('.modal-backdrop').remove();//eliminamos el backdrop del modal
}