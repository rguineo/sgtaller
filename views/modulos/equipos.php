<?php 

 $equipos = new ctrEquipo(); 
 $respuesta =  $equipos->ctrMostrarEquipo();

?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Equipos     </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">TodosEquipos</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'>
        <div class='container-fluid'>
          <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nuevo-equipo">
          <i class="fa fa-plus"></i>  Agregar Equipo</button>
          <div class='row'>
            <div class='col-lg-offset-1 col-lg-10'>
              <div class='table-responsive table_equipos'>
                <table class='table table-striped table-bordered table-hover tabla-equipos' id='dataTables-example'>

                  <thead style='text-align: center; background: #eaeaea;'>
                      <tr>
                          <th style='text-align: center;'> N° Serie</th>
                          <th style='text-aling: center;'> Nombre Equipo </th>
                          <th style='text-align: center;'> Marca Equipo</th>
                          <th style='text-align: center;'> Modelo Equipo </th>	
                          <th style='text-align: center;'> Empresa </th>
                          <th style='text-align: center;'> Fecha Ingreso </th>
                          <th style='text-align: center;'> Accion </th>
                      </tr>
                  </thead>
                   <tbody>
                   <?php
                    foreach ($respuesta as $key => $value) {
                     echo "<tr>";
                       echo "<td>".$value['numero_serie']."</td>";
                       echo "<td>".$value['nombre_equipo']."</td>"; 
                       echo "<td><center>"; 
                         echo "<button href='#' type='button' class='btnEditarEquipo btn btn-sm btn-primary' data-toggle='modal' data-target='#modal-editar-equipo' title='Editar' idEquipo=".$value["id_equipo"]." ><i class='fa fa-edit'></i></button>";
                         echo "<button href='#' type='button' class='btnEliminarEquipo btn btn-sm btn-danger' id=".$value["id_equipo"]." title='Eliminar'><i class='fa fa-trash'></i></button>";
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