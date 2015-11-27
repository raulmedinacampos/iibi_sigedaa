function inicializar() {
	$('.typeahead').typeahead(
		{source:[
		         {id: "1", name: "Dafne Abad"},
				 {id: "2", name: "Raúl Medina"}]
		}
	);
}

function guardarDatos() {
	$('#btnGuardar').click(function() {
		$.post(
				'alta-usuario',
				$('#formUsuario').serialize(),
				function(data) {
					$('#myModal .modal-title').html("Alta de usuario");
					$('#myModal .modal-body').html(data);
					$('#myModal').modal('show');
					
					$('#myModal .modal-footer button').click(function() {
						window.location = 'nuevo-usuario';
					});
				}
		);
	});
}

$(function() {
	inicializar();
	guardarDatos();
});