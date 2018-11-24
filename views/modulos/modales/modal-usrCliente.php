<?php

$empresa = (new ctrCliente);
$respuesta = $empresa -> ctrTodosClientes();

?>

<div class="modal fade" id="modal-nuevo-usrCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nuevo-usrCliente">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Usuario</label>
                    <div class="col-sm-8">
                        <input type="email" id="usrCliente" class="form-control" placeholder="usuario@ejemplo.cl" required name="usrCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="passUsrCliente" class="form-control" placeholder="****" required name="passUsrCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" id="nomUsrCliente" class="form-control" placeholder="Juan"  required name="nomUsrCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Apellido</label>
                    <div class="col-sm-8">
                        <input type="text" id="apeUsrCliente" class="form-control" placeholder="Perez"  required name="apeUsrCliente">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Empresa</label>
                    <div class="col-sm-8">
                    <select name="empresaUsrCliente" id="empresaUsrCliente" class="form-control">
                        
                        <?php
                            echo '<option value="0">Elija Empresa</option>';
                            foreach ($respuesta as $key => $value) {
                                echo "<option value='".$value["id_empresa"]."'>".$value["razon_social"]."</option>";
                            }
                        ?>
                    </select>

                    </div>
                </div>

                <input type="hidden" name="tipoOperacion" value="nuevoUsrCliente">

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>


<!-- Editar Usuario -->

<div class="modal fade" id="modal-editar-usrCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-editar-usrCliente">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Usuario</label>
                    <div class="col-sm-8">
                        <input type="email" id="usrCliente" class="form-control" placeholder="usuario@ejemplo.cl" required name="usrCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="passUsrCliente" class="form-control" placeholder="****" required name="passUsrCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" id="nomUsrCliente" class="form-control" placeholder="Juan"  required name="nomUsrCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Apellido</label>
                    <div class="col-sm-8">
                        <input type="text" id="apeUsrCliente" class="form-control" placeholder="Perez"  required name="apeUsrCliente">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Empresa</label>
                    <div class="col-sm-8">
                    <select name="EempresaUsrCliente" id="EempresaUsrCliente" class="form-control">
                        
                        <?php
                            echo '<option value="0">Elija Empresa</option>';
                            foreach ($respuesta as $key => $value) {
                                echo "<option value='".$value["id_empresa"]."'>".$value["razon_social"]."</option>";
                            }
                        ?>
                    </select>

                    </div>
                </div>

                <input type="hidden" name="tipoOperacion" value="actualizarUsrCliente">
                <input type="hidden" name="idUsrCliente" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>