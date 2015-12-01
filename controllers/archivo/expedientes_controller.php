<?php
session_start();

$contenido = 'archivo/expedientes';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>