<header class="container">
	<h3>Administración de usuarios</h3>
</header>
<main class="container">
	<h3>Movimientos en Alumnos</h3>
	<section class="row" id="act_alumnos">
		<button class="col-sm btn btn-primary" data-toggle="modal" data-target="#actualizar-alumno">Actualizar Alumnos</button>
		<button class="col-sm btn btn-success" data-toggle="modal" data-target="#alta-alumno">Alta de Alumno</button>
		<button class="col-sm btn btn-danger" data-toggle="modal" data-target="#baja-alumno">Baja de Alumno</button>
	</section>
	<h3>Movimientos en Maestros</h3>
	<section class="row" id="act_maestros">
		<button class="col-sm btn btn-primary" data-toggle="modal" data-target="#actualizar-maestro">Actualizar Maestro</button>
		<button class="col-sm btn btn-success" data-toggle="modal" data-target="#alta-maestro">Alta de Maestro</button>
		<button class="col-sm btn btn-danger"  data-toggle="modal" data-target="#baja-maestro">Baja de Maestro</button>
	</section>
	<h3>Movimientos en Administrativos</h3>
	<section class="row" id="act_maestros">
		<button class="col-sm btn btn-primary" data-toggle="modal" data-target="#actualizar-administrativo">Actualizar Administrativo</button>
		<button class="col-sm btn btn-success" data-toggle="modal" data-target="#alta-administrativo">Alta de Administrativo</button>
		<button class="col-sm btn btn-danger"  data-toggle="modal" data-target="#baja-administrativo">Baja de Administrativo</button>
	</section>
	<section id="usuarios_filtros" class="row">
		<div class="col-md"><p>Filtrar tablas por: </p></div>
		<div class="col-md"><input class="form-control" type="text" placeholder="Usuario"></div>
		<div class="col-md"><input class="form-control" type="text" placeholder="Padre o Tutor"></div>
		<div class="col-md"><input class="form-control" type="text" placeholder="Edad"></div>
	</section>
	<!-- Cargar la tabla de los administrativos activos -->
	<?php $this->load->view('modules/tabla-administrativos_activos') ?>
	<!-- Cargar la tabla de los maestros activos -->
	<?php $this->load->view('modules/tabla-maestros_activos') ?>
	<!-- Cargar la tabla de los alumnos activos -->
	<?php $this->load->view('modules/tabla-alumnos_activos') ?>
	<!-- Se cargan los modals para las actualizaciónes de datos -->
	<?php $this->load->view('modules/modal-actualizar-alumno.php')?>
	<?php $this->load->view('modules/modal-alta-alumno.php')?>
	<?php $this->load->view('modules/modal-baja-alumno.php')?>
	<?php $this->load->view('modules/modal-actualizar-maestro.php')?>
	<?php $this->load->view('modules/modal-alta-maestro.php')?>
	<?php $this->load->view('modules/modal-baja-maestro.php')?>
	<?php $this->load->view('modules/modal-actualizar-administrativo.php')?>
	<?php $this->load->view('modules/modal-alta-administrativo.php')?>
	<?php $this->load->view('modules/modal-baja-administrativo.php')?>
</main>
<style>
	#act_alumnos button{ margin: 5px 10px; }
	#act_maestros button{ margin: 5px 10px; }
</style>
