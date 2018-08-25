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
            <div class="form-group col-md-4">
              <label for="inputComuna">Region</label>
                <select class="form-control">
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleccione Region</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Region 1</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Region 2</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Region 3</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Region 4</font></font></option>
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Region 5</font></font></option>
                  </select>
              </div>
          <div class="form-group col-md-4">
            <label for="inputRegion">Comuna</label>
              <select class="form-control">
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleccione Comuna</font></font></option>
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comuna 1</font></font></option>
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comuna 2</font></font></option>
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comuna 3</font></font></option>
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comuna 4</font></font></option>
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comuna 5</font></font></option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputRegion">Ciudad</label>
                <select class="form-control">
                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seleccione Ciudad</font></font></option>
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ciudad 1</font></font></option>
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ciudad 2</font></font></option>
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ciudad 3</font></font></option>
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ciudad 4</font></font></option>
                      <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ciudad 5</font></font></option>
                </select>
            </div>
            <div class="form-group col-md-12">
            <label for="inputDTALLER">URL Ubicacion Taller</label>
            <input type="text" class="form-control" id="inputURLTaller" placeholder="Ingrese la URL de Ubicacion del Taller" required>
          </div>
            <div class="form-group col-md-12">
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </section>
    <!-- /.content -->
  </div>