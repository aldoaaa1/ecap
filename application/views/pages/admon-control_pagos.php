<main class="container">
	<!-- INPUT PARA FILTRAR POR NOMBRE DE ALUMNO O POR PADRE -->
	<div class="row">
		<div class="col">
			<h3>Sección para filtrar por nombre o apellido</h3>
		</div>
		<div class="col">
			<input class="form-control" type="text" id="pagos_filtro_alumno" placeholder="Nombre del Alumno">
		</div>
		<div class="col">
			<input class="form-control" type="text" id="pagos_filtro_padre" placeholder="Nombre del Padre">
		</div>
	</div>
	
	<!-- TABLA GENERAL DE PENDIENTES POR PAGAR, ORDENADA POR ANTIGUEDAD -->
	<h3>Tabla de pagos pendientes</h3>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Alumno</th>
			<th>Padre o Tutor</th>
			<th>Feche Limite</th>
			<th>Mes Actual</th>
			<th>Atrasado</th>
			<th>Interéses</th>
			<th>Total A Pagar</th>
		</thead>
		<tbody>
			<tr>
				<td>2</td>
				<td>Flor Damiana Ortíz Suastegui</td>
				<td>Flor Damiana Ortíz Suastegui</td>
				<td>Mié, 07/Abril/19</td>
				<td>$ 750.00</td>
				<td>$ 750.00</td>
				<td>$ 0.00</td>
				<td>$ 857.00</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Flor Damiana Ortíz Suastegui</td>
				<td>Flor Damiana Ortíz Suastegui</td>
				<td>Mié, 07/Abril/19</td>
				<td>$ 750.00</td>
				<td>$ 750.00</td>
				<td>$ 0.00</td>
				<td>$ 857.00</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Flor Damiana Ortíz Suastegui</td>
				<td>Flor Damiana Ortíz Suastegui</td>
				<td>Mié, 07/Abril/19</td>
				<td>$ 750.00</td>
				<td>$ 750.00</td>
				<td>$ 0.00</td>
				<td>$ 857.00</td>
			</tr>
		</tbody>
	</table>

	<!-- SECCIÓN PARA APLICAR PAGOS REALIZADOS -->
	<form action="" class="row" id="aplicarPago">
		<h3>Aplicar Pago</h3>
		<div class="col">
			<input class="form-control" type="text" id="aplicarPago_id" placeholder="ID Alumno">
		</div>
		<div class="col">
			<input class="form-control" type="text" id="aplicarPago_monto" placeholder="Monto Pagado">
		</div>
		<div class="col">
			<input class="form-control" type="submit" value="Aplicar Pago">
		</div>
	</form>
</main>