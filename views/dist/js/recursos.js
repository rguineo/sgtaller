$(document).ready(function() {

    // Rutina para validar RUT Chileno
    $('#rut-cliente').Rut({
        on_error: function(){ 
        swal({
                    type: 'warning',
                    title: 'Malas noticias',
                    text: 'RUT incorrecto, intente nuevamente'
                    }).then((result) => {
                    if (result.value) {
                        document.getElementById("rut-cliente").focus()

                        document.getElementsByName("rutCliente")[0].value="";
                        document.getElementsByName("rutCliente")[0].placeholder="11.111.111-1";
        
                        $("#rut-cliente").get(0).setSelectionRange(0,0)
 
                    }
                    })
            },
        format_on: 'keyup'
      })


    // Tablas Dinamicas
    $('#dataTables-example').DataTable( {
        "scrollX": false
    } )

    $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' /* optional */
        })
      })

    $("#e1").select2();
})

$('#empresaSelect').select2({
    // minimumInputLength: 2,
    theme: 'bootstrap',
    placeholder: "Seleccione Empresa",
    allowClear: true
})

$('#centroSelect').select2({
    // minimumInputLength: 2,
    theme: 'bootstrap',
    placeholder: "Seleccione Centro",
    allowClear: true
})
 
$('#equipoSelect').select2({
    // minimumInputLength: 2,
    theme: 'bootstrap',
    placeholder: "Seleccione Equipo",
    allowClear: true
})
 