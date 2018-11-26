<?php 

$resPais = (new ControllerZonas)->ctrMostrarPais();
$resRegion = (new ctrRegion)->ctrMostrarRegiones();

?>
<div class="modal fade" id="modal-nueva-ciudad"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Ciudad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nueva-ciudad">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputPais">País</label>
                    <div class="col-sm-8">
                        <select id="inputPais" class="form-control" onChange="CargarRegion()" name="pais" required>
                            <option selected>Elija un País</option>
                            <?php
                            echo '<option value="">Elija un pais</option>';
                            foreach ($resPais as $key => $value) {
                                echo "<option value=".$value["id_pais"].">".$value["nombre_pais"]."</option>";
                            }
                            ?>           
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputRegion">Región</label>
                    <div class="col-sm-8">
                        <select id="inputRegion" class="form-control" name="inputRegion" disabled required>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Ciudad</label>
                    <div class="col-sm-8">
                        <input type="text" name="inputCiudad" id="inputCiudad" class="form-control" placeholder="Los Mares" disabled required>
                    </div>
                </div>

                <input type="hidden" name="tipoOperacion" value="nuevaCiudad">
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

<!-- EDITAR CIUDAD -->
<div class="modal fade" id="modal-editar-ciudad"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Ciudad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-editar-ciudad">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputPais">País</label>
                    <div class="col-sm-8">
                        <select id="EinputPais" class="form-control" onChange="CargarRegionE()" name="Epais" required>
                            <option selected>Elija un País</option>
                            <?php
                                echo '<option value="">Elija un pais</option>';
                            foreach ($resPais as $key => $value) {
                                echo "<option value=".$value["id_pais"].">".$value["nombre_pais"]."</option>";
                            }
                            ?>           
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputRegion">Región</label>
                    <div class="col-sm-8">
                        <select id="EinputRegion" class="form-control" name="EinputRegion" required>
                        
                        <?php
                            echo '<option value="">Elija una region</option>';
                            foreach ($resRegion as $key => $value) {
                                echo '<option value="'.$value["id_region"].'">'.$value["nombre_region"].'</option>';
                            }
                        ?>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Ciudad</label>
                    <div class="col-sm-8">
                        <input type="text" name="inputCiudad" id="inputCiudad" class="form-control" placeholder="Los Mares" required>
                    </div>
                </div>

                <input type="hidden" name="tipoOperacion" value="actualizarCiudad">
                <input type="hidden" name="idCiudad" value="">
                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>