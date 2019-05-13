<header class="container">
	<h3>Tu información general</h3>
	<p>Aldo Alcalá</p>	
</header>
<main class="container">
	<div class="row">
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
	<h3>Actualizar mis datos</h3>
	<form id="info_actualizar">
		<div class="row">
			<div class="col-md"><input class="form-control" type="text" placeholder="usuario"></div>
			<div class="col-md"><input class="form-control" type="password" placeholder="contraseña"></div>
			<div class="col-md"><input class="form-control" type="submit" value="Actualizar"></div>
		</div>
	</form>
</main>