<?php
session_start();

$header['js'][] = '';

$contenido = 'archivo/inventario_general';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>