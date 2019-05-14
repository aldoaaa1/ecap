<div class="modal fade" id="actualizar-alumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualización de Alumno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row border-bottom" style="padding-bottom: 15px;">
          <div class="col-md">
          <label>Matricula a Actualizar: </label>
          </div>
          <div class="col-md">
            <input class="form-control" id="modal_actualizar_alumno_input_matricula" type="text" value="1">
          </div>
          <div class="col-md">
            <input class="form-control" type="text" value="Aldo Antonio Alcalá Alejo" disabled="true">
          </div>
        </div>
        <div class="row" style="padding-top: 10px;">
          <div class="col-md">
            <div class="info_div1">
              <label for="info_nombre">Nombre(s): </label>
              <input class="form-control" type="text" value="Aldo Antonio">
            </div>
            <div class="info_div1">
              <label for="info_nombre">Apellido Paterno: </label>
              <input class="form-control" type="text" value="Alcalá">
            </div>
            <div class="info_div1">
              <label for="info_nombre">Apellido Materno: </label>
              <input class="form-control" type="text" value="Alejo">
            </div>
          </div>
          <div class="col-md">
            <div class="info_div1">
              <label for="info_nombre">Edad: </label>
              <input class="form-control" type="text" value="27" data-mask="##0">
            </div>
            <div class="info_div1">
              <label for="info_nombre">Instrumento: </label>
              <select class="custom-select" id="info_instrumento">
                  <option>Choose...</option>
                  <option value="Piano" selected>Piano</option>
                  <option value="g-acustica">Guitarra Acústica</option>
                  <option value="g-electrica">Guitarra Eléctrica</option>
              </select>
            </div>
            <div class="info_div1">
              <label for="info_nombre">Fecha de Nacimiento: </label>
              <input class="form-control" type="text" value="23/04/1992" data-mask="00/00/0000" placeholder="dd/mm/aaaa">
            </div>
          </div>
          <div class="col-md">
            <div class="info_div1">
              <label for="info_nombre">Nombre(s) Padre: </label>
              <input class="form-control" type="text" value="Aldo Antonio">
            </div>
            <div class="info_div1">
              <label for="info_nombre">Apellido Paterno: </label>
              <input class="form-control" type="text" value="Alcalá">
            </div>
            <div class="info_div1">
              <label for="info_nombre">Apellido Materno: </label>
              <input class="form-control" type="text" value="Alejo">
            </div>
          </div>
          <div class="col-md">
            <div class="info_div1">
              <label for="info_nombre">Nombre(s) Madre: </label>
              <input class="form-control" type="text" value="Aldo Antonio">
            </div>
            <div class="info_div1">
              <label for="info_nombre">Apellido Paterno: </label>
              <input class="form-control" type="text" value="Alcalá">
            </div>
            <div class="info_div1">
              <label for="info_nombre">Apellido Materno: </label>
              <input class="form-control" type="text" value="Alejo">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="info_div1">
              <label for="info_nombre">Teléfono (Casa): </label>
              <input class="form-control" type="text" data-mask="(00) 0000 0000" value="8119776885">
            </div>
          </div>
          <div class="col-md">
            <div class="info_div1">
              <label for="info_nombre">Teléfono (Celular): </label>
              <input class="form-control" type="text" data-mask="(00) 0000 0000" value="8119776885">
            </div>
          </div>
          <div class="col-md">
            <div class="info_div1">
              <label for="info_nombre">Celular (Padre o Tutor): </label>
              <input class="form-control" type="text" data-mask="(00) 0000 0000" value="8119776885">
            </div>
          </div>
          <div class="col-md">
            <div class="info_div1">
              <label for="info_nombre">Email: </label>
              <input class="form-control" type="text" value="aldo.aaa1@gmail.com">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer" style="display: block;">
        <div class="row">
          <div class="col-md"><input class="form-control" type="text" placeholder="Usuario"></div>
          <div class="col-md"><input class="form-control" type="password" placeholder="Contraseña"></div>
          <div class="col-md"><button type="button" class="btn btn-primary w-100">Guardar Cambios</button></div>
          <div class="col-md"><button type="button" class="btn btn-danger w-100" data-dismiss="modal">Cerrar</button></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $('#actualizar-alumno').on('shown.bs.modal', function(){
    $('#modal_actualizar_alumno_input_matricula').trigger('focus');
  });
</script>