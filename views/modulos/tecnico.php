<?php

$tecnico = new ctrTecnicos();
$respuesta = $tecnico->ctrTodosTecnicos();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Gestor de Tecnicos Taller</h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Tecnicos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'>
        <div class='container-fluid'>
          <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nuevo-tecnico">
          <i class="fa fa-plus"></i>  Agregar Tecnico</button>
            <div class='row'>
              <div class='col-lg-offset-1 col-lg-10'>
                <div class='table-responsive table_usuario'>
                  <table class='table table-striped table-bordered table-hover tabla-usuario' id='dataTables-example'>
                    <thead style='text-align: center; background: #eaeaea;'>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre Tecnico</th>
                          <th scope="col">e-Mail</th>
                          <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php 

                      foreach ($respuesta as $key => $value) {
                        echo "<tr style='text-align: center'>";
                            echo "<td>".$value["id_tecnico"]."</td>";
                            echo "<td>".$value["nomTecnico"]."</td>";
                            echo "<td>".$value["email"]."</td>";

                            echo "<td><center>";
                            echo "<button href='#' type='button' class='btnEditarTecnico btn btn-sm btn-primary' data-toggle='modal' data-target='#modal-editar-tecnico' title='Editar' idTecnico=".$value["id_tecnico"]." ><i class='fa fa-edit'></i></button>";
                            echo "<button href='#' type='button' class='btnEliminarTecnico btn btn-sm btn-danger' idTecnico=".$value["id_tecnico"]." title='Eliminar'><i class='fa fa-trash'></i></button>";
                            echo "</center></td>";
                          echo "</tr>";
                          }
                        ?> 


                        </tbody>
                    </table>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>