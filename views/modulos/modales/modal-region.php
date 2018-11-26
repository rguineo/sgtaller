<?php 
  $pais = new ControllerZonas();
  $resPais = $pais->ctrMostrarPais();
?>
<div class="modal fade" id="modal-nueva-region"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Region</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nueva-region">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Pais</label>
                    <div class="col-sm-8">
                        <select name="pais" id="pais" class="form-control">
                       
                            <?php
                                echo "<option value='0'>Elilja Pais</option>";
                                foreach ($resPais as $key => $value) {
                                    echo "<option value = '".$value["id_pais"]."'>".$value["nombre_pais"]."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Region</label>
                    <div class="col-sm-8">
                        <input type="text" id="region" class="form-control" placeholder="Los Mares" required name="region" disabled>
                    </div>
                </div>

                <input type="hidden" name="tipoOperacion" value="nuevaRegion">
                <input type="hidden" name="idregion" value="">
                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-editar-region"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Region</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-editar-region">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Pais</label>
                    <div class="col-sm-8">
                        <select name="EinputPais" id="EinputPais" class="form-control">
                       
                            <?php
                                echo "<option value='0'>Elilja Pais</option>";
                                foreach ($resPais as $key => $value) {
                                    echo "<option value = '".$value["id_pais"]."'>".$value["nombre_pais"]."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Region</label>
                    <div class="col-sm-8">
                        <input type="text" id="region" class="form-control" placeholder="Los Mares" required name="region">
                    </div>
                </div>

                <input type="hidden" name="tipoOperacion" value="actualizarRegion">
                <input type="hidden" name="idregion" value="">
                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>