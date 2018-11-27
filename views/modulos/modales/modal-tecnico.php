<div class="modal fade" id="modal-nuevo-tecnico"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nuevo-tecnico">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Técnico</label>
                    <div class="col-sm-8">
                        <input type="text" id="nombre" class="form-control" placeholder="Juan Rojas"  required name="nombreTecnico">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Correo Electrónico</label>
                    <div class="col-sm-8">
                        <input type="email" id="correo" class="form-control" placeholder="usuario@ejemplo.cl" required name="correoTecnico">
                    </div>
                </div>   

                <input type="hidden" name="tipoOperacion" value="nuevoTecnico">

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>


<!-- Editar Tecnico -->
<div class="modal fade" id="modal-editar-tecnico"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Editar Técnico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-editar-tecnico">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Técnico</label>
                    <div class="col-sm-8">
                        <input type="text" id="nombre" class="form-control" placeholder="Juan Rojas"  required name="nombreTecnico">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Correo Electrónico</label>
                    <div class="col-sm-8">
                        <input type="email" id="correo" class="form-control" placeholder="usuario@ejemplo.cl" required name="correoTecnico">
                    </div>
                </div>   

                <input type="hidden" name="tipoOperacion" value="actualizarTecnico">
                <input type="hidden" name="idTecnico" value="">

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>
