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
                        <input type="date" id="fechaTerreno" class="form-control"  onkeyup=""  required name="fechaTerreno">
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
                        <input type="text" name="responsable" id="responsable" class="form-control" placeholder="José Pérez" required maxlength='40' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Equipo</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="equipoTerreno" id="equipoTerreno">

                        </select>                       
                    </div>
                </div>   

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="trabajo">Trabajo realizado</label>
                    <div class="col-sm-8">
                        <textarea name="trabajo" id="trabajo" class="form-control txtArea" cols="10" rows="2" required></textarea>
                    </div>
                </div>     
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="recomendaciones">Recomendaciones</label>
                    <div class="col-sm-8">
                        <textarea name="recomendaciones" id="recomendaciones" class="form-control txtArea" cols="10" rows="2"></textarea>
                    </div>
                </div>  

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="repuestos">Repuestos reemplazados</label>
                    <div class="col-sm-8">
                        <textarea name="repuestos" id="repuestos" class="form-control txtArea" cols="10" rows="2"></textarea>
                </div>
                </div>        
                <input type="hidden" name="tipoOperacion" value="nuevoTerreno">

            <div class="modal-footer">
                <button type="button" id="cerrar-cliente" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>


<!-- Editar Terreno -->
<div class="modal fade" id="modal-editar-terreno"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Actividad en Terreno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-edit-terreno">

                <div class="form-group row">
                    <div class="col-sm-6"></div>
                    <label class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-4">
                        <input type="date" id="EfechaTerreno" class="form-control"  onkeyup=""  required name="EfechaTerreno">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Empresa</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="EempresaTerreno" id="EempresaTerreno">
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
                    <select class="form-control" name="EcentroTerreno" id="EcentroTerreno">
                    </select>                    
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Responsable</label>
                    <div class="col-sm-8">
                        <input type="text" name="Eresponsable" id="Eresponsable" class="form-control" placeholder="José Pérez" required maxlength='40' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'>
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Equipo</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="EequipoTerreno" id="EequipoTerreno">

                        </select>                       
                    </div>
                </div>   

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="trabajo">Trabajo realizado</label>
                    <div class="col-sm-8">
                        <textarea name="Etrabajo" id="Etrabajo" class="form-control txtArea" cols="10" rows="2" required></textarea>
                    </div>
                </div>     
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="recomendaciones">Recomendaciones</label>
                    <div class="col-sm-8">
                        <textarea name="Erecomendaciones" id="Erecomendaciones" class="form-control txtArea" cols="10" rows="2"></textarea>
                    </div>
                </div>  

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="repuestos">Repuestos reemplazados</label>
                    <div class="col-sm-8">
                        <textarea name="Erepuestos" id="Erepuestos" class="form-control txtArea" cols="10" rows="2"></textarea>
                </div>
                </div>        
                <input type="hidden" name="tipoOperacion" value="actualizarTerreno">

            <div class="modal-footer">
                <button type="button" id="cerrar-cliente" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>