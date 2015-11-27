function inicializar() {
	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy',
		language: 'es',
		orientation: 'top auto'
	});
	
	$('#chk_todas').click(function() {
		var chk_todas = $(this);
		if ( chk_todas.is(":checked") ) {
			$(".area").each(function() {
				$(this).prop("checked", true);
			});
		} else {
			$(".area").each(function() {
				$(this).prop("checked", false);
			});
		}
	})
}

$(function() {
	inicializar();
})