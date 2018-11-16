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
<div class="modal fade" id="modal-editar-equipo"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-editar-equipo">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">N° de Serie</label>
                    <div class="col-sm-8">
                        <input type="text" id="n-serie" class="form-control" onkeyup=""  required name="EnSerie">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Equipo</label>
                    <div class="col-sm-8">
                        <input type="text" id="nombre-equipo" class="form-control" placeholder="Bomba de peces"  required name="EnombreEquipo">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Marca Equipo</label>
                    <div class="col-sm-8">

                        <select name="Emarca" id="Emarca" class="form-control">
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
                        <select class="form-control" name="Emodelo" id="Emodelo" disabled>
                                                        
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputEmpresa">Empresa</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="Eempresa" id="Eempresa">
                        
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
