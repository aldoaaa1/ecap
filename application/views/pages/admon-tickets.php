<header class="container">
	<h3>Centro de Soporte Técnico de la Página</h3>
</header>
<main class="container">
	<h4>Crear Nuevo Ticket</h3>
	<section class="row" id="btns_tickets">
		<button class="col-sm btn btn-primary" data-toggle="modal" data-target="#tickets-crear">Crear Ticket</button>
		<button class="col-sm btn btn-success" data-toggle="modal" data-target="#tickets-modificar">Modificar Ticket</button>
		<button class="col-sm btn btn-danger" data-toggle="modal" data-target="#tickets-eliminar">Eliminar Ticket</button>
	</section>
	<h4>Tickets Nuevos</h4>
	<?php $this->load->view('modules/tabla-tickets-nuevos') ?>
	<h4>Tickets En Proceso</h4>
	<?php $this->load->view('modules/tabla-tickets-en_proceso') ?>
	<h4>Tickets Resueltos</h4>
	<?php $this->load->view('modules/tabla-tickets-resueltos') ?>
	<!-- Se cargan los modals de los movimientos de los tickets -->
	<?php $this->load->view('modules/modal-tickets-crear') ?>
	<?php $this->load->view('modules/modal-tickets-modificar') ?>
	<?php $this->load->view('modules/modal-tickets-eliminar') ?>
</main>

<style>
	#btns_tickets button{ margin: 5px 10px; }
</style>