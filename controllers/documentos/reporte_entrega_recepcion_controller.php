<?php
session_start();

$contenido = 'documentos/reporte_entrega_recepcion';

$header['css'][] = 'bootstrap-datepicker.min';
		
$header['js'][] = 'bootstrap-datepicker.min';
$header['js'][] = 'bootstrap-datepicker.es.min';
$header['js'][] = 'reporte_entrega_recepcion';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>