<?php
session_start();

$header['js'][] = '';

$contenido = 'reportes/indices';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>