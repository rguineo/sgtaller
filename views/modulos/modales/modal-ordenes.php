<div class="modal fade bd-example-modal-lg" id="modal-editar-orden"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Orden Trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-orden">
  
          <div class="form-group row">
              <label class="col-sm-2 col-form-label">Folio OT</label>
              <div class="col-sm-4">
                <input type="number" id="folio" class="form-control form-inline folio" name="folio" value="" readonly>
              </div>
              <label class="col-sm-2 col-form-label">Tecnico</label>
              <div class="col-sm-4">
                <select class="form-control" name="tecnico" id="tecnico">
               
                </select>

              </div>
          </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Fecha Ingreso</label>
              <div class="col-sm-4">
                <input type="text" id="fecha" class="form-control form-inline" name="fechaOrden" value="" readonly>
              </div>

              <label class="col-sm-2 col-form-label">Numero Serie</label>
              <div class="col-sm-4">
                <input type="text" id="serie" name="serie" class="form-control" readonly>
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Empresa</label>
              <div class="col-sm-4">
                  <input type="text" id="empresa" name="empresa" class="form-control" readonly>
              </div>
              <label class="col-sm-2 col-form-label">Equipo</label>
              <div class="col-sm-4">
                <input type="text" id="equipo" class="form-control form-inline readOnly" readonly name="equipo">
              </div>

            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Trabajo Realizado</label>
              <div class="col-sm-10">
                <textarea class="form-control textDescript" name="diagnostico" id="diagnostico" cols="30" rows="3"></textarea>
              </div>
            </div>
              <div class="form-group row">
              <label class="col-sm-2 col-form-label">Repuestos Utilizados</label>
              <div class="col-sm-4">
                <textarea class="form-control textDescript" name="repuestos" id="repuestos" cols="30" rows="3"></textarea>
              </div>
              <label class="col-sm-2 col-form-label">Estado</label>
              <div class="col-sm-4">
                <select name="estado" id="estado" class="form-control">
                  <option value="1">Diagonostico</option>
                  <option value="2">Espera Aprobacion</option>
                  <option value="3">Reparacion</option>
                  <option value="4">Finalizado</option>
                </select>
  
              </div>

            </div>

            <input type="hidden" name="tipoOperacion" value="actualizarOrden">
            <input type="hidden" name="idOrden" value="">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onClick="cerrarModalOrden()">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>