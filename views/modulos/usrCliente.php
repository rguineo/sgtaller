<?php

$usuario = (new ctrUsrCliente);
$respuesta = $usuario->ctrMostrarUsrCliente();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Gestor de Usuarios de Cliente</h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Usuarios Cliente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div id='page-wrapper'>
        <div class='container-fluid'>
          <button type="button" class="btn bg-purple margin" data-toggle="modal" data-target="#modal-nuevo-usrCliente">
          <i class="fa fa-plus"></i>  Agregar Usuario Cliente</button>
            <div class='row'><br>
              <div class='col-lg-offset-1 col-lg-10'>
                <div class='table-responsive table_usuario'>
                  <table class='table table-striped table-bordered table-hover tabla-usuario table-dark' id='dataTables-example'>
                    <thead style='text-align: center; background: #eaeaea;'>
                      <tr>
                          <th scope="col" width="10%">#</th>
                          <th scope="col">Usuario</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">Empresa</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                    <?php 

                      foreach ($respuesta as $key => $value) {
                        echo "<tr>";
                            echo "<td style='text-align: center;'>".$value["id_usrCliente"]."</td>";
                            echo "<td>".$value["usrCliente"]."</td>";
                            echo "<td>".$value["nomCliente"]."</td>";
                            echo "<td>".$value["apeCliente"]."</td>";
                            echo "<td>".$value["razon_social"]."</td>";
                            
                            if ( $value["estado"] == 1 ){
                              echo "<td style='color: green; text-align: center;'><a href='#' onClick='apagar(".$value["id_usrCliente"].")'> <i class='fa fa-toggle-on fa-2x' title='Habilitado'></a></i></td>";
                            } else {
                              echo "<td style='color: grey; text-align: center;'><a href='#' onClick='encender(".$value["id_usrCliente"].")'><i class='fa fa-toggle-off fa-2x' title='Deshabilitado'></i></td>";
                            }
                          
                            echo "<td><center>";
                            echo "<button href='#' type='button' class='btnEditarUsr btn btn-sm btn-primary' data-toggle='modal' data-target='#modal-editar-usrCliente' title='Editar' idUsuario=".$value["id_usrCliente"]." ><i class='fa fa-edit'></i></button>";
                            echo "<button href='#' type='button' class='btnEliminarUsr btn btn-sm btn-danger' idUsr=".$value["id_usrCliente"]." title='Eliminar'><i class='fa fa-trash'></i></button>";
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