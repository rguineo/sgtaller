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
                        <input type="text" id="nombre-centro" class="form-control" placeholder="Piscicultura Los Notros" onkeyup=""  required name="nombreCentro">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <input type="text" id="direccion-cliente" class="form-control" placeholder="Av. La Cruz"  required name="direccionCentro">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Ubicación</label>
                    <div class="col-sm-8">
                        <input type="text" id="ubicacion-cliente" class="form-control" placeholder="Ubicación Googel Maps"  required name="razonCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputPais">Empresa</label>
                    <div class="col-sm-8">
                        <select id="inputEmpresa" class="form-control" onChange="" name="empresa" required>
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
                        <input type="tel" class="form-control" id="inputFono" name="telefono" placeholder= "+56 9" required>
                    </div>
                </div>     

                <input type="hidden" name="tipoOperacion" value="nuevoCliente">

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>


<!-- Editar Cliente -->
<div class="modal fade" id="modal-editar-cliente"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-editar-cliente">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">RUT</label>
                    <div class="col-sm-8">
                        <input type="text" id="Erut-cliente" class="form-control" placeholder="11.111.111-1" onkeyup="" readonly required name="ErutCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre / Razon</label>
                    <div class="col-sm-8">
                        <input type="text" id="Erazon-cliente" class="form-control" placeholder="InterCom Corp"  required name="ErazonCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <input type="text" id="Edireccion-cliente" class="form-control" placeholder="Av. La Cruz"  required name="EdireccionCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Giro Comercial</label>
                    <div class="col-sm-8">
                        <input type="text" id="Egiro-cliente" class="form-control" placeholder="Industria Acuícola"  required name="EgiroCliente">
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputPais">País</label>
                    <div class="col-sm-8">
                        <select id="EinputPais" class="form-control" onChange="CargarRegionE()" name="Epais" required>
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
                        <select id="EinputRegion" class="form-control" name="Eregion" disabled required>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Ciudad</label>
                    <div class="col-sm-8">
                        <select id="EinputCiudad" class="form-control" name="Eciudad" disabled required>
                        <option>...</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputComuna">Comuna</label>
                    <div class="col-sm-8">
                        <select id="EinputComuna" class="form-control" name="Ecomuna" disabled required>
                        <option>...</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputContacto">Contacto</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="EinputContact" name="Econtacto" placeholder= "Juan Perez" maxlength="20" required>
                    </div>
                </div>   

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Teléfono</label>
                    <div class="col-sm-8">
                        <input type="tel" class="form-control" id="Etelefono" name="Etelefono" placeholder= "+56 9" required>
                    </div>
                </div>     

                <input type="hidden" name="tipoOperacion" value="actualizarCliente">
                <input type="hidden" name="EidCliente" value="">
                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>