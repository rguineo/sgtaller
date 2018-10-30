<?php

  $pais = new ControllerZonas();
  $resPais = $pais->ctrMostrarPais();

  $empresa = new ctrCliente();
  $resEmpresa = $empresa -> ctrTodosClientes();
  
?>


<div class="modal fade" id="modal-nuevo-centro"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Centro Producción</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nuevo-centro">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" id="nombre-centro" class="form-control" placeholder="Piscicultura ..." onkeyup=""  required name="nombreCentro" maxlength='30' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <input type="text" id="direccion-cliente" class="form-control" placeholder="Av. La Cruz ..."  required name="direccionCentro" maxlength='30' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Ubicación <a href="http://maps.google.com" target="_blank"><i class="fas fa-globe-americas"></i></a></label> 
                    <div class="col-sm-8">
                    
                        <input type="text" id="ubicacion-cliente" class="form-control" placeholder="Ubicación Googel Maps"  required name="ubicacionCentro">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputPais">Empresa</label>
                    <div class="col-sm-8">
                        <select id="inputEmpresa" class="form-control" onChange="" name="idEmpresa" required>
                            <option selected>Elija una Empresa</option>
                            <?php
                            foreach ($resEmpresa as $key => $value) {
                                echo "<option value=".$value["id_empresa"].">".$value["razon_social"]."</option>";
                            }
                            ?>           
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputPais">País</label>
                    <div class="col-sm-8">
                        <select id="inputPais" class="form-control" onChange="CargarRegion()" name="pais" required>
                            <option selected>Elija un País</option>
                            <?php
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
                        <select id="inputRegion" class="form-control" name="region" disabled required>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Ciudad</label>
                    <div class="col-sm-8">
                        <select id="inputCiudad" class="form-control" name="ciudad" disabled required>
                        <option>...</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Comuna</label>
                    <div class="col-sm-8">
                        <select id="inputComuna" class="form-control" name="comuna" disabled required>
                        <option>...</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Contacto</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputContact" name="contacto" placeholder= "Juan Perez" maxlength="20" required>
                    </div>
                </div>   

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Teléfono</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="inputFono" name="telefono" placeholder= "+56 9" required>
                    </div>
                </div>     

                <input type="hidden" name="tipoOperacion" value="nuevoCentro">
                

            <div class="modal-footer">
                <button type="button" id="cerrar-centro" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>


<!-- Editar Cliente -->
<div class="modal fade" id="modal-editar-centro"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Centro Producción</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-editar-centro">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" id="nombre-centro" class="form-control" placeholder="Piscicultura Los Notros" onkeyup=""  required name="EnombreCentro" maxlength='30' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <input type="text" id="direccion-cliente" class="form-control" placeholder="Av. La Cruz"  required name="EdireccionCentro" maxlength='30' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Ubicación</label>
                    <div class="col-sm-8">
                        <input type="text" id="ubicacion-cliente" class="form-control" placeholder="Ubicación Googel Maps"  required name="EubicacionCentro" maxlength='30' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputPais">Empresa</label>
                    <div class="col-sm-8">
                        <select id="EinputEmpresa" class="form-control" onChange="" name="EidEmpresa" required>
                            <option selected>Elija una Empresa</option>
                            <?php
                            foreach ($resEmpresa as $key => $value) {
                                echo "<option value=".$value["id_empresa"].">".$value["razon_social"]."</option>";
                            }
                            ?>           
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputPais">País</label>
                    <div class="col-sm-8">
                        <select id="EinputPais" class="form-control" name="Epais" required>
                            <option selected>Elija un País</option>
                            <?php
                            foreach ($resPais as $key => $value) {
                                echo '<option value="'.$value["id_pais"].'">'.$value["nombre_pais"].'</option>';
                            }
                            ?>           
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="EinputRegion">Región</label>
                    <div class="col-sm-8">
                        <select id="EinputRegion" class="form-control" name="Eregion" disabled required>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="EinputCiudad">Ciudad</label>
                    <div class="col-sm-8">
                        <select id="EinputCiudad" class="form-control" name="Eciudad" disabled required>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="EinputComuna">Comuna</label>
                    <div class="col-sm-8">
                        <select id="EinputComuna" class="form-control" name="Ecomuna" disabled required>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="EinputContact">Contacto</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="EinputContact" name="Econtacto" placeholder= "Juan Perez" maxlength="20" required>
                    </div>
                </div>   

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="EinputFono">Teléfono</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="EinputFono" name="Etelefono" placeholder= "+56 9" required>
                    </div>
                </div>     

                <input type="hidden" name="tipoOperacion" value="actualizarCentro">
                <input type="hidden" name="idCentro" value="">

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>
