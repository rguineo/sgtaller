<?php

  $pais = new ControllerZonas();
  $resPais = $pais->ctrMostrarPais();

  $empresa = (new ctrCliente)->ctrTodosClientes();
  
?>


<div class="modal fade" id="modal-nuevo-terreno"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Actividad en Terreno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nuevo-terreno">

                <div class="form-group row">
                    <div class="col-sm-6"></div>
                    <label class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-4">
                        <input type="date" id="fecha" class="form-control"  onkeyup=""  required name="rutCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Empresa</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="empresaTerreno" id="empresaTerreno">
                            <option value="">Elija empresa</option>
                        <?php
                            
                            foreach ($empresa as $key => $value) {
                                echo "<option value='".$value["id_empresa"]."'>".$value["razon_social"]."</option>";
                            }

                        ?>
                        </select>                    
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Centro</label>
                    <div class="col-sm-8">
                    <select class="form-control" name="centroTerreno" id="centroTerreno">

                    </select>                    
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Responsable</label>
                    <div class="col-sm-8">
                        <input type="text" id="contacto-cliente" class="form-control" placeholder="José Pérez"  required name="giroCliente" maxlength='40' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Equipo</label>
                    <div class="col-sm-8">
                    <select class="form-control" name="equipo" id="equipo">
                            <option value="0"></option>
                            <option value="1"></option>
                            <option value="2"></option>
                    </select>                       </div>
                </div>   

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="trabajo">Trabajo realizado</label>
                    <div class="col-sm-8">
                        <textarea name="trabajo" id="trabajo" class="form-control txtArea" cols="10" rows="3"></textarea>
                    </div>
                </div>     
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="recomendaciones">Recomendaciones</label>
                    <div class="col-sm-8">
                        <textarea name="recomendaciones" id="recomendaciones" class="form-control txtArea" cols="10" rows="3"></textarea>
                    </div>
                </div>  

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="repuestos">Repuestos reemplazados</label>
                    <div class="col-sm-8">
                        <textarea name="repuestos" id="repuestos" class="form-control txtArea" cols="10" rows="3"></textarea>
                </div>
                </div>        
                <input type="hidden" name="tipoOperacion" value="nuevoCliente">

            <div class="modal-footer">
                <button type="button" id="cerrar-cliente" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
                        <input type="text" id="Erazon-cliente" class="form-control" placeholder="InterCom Corp"  required name="ErazonCliente" maxlength='30' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <input type="text" id="Edireccion-cliente" class="form-control" placeholder="Av. La Cruz"  required name="EdireccionCliente" maxlength='30' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Giro Comercial</label>
                    <div class="col-sm-8">
                        <input type="text" id="Egiro-cliente" class="form-control" placeholder="Industria Acuícola"  required name="EgiroCliente" maxlength='40' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
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
                        <input type="number" class="form-control" id="Etelefono" name="Etelefono" placeholder= "+56 9" required>
                    </div>
                </div>     

                <input type="hidden" name="tipoOperacion" value="actualizarCliente">
                <input type="hidden" name="EidCliente" value="">
                

            <div class="modal-footer">
                <button type="button" id="cerrar-Ecliente" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>