$( '#switch-id' ).on( 'click', function() {
    function alerta_seleccionado() {
    	$('#maestro-recordatorio').modal('show');
    	$('#maestro-recordatorio').on('hidden.bs.modal', function () {
			  location.reload();
			})
    }
    function alerta_deseleccionado() {
    	alert("El checkbox ha sido deseleccionado.");
    }
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado con delay de 350ms
        window.setTimeout(alerta_seleccionado, 350);
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado con delay de 350ms
        window.setTimeout(alerta_deseleccionado, 350);
    }
});