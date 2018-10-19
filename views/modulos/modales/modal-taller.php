<div class="modal fade" id="modal-nuevo-taller"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Taller</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-nuevo-taller">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre Taller</label>
                    <div class="col-sm-8">
                        <input type="text" id="nombre-taller" class="form-control" placeholder="xxxxx@xxx" required name="nombreTaller">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <input type="text" id="dirección" class="form-control" placeholder="xxxxx"  required name="direcciónTaller">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Ciudad</label>
                    <div class="col-sm-8">
                        <input type="text" id="ciudad" class="form-control" placeholder="xxxx"  required name="ciudadTaller">
                    </div>
                </div>   

                <input type="hidden" name="tipoOperacion" value="nuevotaller">

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>


<!-- Editar Cliente -->
<div class="modal fade" id="modal-editar-cliente"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header tituloModal">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formu-editar-cliente">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">RUT</label>
                    <div class="col-sm-8">
                        <input type="text" id="Erut-cliente" class="form-control" placeholder="11.111.111-1" onkeyup="" readonly required name="ErutCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nombre / Razon</label>
                    <div class="col-sm-8">
                        <input type="text" id="Erazon-cliente" class="form-control" placeholder="InterCom Corp"  required name="ErazonCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Dirección</label>
                    <div class="col-sm-8">
                        <input type="text" id="Edireccion-cliente" class="form-control" placeholder="Av. La Cruz"  required name="EdireccionCliente">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Giro Comercial</label>
                    <div class="col-sm-8">
                        <input type="text" id="Egiro-cliente" class="form-control" placeholder="Industria Acuícola"  required name="EgiroCliente">
                    </div>
                </div> 

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputRegion">Región</label>
                    <div class="col-sm-8">
                        <select id="EinputRegion" class="form-control" name="Eregion" disabled required>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Ciudad</label>
                    <div class="col-sm-8">
                        <select id="EinputCiudad" class="form-control" name="Eciudad" disabled required>
                        <option>...</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputComuna">Comuna</label>
                    <div class="col-sm-8">
                        <select id="EinputComuna" class="form-control" name="Ecomuna" disabled required>
                        <option>...</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputContacto">Contacto</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="EinputContact" name="Econtacto" placeholder= "Juan Perez" maxlength="20" required>
                    </div>
                </div>   

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" for="inputCity">Teléfono</label>
                    <div class="col-sm-8">
                        <input type="tel" class="form-control" id="Etelefono" name="Etelefono" placeholder= "+56 9" required>
                    </div>
                </div>     

                <input type="hidden" name="tipoOperacion" value="actualizarCliente">
                <input type="hidden" name="EidCliente" value="">
                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>