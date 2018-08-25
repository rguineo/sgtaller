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
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-barcode"></i>
              </div>
              <input type="text" class="form-control" id="inputNSerie" placeholder="N° Serie" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputNombreEquipo">Nombre Equipo</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-laptop"></i>
              </div>
              <input type="text" class="form-control" id="inputNombreEquipo" placeholder="Nombre Equipo" required>
            </div>
          </div>
        </div>
          <div class="form-group col-md-6">
            <label for="inputMarcaEquipo">Marca Equipo</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-registered"></i>
              </div>
              <input type="text" class="form-control" id="inputMarcaEquipo" placeholder="Marca Equipo" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputModeloEquipo">Modelo Equipo</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-tags"></i>
              </div>
              <input type="text" class="form-control" id="inputModeloEquipo" placeholder="Modelo Equipo" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmpresa">Empresa</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-building"></i>
              </div>
              <select id="inputEmpresa" class="form-control" required>
                <option selected>Empresa</option>         
              </select>
            </div>
          </div>
          <div class="form-group col-md-4"> 
              <div class="form-group">
                <label>Fecha Ingreso</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker" required>
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