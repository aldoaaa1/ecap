<link rel="stylesheet" href="assets/css/maestro-asistencia.css">
<header> 
	<div class="contenedor">
		<div class="tiempo_transcurrido">
			<div class="border-time">
			</div>
			<div class="vcenterd">
				<h3>¿HA LLEGADO <br> TU ALUMNO(A)?</h3>
				<span class="switch">
				  <input type="checkbox" class="switch" id="switch-id">
				  <label for="switch-id"></label>
				</span>
				<h4>Nombre Alumno</h4>
				<p class="text-danger retraso" style="margin-bottom: 0;">5min de retraso</p>
			</div>
		</div>
	</div>
</header>

<?php $this->load->view('modules/modal-maestro-recordatorio') ?>
<script src="assets/js/maestro-asistencia.js"></script>