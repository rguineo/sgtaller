<div class="modal fade" id="modal-nuevo-pais"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Pais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-pais">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Pais</th>        
            </thead>
            <tbody>
                <tr>
                    <td><input class="form-control" name="pais" type="text"></td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="tipoOperacion" value="nuevoPais">
    </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onClick="cerrarModalPais()">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

