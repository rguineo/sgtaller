<?php 
 date_default_timezone_set("America/Santiago");
 $fecha = date("d-m-Y");

 $empresa = (new ctrCliente)->ctrTodosClientes();  
 $folio = (new ctrActa)->ctrUltimaActa();


 if( $folio["folio"] == NULL ){
     $nfolio = 1;
 } else {
    $nfolio = $folio["folio"] + 1;
 }

$tecnico = (new ctrTecnicos)->ctrTodosTecnicos();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Ingreso a Taller</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Ingreso Taller</li>
      </ol> 
      <hr>
    </section>
   
    <section class="content container-fluid">
      <div id='page-wrapper'>
        <div class='container-fluid'>
        <form id="formu-nuevo-ingresoTaller">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Folio OT</label>
            <div class="col-sm-3">
              <input type="number" id="folio" class="form-control form-inline folio" name="folio" value="<?php echo $nfolio; ?>" readonly>
            </div>
            
            <label class="col-sm-2 col-form-label">Recepcionado por</label>
            <div class="col-sm-3">
              <input type="text" id="recepcion" class="form-control form-inline readOnly" readonly name="recepcion" idRecepcion="<?php echo $_SESSION["id"]; ?>" value="<?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?>">
            </div>

        </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-3">
              <input type="date" id="fecha" class="form-control form-inline" required name="fecha" value="<?php echo $folio["fecha_orden"]; ?>">
            </div>
            <label class="col-sm-2 col-form-label">Tecnico Asignado</label>
            <div class="col-sm-3">
                <select class="form-control" name="tecnicoTaller" id="tecnicoTaller">
                  <?php
                    echo "<option value='0'>Elija Tecnico</option>";
                    foreach ($tecnico as $key => $value) {
                        echo "<option value=".$value["id_tecnico"].">".$value["nomTecnico"]."</option>";
                    }

                  ?>
                </select>
            </div>

          </div>
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Empresa</label>
            <div class="col-sm-3">
                <select class="form-control" name="empresaTaller" id="empresaTaller">
                  <?php
                    echo "<option value='0'>Elija Empresa</option>";
                    foreach ($empresa as $key => $value) {
                        echo "<option value=".$value["id_empresa"].">".$value["razon_social"]."</option>";
                    }

                  ?>
                </select>
            </div>

            <label class="col-sm-2 col-form-label">Equipo</label>
            <div class="col-sm-3">
              <select class="form-control" name="equipoTaller" id="equipoTaller">
                
              </select>            
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Centro</label>
            <div class="col-sm-3">
              <select class="form-control" name="centroTaller" id="centroTaller">
                
              </select>           
            </div>
        
            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-3">
              <input type="text" id="marca" class="form-control form-inline readOnly" readonly name="marca">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Guia Despacho</label>
            <div class="col-sm-3">
              <input type="number" id="guia" class="form-control form-inline" placeholder="guia despacho" required name="guia">
            </div>
          
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-3">
              <input type="text" id="modelo" class="form-control form-inline readOnly" readonly name="modelo">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre Transportista</label>
            <div class="col-sm-3">
              <input type="text" id="transporte" class="form-control form-inline" placeholder="Transportista" required name="transporte">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Observación</label>
            <div class="col-sm-3">
              <textarea class="form-control textDescript" name="observacion" id="observacion" cols="30" rows="3"></textarea>
            </div>

            <label class="col-sm-2 col-form-label">Accesorios</label>
            <div class="col-sm-3">
              <textarea class="form-control textDescript" name="accesorios" id="accesorios" cols="30" rows="3"></textarea>
            </div>
          </div>

          <input type="hidden" name="tipoOperacion" value="nuevoIngresoTaller">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"><i class="fa fa-print"></i> Imprimir</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
        </form>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>