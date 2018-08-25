<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="titulo_nuevo_taller"> Nuevo Taller</h1>
      <br>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">NuevoTaller</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNTALLER">Nombre Taller</label>
            <input type="text" class="form-control" id="inputNTALLER" placeholder="Ingrese Nombre de Nuevo Taller" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputDTALLER">Direccion</label>
            <input type="text" class="form-control" id="inputDTALLER" placeholder="Ingrese la direccion del Taller" required>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputComuna">Seleccione Comuna</label>
            <input type="text" class="form-control" id="inputComuna" placeholder="Ingrese Nombre de Nuevo Taller" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputRegion">Seleccione Region</label>
            <input type="text" class="form-control" id="inputRegion" placeholder="Ingrese la direccion del Taller" required>
          </div>
        </div>
        </div>
        <div class="form-group col-md-12">
          <br>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </section>
    <!-- /.content -->
</div>