<?php
session_start();

$contenido = 'reportes/expediente';

$header['css'][] = 'bootstrap-datepicker.min';

$header['js'][] = 'bootstrap-datepicker.min';
$header['js'][] = 'bootstrap-datepicker.es.min';
$header['js'][] = 'reportes';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>