<div class="modal fade" id="maestro-recordatorio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Recordatorio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Tema de sesión anterior:</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ratione illum itaque atque explicabo amet obcaecati, optio eos aspernatur, nemo tempore assumenda. Beatae, earum, rerum.</p>
        <h4>Tareas Aplicadas</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, doloremque.</p>
      </div>
      <div class="modal-footer" style="display: block;">
        <div class="col-md"><button type="button" class="btn btn-success w-100" data-dismiss="modal">¡Entendido!</button></div>
      </div>
    </div>
  </div>
</div>
<script>
  $('#actualizar-administrativo').on('shown.bs.modal', function(){
    $('#modal_actualizar_administrativo_input_matricula').trigger('focus');
  });
</script>