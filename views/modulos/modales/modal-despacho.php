<?php

$finalizados = (new ctrOrdenTrabajo);
$respuesta = $finalizados->ctrTodosFinalizados();

?>

<div class="modal fade" id="modal-nuevo-despacho"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Actividad en Terreno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nuevo-despacho">

                <div class="form-group row">
                    <div class="col-sm-6"></div>
                    <label class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-4">
                        <input type="date" id="fechaTerreno" class="form-control"  onkeyup=""  required name="fechaTerreno">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Equipo</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="equipoDespacho" id="equipoDespacho">
                            <option value="">Elija equipo</option>
                        <?php
                            foreach ($respuesta as $key => $value) {
                                echo "<option value='".$value["id_equipo"]."'>".$value["nSerie"]." | ".$value["nomEquipo"]."</option>";
                            }
                        ?>
                        </select>                    
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Empresa</label>
                    <div class="col-sm-8">
                        <input type="text" name="empresaDespacho" id="empresaDespacho" class="form-control" required readonly>
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Guia Despacho</label>
                    <div class="col-sm-8">
                        <input type="text" name="guia" id="guia" class="form-control" required>
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Transporte</label>
                    <div class="col-sm-8">
                        <input type="text" name="transporte" id="transporte" class="form-control" required>
                    </div>
                </div> 

                </div>        
                <input type="hidden" name="tipoOperacion" value="nuevoDespacho">
                <input type="hidden" name="idOT" value="">


            <div class="modal-footer">
                <button type="button" id="cerrar-cliente" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>