<?php
session_start();

$header['js'][] = 'documentos_recibidos';

$contenido = 'bandejas/documentos_recibidos';

$columnas = "folio,tipoDocumental,asunto,DATE_FORMAT(documento.fechaAlta,'%d/%m/%Y') as fechaAlta,area, idArchivoDigital,documento.estatus";
$tablas = "documento,cTipoDocumental,cArea,usuario,puesto";

$condicion = 	"cTipoDocumental.idTipoDocumental = documento.idTipoDocumental AND
				usuario.idEmpleado = puesto.idEmpleado AND
				cArea.idArea = puesto.idArea AND
				usuario.idUsuario = documento.idUsuAlta 
 			    order by consecArea asc";

$documento = seleccionarTodo($columnas,$tablas,$condicion);

// falta el where areaAtencion =  area del usuario

$data = array(
		'header' => $header,
		'contenido' => $contenido,
		'documento' => $documento,
);

Flight::render('template/layout', $data);
?>