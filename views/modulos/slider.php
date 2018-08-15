<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestor de slider
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <button class="btn btn-primary">Agregar Slide <i class="fas fa-plus"></i></button>

      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Descripción</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php 
          
          $slider = ControllerSlider::listarSliderCtr();

          foreach ($slider as $key => $value) {
            echo '
              <tr>
                <th scope="row">'.$value["id"].'</th>
                <td>'.$value["titulo"].'</td>
                <td>'.$value["descripcion"].'</td>
                <td><img width="200" src="views/dist/'.$value["rutaImg"].'"></td>
                <td width="100">
                  <button class="btn btn-sm btn-info btnEditarSlider">
                    <i class="far fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-danger btnEliminarSlider">
                    <i class="far fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            ';
          }
          ?>
        </tbody>
      </table>

    </section>
    <!-- /.content -->
  </div>