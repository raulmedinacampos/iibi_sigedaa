<?php
session_start();

$contenido = 'seguimiento/expedientes';

$data = array(
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>