<?php 

 $todosClientes = new ctrCliente(); 
 $respuesta =  $todosClientes->ctrTodosClientes();

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Todos Clientes Empresas     </h1>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">TodosClientes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <br>
      <div id='page-wrapper'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-offset-1 col-lg-10'>
                    <div class='table-responsive table_productos'>
                        <table class='table table-striped table-bordered table-hover tabla-usuarios' id='dataTables-example'>

                          <thead style='text-align: center; background: #eaeaea;'>
                              <tr>
                                  <th style='text-align: center;'> RUT Empresa</th>
                                  <th style='text-align: center;'> Nombre / Razon Social</th>
                                  <th style='text-align: center;'> Giro / Actividad Comercial</th>
                                  <th style='text-align: center;'> Direccion </th>	
                                  <th style='text-align: center;'> Accion </th>
                              </tr>
                          </thead>

                          <tbody>
                          <?php 
                           
                           foreach ($respuesta as $key => $value) {
                            echo "<tr>";
                              echo "<td>".$value['rut']."</td>";
                              echo "<td>".$value['razon_social']."</td>";
                              echo "<td>".$value['giro']."</td>";
                              echo "<td>".$value['direccion']."</td>"; 
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