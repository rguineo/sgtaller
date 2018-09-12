<?php

  $pais = new ControllerZonas();
  $resPais = $pais->ctrMostrarPais();
  
?>


<div class="modal fade" id="modal-nuevo-cliente"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h3 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nuevo-cliente">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">RUT</label>
                    <div class="col-sm-8">
                        <input type="text" id="rut-cliente" class="form-control" placeholder="11.111.111-1" onkeyup=""  required name="rutCliente">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Categoria</label>
                    <div class="col-sm-8">
                    <select class="form-control col-sm-10" id="inputCategorias" name="idCategorias" required>
                        <option selected>Elija una Categoria</option>
                        <?php
                            // foreach ($respuesta as $key => $value) {
                            // echo "<option value=".$value["id"]." rutaImagenCat=".$value["imagen"].">".$value["categoria"]."</option>";
                            // }
                        ?>           
                    </select>
                    </div>
                    <div class="col-sm-8 conteImagenCat">
                        <img src="" id="imagenCategoria" alt="" class="thumbnail" width="100">
                    </div>
                </div> -->
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre / Razon</label>
                    <div class="col-sm-8">
                        <input type="text" id="razon-cliente" class="form-control" placeholder="InterCom Corp"  required name="razonCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <input type="text" id="direccion-cliente" class="form-control" placeholder="Av. La Cruz"  required name="direccionCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Giro Comercial</label>
                    <div class="col-sm-8">
                        <input type="text" id="giro-cliente" class="form-control" placeholder="Industria Acuícola"  required name="direccionCliente">
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

                <input type="hidden" name="tipoOperacion" value="insertarCliente">

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>