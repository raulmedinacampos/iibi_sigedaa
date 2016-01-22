function inicializar() {
	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy',
		language: 'es',
		orientation: 'top auto'
	});
}

$(function() {
	inicializar();
})