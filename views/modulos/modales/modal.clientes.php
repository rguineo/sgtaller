<div class="modal fade" id="modal-insertar-cliente"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-cliente">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">RUT Empresa</label>
            <div class="col-sm-10">
              <input type="text" id="rut-cliente" class="form-control" placeholder="RUT Empresa" required name="rut">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nombre / Razon Social</label>
            <div class="col-sm-10">
              <input type="text" id="nombre-cliente"  class="form-control" placeholder="Nombre / Razon Social" onkeyup=""  required name="nombre" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Giro / Actividad Comercial</label>
            <div class="col-sm-10">
              <input type="text" id="giro-cliente"  class="form-control" placeholder="Giro / Actividad Comercial" onkeyup=""  required name="giro" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Direccion</label>
            <div class="col-sm-10">
              <input type="text" id="direccion-cliente"  class="form-control" placeholder="Direccion" onkeyup=""  required name="direccion" readonly>
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertarCategoria">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR Clientes -->
<div class="modal fade" id="modal-editar-categorias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-categoria">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Título</label>
            <div class="col-sm-10">
              <input type="text" id="EtituloCategoria" class="form-control" placeholder="Titulo" required name="EtituloCategoria">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteEditarImagen">
              <input type="file" class="form-control"  id="imagen" name="imagenCategoria">
              <br>
              <img src="" id="imagenCategoria" alt="" class="thumbnail" width="200">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Vínculo</label>
            <div class="col-sm-10">
              <input type="text" id="ErutaCategoria" class="form-control" placeholder="vínculo" required name="ErutaCategoria" readonly>
            </div>
          </div>
       
          <input type="hidden" name="tipoOperacion" value="actualizarCategoria">
          <input type="hidden" name="rutaActual">
          <input type="hidden" name="id">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>