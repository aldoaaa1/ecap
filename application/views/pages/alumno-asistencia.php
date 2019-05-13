<header class="container">
	<h3>Asistencia</h3>
	<p>Enero - Junio (2019)</p>
</header>
<main class="container">
	<!-- INFORMACIÓN GENERAL A LA VISTA -->
	<div class="row" id="asistencia_gral">
		<div class="col">
			<strong>Total</strong>
			<p class="p1">52</p>
		</div>
		<div class="col">
			<strong>Asistidas</strong>
			<p class="p1">32</p>
		</div>
		<div class="col">
			<strong>Justificadas</strong>
			<p class="p1">10</p>
		</div>
		<div class="col">
			<strong>Faltas</strong>
			<p class="p1">5</p>
		</div>
		<div class="col">
			<strong>Pospuestas</strong>
			<p class="p1">5</p>
		</div>
	</div>
	
	<!-- FILTRAR POR MES, POR ESTADO Y POR TEMA -->
	<form>
		<h3>Filtrar lista por:</h3>
		<div class="row">
			<div class="col-md-3"><input class="form-control" type="text" value="Mes"></div>
			<div class="col-md-3"><input class="form-control" type="text" value="Tema"></div>
			<div class="col-md-6">
				<p style="float: left;">Estado: </p>
				<input type="checkbox" id="filtro-asistidas"><label for="filtro-asistidas">Asistidas</label>
				<input type="checkbox" id="filtro-justificadas"><label for="filtro-justificadas">Justificadas</label>
				<input type="checkbox" id="filtro-faltadas"><label for="filtro-faltadas">Faltadas</label>
				<input type="checkbox" id="filtro-pospuestas"><label for="filtro-pospuestas">Pospuestas</label>
			</div>
		</div>
	</form>

	<!-- TABLA DE ASISTENCIAS Y CLASES DEL SEMESTRE -->
	<div class="table-responsive">
		<table class="table">
			<thead>
				<th>Día</th>
				<th>Mes</th>
				<th>Tema Observado</th>
				<th>Estado</th>
			</thead>
			<tbody>
				<tr>
					<td>Miércoles - 10</td>
					<td>Enero</td>
					<td>Intervalos y Canción 1</td>
					<td>Asistida</td>
				</tr>
				<tr>
					<td>Miércoles - 10</td>
					<td>Enero</td>
					<td>Intervalos y Canción 1</td>
					<td>Falta</td>
				</tr>
				<tr>
					<td>Miércoles - 10</td>
					<td>Enero</td>
					<td>Intervalos y Canción 1</td>
					<td>Justificada</td>
				</tr>
				<tr>
					<td>Miércoles - 10</td>
					<td>Enero</td>
					<td>Intervalos y Canción 1</td>
					<td>Asistida</td>
				</tr>
				<tr>
					<td>Miércoles - 10</td>
					<td>Enero</td>
					<td>Intervalos y Canción 1</td>
					<td>Recorrida</td>
				</tr>
				<tr>
					<td>Miércoles - 10</td>
					<td>Enero</td>
					<td>Intervalos y Canción 1</td>
					<td>Asistida</td>
				</tr>
				<tr>
					<td>Miércoles - 10</td>
					<td>Enero</td>
					<td>Intervalos y Canción 1</td>
					<td>Falta</td>
				</tr>
				<tr>
					<td>Miércoles - 10</td>
					<td>Enero</td>
					<td>Intervalos y Canción 1</td>
					<td>Asistida</td>
				</tr>
				<tr>
					<td>Miércoles - 10</td>
					<td>Enero</td>
					<td>Intervalos y Canción 1</td>
					<td>Justificada</td>
				</tr>
				<tr>
					<td>Miércoles - 10</td>
					<td>Enero</td>
					<td>Intervalos y Canción 1</td>
					<td>Recorrida</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- ZONA PARA ACLARACIONES DE ALGUN PARÁMETRO -->
	<form id="evaluacion_aclaraciones">
		<h3>¿Necesitas alguna aclaración?</h3>
		<div class="row">
			<div class="col-md"><input class="form-control" type="text" placeholder="Fecha"></div>
			<div class="col-md"><textarea class="form-control" placeholder="Tu pregunta aquí..."></textarea></div>
			<div class="col-md"><input class="form-control" type="submit" placeholder="Consultar"></div>
		</div>
	</form>
</main>