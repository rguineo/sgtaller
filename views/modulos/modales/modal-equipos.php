<?php

$empresa = (new ctrCliente)->ctrTodosClientes();
$marca = (new ctrMarcas)->ctrMostrarMarcas();
// $modelo = (new ctrMarca)->ctrTodasModelos();
 
?>


<div class="modal fade" id="modal-nuevo-equipo"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nuevo-equipo">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">N° de Serie</label>
                    <div class="col-sm-8">
                        <input type="text" id="n-serie" class="form-control" placeholder="1111-11" onkeyup=""  required name="nSerie">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Equipo</label>
                    <div class="col-sm-8">
                        <input type="text" id="nombre-equipo" class="form-control" placeholder="Bomba de peces"  required name="nombreEquipo">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Marca Equipo</label>
                    <div class="col-sm-8">

                        <select name="marca" id="marca" class="form-control">
                            <option value="">Seleccione una marca</option>
                            <?php
                                foreach ($marca as $key => $value) {
                                    echo "<option value=".$value["id_marca"].">".$value["marca"]."</option>";
                                }

                            ?>                        
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Modelo Equipo</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="modelo" id="modelo" disabled>
                                                        
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputEmpresa">Empresa</label>
                    <div class="col-sm-8">
                        <select class="custom-select" name="empresaSelect" id="empresaSelect">
                        
                        <?php
                         echo '<option value=""></option>';   
                        foreach ($empresa as $key => $value) {

                           echo '<option value='.$value["id_empresa"].'>'.$value["razon_social"].'</option>';
                        }

                        ?>
                        </select>
                    </div>
                </div>

                <input type="hidden" name="tipoOperacion" value="nuevoEquipo">

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>


<!-- Editar Equipo -->
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
