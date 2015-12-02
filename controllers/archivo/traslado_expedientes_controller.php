<?php
session_start();

$header['js'][] = '';

$contenido = 'archivo/traslado_expedientes';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>