<link rel="stylesheet" href="<?=base_url();?>assets/css/general-login.css">
<main class="container full-height">
	<div id="main">
		<img id="login-logo" src="<?=base_url();?>assets/img/logo/logo2.jpg" alt="Logo de la escuela">
		<h3>¡Bienvenido(a) a la Aplicación!</h3>
		<p>- Acceso a la plataforma -</p>
		<div style="height: 1px;"></div>
		<form>
			<input id="login-input-usuario" type="text" autocomplete="off">
			<label id="login-label-usuario" for="login-input-usuario">USUARIO</label>
			<input id="login-input-pass" type="password" autocomplete="off">
			<label id="login-label-pass" for="login-input-pass">CONTRASEÑA</label>
			<input id="login-acceder" class="form-control btn btn-primary" type="submit" value="Acceder" style="margin-top: -34px; cursor: pointer;">
		</form>
	</div>
</main>
<script>
	$('#login-input-usuario').on('focusout', function() {
		if ($('#login-input-usuario').val().length >0) {
			$('#login-label-usuario').addClass("label-focus");
			$(this).addClass("input-focus");
		} else{
			$('#login-label-usuario').removeClass("label-focus");
			$(this).removeClass("input-focus");
		}
	});
	$('#login-input-pass').on('focusout', function() {
		if ($('#login-input-pass').val().length >0) {
			$('#login-label-pass').addClass("label-focus");
			$(this).addClass("input-focus");
		} else{
			$('#login-label-pass').removeClass("label-focus");
			$(this).removeClass("input-focus");
		}
	});
</script>