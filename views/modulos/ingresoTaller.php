<?php 

 $todoBodega = new ctrBodega(); 
 $respuesta =  $todoBodega->ctrTodoBodega();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Ingreso a Taller</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Ingreso Taller</li>
      </ol>
    </section>

    <section class="content container-fluid">
      <div id='page-wrapper'>
        <div class='container-fluid'>
        <form id="formu-nuevo-producto">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-3">
              <input type="date" id="fecha" class="form-inline" placeholder="fecha" required name="hora">
            </div>

            <label class="col-sm-2 col-form-label">Tecnico Recepcion</label>
            <div class="col-sm-3">
              <input type="text" id="hora" class="form-inline" placeholder="Recibido por" required name="hora">
            </div>
          </div>
          

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hora</label>
            <div class="col-sm-3">
              <input type="time" id="hora" class="form-inline" placeholder="hora" required name="hora">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Equipo</label>
            <div class="col-sm-3">
              <input type="text" id="hora" class="form-inline" placeholder="equipo" required name="hora">
            </div>

            <label class="col-sm-2 col-form-label">Marca</label>
            <div class="col-sm-3">
              <input type="text" id="hora" class="form-inline" placeholder="marca" required name="hora">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Serie</label>
            <div class="col-sm-3">
              <input type="text" id="hora" class="form-inline" placeholder="serie" required name="hora">
            </div>
        
            <label class="col-sm-2 col-form-label">Modelo</label>
            <div class="col-sm-3">
              <input type="text" id="hora" class="form-inline" placeholder="modelo" required name="hora">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Cliente</label>
            <div class="col-sm-3">
              <input type="text" id="hora" class="form-inline" placeholder="cliente" required name="hora">
            </div>
          
            <label class="col-sm-2 col-form-label">Contacto</label>
            <div class="col-sm-3">
              <input type="text" id="hora" class="form-inline" placeholder="contacto" required name="hora">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Centro Origen</label>
            <div class="col-sm-3">
              <input type="text" id="hora" class="form-inline" placeholder="origen" required name="hora">
            </div>
          
            <label class="col-sm-2 col-form-label">Transportista</label>
            <div class="col-sm-3">
              <input type="text" id="hora" class="form-inline" placeholder="transportado por" required name="hora">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Diagnostico</label>
            <div class="col-sm-3">
            <textarea class="form-control textDescript" name="detalle" id="detalle_producto" cols="30" rows="4"></textarea>
            </div>

            <label class="col-sm-2 col-form-label">Accesorios</label>
            <div class="col-sm-3">
            <textarea class="form-control textDescript" name="detalle" id="detalle_producto" cols="30" rows="4"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-3">
              <input type="text" id="estado" class="form-inline" placeholder="estado" required name="estado">
            </div>

            <label class="col-sm-2 col-form-label">Repuestos</label>
            <div class="col-sm-3">
            <textarea class="form-control textDescript" name="detalle" id="detalle_producto" cols="30" rows="4"></textarea>
            </div>
          </div>

          

          <!-- <div class="form-group row">
            <label class="col-sm-4 col-form-label">U-Medida</label>
            <div class="col-sm-4">
              <select name="unidad" id="" class="form-control">
                <option value="Unidad">Unidad</option>
                <option value="Kilos">Kilos</option>
                <option value="Litros">Litros</option>
              </select>
            </div>

            <div class="col-sm-4 row">
              <input type="text" class="form-control" placeholder="Precio" name="precio">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-form-label col-sm-4">Codigo Barra (opcional)</label>
            <div class="col-sm-8">
              <input class="form-control" type="text" name="barcode">  
            </div>
             
          </div> -->

          <input type="hidden" name="tipoOperacion" value="nuevoProducto">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>