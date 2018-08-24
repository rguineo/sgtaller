<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="tituloNewEquipo"> Nuevo Equipo</h1>
      <br>
      <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">NuevoEquipo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNSerie">N° Serie</label>
            <input type="text" class="form-control" id="inputNSerie" placeholder="N° Serie" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputNombreEquipo">Nombre Equipo</label>
            <input type="text" class="form-control" id="inputNombreEquipo" placeholder="Nombre Equipo" required>
          </div>
          <div class="col-md-4">
            <div class="box-body">
              <div class="form-group">
                <label>Fecha:</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right" id="datepicker" required>
                  </div>
              </div>
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