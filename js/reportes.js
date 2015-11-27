function inicializar() {
	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy',
		language: 'es',
		orientation: 'top auto'
	});
	
	$('#btn_buscar').click(function() {
		$('#formBuscador').submit();
	});
}

$(function() {
	inicializar();
});