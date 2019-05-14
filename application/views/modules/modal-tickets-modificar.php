<div class="modal fade" id="tickets-modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualización del Ticket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm">
            <label>ID: </label>
            <input id="modal_tickets_modificar_input_id" class="form-control" type="text" value="1">
          </div>
          <div class="col-sm">
            <label>Fecha de Modificación: </label>
            <input class="form-control" type="text" value="Mié, 10/May/2019" disabled="true">
          </div>
          <div class="col-sm">
            <label>Asunto: </label>
            <input class="form-control" type="text" placeholder="En pocas palabras..." value="Agregar Elemento">
          </div>
        </div>
        <div style="height: 15px;"></div>
        <div class="row">
          <div class="col-sm">
            <label>Dirección Web: </label>
            <input class="form-control" type="text" placeholder="Copiar y pegar link..." value="http://aldoalcala.com/tickets">
          </div>
        </div>
        <div style="height: 15px;"></div>
        <div class="row">
          <div class="col-md">
            <label>Descripción del problema: </label>
            <textarea class="form-control" type="textbox" placeholder="Describe lo que quisieras modificar..." rows="4">Aún no está terminada la página para hacer tickets, y esto es prioridad para resolver los problemas que se vayan presentando ocasionalmente.</textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer" style="display: block;">
        <div class="row">
          <div class="col-md"><input class="form-control" type="text" placeholder="Usuario"></div>
          <div class="col-md"><input class="form-control" type="password" placeholder="Contraseña"></div>
          <div class="col-md"><button type="button" class="btn btn-primary w-100">Crear</button></div>
          <div class="col-md"><button type="button" class="btn btn-danger w-100" data-dismiss="modal">Cerrar</button></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $('#tickets-modificar').on('shown.bs.modal', function(){
    $('#modal_tickets_modificar_input_id').trigger('focus');
  });
</script>