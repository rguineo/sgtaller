<?php

$usuario = new mdlMostrarUsuario();
$respuesta = $usuario->ctrMostrarUsuario();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Gestor de Usuarios</h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'>
        <div class='container-fluid'>
          <a href="nuevoUsuario" class="btn bg-purple margin">Agregar Cliente <i class="fa fa-user-plus"></i></a>
            <div class='row'>
              <div class='col-lg-offset-1 col-lg-10'>
                <div class='table-responsive table_usuario'>
                  <table class='table table-striped table-bordered table-hover tabla-usuario' id='dataTables-example'>
                    <thead style='text-align: center; background: #eaeaea;'>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Correo</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">Rol</th>
                          <th scope="col">Avatar</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php 

                      foreach ($respuesta as $key => $value) {
                        echo "<tr>";
                            echo "<td>".$value["id_usuario"]."</td>";
                            echo "<td>".$value["user"]."</td>";
                            echo "<td>".$value["nombre"]."</td>";
                            echo "<td>".$value["apellido"]."</td>";
                            echo "<td>".$value["rol"]."</td>";
                            echo "<td>"; 
                            echo "<center>";
                              echo "<a href='#' title='Editar'><i class='fa fa-edit fa-2x'></i></a>";
                              echo "<a href='#' data-toggle='modal' data-target='#delUsrModal' title='Eliminar'>
                              <i class='fa fa-remove fa-2x'style='color: red;'></i></a>";
                            echo "</center>";
                            echo "</td>";
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