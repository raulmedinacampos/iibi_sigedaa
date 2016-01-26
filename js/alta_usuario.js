function autocompletar() {
	$('.typeahead').typeahead({
		displayKey: 'nombre',
		source: function(query, process) {
		    map = {};
			$.getJSON('../listado-empleados',
					{'q': query},
					function(data) {
						objects = [];
						
						$.each(data, function(i, object) {
							map[object.nombre] = object;
							objects.push(object.nombre);
				        });
						
						process(objects);
					}
			);
		},
		updater: function(item) {
	        $("#hdn_id").val(map[item].id);
	        return item;
	    }
	}); 
}

$(function() {
	autocompletar();
});