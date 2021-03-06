function inicializarDatepicker() {
	$('.datepicker').datepicker({
		format: 'dd/mm/yyyy',
		language: 'es',
		orientation: 'top auto'
	});
}

function agregarOtro() {
	$('input:radio').click(function() {
		if ( $(this).prop("id") == "rdb_diversos_otro" ) {
			if ( $('#txt_otro_diversos').length == 0 ) {
				var div = $(this).parents(".radio");
				var txt = '<div class="txt-otro col-sm-12">';
				txt += '<input id="txt_otro_diversos" class="form-control" placeholder="Describe el servicio" />';
				txt += '</div>';
				div.after(txt);
			}
		} else {
			$('.txt-otro').remove();
		}
	});
}

function desplegarMensajes() {
	var instrucciones = "";
	
	$('input:radio').click(function() {
		switch( $(this).prop("id") ) {
		// Mensajería
		case "rdb_21":
		case "rdb_22":
		case "rdb_23":
			instrucciones = '<p><strong>Información adicional:</strong></p>';
			instrucciones += '<p>- La dirección de entrega de la correspondencia (de ser posible incluir la liga de google maps).<br />';
			instrucciones += '- La cantidad de sobres, cartas, paquetes o libros que se envían.<br />';
			instrucciones += '- La relación de documentos enviados.<br />';
			instrucciones += ' - Fecha de envío.</p>';
			instrucciones += '<p>Notas:<br />';
			instrucciones += '(1) Una vez autorizada la solicitud será necesario llevar la documentación a enviar, debidamente requisitada, al área de Servicios Generales.<br />';
			instrucciones += '(2) El servicio de mensajería urgente se realiza el día siguiente a la autorización de la solicitud.</p>';
			break;
		// Reproducción y engargolado
		case "rdb_41":
			instrucciones = '<p><strong>Información adicional:</strong></p>';
			instrucciones += '<p>- Número de originales<br />';
			instrucciones += '- Número de copias por original</p>';
			instrucciones += '<p>Nota:<br />';
			instrucciones += 'Si el total de las reproducciones es menor a 100, el servicio se debe realizar directamente en el área de fotocopiado de la Biblioteca.</p>';
			break;
		case "rdb_42":
		case "rdb_43":
			instrucciones = '<p><strong>Información adicional:</strong></p>';
			instrucciones += '<p>- Número de documentos</p>';
			instrucciones += '<p>Nota:<br />';
			instrucciones += 'Una vez autorizada la solicitud será necesario llevar la documentación a procesar al área de Servicios Generales.</p>';
			break;
		// Vigilancia
		case "rdb_7":
			instrucciones = '<p><strong>Información adicional:</strong></p>';
			instrucciones += 'Evento para el que se solicita el servicio';
			break;
		// Mantenimiento a equipo y vehículos
		case "rdb_31":
			instrucciones = '<p><strong>Información adicional:</strong></p>';
			instrucciones += '<p>- Descripción del equipo<br />';
			instrucciones += '- Marca<br />';
			instrucciones += '- Modelo<br />';
			instrucciones += '- Número de serie<br />';
			instrucciones += '- Número de inventario<br />';
			instrucciones += '- Placas</p>';
			break;
		case "rdb_32":
		case "rdb_33":
		case "rdb_34":
		case "rdb_35":
		case "rdb_36":
			instrucciones = '<p><strong>Información adicional:</strong></p>';
			instrucciones += '<p>- Descripción del equipo<br />';
			instrucciones += '- Marca<br />';
			instrucciones += '- Modelo<br />';
			instrucciones += '- Número de serie<br />';
			instrucciones += '- Número de inventario</p>';
			break;
		// Transporte
		case "rdb_51":
		case "rdb_52":
		case "rdb_53":
		case "rdb_54":
			instrucciones = '<p><strong>Información adicional:</strong></p>';
			instrucciones += '<p>- Número de pasajeros.<br />';
			instrucciones += '- Viaje sencillo o redondo.<br />';
			instrucciones += '- Hora, fecha y lugar de salida.<br />';
			instrucciones += '- Hora, fecha y lugar de regreso.<br />';
			instrucciones += '- Destino (de ser posible incluir la liga de google maps)</p>';
			break;
		default:
			instrucciones = '';
			break;
		}
		
		$('#instrucciones').html(instrucciones);
	});
}

$(function() {
	inicializarDatepicker();
	agregarOtro();
	desplegarMensajes();
});