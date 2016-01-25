<?php
session_start();

$header['css'][] = 'bootstrap-datepicker.min';

$header['js'][] = 'bootstrap-datepicker.min';
$header['js'][] = 'bootstrap-datepicker.es.min';
$header['js'][] = 'alta_empleado';

$contenido = 'administrador/usuarios/alta_empleado';

$data = array(
		'header' => $header,
		'contenido' => $contenido
);

Flight::render('template/layout', $data);
?>