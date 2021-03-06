<div class="modal fade bd-example-modal-lg" id="modal-nueva-marca"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-small" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Marca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nueva-marca">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Marca</th>        
            </thead>
            <tbody>
                <tr>
                    <td><input class="form-control" name="marca" type="text" maxlength='100' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'></td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="tipoOperacion" value="nuevaMarca">

    </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onClick="cerrarModalMarca()">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- EGRESO DE STOCK -->

<div class="modal fade bd-example-modal-lg" id="modal-egreso-stock"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Egreso Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-stock-egreso">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Producto</th>
                <th width="50">Precio</th>
                <th>Stock</th>
                <th>nCritico</th>
                <th>Egreso STK</th>            
            </thead>
            <tbody>
                <tr>
                    <td><input name="producto" type="text" disabled style='width: 350px;'></td>
                    <td><input name="precio" type="number" readonly maxlength='7' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' style='width: 100px; text-align: center;'></td>
                    <td><input name="stock" id="stockEgreso" type="number" readonly maxlength='4' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' style='width: 100px; text-align: center;'></td>
                    <td><input name="critico" type="number" readonly maxlength='4' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' style='width: 100px; text-align: center;'></td>
                    <td><input name="cantidad" id="cantidadEgreso" type="number" maxlength='4' oninput='if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' style='width: 100px; text-align: center; background-color: #F5DA81;' autofocus></td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" tipoOperacion="buscarStock">
        <input type="hidden" name="idProd" value="">
        <input type="hidden" name="idStock" value="-1">
    </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onClick="cerrarModal()">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>