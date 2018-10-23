<div class="modal fade" id="modal-insertar-producto"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-producto">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nombre Producto</label>
            <div class="col-sm-8">
              <input type="text" id="nombre_producto" class="form-control" placeholder="Nombre" required name="nombre">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Detalle</label>
            <div class="col-sm-8">
            <textarea class="form-control textDescript" name="detalle" id="detalle_producto" cols="30" rows="3"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">U-Medida</label>
            <div class="col-sm-4">
              <select name="unidad" id="" class="form-control">
                <option value="Unidad">Unidad</option>
                <option value="Kilos">Kilos</option>
                <option value="Litros">Litros</option>
              </select>
            </div>

            <div class="col-sm-4 row">
              <input type="text" class="form-control" placeholder="Precio" name="precio">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-form-label col-sm-4">Codigo Barra (opcional)</label>
            <div class="col-sm-8">
              <input class="form-control" type="text" name="barcode">  
            </div>
             
          </div>

          <input type="hidden" name="tipoOperacion" value="nuevoProducto">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR USUARIO -->
<div class="modal fade" id="modal-editar-producto"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-producto">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nombre Producto</label>
            <div class="col-sm-8">
              <input type="text" id="nombre_producto" class="form-control" placeholder="Nombre" required name="nombre">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Detalle</label>
            <div class="col-sm-8">
            <textarea class="form-control textDescript" name="detalle" id="detalle_producto" cols="30" rows="3"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">U-Medida</label>
            <div class="col-sm-4">
              <select name="Eunidad" id="Eunidad" class="form-control">
                <option value="Unidad">Unidad</option>
                <option value="Kilos">Kilos</option>
                <option value="Litros">Litros</option>
              </select>
            </div>

            <div class="col-sm-4 row">
              <input type="text" class="form-control" placeholder="Precio" name="precio">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-form-label col-sm-4">Codigo Barra (opcional)</label>
            <div class="col-sm-8">
              <input class="form-control" type="text" name="barcode">  
            </div>
             
          </div>

          <input type="hidden" name="tipoOperacion" value="actualizarProducto">
          <input type="hidden" name="id" value="">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>