<?php

  $pais = new ControllerZonas();
  $resPais = $pais->ctrMostrarPais();
  
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="tituloNewCliente"> Nuevo Cliente - Empresa</h1>
      <br>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">NuevoCliente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <form id="formu-nuevo-cliente">
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputRut">RUT Empresa / TIN <small>[Taxpayer Identification Number]</small></label>
            <input type="text" class="form-control" id="rut" name="rut" placeholder="RUT" maxlength="10" required>
          </div>
          <div class="form-group col-md-8">
            <label for="inputNombre">Nombre / Razón Social</label>
            <input type="text" class="form-control" id="inputNombre" name="nombre"placeholder="Nombre / Razon Solcial" maxlength="50" required>
          </div>
        </div>
        <div class="form-group col-md-12">
          <label for="inputAddress">Dirección Comercial</label>
          <input type="text" class="form-control" id="inputAddress" name="direccion" placeholder="Av. La Cruz 666" maxlength="50" required>
        </div>
        <div class="form-group col-md-12">
          <label for="inputGiro" >Giro / Actividad</label>
          <input type="text" class="form-control" id="inputGiro" name="giro" placeholder="Actividad Económica" maxlength="50" required>
        </div>

        <div class="form-group col-md-3">
          <label for="inputPais">País</label>
          <select id="inputPais" class="form-control" onChange="CargarRegion()" name="pais" required>
            <option selected>Elija un País</option>
            <?php
              foreach ($resPais as $key => $value) {
                echo "<option value=".$value["id_pais"].">".$value["nombre_pais"]."</option>";
              }
            ?>           
          </select>
        </div>
        
        <div class="form-group col-md-4">
          <label for="inputRegion">Región</label>
          <select id="inputRegion" class="form-control" name="region" disabled required>
          </select>
        </div>

        <div class="form-row">
          <div class="form-group col-md-5">
            <label for="inputCity">Ciudad</label>
            <select id="inputCiudad" class="form-control" name="ciudad" disabled required>
              <option>...</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-5">
            <label for="inputCity">Comuna</label>
            <select id="inputComuna" class="form-control" name="comuna" disabled required>
            <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputCity">Contacto</label>
            <input type="text" class="form-control" id="inputContact" name="contacto" placeholder= "Juan Perez" maxlength="20" required>
          </div>         

        <div class="form-group col-md-3">
            <label for="inputCity">Teléfono</label>
            <input type="tel" class="form-control" id="inputFono" name="telefono" placeholder= "+56 9" required>
          </div>         
        </div>  

        <div class="form-row">
          <div class="form-group col-md-12">
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>